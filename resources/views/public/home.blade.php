@extends('layouts.public')

@section('title', 'Beranda')

@section('content')
    {{-- ===================== HERO — FULL-SCREEN IMMERSIVE ===================== --}}
    <section id="home" class="relative flex min-h-[100dvh] items-center overflow-hidden">
        {{-- Background foto toko --}}
        <div class="absolute inset-0">
            <div class="absolute inset-0 animate-pulse bg-warm-100"></div>
            <img src="{{ asset('images/Pfp1.jpg') }}" alt="" class="h-full w-full object-cover"
                onload="this.previousElementSibling.style.display='none'" />
            <div class="absolute inset-0 bg-gradient-to-b from-stone-900/70 via-stone-900/50 to-stone-900/80"></div>
        </div>

        <div class="bg-grain absolute inset-0"></div>

        {{-- Konten hero --}}
        <div class="relative z-10 mx-auto w-full max-w-5xl px-4 py-32 sm:px-6 sm:py-40">
            <div class="max-w-2xl">
                <span class="reveal inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-xs font-medium text-white/90 backdrop-blur-sm">
                    <span class="h-1.5 w-1.5 rounded-full bg-green-400"></span>
                    Buka setiap hari
                </span>

                <h1 class="reveal mt-7 text-4xl font-extrabold leading-[1.05] tracking-tight text-white sm:text-5xl lg:text-6xl">
                    Kebutuhan harian <span class="text-amber-300">lengkap</span>, harga tetap <span class="text-amber-300">bersahabat</span>
                </h1>

                <p class="reveal mt-6 max-w-lg text-lg leading-relaxed text-white/70">
                    UD. Kariasa melayani beras, minyak, bumbu dapur, hingga kebutuhan harian lain.
                    Pesan lewat WhatsApp atau mampir langsung — dekat, ramah, dan tepercaya.
                </p>

                <div class="reveal mt-10 flex flex-wrap items-center gap-4">
                    <a href="#catalog"
                        class="inline-flex items-center justify-center gap-2 rounded-2xl bg-white px-8 py-4 text-base font-semibold text-slate-900 shadow-lg transition duration-300 hover:bg-warm-50 hover:shadow-xl active:scale-95">
                        Lihat Katalog
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <a href="#location"
                        class="inline-flex items-center justify-center rounded-2xl border border-white/20 bg-white/10 px-7 py-4 text-base font-semibold text-white backdrop-blur-sm transition duration-300 hover:bg-white/20 active:scale-95">
                        Lihat Lokasi
                    </a>
                </div>

                <p class="reveal mt-10 flex items-center gap-4 text-sm text-white/50">
                    <span>50+ jenis sembako</span>
                    <span class="h-1 w-1 rounded-full bg-white/30"></span>
                    <span>Dipercaya warga sekitar</span>
                </p>
            </div>
        </div>

        {{-- Scroll indicator --}}
        <div class="absolute bottom-8 left-1/2 z-10 -translate-x-1/2 animate-scroll-bounce">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white/40" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>

        {{-- Curved divider: Hero → Tentang Kami --}}
        <div class="absolute bottom-0 left-0 right-0 z-10 -mb-px">
            <svg viewBox="0 0 1440 120" fill="none" class="w-full text-cream" preserveAspectRatio="none">
                <path d="M0 120V60c240-80 480-40 720 0s480 80 720 60v60H0z" fill="currentColor"/>
            </svg>
        </div>
    </section>

    {{-- ===================== TENTANG KAMI — EDITORIAL STORY ===================== --}}
    <section id="about" class="relative overflow-hidden bg-cream py-24">
        <div class="relative mx-auto max-w-5xl px-4 sm:px-6">
            <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
                {{-- Teks cerita --}}
                <div>
                    <span class="reveal text-xs font-semibold uppercase tracking-wider text-brand">Tentang Kami</span>
                    <h2 class="reveal mt-4 text-3xl font-bold leading-tight text-slate-900 sm:text-4xl">
                        Toko keluarga yang<br>dekat dengan Anda
                    </h2>
                    <p class="reveal mt-6 max-w-md leading-relaxed text-slate-500">
                        UD. Kariasa adalah toko sembako keluarga yang sudah melayani warga sekitar
                        bertahun-tahun. Kami percaya kebutuhan sehari-hari harus mudah dijangkau,
                        dengan harga jujur dan stok yang selalu tersedia.
                    </p>

                    <div class="reveal mt-8 grid grid-cols-3 gap-4">
                        <div class="text-center">
                            <p class="text-3xl font-extrabold text-brand">50+</p>
                            <p class="mt-1 text-xs text-slate-500">Jenis Sembako</p>
                        </div>
                        <div class="text-center">
                            <p class="text-3xl font-extrabold text-brand">Tiap Hari</p>
                            <p class="mt-1 text-xs text-slate-500">Buka Melayani</p>
                        </div>
                        <div class="text-center">
                            <p class="text-3xl font-extrabold text-brand">Dekat</p>
                            <p class="mt-1 text-xs text-slate-500">Dari Rumah Anda</p>
                        </div>
                    </div>
                </div>

                {{-- Foto toko --}}
                <div class="reveal relative">
                    <div class="overflow-hidden rounded-3xl shadow-2xl shadow-slate-900/10">
                        <div class="absolute inset-0 animate-pulse bg-warm-100"></div>
                        <img src="{{ asset('images/Pfp2.jpg') }}" alt="Interior toko UD. Kariasa"
                            class="relative h-[26rem] w-full object-cover sm:h-[30rem]"
                            onload="this.previousElementSibling.style.display='none'" />
                    </div>
                    <div class="absolute -bottom-4 -left-4 h-24 w-24 rounded-2xl bg-amber-200/40"></div>
                    <div class="absolute -right-4 -top-4 h-16 w-16 rounded-full bg-brand/10"></div>
                </div>
            </div>
        </div>

        {{-- Curved divider: Tentang Kami → Yang Kami Sediakan --}}
        <div class="absolute bottom-0 left-0 right-0 -mb-px">
            <svg viewBox="0 0 1440 80" fill="none" class="w-full text-warm-50" preserveAspectRatio="none">
                <path d="M0 80h1440V40c-240 40-480 0-720-20S240 60 0 40v40z" fill="currentColor"/>
            </svg>
        </div>
    </section>

    {{-- ===================== YANG KAMI SEDIAKAN ===================== --}}
    <section class="relative overflow-hidden bg-gradient-to-b from-warm-50 via-warm-50 to-cream py-24">
        <div class="bg-grain absolute inset-0"></div>

        {{-- Decorative blobs --}}
        <div class="pointer-events-none absolute -top-32 -left-32 h-96 w-96 rounded-full bg-gradient-to-br from-brand/5 to-amber-100/30 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-32 -right-32 h-96 w-96 rounded-full bg-gradient-to-tl from-amber-100/20 to-brand/5 blur-3xl"></div>

        <div class="relative mx-auto max-w-5xl px-4 sm:px-6">
            <div class="reveal text-center">
                <span class="text-xs font-semibold uppercase tracking-wider text-brand">Layanan Kami</span>
                <h2 class="mt-4 text-3xl font-bold leading-tight text-slate-900 sm:text-4xl">Yang kami sediakan untuk Anda</h2>
            </div>

            <div class="reveal mt-12 grid gap-6 sm:grid-cols-3">
                {{-- Card 1: Stok Segar --}}
                <div class="rounded-2xl border border-l-4 border-l-brand border-warm-200 bg-gradient-to-br from-blue-50/60 to-cream p-7 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-lg">
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-brand/10 text-brand">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </span>
                    <h3 class="mt-5 text-lg font-semibold text-slate-800">Stok Segar & Lengkap</h3>
                    <p class="mt-3 text-sm leading-relaxed text-slate-500">
                        Beras, minyak, gula, telur, hingga bumbu dapur tersedia setiap hari.
                    </p>
                </div>

                {{-- Card 2: Harga Bersahabat --}}
                <div class="rounded-2xl border border-l-4 border-l-amber-400 border-warm-200 bg-gradient-to-br from-amber-50/60 to-cream p-7 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-lg">
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-amber-100 text-amber-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                    <h3 class="mt-5 text-lg font-semibold text-slate-800">Harga Bersahabat</h3>
                    <p class="mt-3 text-sm leading-relaxed text-slate-500">
                        Takaran jujur dan harga ramah untuk kebutuhan keluarga sehari-hari.
                    </p>
                </div>

                {{-- Card 3: Pesan via WhatsApp --}}
                <div class="rounded-2xl border border-l-4 border-l-brand border-warm-200 bg-gradient-to-br from-green-50/60 to-cream p-7 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-lg">
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-green-50 text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2a10 10 0 00-8.6 15.1L2 22l5-1.3A10 10 0 1012 2zm5.2 13.9c-.5.5-1.2.7-2.2.5-.5-.1-1.1-.2-1.6-.6a9 9 0 01-2.5-2.6c-.4-.6-.6-1.3-.5-2.2.1-.5.4-1 .8-1.4a.7.7 0 011 0c.2.2.5.7.7.9a.4.4 0 01-.1.6c-.2.2-.3.4-.1.6.5.7 1 1.3 1.6 1.7a11 11 0 002.9 1.2c.3 0 .6.1.7.3l.4.4c.1.2.1.4-.1.6z" />
                        </svg>
                    </span>
                    <h3 class="mt-5 text-lg font-semibold text-slate-800">Pesan via WhatsApp</h3>
                    <p class="mt-3 text-sm leading-relaxed text-slate-500">
                        Pesan cepat tanpa antre, tinggal chat dan kami siapkan pesanannya.
                    </p>
                </div>
            </div>
        </div>

        {{-- Curved divider: Yang Kami Sediakan → Katalog --}}
        <div class="absolute bottom-0 left-0 right-0 -mb-px">
            <svg viewBox="0 0 1440 80" fill="none" class="w-full text-cream" preserveAspectRatio="none">
                <path d="M0 80h1440V50c-240 30-480-10-720-30S240 70 0 50v30z" fill="currentColor"/>
            </svg>
        </div>
    </section>

    {{-- ===================== KATALOG BARANG ===================== --}}
    <section id="catalog" class="relative overflow-hidden bg-gradient-to-b from-cream via-warm-50/30 to-cream py-24">

        <div class="relative mx-auto max-w-5xl px-4 sm:px-6">
            <div class="reveal">
                <span class="text-xs font-semibold uppercase tracking-wider text-brand">Katalog Barang</span>
                <h2 class="mt-4 text-3xl font-bold leading-tight text-slate-900 sm:text-4xl">Sembako yang tersedia</h2>
                <p class="mt-3 max-w-xl text-slate-500">
                    Harga dan stok bisa berubah sewaktu-waktu — tanyakan langsung via WhatsApp.
                </p>
            </div>

            <div x-data="{ expanded: false }">
                @if ($products->count() > 0)
                    <div class="mt-10 grid grid-cols-2 gap-4 sm:gap-5 md:grid-cols-3 lg:grid-cols-4">
                        @foreach ($products->take(8) as $index => $product)
                            <div class="reveal h-full" style="animation-delay: {{ min($index, 7) * 80 }}ms">
                                <x-product-card :product="$product" />
                            </div>
                        @endforeach
                    </div>

                    @if ($products->count() > 8)
                        <div x-show="expanded" x-cloak
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 -translate-y-4"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            class="mt-4 grid grid-cols-2 gap-4 sm:gap-5 md:grid-cols-3 lg:grid-cols-4">
                            @foreach ($products->skip(8) as $product)
                                <div class="h-full">
                                    <x-product-card :product="$product" />
                                </div>
                            @endforeach
                        </div>
                    @endif

                    @if ($products->count() > 8)
                        <div class="reveal mt-10 flex justify-center">
                            <button type="button" @click="expanded = !expanded"
                                class="inline-flex items-center justify-center gap-2 rounded-xl bg-brand px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-brand/25 transition duration-300 hover:bg-brand-dark active:scale-95">
                                <span x-text="expanded ? 'Tampilkan Lebih Sedikit' : 'Lihat Semua Katalog'">Lihat Semua Katalog</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 transition-transform duration-300" :class="expanded ? 'rotate-180' : ''"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                        </div>
                    @endif
                @else
                    <div class="mt-10 rounded-2xl border border-dashed border-warm-200 bg-warm-50 p-12 text-center">
                        <p class="text-slate-500">Belum ada produk sembako yang ditampilkan saat ini.</p>
                        <p class="mt-1 text-sm text-slate-400">Silakan kembali lagi nanti.</p>
                    </div>
                @endif
            </div>
        </div>

    </section>

    {{-- ===================== LOKASI & KONTAK — IMMERSIVE ===================== --}}
    <section id="location" class="relative overflow-hidden bg-gradient-to-b from-cream to-warm-100/30 py-24">
        <div class="bg-grain absolute inset-0"></div>

        {{-- Decorative blobs --}}
        <div class="pointer-events-none absolute -top-24 -left-24 h-72 w-72 rounded-full bg-gradient-to-br from-amber-100/30 to-brand/5 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-24 -right-24 h-72 w-72 rounded-full bg-gradient-to-tl from-green-100/20 to-amber-100/20 blur-3xl"></div>

        <div class="relative mx-auto max-w-5xl px-4 sm:px-6">
            <div class="reveal mb-12 text-center">
                <span class="text-xs font-semibold uppercase tracking-wider text-brand">Lokasi & Kontak</span>
                <h2 class="mt-4 text-3xl font-bold leading-tight text-slate-900 sm:text-4xl">Kunjungi atau hubungi kami</h2>
            </div>

            <div class="grid items-stretch gap-10 lg:grid-cols-5">
                {{-- Peta --}}
                <div class="reveal overflow-hidden rounded-3xl ring-1 ring-warm-200 shadow-xl shadow-slate-900/10 lg:col-span-3">
                    <div class="h-[22rem] sm:h-[26rem] lg:h-full lg:min-h-[28rem]">
                        <iframe
                            src="https://maps.google.com/maps?q=Jl.%20Ahmad%20Yani%20No.%2047%2C%20Denpasar%2C%20Bali&z=17&output=embed"
                            class="h-full w-full border-0"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen
                            title="Lokasi UD. Kariasa">
                        </iframe>
                    </div>
                </div>

                {{-- Info kontak --}}
                <div class="flex flex-col gap-4 lg:col-span-2">
                    <div class="reveal rounded-2xl border border-warm-200 bg-warm-50 p-5">
                        <div class="flex items-start gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand/10 text-brand">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">Alamat</p>
                                <p class="mt-1 text-sm font-medium text-slate-800">Jl. Ahmad Yani No. 47, Denpasar, Bali</p>
                            </div>
                        </div>
                    </div>

                    <div class="reveal rounded-2xl border border-warm-200 bg-warm-50 p-5">
                        <div class="flex items-start gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18z" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">Jam Buka</p>
                                <p class="mt-1 text-sm font-medium text-slate-800">Senin–Sabtu 06.00–17.00 &bull; Minggu 06.00–14.00 WITA</p>
                            </div>
                        </div>
                    </div>

                    <div class="reveal rounded-2xl border border-warm-200 bg-warm-50 p-5">
                        <div class="flex items-start gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-green-50 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2a10 10 0 00-8.6 15.1L2 22l5-1.3A10 10 0 1012 2zm5.2 13.9c-.5.5-1.2.7-2.2.5-.5-.1-1.1-.2-1.6-.6a9 9 0 01-2.5-2.6c-.4-.6-.6-1.3-.5-2.2.1-.5.4-1 .8-1.4a.7.7 0 011 0c.2.2.5.7.7.9a.4.4 0 01-.1.6c-.2.2-.3.4-.1.6.5.7 1 1.3 1.6 1.7a11 11 0 002.9 1.2c.3 0 .6.1.7.3l.4.4c.1.2.1.4-.1.6z" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">WhatsApp</p>
                                <p class="mt-1 text-sm font-medium text-slate-800">0896-7563-2471</p>
                            </div>
                        </div>
                    </div>

                    <div class="reveal mt-auto flex flex-col gap-3">
                        <a href="https://wa.me/6289675632471?text=Halo%20Ibu%2C%20saya%20ingin%20pesan"
                            target="_blank" rel="noopener"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-green-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-green-600/20 transition duration-300 hover:bg-green-700 active:scale-95">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2a10 10 0 00-8.6 15.1L2 22l5-1.3A10 10 0 1012 2zm5.2 13.9c-.5.5-1.2.7-2.2.5-.5-.1-1.1-.2-1.6-.6a9 9 0 01-2.5-2.6c-.4-.6-.6-1.3-.5-2.2.1-.5.4-1 .8-1.4a.7.7 0 011 0c.2.2.5.7.7.9a.4.4 0 01-.1.6c-.2.2-.3.4-.1.6.5.7 1 1.3 1.6 1.7a11 11 0 002.9 1.2c.3 0 .6.1.7.3l.4.4c.1.2.1.4-.1.6z" />
                            </svg>
                            Chat WhatsApp Sekarang
                        </a>
                        <a href="https://maps.google.com/?q=Jl.%20Ahmad%20Yani%20No.%2047%2C%20Denpasar%2C%20Bali"
                            target="_blank" rel="noopener"
                            class="inline-flex items-center justify-center gap-2 rounded-xl border border-warm-200 bg-warm-50 px-6 py-3 text-sm font-semibold text-slate-700 transition duration-300 hover:bg-warm-100 active:scale-95">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            Buka di Google Maps
                        </a>
                    </div>
                </div>
            </div>
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
                revealEls.forEach(function (el) {
                    if (el.closest('#home')) {
                        el.classList.add('visible');
                    } else {
                        observer.observe(el);
                    }
                });
            } else {
                revealEls.forEach(function (el) { el.classList.add('visible'); });
            }
        });
    </script>
@endsection
