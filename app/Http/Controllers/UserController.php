<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Trainor;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function use()
    {
        $use = User::orderBy('id')->get();

        return view('User.index',['users' => $use]);
    }
    public function create()
    { return view('User.create');}

    public function store(Request $request) {

        $request->validate([
            'username' => 'required',
            'full_name' => 'required',
            'email' => 'required|email'
        ]);

        User::create([
            'username' => $request->username,
            'full_name' => $request->full_name,
            'email' => $request->email
        ]);

        return redirect('/user')->with('message', 'A new member has been added');
        
    }

    public function edit(User $user) {

        return view('User.edit',compact('user'));
    }

    public function update(User $user, Request $request) {
        
        $request->validate([
            'full_name' => 'required',
            'username' => 'required',
            'email' => 'required|email'

        ]);

        $user->update($request->all());
        return redirect('/user')->with('message', " $user->full_name has been updated successfully");
    }

    public function delete(User $user) {
        $user->delete();
        
        return redirect('/user')->with('message', "$user->full_name has been deleted successfully");
        
    }

  
}

