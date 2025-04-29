<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:admin']);
    }

    public function edit()
    {
        return view('admin.profile');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        auth()->user()->update($data);

        return redirect()->back()->with('success', 'Profile Updated Successfully.');
    }
}
