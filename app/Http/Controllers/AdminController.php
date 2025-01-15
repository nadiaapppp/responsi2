<?php

// AdminController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // arahkan ke file resources/views/admin/dashboard.blade.php
    }

    public function dashboard()
{
    $products = Product::all();
    $orders = Order::all();
    $users = User::all();

    return view('admin_dashboard', compact('products', 'orders', 'users'));
}

}
