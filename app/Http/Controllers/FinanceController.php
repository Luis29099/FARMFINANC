<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\finance;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
     public function index()
    {
        $finances = finance::all();
        return view('finance.index', compact('finances'));
    }

    
    public function create()
    {
        return view('finance.create');
    }

    
    public function store(Request $request)
    {
        $finance = new finance();
        $finance->income = $request->income;
        $finance->expense = $request->expense;
        $finance->profit= $request->profit;
        $finance->save();

        return redirect()->route('finance.index');
    }

    
    public function show($id)
    {
        $finance = finance::findOrFail($id);
        return view('finance.show', compact('finance'));
    }

    
    public function edit(finance $finance)
    {
        return view('finance.edit', compact('finance'));
    }

   
    public function update(Request $request, finance $finance)
    {
        $finance->income = $request->income;
        $finance->expense = $request->expense;
        $finance->profit = $request->profit;
        $finance->save();

        return redirect()->route('finance.index');
    }

    
    public function destroy(finance $finance)
    {
        $finance->delete();
        return redirect()->route('finance.index');
    }
}
