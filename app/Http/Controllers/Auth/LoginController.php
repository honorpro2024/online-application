<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('error', 'Invalid login credentials');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
