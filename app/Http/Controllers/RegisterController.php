<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'           => 'required|string|max:255',
            'email'          => 'required|string|email|max:255|unique:users',
            'password'       => 'required|string|min:8|confirmed',
            'user_level'     => 'required|string|max:255',
            'phone'          => 'required|string|max:255',
            'address'        => 'required|string',
            'user_foto'      => 'required|string',
        ]);

        User::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'user_level'    => $request->user_level,
            'phone'         => $request->phone,
            'address'       => $request->address,
            'user_foto'     => $request->user_foto
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login.');
    }
}
