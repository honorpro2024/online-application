<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{
    public function create()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ],[
            'email.unique' => 'An account with this email address already exists. You can try login with this email address'
        ]);

        $user = User::create($data);

        Auth::login($user);

        return redirect()->route('application.create')->with('success','Signed up successfully');

    }
}
