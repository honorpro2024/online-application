<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Notifications\Admin\PasswordResetNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest:admin']);
    }

    public function create()
    {
        return view('admin.auth.forgot-password');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email'
        ], [
            'email.exists' => 'Email address not found!'
        ]);

        $admin = Admin::where('email', $request->email)->first();

        $token = $this->createToken($request->email);

        $resetLink = $this->generateResetLink($token);

        $admin->notify(new PasswordResetNotification($resetLink));

        return back()->with('success', 'Password reset link has been sent in your email.');
    }

    public function createToken($email)
    {
        $token = Str::random(64);

        DB::table('password_resets')->updateOrInsert(['email' => $email], ['token' => $token, 'created_at' => now()]);

        return $token;
    }

    public function generateResetLink($token)
    {
        return URL::temporarySignedRoute(
            'admin.reset.password',
            now()->addMinutes(config('auth.passwords.admins.expire')),
            ['token' => $token, 'email' => request('email')]
        );
    }
}
