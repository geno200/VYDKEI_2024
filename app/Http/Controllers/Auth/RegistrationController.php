<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
        return view("auth.reg");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'usertype' => 'required|in:student,teacher'
        ], [
            'name.max' => 'A név hosszabb, mint 30 karakter.',
            'email.unique' => 'Az email már regisztrált vagy meghaladta az 50 karaktert.',
            'password.min' => 'A jelszó hossza minimum 5 karakter.',
            'password.confirmed' => 'A megadott jelszavak nem egyeznek.',
            'email.required' => 'Az email cím megadása kötelező.',
            'name.required' => 'A név megadása kötelező.',
            'password.required' => 'A jelszó megadása kötelező.',
            'password_confirmation.required' => 'A jelszó megerősítése kötelező.'
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'usertype'=> $request->input('usertype'),
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);

        $request->session()->regenerate();

        return redirect()->route('auth.login');
    }

}
