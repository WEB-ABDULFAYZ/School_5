<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Leader;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leaders = Leader::all();
        return view('admin.leader.index', compact('leaders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.leader.create');
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
            $file->move('public/leader/images/', $image_name);
            $requestData['img'] = $image_name;
        }
        Leader::create($requestData);
        return redirect()->route('admin.leaders.index')->with('success', 'Leader created succuessfuly'); 

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $leader = Leader::findOrFail($id);
        return view('admin.leader.edit',compact('leader'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $leader = Leader::findOrFail($id);
        $leader->update($request->all());
        return redirect()->route('admin.leaders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $leader = Leader::findOrFail($id);
        $leader->delete();
        return back()->with('message', "Leader muvaffaqiyatli o'chirildi");
    }
}
