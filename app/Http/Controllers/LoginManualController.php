<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginManualController extends Controller
{
    use AuthenticatesUsers;

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'status'=>['required_with:1'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('welcome');
        }

        return back()->withErrors([
            'email' => 'Login failed. Please try again.',
        ]);;
    }

    public function logoutManual(Request $request)
    {
        Auth::logout();

        return redirect()->route('welcome');
    }
}
