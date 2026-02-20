<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $technologies = Technology::all();

        return view('technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $newTech = new Technology();

        $newTech->name = $data['name'];

        $newTech->save();

        return redirect()->route('admin.technologies', compact('newTech'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {

        return view('technologies.show', compact('technology'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {

        return view('technologies.edit', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technology $technology)
    {

        $data = $request->all();

        $technology->name = $data['name'];

        $technology->update();

        return redirect()->route('admin.technology', $technology);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {

        $technology->delete();

        return redirect()->route('admin.technologies');
    }
}
