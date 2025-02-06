<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return Redirect::route('login');
        }

        $user = Auth::user();
        return view('dasbor.menu.dasbor', compact('user'));
    }

    public function profil()
    {
        $user = Auth::user();
        return view('dasbor.menu.profil', compact('user'));
    }

    public function struktur_jepang()
    {
        $user = Auth::user();
        return view('dasbor.menu.struktur-jepang', compact('user'));
    }

    public function struktur_korea()
    {
        $user = Auth::user();
        return view('dasbor.menu.struktur-korea', compact('user'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}