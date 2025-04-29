<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function edit()
    {
        return view('user.password');
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => 'required|current_password',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password'
        ]);

        auth()->user()->update(['password' => bcrypt($request->new_password)]);

        return redirect()->route('dashboard')->with('success', 'Password Changed Successfully.');
    }
}
