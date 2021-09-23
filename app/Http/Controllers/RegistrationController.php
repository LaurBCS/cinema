<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required','min:3','max:255'],
            'username' => ['required','min:3','max:255','unique:users,username'],
            'email' => ['required','email','max:255','unique:users,email'],
            'password' => ['required_with:confirmpassword','same:confirmpassword','min:7','max:255'],
            'confirmpassword' => ['required','min:7','max:255'],
        ]);

        $user = User::create([
            'name' => $attributes['name'],
            'username' =>  $attributes['username'],
            'email' =>  $attributes['email'],
            'password' =>  bcrypt($attributes['password']),
            'confirmpassword' => bcrypt($attributes['confirmpassword']),
        ]);

        Auth::login($user);

        return redirect('/movies');
    }
}
