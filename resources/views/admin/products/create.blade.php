@extends('layouts.admin')

@section('title', 'Tambah Produk')
@section('page-title', 'Tambah Produk')

@section('content')
    {{-- Breadcrumb --}}
    <nav class="mb-6 flex items-center gap-2 text-sm text-slate-500">
        <a href="{{ route('admin.dashboard') }}" class="transition hover:text-brand">Dashboard</a>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
        <a href="{{ route('admin.products.index') }}" class="transition hover:text-brand">Produk</a>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
        <span class="font-medium text-slate-700">Tambah</span>
    </nav>

    <div class="max-w-2xl">
        <h1 class="text-2xl font-bold text-slate-900">Tambah Produk Baru</h1>
        <p class="mt-1 text-sm text-slate-500">Isi data barang yang akan ditampilkan di katalog.</p>

        <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data"
            class="mt-8 rounded-2xl border border-warm-200 bg-warm-50 p-6 shadow-sm sm:p-8">
            @csrf
            @include('admin.products._form', ['product' => null, 'submit' => 'Simpan Produk'])
        </form>
    </div>
@endsection
