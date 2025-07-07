<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\crop;
use Illuminate\Http\Request;

class CropController extends Controller
{

    public function index()
    {
        $crops = crop::all();
        return view('crop.index', compact('crops'));
    }

    
    public function create()
    {
        return view('crop.create');
    }

    
    public function store(Request $request)
    {
        $crop = new crop();
        $crop->name = $request->name;
        $crop->area = $request->area;
        $crop->sowing_date = $request->sowing_date;
        $crop->harvest_date = $request->harvest_date;
        $crop->save();

        return redirect()->route('crop.index');
    }

    
    public function show($id)
    {
        $crop = crop::findOrFail($id);
        return view('crop.show', compact('crop'));
    }

    
    public function edit(crop $crop)
    {
        return view('crop.edit', compact('crop'));
    }

   
    public function update(Request $request, crop $crop)
    {
        $crop->name = $request->name;
        $crop->area = $request->area;
        $crop->sowing_date = $request->sowing_date;
        $crop->harvest_date = $request->harvest_date;
        $crop->save();

        return redirect()->route('crop.index');
    }

    
    public function destroy(crop $crop)
    {
        $crop->delete();
        return redirect()->route('crop.index');
    }
}

