<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(request $request){

        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'role_id'   => 'sometimes',


        ]);
         $user=User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'role_id'   =>  5,
            'password'  => Hash::make($request->password),
        ]);


        auth()->login($user);

        return redirect('/dashboard');
    }
}
