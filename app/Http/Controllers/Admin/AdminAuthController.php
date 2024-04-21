<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function getRegister()
    {
        return view('admin.auth.reg');
    }
    public function getDashboard()
    {
        $users = User::all();
        return view('admin', compact('users'));
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        Log::info('Bejelentkezési kísérlet: ' . $request->input('email'));

        if (auth()->guard('admin')->attempt(['email' =>
            $request->input('email'), 'password' => $request->input('password')])) {
            $user = auth()->guard('admin')->user();
            if ($user->is_admin == 1) {
                Log::info('Sikeres bejelentkezés: ' . $request->input('email'));
                return redirect()->route('adminDashboard')->with('success', 'Sikeresen Bejelentkeztél.');
            }
        } else {
            Log::warning('Sikertelen bejelentkezés: ' . $request->input('email'));
            return back()->with('error', 'Érvénytelen jelszó vagy felhasználónév.');
        }
    }

    public function adminLogout(Request $request)
    {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success', 'Sikeresen kijelentkeztél.');
        return redirect(route('adminLogin'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);

        $user = Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();

        return redirect()->route('adminLogin');
    }

    public function destroy(Request $request)
    {
        $users = User::findOrFail($request->id);
        $users->delete();
        return redirect()->route('adminDashboard');
    }


    public function update(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->update($request->only('usertype'));
        return redirect()->route('adminDashboard');
    }

}
