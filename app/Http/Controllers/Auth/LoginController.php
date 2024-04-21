<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ],
        [
            'email.required' => 'A név megadása kötelező.',
            'password.required' => 'A jelszó megadása kötelező.'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/');

        }
        else
        {
            return back()->withErrors(['Nincs ilyen email regisztrálva vagy helytelen a jelszó.']);
        }
    }



}
