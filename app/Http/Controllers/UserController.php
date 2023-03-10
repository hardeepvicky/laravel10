<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $data = $request->only("name", "email", "password");

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect("login")->with('success', 'You have register successfully');
    }

    public function login(Request $request)
    {
        $request->validate([            
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data = $request->only("email", "password");

        if (Auth::attempt($data)) 
        {
            return redirect("/")->with('success', 'Login successful');
        }
        
        return redirect("login")->with('failure', 'Invalid Credential');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
