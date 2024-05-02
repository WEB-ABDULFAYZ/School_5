<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('public/teacher/images/', $image_name);
            $requestData['img'] = $image_name;
        }
        Teacher::create($requestData);
        return redirect()->route('admin.teachers.index')->with('success', 'Teacher created succuessfuly'); 

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teachers = Teacher::findOrFail($id);
        return view('admin.teachers.show',compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teachers.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */



    public function update(Request $request, string $id) 
    {
        $teachers = Teacher::findOrFail($id);
        $requestData = $request->all();   
        $request['image'] = $this->fileUpload($request->file('image'));
        $teachers = Teacher::update($requestData);
        return redirect()->route('admin.teachers.index',compact('teachers'));

    } 



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return back()->with('message', "teacher muvaffaqiyatli o'chirildi");
    }
}
