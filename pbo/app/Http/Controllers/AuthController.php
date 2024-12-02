<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    
    // Menangani proses login
    public function login(Request $request)
    {
        // Validasi input
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Cek kredensial login
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }

        // Jika gagal login
        return back()->withErrors(['username' => 'Invalid credentials']);
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $validate = $request->validate([
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:8',
        ]);

        // Membuat user baru
        $user = User::create($validate);

        // Login otomatis setelah registrasi
        Auth::login($user);

        // Redirect setelah registrasi
        return redirect()->route('home');
    }

}
