<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use App\DataTables\CategoriesDataTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index(CategoriesDataTable $dataTable)
    {
        return $dataTable->render('admin.categories.index');
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'description' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ]);
        try {
            $data['slug'] = \Str::slug($data['name']);
            $data['is_active'] = $request->has('is_active') ? true : false;
            $created = Categories::create($data);
            return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Failed to create category: ' . $e->getMessage());
        }
    }

    public function show(Categories $category)
    {
        try {
            return view('admin.categories.show', compact('category'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create category: ' . $e->getMessage());
        }
    }

    public function edit(Categories $category)
    {
        try {
            return view('admin.categories.edit', compact('category'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create category: ' . $e->getMessage());
        }
    }

    public function update(Request $request, Categories $category)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
            'description' => 'nullable|string',
            'is_active' => 'sometimes|boolean',
        ]);

        try {
            $data['slug'] = \Str::slug($data['name']);
            $data['is_active'] = $request->has('is_active');

            $category->update($data);

            return redirect()->route('admin.categories.index')
                ->with('success', 'Category updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create category: ' . $e->getMessage());
        }
    }

    public function destroy(Categories $category)
    {
        try {
            $category->delete();

            return redirect()->route('admin.categories.index')
                ->with('success', 'Category deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create category: ' . $e->getMessage());
        }
    }

    // Optional: change status via AJAX
    public function changeStatus(Request $request)
    {
        try {
            $category = Categories::find($request->id);
            if (!$category) {
                return response()->json(['status' => 'error', 'message' => 'Not found']);
            }
            $category->is_active = (bool)$request->status;
            $category->save();
            return response()->json(['status' => 'success', 'message' => 'Status updated']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Failed to create category: ' . $e->getMessage()]);
        }
    }
}
