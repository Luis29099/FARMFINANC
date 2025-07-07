<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\hen;
use Illuminate\Http\Request;

class HenController extends Controller
{
    public function index()
    {
        $hens = hen::all();
        return view('hen.index', compact('hens'));
    }

    
    public function create()
    {
        return view('hen.create');
    }

    
    public function store(Request $request)
    {
        $hen = new hen();
        $hen->breed = $request->breed;
        $hen->daily_egg_production = $request->daily_egg_production;
        $hen->monthly_egg_total = $request->monthly_egg_total;
        $hen->save();

        return redirect()->route('hen.index');
    }

    
    public function show($id)
    {
        $hen = hen::findOrFail($id);
        return view('hen.show', compact('hen'));
    }

    
    public function edit(hen $hen)
    {
        return view('hen.edit', compact('hen'));
    }

   
    public function update(Request $request, hen $hen)
    {
        $hen->breed = $request->breed;
        $hen->daily_egg_production = $request->daily_egg_production;
        $hen->monthly_egg_total = $request->monthly_egg_total;
        $hen->save();

        return redirect()->route('hen.index');
    }

    
    public function destroy(hen $hen)
    {
        $hen->delete();
        return redirect()->route('hen.index');
    }
}
