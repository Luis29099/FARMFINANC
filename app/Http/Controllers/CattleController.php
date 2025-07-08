<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cattle;
use Illuminate\Http\Request;

class CattleController extends Controller
{
    public function index()
    {
        $cattles = cattle::all();
        return view('cattle.index', compact('cattles'));
    }

    
    public function create()
    {
        return view('cattle.create');
    }

    
    public function store(Request $request)
    {
        $cattle = new cattle();
        $cattle->breed = $request->breed;
        $cattle->average_weight = $request->average_weight;
        $cattle->use_milk_meat = $request->use_milk_meat;
        $cattle->save();

        return redirect()->route('cattle.index');
    }

    
    public function show($id)
    {
        $cattle = cattle::findOrFail($id);
        return view('cattle.show', compact('cattle'));
    }

    
    public function edit(cattle $cattle)
    {
        return view('cattle.edit', compact('cattle'));
    }

   
    public function update(Request $request, cattle $cattle)
    {
        $cattle->breed = $request->breed;
        $cattle->average_weight = $request->average_weight;
        $cattle->use_milk_meat = $request->use_milk_meat;
        $cattle->save();

        return redirect()->route('cattle.index');
    }

    
    public function destroy(cattle $cattle)
    {
        $cattle->delete();
        return redirect()->route('cattle.index');
    }
}
