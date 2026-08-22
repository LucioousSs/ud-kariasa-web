<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Landing page tunggal: hero, fitur, tentang, katalog, dan lokasi.
     * Semua produk dikirim — preview 8 pertama tampil, sisanya dibuka via tombol.
     */
    public function home()
    {
        $products = Product::latest()->get();

        return view('public.home', compact('products'));
    }
}