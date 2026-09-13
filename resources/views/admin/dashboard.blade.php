@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
    <div>
        <h1 class="text-2xl font-bold text-slate-900">Selamat datang, {{ Auth::user()->name }}</h1>
        <p class="mt-1 text-sm text-slate-500">Ringkasan kondisi toko sembako Anda hari ini.</p>

        {{-- Stat Cards --}}
        <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            {{-- Total Produk --}}
            <div class="rounded-2xl border border-warm-200 bg-warm-50 p-5 shadow-sm">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-blue-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-slate-500">Total Produk</p>
                        <p class="text-2xl font-bold text-slate-900">{{ $productCount }}</p>
                    </div>
                </div>
            </div>

            {{-- Total Stok --}}
            <div class="rounded-2xl border border-warm-200 bg-warm-50 p-5 shadow-sm">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-amber-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15a2.25 2.25 0 012.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-slate-500">Total Stok</p>
                        <p class="text-2xl font-bold text-slate-900">{{ number_format($totalStock) }}</p>
                    </div>
                </div>
            </div>

            {{-- Stok Habis --}}
            <div class="rounded-2xl border border-warm-200 bg-warm-50 p-5 shadow-sm">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-amber-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-slate-500">Stok Habis</p>
                        <p class="text-2xl font-bold {{ $zeroStock > 0 ? 'text-red-600' : 'text-slate-900' }}">{{ $zeroStock }}</p>
                    </div>
                </div>
            </div>

            {{-- Kategori --}}
            <div class="rounded-2xl border border-warm-200 bg-warm-50 p-5 shadow-sm">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-blue-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-slate-500">Kategori</p>
                        <p class="text-2xl font-bold text-slate-900">{{ $categories }}</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tabel --}}
        <div class="mt-8 grid gap-6 lg:grid-cols-2">
            {{-- Produk Stok Menipis --}}
            <div class="rounded-2xl border border-warm-200 bg-warm-50 p-5 shadow-sm">
                <div class="mb-4 flex items-center justify-between">
                    <h3 class="font-semibold text-slate-800">Stok Menipis</h3>
                    @if ($lowStock->count() > 0)
                        <span class="rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-600">{{ $lowStock->count() }} item</span>
                    @endif
                </div>

                @if ($lowStock->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead>
                                <tr class="border-b border-slate-100">
                                    <th class="pb-2 pr-4 text-xs font-medium uppercase tracking-wider text-slate-400">Produk</th>
                                    <th class="pb-2 pr-4 text-xs font-medium uppercase tracking-wider text-slate-400">Kategori</th>
                                    <th class="pb-2 text-right text-xs font-medium uppercase tracking-wider text-slate-400">Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lowStock as $product)
                                    <tr class="border-b border-slate-50">
                                        <td class="py-3 pr-4">
                                            <div class="flex items-center gap-2">
                                                @if ($product->image)
                                                    <img src="{{ asset('storage/' . $product->image) }}" class="h-8 w-8 rounded-lg object-cover">
                                                @else
                                                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-slate-100 text-slate-400">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007z" /></svg>
                                                    </span>
                                                @endif
                                                <span class="font-medium text-slate-700">{{ $product->name }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 pr-4 text-xs text-slate-500">{{ $product->category }}</td>
                                        <td class="py-3 text-right">
                                            @if ($product->stock <= 0)
                                                <span class="inline-flex rounded-full bg-red-100 px-2 py-0.5 text-xs font-semibold text-red-600">Habis</span>
                                            @else
                                                <span class="inline-flex rounded-full bg-amber-100 px-2 py-0.5 text-xs font-semibold text-amber-600">{{ $product->stock }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="py-8 text-center">
                        <p class="text-sm text-slate-400">Semua stok aman.</p>
                    </div>
                @endif
            </div>

            {{-- Produk Terbaru --}}
            <div class="rounded-2xl border border-warm-200 bg-warm-50 p-5 shadow-sm">
                <div class="mb-4 flex items-center justify-between">
                    <h3 class="font-semibold text-slate-800">Produk Terbaru</h3>
                    <a href="{{ route('admin.products.index') }}" class="text-xs font-medium text-brand hover:text-brand-dark">Lihat semua</a>
                </div>

                @if ($recentProducts->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead>
                                <tr class="border-b border-slate-100">
                                    <th class="pb-2 pr-4 text-xs font-medium uppercase tracking-wider text-slate-400">Produk</th>
                                    <th class="pb-2 pr-4 text-xs font-medium uppercase tracking-wider text-slate-400">Harga</th>
                                    <th class="pb-2 text-right text-xs font-medium uppercase tracking-wider text-slate-400">Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recentProducts as $product)
                                    <tr class="border-b border-slate-50">
                                        <td class="py-3 pr-4">
                                            <div class="flex items-center gap-2">
                                                @if ($product->image)
                                                    <img src="{{ asset('storage/' . $product->image) }}" class="h-8 w-8 rounded-lg object-cover">
                                                @else
                                                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-slate-100 text-slate-400">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007z" /></svg>
                                                    </span>
                                                @endif
                                                <div>
                                                    <span class="block font-medium text-slate-700">{{ $product->name }}</span>
                                                    <span class="text-xs text-slate-400">{{ $product->category }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3 pr-4 text-sm font-medium text-slate-600">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                        <td class="py-3 text-right text-sm text-slate-600">{{ $product->stock }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="py-8 text-center">
                        <p class="text-sm text-slate-400">Belum ada produk.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
