<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string'],
            'username' => ['required', 'string'],
            'name' => ['required', 'string'],
            'prof_pic' => ['required']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect('/')->with('success', '<strong>Akun berhasil dibuat!</strong> <br>Silahkan masuk terlebih dahulu');
    }

}
