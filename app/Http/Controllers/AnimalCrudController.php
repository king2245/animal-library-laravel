<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalCrudController extends Controller
{
    public function index()
    {
        $animals = Animal::orderBy('id')->paginate(15);

        return view('crud', compact('animals'));
    }

    public function create()
    {
        return view('animals.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'aname' => 'required|string|max:255',
            'species' => 'required|string|max:255',
        ]);

        Animal::create($validated);

        return redirect('/crud')->with('success', 'Animal added successfully!');
    }

    public function edit(Animal $animal)
    {
        return view('animals.edit', compact('animal'));
    }

    public function update(Request $request, Animal $animal)
    {
        $validated = $request->validate([
            'aname' => 'required|string|max:255',
            'species' => 'required|string|max:255',
        ]);

        $animal->update($validated);

        return redirect('/crud')->with('success', 'Animal updated successfully!');
    }

    public function destroy(Animal $animal)
    {
        $animal->delete();

        return redirect('/crud')->with('success', 'Animal deleted successfully!');
    }
}