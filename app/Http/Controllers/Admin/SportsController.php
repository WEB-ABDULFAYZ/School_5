<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sport;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sports = Sport::all();
        return view('admin.sports.index',compact('sports')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sports.create'); 
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
            $file->move('public/sport/images/', $image_name);
            $requestData['img'] = $image_name;
        }
        Sport::create($requestData);
        return redirect()->route('admin.sports.index')->with('success', 'Sport created succuessfuly'); 
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
        $sport = Sport::findOrFail($id);
        return view('admin.sports.edit',compact('sport')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $imageName = time().'.'.$request->rasm->extension();
        $request->rasm->move(public_path('/images'), $imageName);
        $sport = Sport::findOrFail($id);
        $sport->update($request->all());
        return redirect()->route('admin.sports.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sport = Sport::findOrFail($id);
        $sport->delete();
        return back()->with('message', "sport muvaffaqiyatli o'chirildi");
    }
}
