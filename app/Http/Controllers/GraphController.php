<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Support\Facades\DB;

class GraphController extends Controller
{
    public function index()
    {
        $speciesData = Animal::select('species', DB::raw('COUNT(*) as total'))
            ->groupBy('species')
            ->orderBy('species')
            ->get();

        $labels = $speciesData->pluck('species');
        $values = $speciesData->pluck('total');

        return view('graph', compact('labels', 'values'));
    }
}
