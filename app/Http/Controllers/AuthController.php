<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class AuthController extends Controller
{
    public function showlogin()
    {
        return view('login');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $req)
    {
        // dd($req->all());

        $req->validate([

            'name' => 'required|string|max:255',

            'father_name' => 'required|string|max:255',

            'mother_name' => 'required|string|max:255',

            'gender' => 'required',

            'dob' => 'required|date',

            'email'=> 'required|email|unique:register,email',

            'password' => 'required|min:6'

        ]);

        register::create([

            'name' => $req->name,

            'father_name' => $req->father_name,

            'mother_name' => $req->mother_name,

            'gender' => $req->gender,

            'dob' => $req->dob,

            'email' => $req->email,

            'password' => bcrypt($req->password)

        ]);

        return redirect('/login')->with('success','Registration Successful');
    }
}