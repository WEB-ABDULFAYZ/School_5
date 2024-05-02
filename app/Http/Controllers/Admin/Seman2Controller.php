<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Smena2;
use Illuminate\Http\Request;

class Seman2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Smena2::all();
        return view('admin.smena2.index',compact('classes'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.smena2.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('public/smena2/images/', $image_name);
            $requestData['image'] = $image_name;
        }
        Smena2::create($requestData);
        return redirect()->route('admin.smena2.index')->with('success', 'Smena muvaffaqiyatli qo\'shildi');
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
        $class = Smena2::findorFail($id);
        return view('admin.smena2.edit',compact('class'));       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $class = Smena2::findOrFail($id);
        $class->update($request->all());
        return redirect()->route('admin.smena2.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class = Smena2::findOrFail($id);
        $class->delete();
        return back()->with('message', "class muvaffaqiyatli o'chirildi");
    }
}
