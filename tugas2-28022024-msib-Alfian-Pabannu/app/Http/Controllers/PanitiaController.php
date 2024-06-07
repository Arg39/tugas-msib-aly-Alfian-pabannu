<?php

namespace App\Http\Controllers;

use App\Models\Panitia;
use App\Http\Requests\StorePanitiaRequest;
use App\Http\Requests\UpdatePanitiaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanitiaController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // if (Auth::guard('web')->attempt($credentials)) { 
        //     return redirect('/dashboard')->intended('/dashboard');
        // }

        // return redirect('login')->withErrors(['email' => 'Email atau password salah']);
    }
    public function logout()
    {
        Auth::guard('panitia')->logout();
        return redirect('/');
    }
}