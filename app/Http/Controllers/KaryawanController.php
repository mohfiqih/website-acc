<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KaryawanController extends Controller
{
    // Data Karyawan
    public function karyawan()
    {
        $user = Auth::user();
        return view('dasbor.menu.data-karyawan', compact('user'));
    }

}