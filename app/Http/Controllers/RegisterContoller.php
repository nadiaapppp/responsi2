<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterContoller extends Controller
{
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'role' => 'required|in:user,admin',
        ]);
    
        // Buat pengguna
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'], // Pastikan role diambil dari input
        ]);
    
        // Login otomatis
        Auth::login($user);
    
        // Redirect berdasarkan role
    
        {
            if (Auth::user()->role === 'admin') {
                return '/admin/dashboard';
            }
        
            return '/user/dashboard'; // Halaman default untuk user biasa
        }

{
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'role' => $data['role'], // Ambil role dari input
    ]);
}

}
};