<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\coffe_crop;
use Illuminate\Http\Request;

class CoffeCropController extends Controller
{
    public function index()
    {
        $coffes = coffe_crop::all();
        return view('coffe.index', compact('coffes'));
    }

    
    public function create()
    {
        return view('coffe.create');
    }

    
    public function store(Request $request)
    {
        $coffe = new coffe_crop();
        $coffe->variety = $request->variety;
        $coffe->estimated_production = $request->estimated_production;
        $coffe->save();

        return redirect()->route('coffe.index');
    }

    
    public function show($id)
    {
        $coffe = coffe_crop::findOrFail($id);
        return view('coffe.show', compact('coffe'));
    }

    
    public function edit(coffe_crop $coffe)
    {
        return view('coffe.edit', compact('coffe'));
    }

   
    public function update(Request $request, coffe_crop $coffe)
    {
        $coffe->variety = $request->variety;
        $coffe->estimated_production = $request->estimated_production;
        $coffe->save();

        return redirect()->route('coffe.index');
    }

    
    public function destroy(coffe_crop $coffe)
    {
        $coffe->delete();
        return redirect()->route('coffe.index');
    }
}
