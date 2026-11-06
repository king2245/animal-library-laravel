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

    public function calculateAnimalPower(Animal $animal)
    {
        $powerLevel = strlen($animal->aname) * rand(10, 100);

        return [
            'animal' => $animal->aname,
            'power_level' => $powerLevel,
            'rank' => $powerLevel > 500 ? 'Legendary' : 'Common'
        ];
    }


    public function summonAnimalWisdom()
    {
        $wisdom = [
            'The early worm gets eaten.',
            'Never challenge a goose.',
            'Every pigeon believes it owns the city.',
            'The alpaca knows something you do not.',
            'Trust the capybara.'
        ];

        return response($wisdom[array_rand($wisdom)]);
    }


    public function randomAnimalFact()
    {
        $facts = [
            'Cats sleep around 16 hours a day.',
            'Octopuses have three hearts.',
            'A group of flamingos is called a flamboyance.',
            'Koalas sleep most of the day.',
            'Penguins can jump surprisingly high.'
        ];

        $fact = $facts[array_rand($facts)];

        return response()->json([
            'success' => true,
            'fact' => $fact,
            'generated_at' => now()
        ]);
    }


}
