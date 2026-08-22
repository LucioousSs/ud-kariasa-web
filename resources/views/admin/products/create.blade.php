@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')
    <div class="max-w-2xl">
        <h1 class="text-2xl font-bold text-slate-900">Tambah Produk Baru</h1>
        <p class="mt-1 text-sm text-slate-500">Isi data barang yang akan ditampilkan di katalog.</p>

        <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data"
            class="mt-8 rounded-2xl border border-slate-200/60 bg-white p-6 shadow-sm sm:p-8">
            @csrf
            @include('admin.products._form', ['product' => null, 'submit' => 'Simpan Produk'])
        </form>
    </div>
@endsection