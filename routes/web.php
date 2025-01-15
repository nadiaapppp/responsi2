<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;






Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');




// Route::middleware(['admin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
// });


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// routes/web.php

// Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');
// Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard')->middleware('auth');




// routes/web.php
Route::get('/about', function () {
    return view('about');
});

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('admin');
Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard')->middleware('auth');


Route::resource('products', ProductController::class);

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Dashboard dengan middleware auth dan verified
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// Rute untuk profil pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/admin/dashboard', function () {
        return view('admin_dashboard');
    });
});

// Rute untuk otentikasi
require __DIR__ . '/auth.php'; // Diperbaiki di sini


// Halaman konfirmasi password
Route::get('/confirm-password', function () {
    return view('auth.confirm-password');
})->middleware(['auth', 'verified'])->name('password.confirm');

// Proses konfirmasi password
Route::post('/confirm-password', function (Request $request) {
    if (!Hash::check($request->password, $request->user()->password)) {
        return back()->withErrors(['password' => 'Password Anda salah.']);
    }

    $request->session()->put('password_confirmed_at', time());

    return redirect()->intended('dashboard');
})->middleware(['auth', 'verified']);
