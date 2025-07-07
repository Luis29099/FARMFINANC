<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\avocado_crop;
use App\Models\finance;
use Illuminate\Http\Request;

class AvocadoCropController extends Controller
{
     
    public function index()
    {
        $avocados = avocado_crop::all();
        return view('avocado.index', compact('avocados'));
    }

    
    public function create()
    {
        return view('avocado.create');
    }

    
    public function store(Request $request)
    {
        $avocado = new avocado_crop();
        $avocado->variety = $request->variety;
        $avocado->estimated_production = $request->estimated_production;
        $avocado->save();

        return redirect()->route('avocado.index');
    }

    
    public function show($id)
    {
        $avocado = avocado_crop::findOrFail($id);
        return view('avocado.show', compact('avocado'));
    }

    
    public function edit(avocado_crop $avocado)
    {
        return view('avocado.edit', compact('avocado'));
    }

   
    public function update(Request $request, avocado_crop $avocado)
    {
        $avocado->variety = $request->variety;
        $avocado->estimated_production = $request->estimated_production;
        $avocado->save();

        return redirect()->route('avocado.index');
    }

    
    public function destroy(avocado_crop $avocado)
    {
        $avocado->delete();
        return redirect()->route('avocado.index');
    }
}
