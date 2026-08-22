@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div>
        <h1 class="text-2xl font-bold text-slate-900">Halo, {{ Auth::user()->name }}</h1>
        <p class="mt-1 text-sm text-slate-500">Ringkasan kondisi toko sembako Anda hari ini.</p>

        <div class="mt-8 grid gap-5 sm:grid-cols-2">
            <div class="rounded-2xl border border-slate-200/60 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-lg">
                <p class="text-sm font-medium text-slate-500">Total Produk</p>
                <p class="mt-2 text-3xl font-bold text-brand">{{ $productCount }}</p>
                <p class="mt-1 text-xs text-slate-400">jenis barang di katalog</p>
            </div>
            <div class="rounded-2xl border border-slate-200/60 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-lg">
                <p class="text-sm font-medium text-slate-500">Total Stok</p>
                <p class="mt-2 text-3xl font-bold text-amber-600">{{ $totalStock }}</p>
                <p class="mt-1 text-xs text-slate-400">satuan stok seluruh barang</p>
            </div>
        </div>
    </div>
@endsection