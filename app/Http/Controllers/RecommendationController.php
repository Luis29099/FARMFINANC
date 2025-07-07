<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\recommendation;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function index()
    {
        $recommendations = recommendation::all();
        return view('recommendation.index', compact('recommendations'));
    }

    
    public function create()
    {
        return view('recommendation.create');
    }

    
    public function store(Request $request)
    {
        $recommendation = new recommendation();
        $recommendation->text = $request->text;
        
        $recommendation->save();

        return redirect()->route('recommendation.index');
    }

    
    public function show($id)
    {
        $recommendation = recommendation::findOrFail($id);
        return view('recommendation.show', compact('recommendation'));
    }

    
    public function edit(recommendation $recommendation)
    {
        return view('recommendation.edit', compact('recommendation'));
    }

   
    public function update(Request $request, recommendation $recommendation)
    {
        $recommendation->text = $request->text;
       
        $recommendation->save();

        return redirect()->route('recommendation.index');
    }

    
    public function destroy(recommendation $recommendation)
    {
        $recommendation->delete();
        return redirect()->route('recommendation.index');
    }
}
