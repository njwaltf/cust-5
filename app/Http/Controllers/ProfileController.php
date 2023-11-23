<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public $title = 'Profile | Perpus';
    public function index()
    {
        return view('profile.index', [
            'title' => $this->title,
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'max:100'],
            'email' => 'required|email|unique:users,email,' . $request->id,
            'username' => 'required|min:4|unique:users,username,' . $request->id,
            // 'username' => ['required', 'min:4', 'max:4'],
            'prof_pic' => ['file', 'image']
        ]);
        // if ($request->email != $data['email']) {
        //     $data['email']->validate(['email' => ['required', 'email', 'max:100', 'unique:users']]);
        // }
        if ($request->file('prof_pic')) {
            $data['prof_pic'] = $request->file('prof_pic')->store('profile');
        }

        $user = User::where('id', $request->id)->update($data);

        return redirect()->route('user-profile')->with('successEdit', 'Profile kamu berhasil diperbarui!');

    }
    public function edit()
    {
        return view('profile.edit', [
            'title' => $this->title
        ]);
    }
}
