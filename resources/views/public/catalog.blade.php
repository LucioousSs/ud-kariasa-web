@extends('layouts.public')

@section('title', 'Katalog Barang')

@section('content')
    {{-- Hero Katalog --}}
    <section class="relative overflow-hidden bg-gradient-to-b from-cream to-warm-50 py-16">
        <div class="relative mx-auto max-w-5xl px-4 sm:px-6">
            <div class="text-center">
                <span class="reveal text-xs font-semibold uppercase tracking-wider text-brand">Katalog Barang</span>
                <h1 class="reveal mt-4 text-3xl font-bold leading-tight text-slate-900 sm:text-4xl">Semua produk yang tersedia</h1>
                <p class="reveal mx-auto mt-3 max-w-lg text-slate-500">
                    Harga dan stok bisa berubah sewaktu-waktu — tanyakan langsung via WhatsApp.
                </p>
            </div>
        </div>
    </section>

    {{-- Filter + Grid --}}
    <section class="relative overflow-hidden bg-gradient-to-b from-warm-50 via-warm-50 to-cream py-12">

        <div class="relative mx-auto max-w-5xl px-4 sm:px-6">
            {{-- Filter bar --}}
            <div class="reveal mb-8 flex flex-wrap items-center gap-2">
                <a href="{{ route('catalog') }}"
                    class="rounded-full px-4 py-2 text-sm font-medium transition duration-300 {{ is_null($category) ? 'bg-brand text-white shadow-sm' : 'border border-warm-200 bg-warm-50 text-slate-600 hover:bg-warm-100' }}">
                    Semua
                </a>
                @foreach ($categories as $cat)
                    <a href="{{ route('catalog', ['category' => $cat]) }}"
                        class="rounded-full px-4 py-2 text-sm font-medium transition duration-300 {{ $category === $cat ? 'bg-brand text-white shadow-sm' : 'border border-warm-200 bg-warm-50 text-slate-600 hover:bg-warm-100' }}">
                        {{ $cat }}
                    </a>
                @endforeach
            </div>

            {{-- Grid --}}
            @if ($products->count() > 0)
                <div class="grid grid-cols-2 gap-4 sm:gap-5 md:grid-cols-3 lg:grid-cols-4">
                    @foreach ($products as $index => $product)
                        <div class="reveal h-full" style="animation-delay: {{ min($index, 7) * 80 }}ms">
                            <x-product-card :product="$product" />
                        </div>
                    @endforeach
                </div>
            @else
                <div class="rounded-2xl border border-dashed border-warm-200 bg-warm-50 p-12 text-center">
                    <p class="text-slate-500">Belum ada produk dalam kategori ini.</p>
                    <p class="mt-1 text-sm text-slate-400">Silakan pilih kategori lain atau kembali lagi nanti.</p>
                </div>
            @endif
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var revealEls = document.querySelectorAll('.reveal');
            if ('IntersectionObserver' in window) {
                var observer = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.1, rootMargin: '0px 0px -6% 0px' });
                revealEls.forEach(function (el) { observer.observe(el); });
            } else {
                revealEls.forEach(function (el) { el.classList.add('visible'); });
            }
        });
    </script>
@endsection
