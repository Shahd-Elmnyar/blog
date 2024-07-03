<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }
    public function store(){
        $attributes =request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|max:255|email|unique:users',
            'password' => 'required|max:255|min:7',
        ]);
        // $attributes['password'] = bcrypt($attributes['password']);
        $user= User::create($attributes);
        auth()->login($user);
        return redirect('/')->with('success','your account has been created successfully');

    }
}
