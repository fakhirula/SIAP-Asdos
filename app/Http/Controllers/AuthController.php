<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $validatedData['email'])->first();

        if (!$user) {
            return redirect()->back()->withInput($request->only('email'))->withErrors([
                'email' => 'These credentials do not match our records.'
            ]);
        }

        if (Hash::check($validatedData['password'], $user->password)) {
            auth()->login($user);
            session()->put('user', $user);
            return redirect()->intended('/');
        }

        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'These credentials do not match our records.'
        ]);
    }

    public function logout(Request $request)
    {
        session()->forget('user');
        auth()->logout();
        return redirect('/login');
    }
}
