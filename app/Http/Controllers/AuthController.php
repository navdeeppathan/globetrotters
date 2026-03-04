<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    // SHOW REGISTER PAGE
    public function showRegister()
    {
        return view('admin.auth.register');
    }

    // REGISTER USER
    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success','Account created successfully');
    }



    // SHOW LOGIN PAGE
    public function showLogin()
    {
        return view('admin.auth.login');
    }



    // LOGIN USER
    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials,$request->remember)){

            $request->session()->regenerate();

            return redirect()->route('dashboard');

        }

        return back()->withErrors([
            'email' => 'Invalid credentials'
        ]);

    }



    // LOGOUT
    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');

    }

}