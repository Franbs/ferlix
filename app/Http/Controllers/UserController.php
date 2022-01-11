<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login()
    {
        return view("/login-form");
    }

    public function register()
    {
        return view("/register-form");
    }

    public function store() 
    {
        $user = User::create(request(['name' , 'userName', 'email', 'password']));

        auth()->login($user);

        return redirect()->to('/');
    }

    public function start() 
    {
        if (auth()->attempt(request(['userName', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The username or password is invalid',
            ]);
        }

        return redirect()->to('/billboard');
    }

    public function destroy() 
    {
        auth()->logout();

        return redirect()->to('/');
    }
}
