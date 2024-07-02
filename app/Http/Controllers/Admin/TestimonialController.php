<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.testimonial.index');
    }

    public function getData()
    {
        $testimonial = Testimoni::get();

        return DataTables::of($testimonial)->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.testimonial.create');
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

            $data['photo'] = $images->storeAs('testimonial', $file_name, 'public');
        }

        Testimoni::create($data);

        return redirect()->route('testimonial.index')->with('toast_success', 'Create Testimonial Successfully!');
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
        $data = Testimoni::findOrFail($id);

        return view('pages.admin.testimonial.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $this->validate($request, [
            'photo' => 'nullable|image',
        ]);

        $testimonial = Testimoni::findOrFail($id);

        if ($request->hasFile('photo')) {
            if($testimonial->photo){
                Storage::delete('public/'. $testimonial->photo);
            }

            $images = $request->file('photo');

            $extension = $images->getClientOriginalExtension();

            $file_name = uniqid(). ".". $extension;

            $data['photo'] = $images->storeAs('testimonial', $file_name, 'public');
        }

        $testimonial->update($data);

        return redirect()->route('testimonial.index')->with('toast_success', 'Update Testimonial Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimoni::findOrFail($id);

        if($testimonial->photo){
            Storage::delete('public/'. $testimonial->photo);
        }

        $testimonial->delete();

        return redirect()->route('testimonial.index')->with('toast_success', 'Delete Testimonial Successfully!');
    }
}
