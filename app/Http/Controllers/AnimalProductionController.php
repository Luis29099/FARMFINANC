<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\animal_production;
use Illuminate\Http\Request;

class AnimalProductionController extends Controller
{
    
    public function index()
    {
        $animalproductions = animal_production::all();
        return view('productionanimal.index', compact('animalproductions'));
    }

    
    public function create()
    {
        return view('productionanimal.create');
    }

    
    public function store(Request $request)
    {
        $animalproduction = new animal_production();
        $animalproduction->type = $request->type;
        $animalproduction->quantity = $request->quantity;
         $animalproduction->acquisition_date = $request->acquisition_date;
        
        $animalproduction->save();

        return redirect()->route('animalproduction.index');
    }

    
    public function show($id)
    {
        $animalproduction = animal_production::findOrFail($id);
        return view('productionanimal.show', compact('animalproduction'));
    }

    
    public function edit(animal_production $animalproduction)
    {
        return view('productionanimal.edit', compact('animalproduction'));
    }

   
    public function update(Request $request, animal_production $animalproduction)
    {
        $animalproduction->type = $request->type;
        $animalproduction->quantity = $request->quantity;
        $animalproduction->acquisition_date = $request->acquisition_date;
        $animalproduction->save();

        return redirect()->route('animalproduction.index');
    }

    
    public function destroy(animal_production $animalproduction)
    {
        $animalproduction->delete();
        return redirect()->route('animalproduction.index');
    }
}
