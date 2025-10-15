<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProductDataTable;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProductDataTable $dataTable)
    {
        return $dataTable->render('admin.product.index');
    }

    public function create()
    {
        $categories = \App\Models\Categories::pluck('name', 'id');
        return view('admin.product.create', compact('categories'));
    }

    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'name' => 'required|string|max:255|unique:products,name',
    //         'description' => 'nullable|string',
    //         'price' => 'required|numeric|min:0',
    //         'category_id' => 'required|exists:categories,id',
    //         'stock' => 'required|integer|min:0',
    //         'is_active' => 'sometimes|boolean',
    //         'image' => 'nullable|image|max:2048',
    //         'meta_title' => 'nullable|string|max:255',
    //         'meta_description' => 'nullable|string|max:255',
    //         'meta_keywords' => 'nullable|string|max:255',
    //         'meta_image' => 'nullable|image|max:2048',
    //     ]);

    //     $data['slug'] = \Str::slug($data['name']);
    //     $data['is_active'] = $request->has('is_active');

    //     if ($request->hasFile('image')) {
    //         $path = $request->file('image')->store('products', 'public');
    //         $data['image'] = $path;
    //     }
    //     if ($request->hasFile('meta_image')) {
    //         $metaImagePath = $request->file('meta_image')->store('meta_images', 'public');
    //         $data['meta_image'] = $metaImagePath;
    //     }

    //     Product::create($data);
    //     return redirect()->route('admin.product.index')
    //         ->with('success', 'Product created successfully.');
    // }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:products,name',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required|integer|min:0',
            'is_active' => 'sometimes|boolean',
            'image' => 'nullable|image|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string|max:255',
            'meta_image' => 'nullable|image|max:2048',
        ]);

        $data['slug'] = \Str::slug($data['name']);
        $data['is_active'] = $request->has('is_active');

        $destinationPath = public_path('assets/front/images/products/');

        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_image_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $data['image'] = 'assets/front/images/products/' . $imageName;
        }

        if ($request->hasFile('meta_image')) {
            $metaImage = $request->file('meta_image');
            $metaImageName = time() . '_meta_' . uniqid() . '.' . $metaImage->getClientOriginalExtension();
            $metaImage->move($destinationPath, $metaImageName);
            $data['meta_image'] = 'assets/front/images/products/' . $metaImageName;
        }

        Product::create($data);

        return redirect()->route('admin.product.index')->with('success', 'Product created successfully.');
    }


    public function edit(Product $product)
    {
        $categories = \App\Models\Categories::pluck('name', 'id');
        return view('admin.product.edit', compact('product', 'categories'));
    }

    // public function update(Request $request, Product $product)
    // {
    //     $data = $request->validate([
    //         'name' => 'required|string|max:255|unique:products,name,' . $product->id,
    //         'description' => 'nullable|string',
    //         'price' => 'required|numeric|min:0',
    //         'category_id' => 'required|exists:categories,id',
    //         'stock' => 'required|integer|min:0',
    //         'is_active' => 'sometimes|boolean',
    //         'image' => 'nullable|image|max:2048',
    //         'meta_title' => 'nullable|string|max:255',
    //         'meta_description' => 'nullable|string|max:255',
    //         'meta_keywords' => 'nullable|string|max:255',
    //         'meta_image' => 'nullable|image|max:2048',
    //     ]);

    //     $data['slug'] = \Str::slug($data['name']);
    //     $data['is_active'] = $request->has('is_active') ? true : false;

    //     if ($request->hasFile('image')) {
    //         $path = $request->file('image')->store('products', 'public');
    //         $data['image'] = $path;
    //     }

    //     if ($request->hasFile('meta_image')) {
    //         $metaImagePath = $request->file('meta_image')->store('meta_images', 'public');
    //         $data['meta_image'] = $metaImagePath;
    //     }

    //     $product->update($data);
    //     return redirect()->route('admin.product.index')
    //         ->with('success', 'Product updated successfully.');
    // }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:products,name,' . $product->id,
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required|integer|min:0',
            'is_active' => 'sometimes|boolean',
            'image' => 'nullable|image|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string|max:255',
            'meta_image' => 'nullable|image|max:2048',
        ]);

        $data['slug'] = \Str::slug($data['name']);
        $data['is_active'] = $request->has('is_active');

        $destinationPath = public_path('assets/front/images/products/');

        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        if ($request->hasFile('image')) {
            // Delete old image
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_image_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $data['image'] = 'assets/front/images/products/' . $imageName;
        }

        if ($request->hasFile('meta_image')) {
            // Delete old meta image
            if ($product->meta_image && file_exists(public_path($product->meta_image))) {
                unlink(public_path($product->meta_image));
            }

            $metaImage = $request->file('meta_image');
            $metaImageName = time() . '_meta_' . uniqid() . '.' . $metaImage->getClientOriginalExtension();
            $metaImage->move($destinationPath, $metaImageName);
            $data['meta_image'] = 'assets/front/images/products/' . $metaImageName;
        }

        $product->update($data);

        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully.');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index')
            ->with('success', 'Product deleted successfully.');
    }

    public function changeStatus(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->is_active = (bool)$request->status;
        $product->save();

        return response()->json(['status' => 'success', 'message' => 'Status updated']);
    }
}
