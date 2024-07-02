<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.blog.index');
    }

    public function getData()
    {
        $blog = Blog::get();

        return DataTables::of($blog)->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.blog.create');
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

            $data['photo'] = $images->storeAs('blog', $file_name, 'public');
        }

        Blog::create($data);

        return redirect()->route('blog.index')->with('toast_success', 'Create Product Successfully!');
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
        $data = Blog::findOrFail($id);

        return view('pages.admin.blog.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('photo')) {
            $images = $request->file('photo');

            $extension = $images->getClientOriginalExtension();

            $file_name = uniqid() . "." . $extension;

            $data['photo'] = $images->storeAs('blog', $file_name, 'public');

            if($blog->photo){
                Storage::delete('public/'. $blog->photo);
            }
        }

        $blog->update($data);

        return redirect()->route('blog.index')->with('toast_success', 'Update Blog Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);

        if($blog->photo){
            Storage::delete('public/'. $blog->photo);
        }

        $blog->delete();

        return redirect()->route('blog.index')->with('toast_success', 'Delete Blog Successfully!');
    }
}
