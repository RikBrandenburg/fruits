<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $families = Family::all();

        return view('families.index', compact('families'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $families = Family::all();

        return view('families.create', compact('families'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        Family::create($validatedData);
    
        // Retrieve all families to pass to the index view
        $families = Family::all();
    
        return redirect()->route('family.index', compact('families'))->with('success', 'Family created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Family $family)
    {
        $family = Family::find($family->id);

        return view('families.show', compact('family'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Family $family)
    {
        return view('families.edit', compact('family'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Family $family)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $family->update($validatedData);

        return redirect()->route('family.index')->with('success', 'Family updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Family $family)
    {
        $family->delete();

        return redirect()->route('family.index')->with('success', 'Family deleted successfully.');
    }
}
