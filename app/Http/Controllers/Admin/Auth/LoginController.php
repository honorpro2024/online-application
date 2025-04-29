<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest:admin']);
    }

    public function create()
    {
        return view('admin.auth.login');
    }

    public function store(Request $request)
    {
        $credentails = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($credentails, $request->remember)) {
            return redirect()->intended(route('admin.dashboard'))->with('success', 'Login successfully');
        }

        return redirect()->back()->with('error', 'Invalid Login Credentials');
    }
}
