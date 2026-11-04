<?php

namespace App\Http\Controllers;

use App\Models\Animal;

class DatabaseController extends Controller
{
    public function index()
    {
        $animals = Animal::with('novels')->orderBy('aname')->paginate(20);

        return view('database', compact('animals'));
    }
}