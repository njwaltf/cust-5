<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public $title = 'Perpus | Login';
    public function index()
    {
        return view('login', [
            'title' => $this->title
        ]);
    }
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'max:100', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginFail', 'Masuk gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('successLogout', 'Anda telah keluar!');
    }
}
