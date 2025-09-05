<?php

namespace App\DataTables;


use App\Models\Project;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\HtmlString;

class ProjectDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->setRowId('id')
            ->addColumn('status', function (Project $project) {
                return new HtmlString('
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input change-status-input" type="checkbox"
                            data-category-id="' . $project->id . '" ' . ($project->is_active == 1 ? 'checked' : '') . '>
                    </div>
                ');
            })
            ->addColumn('index', function ($row) {
                return $row->serial_no;
            })
            ->addColumn('created_at', function (Project $project) {
                $dates = 'Created: ' . $project->created_at->diffForHumans() . '<br><hr/>';
                $dates .= 'Updated: ' . $project->updated_at->diffForHumans();
                return new HtmlString($dates);
            })
            ->addColumn('action', function (Project $project) {
                $editUrl = route('admin.project.edit', $project);
                $deleteUrl = route('admin.project.destroy', $project);

                return '
                    <a class="dropdown-item" href="' . $editUrl . '">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                    </a>

                    <form action="' . $deleteUrl . '" method="POST" style="display:inline-block;" onsubmit="return confirm(\'Are you sure?\');">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="dropdown-item text-danger" style="border: none; background: none; padding: 0;">
                            <i class="bx bx-trash me-1"></i> Delete
                        </button>
                    </form>
                ';
            })
            ->addColumn('image', function (Project $project) {
                return '<img class="w-50 img-thumbnail imgRenderContainer" src="' . public_asset($project->photo) . '" alt="' . $project->name . '">';
            })
            ->rawColumns(['image', 'status', 'created_at', 'action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Project $project): QueryBuilder
    {
        return $project->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('categories-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('
                <"row"<"col-md-6 d-flex justify-content-start"f><"col-sm-12 col-md-6 d-flex align-items-center justify-content-end"lB>>
                <"row"<"col-md-12 custom-table"tr>>
                <"row"<"col-md-6"i><"col-md-6"p>>
            ')
            ->orderBy(1, 'asc')
            ->language(["search" => "", "lengthMenu" => "_MENU_", "searchPlaceholder" => 'Search Slider'])
            ->buttons(
                Button::make()
                    ->className('btn btn-primary')
                    ->text('<i class="bx bx-plus"></i> New')
                    ->action(
                        'function(e, dt, node, config) {
                            let url = "' . route('admin.project.create') . '";
                            window.location.href = url;
                        }'
                    )
            )
            ->parameters([
                'paging' => true,
                'lengthMenu' => [
                    [5, 10, 25, 50, -1],
                    ['5', '10', '25', '50', 'Show all']
                ],
                'drawCallback' => 'function(settings) {
                    var api = this.api();
                    api.column(0).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1;
                    });
                }',
                'initComplete' => 'function () {
                    $(".change-status-input").change(function() {
                        var status = $(this).is(":checked") ? "1" : "0"; // Fixed quotes
                        var id = $(this).data("category-id");
                        var requestData = {
                            "status": status,
                            "id": id,
                        };
                        $.ajax({
                            type: "POST",
                            url: "' . route('admin.ajax.project.change.status') . '",
                            data: requestData,
                            dataType: "json",
                            success: function(response) {
                                console.log(response);
                                if (response.status == "success") {
                                    toastr.success(response.message);
                                } else {
                                    toastr.error(response.message);
                                }
                            },
                            error: function(xhr, textStatus, errorThrown) {
                                console.log(xhr);
                                console.log(xhr.responseText);
                                console.log(textStatus, errorThrown);
                                console.log(errorThrown);
                            },
                        });
                    });
                }',
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('index') // Add this column for serial numbers
                ->title('S.No') // Title for the column header
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::make('name'),
            Column::make('image'),
            Column::make('status'),
            Column::make('created_at'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Categories_' . date('YmdHis');
    }
}
