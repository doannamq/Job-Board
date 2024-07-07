<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show Register/Create Form
    public function create()
    {
        return view('users.registers');
    }

    //Create New User
    public function store(Request $request)
    {
        $formField = $request->validate(
            [
                'name' => ['required', 'min:3'],
                'email' => ['required', 'email', Rule::unique('users', 'email')],
                'password' => ['required', 'confirmed', 'min:6'],
            ]
        );

        //Hash Password
        $formField['password'] = bcrypt($formField['password']);

        //Create User
        $user = User::create($formField);

        //Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and log in');
    }

    //Log out user
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    //Show Login Form
    public function login()
    {
        return view('users.logins');
    }

    //Authenticate User
    public function authenticate(Request $request)
    {
        $formField = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formField)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are loggin now!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}