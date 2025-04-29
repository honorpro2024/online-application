<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Notifications\User\PasswordResetNotification;

class ForgotPasswordController extends Controller
{
    public function create()
    {
        return view('auth.forgot_password');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            $url = URL::temporarySignedRoute(
                'reset-password',
                now()->addMinutes(60),
                ['email' => $user->email]
            );
            $user->notify(new PasswordResetNotification($user, $url));
            return redirect()->route('forgot-password')->with('success', 'Password Reset Link Sent In Your Email!');
        }


        return redirect()->back()->with('error', 'Email address not found!');
    }
}
