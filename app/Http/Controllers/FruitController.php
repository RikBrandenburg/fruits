<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\Family;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fruits = Fruit::all();

        return view('fruits.index', compact('fruits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $families = Family::all();
        return view('fruits.create', compact('families'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'colour' => 'required|string|max:255',
            'weight' => 'required|numeric',
            // Dit zorgt ervoor dat hij de enkelvoud pakt. In Laravel is de meervoud tabel naam altijd de enkelvoud naam met een s erachter.
            'family_id' => 'required|integer|exists:family,id',
        ]);

        Fruit::create($validatedData);

        return redirect()->route('fruit.index')->with('success', 'Fruit created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fruit $fruit)
    {
        $fruit = Fruit::find($fruit->id);

        return view('fruits.show', compact('fruit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fruit $fruit)
    {
        return view('fruits.edit', compact('fruit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fruit $fruit)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'colour' => 'required|string|max:255',
            'weight' => 'required|numeric',
        ]);

        $fruit->update($validatedData);

        return redirect()->route('fruit.index')->with('success', 'Fruit created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fruit $fruit)
    {
        $fruit->delete();

        return redirect()->route('fruit.index')->with('success', 'Fruit deleted successfully.');
    }
}
