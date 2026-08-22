@extends('layouts.admin')

@section('title', 'Daftar Produk')

@section('content')
    <div class="flex flex-wrap items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">Daftar Produk</h1>
            <p class="mt-1 text-sm text-slate-500">Total {{ $products->count() }} barang di katalog.</p>
        </div>
        <a href="{{ route('admin.products.create') }}"
            class="inline-flex items-center justify-center gap-2 rounded-xl bg-brand px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-brand/25 transition duration-300 hover:bg-brand-dark active:scale-95">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
            Tambah Produk
        </a>
    </div>

    <x-flash />

    @if ($products->count() > 0)
        <div class="mt-6 overflow-x-auto rounded-2xl border border-slate-200/60 bg-white shadow-sm">
            <table class="w-full min-w-[760px] text-left text-sm">
                <thead class="border-b border-slate-200 text-xs uppercase tracking-wider text-slate-400">
                    <tr>
                        <th class="px-5 py-3 font-medium">Produk</th>
                        <th class="px-5 py-3 font-medium">Kategori</th>
                        <th class="px-5 py-3 font-medium">Harga</th>
                        <th class="px-5 py-3 font-medium">Stok</th>
                        <th class="px-5 py-3 text-right font-medium">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach ($products as $product)
                        <tr class="transition hover:bg-slate-50/70">
                            <td class="px-5 py-4">
                                <div class="flex items-center gap-3">
                                    @if ($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="h-11 w-11 rounded-xl border border-slate-200 object-cover">
                                    @else
                                        <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-slate-100 text-slate-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007z" />
                                            </svg>
                                        </span>
                                    @endif
                                    <span class="font-semibold text-slate-800">{{ $product->name }}</span>
                                </div>
                            </td>
                            <td class="px-5 py-4">
                                <span class="inline-flex rounded-full bg-amber-100 px-2.5 py-0.5 text-xs font-medium text-amber-700">{{ $product->category }}</span>
                            </td>
                            <td class="px-5 py-4 font-medium text-slate-700">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td class="px-5 py-4 text-slate-600">
                                <span class="{{ $product->stock <= 0 ? 'font-semibold text-red-600' : '' }}">{{ $product->stock }}</span>
                            </td>
                            <td class="px-5 py-4">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.products.edit', $product) }}"
                                        class="rounded-lg border border-slate-200 bg-white px-3 py-1.5 text-xs font-semibold text-slate-600 transition duration-300 hover:border-brand/40 hover:text-brand active:scale-95">
                                        Edit
                                    </a>
                                    <form method="POST" action="{{ route('admin.products.destroy', $product) }}"
                                        onsubmit="return confirm('Hapus produk &quot;{{ $product->name }}&quot;?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="rounded-lg border border-slate-200 bg-white px-3 py-1.5 text-xs font-semibold text-red-600 transition duration-300 hover:border-red-300 hover:bg-red-50 active:scale-95">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="mt-6 rounded-2xl border border-dashed border-slate-300 bg-white p-12 text-center">
            <p class="text-slate-500">Belum ada produk.</p>
            <a href="{{ route('admin.products.create') }}" class="mt-3 inline-block text-sm font-semibold text-brand hover:text-brand-dark">
                Tambah produk pertama sekarang &rarr;
            </a>
        </div>
    @endif
@endsection