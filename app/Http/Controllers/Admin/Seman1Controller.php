<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Smena1;
use Illuminate\Http\Request;

class Seman1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Smena1::all();
        return view('admin.smena1.index',compact('classes'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.smena1.create');
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
            $file->move('public/smena1/images/', $image_name);
            $requestData['image'] = $image_name;
        }
        Smena1::create($requestData);
        return redirect()->route('admin.smena1.index')->with('success', 'Smena created succuessfuly');
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
        $class = Smena1::findorFail($id);
        return view('admin.smena1.edit',compact('class'));       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $class = Smena1::findOrFail($id);
        $class->update($request->all());
        return redirect()->route('admin.smena1.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class = Smena1::findOrFail($id);
        $class->delete();
        return back()->with('message', "class muvaffaqiyatli o'chirildi");
    }
}
