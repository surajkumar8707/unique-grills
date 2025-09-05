<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProjectDataTable;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index(ProjectDataTable $dataTable)
    {
        return $dataTable->render('admin.projects.index');
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->except('photo');

        if ($request->hasFile('photo')) {
            $file     = $request->file('photo');
            $filename = time() . '-' . \Illuminate\Support\Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/projects'), $filename);
            $data['photo'] = 'uploads/projects/' . $filename;
        }

        $data['is_active'] = $request->has('is_active') ? true : false;

        Project::create($data);

        return redirect()->route('admin.project.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_active'   => 'nullable|boolean',
        ]);

        $data = $request->except('photo');

        if ($request->hasFile('photo')) {
            // delete old photo if exists
            if ($project->photo && file_exists(public_path($project->photo))) {
                unlink(public_path($project->photo));
            }
            $file     = $request->file('photo');
            $filename = time() . '-' . \Illuminate\Support\Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/projects'), $filename);
            $data['photo'] = 'uploads/projects/' . $filename;
        }
        $data['is_active'] = $request->has('is_active') ? true : false;
        $project->update($data);
        return redirect()->route('admin.project.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->photo && file_exists(public_path($project->photo))) {
            unlink(public_path($project->photo));
        }
        $project->delete();

        return redirect()->route('admin.project.index')->with('success', 'Project deleted successfully.');
    }

    public function changeStatus(Request $request)
    {
        try {
            $project = Project::find($request->id);
            if (!$project) {
                return response()->json(['status' => 'error', 'message' => 'Not found']);
            }
            $project->is_active = (bool)$request->status;
            $project->save();
            return response()->json(['status' => 'success', 'message' => 'Status updated']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Failed to create category: ' . $e->getMessage()]);
        }
    }
}
