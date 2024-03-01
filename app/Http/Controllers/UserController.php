<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class UserController extends Controller
{
    public function data_user()
    {
        $user = Auth::user();
        $users = User::all();
        return view('dasbor.menu.data-user', compact('user', 'users'));
    }

    public function delete_user($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        session()->flash('success', 'Email atau Password Salah');

        // return Redirect::back()->with('success', 'User deleted successfully');
    }
}