@extends('layouts.admin')

@section('title', 'Edit Produk')

@section('content')
    <div class="max-w-2xl">
        <h1 class="text-2xl font-bold text-slate-900">Edit Produk</h1>
        <p class="mt-1 text-sm text-slate-500">Perbarui informasi barang: {{ $product->name }}.</p>

        <form method="POST" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data"
            class="mt-8 rounded-2xl border border-slate-200/60 bg-white p-6 shadow-sm sm:p-8">
            @csrf
            @method('PUT')
            @include('admin.products._form', ['product' => $product, 'submit' => 'Simpan Perubahan'])
        </form>
    </div>
@endsection