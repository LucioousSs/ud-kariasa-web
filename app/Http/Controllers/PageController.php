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

    /**
     * Halaman katalog dedicated — filter per kategori.
     */
    public function catalog(Request $request)
    {
        $category = $request->get('category');
        $categories = Product::distinct()->pluck('category');
        $products = Product::latest()
            ->when($category, fn ($q) => $q->where('category', $category))
            ->get();

        return view('public.catalog', compact('products', 'categories', 'category'));
    }
}