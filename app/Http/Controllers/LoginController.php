<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.auth.index');
    }

    public function post(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!auth()->attempt($credentials)) {
            return back()->with('status', 'Wrong email or password');
        }

        return redirect()->route('dashboard.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
