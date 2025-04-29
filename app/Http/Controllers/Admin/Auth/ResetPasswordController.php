<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ResetPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest:admin']);
    }

    public function create()
    {
        return view('admin.auth.reset-password');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:admins',
            'password' => 'required|confirmed'
        ], ['email.exists' => 'Email address not found!']);

        if (!$this->validateToken($request->only('token', 'email'))) {
            return redirect()->route('admin.forgot.password')->with('error', 'Invalid password reset link');
        }

        $this->deleteToken($request->only('token', 'email'));

        $admin = Admin::where('email', $request->email)->first();
        $admin->password = bcrypt($request->password);
        $admin->save();

        Auth::guard('admin')->loginUsingId($admin->id,true);

        return redirect()->route('admin.dashboard')->with('success', 'Password changed successfully.');
    }

    public function validateToken($credentials)
    {
        return DB::table('password_resets')
            ->where($credentials)
            ->exists();
    }

    public function deleteToken($credentials)
    {
        DB::table('password_resets')
            ->where($credentials)
            ->delete();
    }
}
