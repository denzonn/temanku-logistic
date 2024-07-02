<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.product.index');
    }

    public function getData()
    {
        $information = Product::get();

        return DataTables::of($information)->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'photo' => 'required|image',
        ]);

        if ($request->hasFile('photo')) {
            $images = $request->file('photo');

            $extension = $images->getClientOriginalExtension();

            $file_name = uniqid() . "." . $extension;

            $data['photo'] = $images->storeAs('product', $file_name, 'public');
        }

        $data['status'] = 'Pengemasan';

        Product::create($data);

        return redirect()->route('product.index')->with('toast_success', 'Create Product Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Product::findOrFail($id);

        return view('pages.admin.product.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $images = $request->file('photo');

            $extension = $images->getClientOriginalExtension();

            $file_name = uniqid(). ".". $extension;

            $data['photo'] = $images->storeAs('product', $file_name, 'public');

            // Delete old image
            if($product->photo){
                Storage::delete('public/'. $product->photo);
            }
        }

        $product->update($data);

        return redirect()->route('product.index')->with('toast_success', 'Update Product Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        if($product->photo){
            Storage::delete('public/'. $product->photo);
        }

        $product->delete();

        return redirect()->route('product.index')->with('toast_success', 'Delete Product Successfully!');
    }
}
