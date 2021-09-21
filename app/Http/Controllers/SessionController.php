<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($attributes))
        {
            return redirect('/');
        }

        throw ValidationException::withMessages([
            'email' => "Your email or password doesn't match"
        ]);
    }

    public function logout()
    {
        Auth::logout();
        
        return redirect('/');
    }
}
