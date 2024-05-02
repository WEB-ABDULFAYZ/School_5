<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index',compact('projects'));        
    }

    /**
     * Show the form for creating a projects resource.
     */
    public function create()
    {
        return view('admin.projects.create');        
    }

    /**
     * Store a projectsly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        Project::create($requestData);
        return redirect()->route('admin.projects.index')->with('success', 'projects created succuessfuly');
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
        $project = Project::findOrFail($id);
        $project->delete();
        return back()->with('message', "projects muvaffaqiyatli o'chirildi");
    }
}
