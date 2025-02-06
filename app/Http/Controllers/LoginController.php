<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('dasbor');
        } else {
            return view('auth.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            $request->session()->put('user_id', Auth::id());
            $request->session()->put('email', $request->input('email'));

            return redirect('dasbor');
        } else {
            session()->flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }

}