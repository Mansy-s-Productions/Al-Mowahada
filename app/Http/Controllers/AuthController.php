<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    public function getLogin() {
        return view('admin.auth.login');
    }

    public function postLogin(Request $r) {
        $r->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $r->except('_token');
        if (Auth::attempt($credentials)) {
            $r->session()->regenerate();
            return redirect()->route('admin.home');
        }

        return back()->withErrors('The email and password are not correct!');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('home')->withSuccess('You have been logged out!');
    }
}
