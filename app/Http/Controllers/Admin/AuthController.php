<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan form login admin.
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Memproses login admin menggunakan Auth bawaan Laravel.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'));
        }

        return back()
            ->withErrors(['email' => 'Email atau password salah.'])
            ->onlyInput('email');
    }

    /**
     * Dasbor admin setelah login.
     */
    public function dashboard()
    {
        $productCount = Product::count();
        $totalStock = Product::sum('stock');

        return view('admin.dashboard', compact('productCount', 'totalStock'));
    }

    /**
     * Mengakhiri sesi login admin.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}