<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Models\Trainor;
use Illuminate\Http\Request;

class TrainorController extends Controller
{
    public function train()
    {
        $train = Trainor::orderBy('id')->get();

        return view('Trainor.index',['trainor' => $train]);
    }

    public function store(Request $request) {

        $request->validate([
            'user_id' => 'required|numeric',
            'specialty' => 'required'
        ]);

        Trainor::create([
            'user_id' => $request->user_id,
            'specialty' => $request->specialty
        ]);

        return redirect('/about')->with('message', 'A new trainor has been added');
    }
    public function create() {

        $users = User::list();
        return view('Trainor.create', ['users' => $users]);
    }
    
}
