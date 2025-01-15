<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi data input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:user,admin',
        ]);

        // Cek kredensial login
        if (Auth::attempt($request->only('email', 'password'))) {
            // Periksa peran pengguna
            if ($request->role === 'admin' && Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard'); // Halaman untuk admin
            } elseif ($request->role === 'user' && Auth::user()->role === 'user') {
                return redirect()->route('user.dashboard'); // Halaman untuk user
            } else {
                Auth::logout(); // Logout jika peran tidak cocok
                return redirect()->route('login')->withErrors(['role' => 'Role tidak sesuai dengan akun Anda.']);
            }
        }

        // Jika login gagal
        return back()->withErrors(['email' => 'Kredensial salah atau tidak terdaftar.']);
    }
}

