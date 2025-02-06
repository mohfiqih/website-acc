<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PendaftaranController extends Controller
{
    // Data Karyawan
    public function pendaftaran()
    {
        $user = Auth::user();
        return view('dasbor.menu.pendaftaran', compact('user'));
    }

}