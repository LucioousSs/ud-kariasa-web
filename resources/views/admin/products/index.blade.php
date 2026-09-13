@extends('layouts.admin')

@section('title', 'Daftar Produk')
@section('page-title', 'Daftar Produk')

@section('content')
    {{-- Header --}}
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

    {{-- Search --}}
    @if ($products->count() > 0)
        <div class="mt-6">
            <div class="relative max-w-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
                <input type="text" id="search-input" placeholder="Cari produk..."
                    class="w-full rounded-xl border border-warm-200 bg-warm-50 py-2.5 pl-10 pr-4 text-sm text-slate-700 outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/30">
            </div>
        </div>
    @endif

    {{-- Table --}}
    @if ($products->count() > 0)
        <div class="mt-6 overflow-x-auto rounded-2xl border border-warm-200 bg-warm-50 shadow-sm">
            <table class="w-full min-w-[760px] text-left text-sm">
                <thead class="border-b border-warm-200 bg-warm-100/50">
                    <tr>
                        <th class="px-5 py-3 text-xs font-medium uppercase tracking-wider text-slate-400">Produk</th>
                        <th class="px-5 py-3 text-xs font-medium uppercase tracking-wider text-slate-400">Kategori</th>
                        <th class="px-5 py-3 text-xs font-medium uppercase tracking-wider text-slate-400">Harga</th>
                        <th class="px-5 py-3 text-xs font-medium uppercase tracking-wider text-slate-400">Stok</th>
                        <th class="px-5 py-3 text-right text-xs font-medium uppercase tracking-wider text-slate-400">Aksi</th>
                    </tr>
                </thead>
                <tbody id="product-table-body" class="divide-y divide-warm-100">
                    @foreach ($products as $product)
                        <tr class="transition hover:bg-warm-100/50 odd:bg-warm-100/20"
                            data-search="{{ strtolower($product->name . ' ' . $product->category) }}">
                            <td class="px-5 py-4">
                                <div class="flex items-center gap-3">
                                    @if ($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="h-11 w-11 rounded-xl border border-warm-200 object-cover">
                                    @else
                                        <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-warm-100 text-slate-400">
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
                                @if ($product->stock <= 0)
                                    <span class="font-semibold text-red-600">Habis</span>
                                @elseif ($product->stock <= 3)
                                    <span class="font-semibold text-amber-600">{{ $product->stock }}</span>
                                @else
                                    {{ $product->stock }}
                                @endif
                            </td>
                            <td class="px-5 py-4">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.products.edit', $product) }}"
                                        class="rounded-lg border border-warm-200 bg-warm-50 px-3 py-1.5 text-xs font-semibold text-slate-600 transition duration-300 hover:border-brand/40 hover:text-brand active:scale-95">
                                        Edit
                                    </a>
                                    <button type="button"
                                        onclick="openDeleteModal('{{ $product->name }}', '{{ route('admin.products.destroy', $product) }}')"
                                        class="rounded-lg border border-warm-200 bg-warm-50 px-3 py-1.5 text-xs font-semibold text-red-600 transition duration-300 hover:border-red-300 hover:bg-red-50 active:scale-95">
                                        Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="mt-6 rounded-2xl border border-dashed border-warm-200 bg-warm-50 p-12 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
            </svg>
            <p class="mt-4 text-slate-500">Belum ada produk.</p>
            <a href="{{ route('admin.products.create') }}" class="mt-3 inline-block text-sm font-semibold text-brand hover:text-brand-dark">
                Tambah produk pertama sekarang &rarr;
            </a>
        </div>
    @endif

    {{-- Delete Modal --}}
    <div x-data="{ open: false, name: '', url: '' }"
        x-on:open-delete-modal.window="open = true; name = $event.detail.name; url = $event.detail.url"
        x-on:keydown.escape.window="open = false"
        x-show="open" x-cloak
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 flex items-center justify-center p-4">

        {{-- Backdrop --}}
        <div x-show="open" @click="open = false"
            x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

        {{-- Modal card --}}
        <div x-show="open" x-trap.noscroll="open" role="dialog" aria-modal="true" aria-labelledby="delete-modal-title"
            x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
            class="relative w-full max-w-md rounded-2xl border border-warm-200 bg-warm-50 p-6 shadow-xl">

            <div class="flex items-start gap-4">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-red-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                    </svg>
                </div>
                <div>
                    <h3 id="delete-modal-title" class="text-lg font-semibold text-slate-900">Hapus Produk</h3>
                    <p class="mt-1 text-sm text-slate-500">
                        Yakin ingin menghapus <strong x-text="name" class="text-slate-700"></strong>? Tindakan ini tidak dapat dibatalkan.
                    </p>
                </div>
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <button type="button" @click="open = false"
                    class="rounded-xl border border-warm-200 bg-warm-50 px-4 py-2.5 text-sm font-medium text-slate-700 transition hover:bg-warm-100 active:scale-95">
                    Batal
                </button>
                <form :action="url" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="rounded-xl bg-red-600 px-4 py-2.5 text-sm font-semibold text-white shadow-lg shadow-red-600/25 transition hover:bg-red-700 active:scale-95">
                        Ya, Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
function openDeleteModal(name, url) {
    window.dispatchEvent(new CustomEvent('open-delete-modal', { detail: { name, url } }));
}
document.addEventListener('DOMContentLoaded', function() {
    const input = document.getElementById('search-input');
    const rows = document.querySelectorAll('#product-table-body tr');
    if (input) {
        input.addEventListener('input', function() {
            const q = this.value.toLowerCase();
            rows.forEach(function(row) {
                row.style.display = row.dataset.search.includes(q) ? '' : 'none';
            });
        });
    }
});
</script>
@endpush
