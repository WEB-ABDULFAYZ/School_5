<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index',compact('galleries'));
        
    }

    /**
     * Show the form for creating a gallery resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a galleryly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('public/gallery/images/', $image_name);
            $requestData['img'] = $image_name;
        }
        Gallery::create($requestData);
        return redirect()->route('admin.galleries.index')->with('success', 'gallery created succuessfuly');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return back()->with('message', "gallery muvaffaqiyatli o'chirildi");
    }
}
