<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Rules\CurrentPassword;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:admin']);
    }

    public function update(Request $request)
    {
        $request->validate([
            'password' => ['required', new CurrentPassword],
            'new_password' => 'required',
        ]);

        auth()->user()->update(['password' => bcrypt($request->new_password)]);

        return redirect()->back()->with('success', 'Password Updated Successfully.');
    }
}
