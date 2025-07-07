<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user_app;
use Illuminate\Http\Request;

class UserAppController extends Controller
{
   public function index() {
        $users = user_app::all();
        return view('user_app.index', compact('users'));
    }

    public function create() {
        return view('user_app.create');
    }

    public function store(Request $request) {
        $user = new user_app();
        $user->name = $request->name;
        $user->email = $request->email;
        
        $user->password=$request->password;
        $user->birth_date = $request->birth_date;
        $user->save();

        return redirect()->route('user.index');
    }

    public function show($id) {
        $user = user_app::findOrFail($id);
        return view('user_app.show', compact('user'));
    }

    public function edit(user_app $user) {
        return view('user_app.edit', compact('user'));
    }

    public function update(Request $request, user_app $user) {
        $user->name = $request->name;
        $user->email = $request->email;
 
        $user->password=$request->password;
        $user->birth_date = $request->birth_date;
        $user->save();

        return redirect()->route('user.index');
    }

    public function destroy(user_app $user) {
        $user->delete();
        return redirect()->route('user.index');
    }
}
