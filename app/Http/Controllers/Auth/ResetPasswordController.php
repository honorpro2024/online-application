<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function create(Request $request)
    {
        return view('auth.reset_password', [
            'email' => $request->email,
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->route('login')->with('success', 'Password changed successfully.');
        }

        return redirect()->back()->with('error', 'Email address not found!');
    }
}
