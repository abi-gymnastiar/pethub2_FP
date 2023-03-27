<?php

namespace App\Http\Controllers;

use App\Models\Centers;
use Illuminate\Http\Request;

class CentersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centers = Centers::all();
        return view('centers.index', compact('centers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $centers = Centers::all();
        return view('centers.create', compact('centers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
        ],
        [
            'name.required' => 'Name can\'t be empty!',
            'location.required' => 'Where is this? the void? Location can\'t be empty!',
        ]);

        Centers::create([
            'name' => $request->name,
            'location' => $request->location,
            ]);

        return redirect('/center');
    }

    /**
     * Display the specified resource.
     */
    public function show(Centers $centers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $centers = Centers::findorfail($id);
        return view('center.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Centers $centers, $id)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
        ],
        [
            'name.required' => 'Name can\'t be empty!',
            'location.required' => 'Location can\'t be empty!',
        ]);

        $center = Centers::findorfail($id);
        
        $center_data = [
            'name' => $request->name,
            'location' => $request->location
        ];

        $center->update($center_data);

        return view('center.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Centers $centers)
    {
        //
    }
}
