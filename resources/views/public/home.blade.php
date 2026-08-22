@extends('layouts.public')

@section('title', 'Beranda')

@section('content')
    {{-- ===================== HERO (FULL-WIDTH) ===================== --}}
    <section id="home" class="relative overflow-hidden bg-gradient-to-b from-blue-100/70 via-blue-50/40 to-slate-50 py-20">
        <div class="pointer-events-none absolute -left-32 top-8 h-96 w-96 rounded-full bg-brand/30 blur-3xl animate-aurora"></div>
        <div class="pointer-events-none absolute -right-24 top-24 h-80 w-80 rounded-full bg-cyan-200/40 blur-3xl animate-aurora-reverse"></div>
        <div class="pointer-events-none absolute left-1/3 top-1/4 h-64 w-64 rounded-full bg-blue-300/25 blur-3xl animate-aurora" style="animation-delay: -6s"></div>
        <div class="pointer-events-none absolute -bottom-16 left-8 h-72 w-72 rounded-full bg-amber-100/40 blur-3xl animate-aurora-reverse" style="animation-delay: -10s"></div>
        <div class="pointer-events-none absolute -top-10 right-1/4 h-56 w-56 rounded-full bg-white/40 blur-3xl animate-aurora" style="animation-delay: -3s"></div>

        <div class="relative mx-auto max-w-5xl px-4 sm:px-6">
            <div class="grid items-stretch gap-12 lg:gap-16 md:grid-cols-2">
                <div class="flex flex-col justify-center">
                    <span class="reveal inline-flex items-center gap-2 rounded-full bg-brand/10 px-4 py-1.5 text-xs font-semibold text-brand" style="animation-delay: 0.05s">
                        <span class="h-1.5 w-1.5 rounded-full bg-brand"></span>
                        Warung langganan keluarga sejak lama
                    </span>

                    <h1 class="reveal mt-7 text-4xl font-bold leading-[1.12] tracking-tight text-slate-900 sm:text-5xl lg:text-6xl" style="animation-delay: 0.12s">
                        Kebutuhan harian <span class="text-brand inline-block max-w-full text-left min-w-[10.5ch] align-baseline"><span id="hero-typewriter">lengkap</span><span class="animate-pulse text-brand/80 font-normal">|</span></span>harga tetap <span class="text-amber-500">bersahabat</span>
                    </h1>

                    <p class="reveal mt-7 max-w-md text-lg leading-relaxed text-slate-500" style="animation-delay: 0.2s">
                        UD.Kariasa melayani beras, minyak, bumbu dapur, hingga kebutuhan harian lain.
                        Pesan lewat WhatsApp atau mampir langsung — dekat, ramah, dan tepercaya.
                    </p>

                    <div class="reveal mt-10 flex flex-wrap items-center gap-4" style="animation-delay: 0.28s">
                        <a href="#catalog"
                            class="inline-flex items-center justify-center gap-2 rounded-2xl bg-brand px-7 py-3.5 text-base font-semibold text-white shadow-lg shadow-brand/30 transition duration-300 hover:bg-brand-dark hover:shadow-xl active:scale-95">
                            Jelajahi Katalog
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5-5 5M6 12h12" />
                            </svg>
                        </a>
                        <a href="#location"
                            class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-6 py-3.5 text-base font-semibold text-slate-700 transition duration-300 hover:border-slate-300 hover:bg-slate-50 active:scale-95">
                            Cari Lokasi Toko
                        </a>
                    </div>

                    <p class="reveal mt-8 text-sm text-slate-400" style="animation-delay: 0.36s">
                        Dipercaya warga sekitar &bull; 50+ jenis sembako &bull; buka tiap hari
                    </p>
                </div>

                <div class="reveal relative" style="animation-delay: 0.15s">
                    <div class="pointer-events-none absolute -inset-10 rounded-full bg-brand/10 blur-3xl"></div>

                    {{-- Carousel foto asli toko — slide smooth, klik foto untuk perbesar --}}
                    <div class="group/carousel relative h-full min-h-[22rem] w-full overflow-hidden rounded-2xl shadow-lg ring-1 ring-slate-200/80 lg:min-h-[26rem]" id="hero-carousel">
                        {{-- Track slider (bergese via translateX) --}}
                        <div id="carousel-track" class="flex h-full w-full transition-transform duration-700 ease-out">
                            <img src="{{ asset('images/Pfp1.jpg') }}" alt="Kondisi toko UD. Kariasa — rak sembako dan stok barang" class="h-full w-full shrink-0 basis-full object-cover object-center" />
                            <img src="{{ asset('images/Pfp2.jpg') }}" alt="Sudut dalam toko UD. Kariasa" class="h-full w-full shrink-0 basis-full object-cover object-center" />
                            <img src="{{ asset('images/Pfp3.jpg') }}" alt="Stok barang di toko UD. Kariasa" class="h-full w-full shrink-0 basis-full object-cover object-center" />
                        </div>

                        {{-- Gradasi tipis agar dots terbaca --}}
                        <div class="pointer-events-none absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-slate-950/45 to-transparent"></div>

                        {{-- Overlay klik untuk buka lightbox --}}
                        <button type="button" id="lightbox-trigger" class="absolute inset-0 z-[5] cursor-zoom-in" aria-label="Perbesar foto yang sedang tampil"></button>

                        {{-- Panah navigasi --}}
                        <button type="button" id="carousel-prev" aria-label="Foto sebelumnya"
                            class="absolute left-3 top-1/2 z-10 flex h-9 w-9 -translate-y-1/2 items-center justify-center rounded-full bg-white/30 text-white opacity-80 backdrop-blur-md transition-all duration-300 hover:bg-white hover:text-slate-900 md:opacity-0 md:group-hover/carousel:opacity-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button type="button" id="carousel-next" aria-label="Foto berikutnya"
                            class="absolute right-3 top-1/2 z-10 flex h-9 w-9 -translate-y-1/2 items-center justify-center rounded-full bg-white/30 text-white opacity-80 backdrop-blur-md transition-all duration-300 hover:bg-white hover:text-slate-900 md:opacity-0 md:group-hover/carousel:opacity-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>

                        {{-- Dots indikator tengah bawah --}}
                        <div class="absolute bottom-4 left-1/2 z-10 flex -translate-x-1/2 items-center gap-2">
                            <button type="button" class="carousel-dot h-2 w-6 rounded-full bg-brand transition-all duration-300" data-slide="0" aria-label="Ke foto 1"></button>
                            <button type="button" class="carousel-dot h-2 w-2 rounded-full bg-white/60 transition-all duration-300 hover:bg-white" data-slide="1" aria-label="Ke foto 2"></button>
                            <button type="button" class="carousel-dot h-2 w-2 rounded-full bg-white/60 transition-all duration-300 hover:bg-white" data-slide="2" aria-label="Ke foto 3"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Lightbox foto toko --}}
    <div id="lightbox" class="fixed inset-0 z-[70] hidden items-center justify-center bg-slate-950/90 p-4 backdrop-blur-sm sm:p-8" role="dialog" aria-modal="true" aria-label="Foto toko diperbesar">
        <button type="button" id="lightbox-close"
            class="absolute right-4 top-4 flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-white transition duration-200 hover:bg-white/25 active:scale-95"
            aria-label="Tutup foto">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <img id="lightbox-img" src="{{ asset('images/Pfp1.jpg') }}"
            alt="Foto interior toko UD. Kariasa diperbesar"
            class="max-h-[85vh] w-auto max-w-full rounded-2xl object-contain shadow-2xl" />
    </div>

    {{-- ===================== FITUR UNGGULAN ===================== --}}
    <section class="bg-slate-50 py-20">
        <div class="mx-auto max-w-5xl px-4 sm:px-6">
            <div class="grid gap-6 text-center sm:grid-cols-3 lg:gap-8">
                <div class="reveal rounded-2xl border border-slate-200/60 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-lg">
                    <span class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-blue-50 text-brand">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </span>
                    <h2 class="mt-6 text-lg font-semibold text-slate-800">Stok Segar & Lengkap</h2>
                    <p class="mx-auto mt-3 max-w-[16rem] text-sm leading-relaxed text-slate-500">
                        Beras, minyak, gula, telur, hingga bumbu dapur tersedia setiap hari.
                    </p>
                </div>
                <div class="reveal rounded-2xl border border-slate-200/60 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-lg" style="animation-delay: 0.1s">
                    <span class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-amber-50 text-amber-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.5 0-3 1-4.5 1.5C5.5 10 4 10 3.5 9.5c2-4 5.5-5.5 8.5-5.5 1.5 0 3 1 4.5 1.5C17.5 6 19 6 19.5 6c-.5 1-.5 2-1 3" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 10c2 3 4 5 6 5s4-2 6-5" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 14c1 2 3 3 6 3s5-1 6-3" />
                        </svg>
                    </span>
                    <h3 class="mt-6 text-lg font-semibold text-slate-800">Harga Bersahabat</h3>
                    <p class="mx-auto mt-3 max-w-[16rem] text-sm leading-relaxed text-slate-500">
                        Takaran jujur dan harga ramah untuk kebutuhan keluarga sehari-hari.
                    </p>
                </div>
                <div class="reveal rounded-2xl border border-slate-200/60 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-lg" style="animation-delay: 0.2s">
                    <span class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-green-50 text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2a10 10 0 00-8.6 15.1L2 22l5-1.3A10 10 0 1012 2zm5.2 13.9c-.5.5-1.2.7-2.2.5-.5-.1-1.1-.2-1.6-.6a9 9 0 01-2.5-2.6c-.4-.6-.6-1.3-.5-2.2.1-.5.4-1 .8-1.4a.7.7 0 011 0c.2.2.5.7.7.9a.4.4 0 01-.1.6c-.2.2-.3.4-.1.6.5.7 1 1.3 1.6 1.7a11 11 0 002.9 1.2c.3 0 .6.1.7.3l.4.4c.1.2.1.4-.1.6z" />
                        </svg>
                    </span>
                    <h3 class="mt-6 text-lg font-semibold text-slate-800">Pesan via WhatsApp</h3>
                    <p class="mx-auto mt-3 max-w-[16rem] text-sm leading-relaxed text-slate-500">
                        Pesan cepat tanpa antre, tinggal chat dan kami siapkan pesanannya.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== TENTANG KAMI ===================== --}}
    <section id="about" class="bg-slate-50 py-20">
        <div class="mx-auto max-w-5xl px-4 sm:px-6">
            <div class="grid items-center gap-16 lg:grid-cols-2 lg:gap-20">
                {{-- Ulasan & rating mengambang --}}
                <div class="reveal order-1 relative" style="animation-delay: 0.1s">
                    <div class="pointer-events-none absolute -inset-8 rounded-full bg-brand/10 blur-3xl"></div>
                    <div class="pointer-events-none absolute right-0 top-24 h-32 w-32 rounded-full bg-amber-100/60 blur-2xl"></div>

                    <div class="relative grid grid-cols-2 gap-6">
                        <div class="space-y-6">
                            <div class="animate-float-a rotate-1 w-full md:ml-3 md:w-52 md:rotate-2 rounded-2xl bg-white p-5 shadow-xl shadow-slate-200/70 ring-1 ring-slate-100">
                                <div class="flex items-center gap-1 text-amber-500">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" /></svg>
                                    @endfor
                                </div>
                                <p class="mt-2 text-sm font-medium leading-snug text-slate-800">"Selalu ramah, harga bersahabat."</p>
                                <p class="mt-1.5 text-xs text-slate-400">— Ibu Lina</p>
                            </div>

                            <div class="animate-float-b -rotate-2 w-full md:ml-12 md:w-48 md:-rotate-3 rounded-2xl bg-white p-5 shadow-xl shadow-slate-200/70 ring-1 ring-slate-100" style="animation-delay: -2.5s">
                                <div class="flex items-center gap-1 text-amber-500">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" /></svg>
                                    @endfor
                                </div>
                                <p class="mt-2 text-sm font-medium leading-snug text-slate-800">"Kebutuhan dapur tinggal mampir."</p>
                                <p class="mt-1.5 text-xs text-slate-400">— Mbak Sari</p>
                            </div>

                            <div class="animate-float-a rotate-2 w-full md:w-56 md:rotate-6 rounded-2xl bg-white p-5 shadow-xl shadow-slate-200/70 ring-1 ring-slate-100" style="animation-delay: -4s">
                                <div class="flex items-center gap-1 text-amber-500">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" /></svg>
                                    @endfor
                                </div>
                                <p class="mt-2 text-sm font-medium leading-snug text-slate-800">"Nyari bumbu dapur selalu ketemu."</p>
                                <p class="mt-1.5 text-xs text-slate-400">— Bu Dewi</p>
                            </div>
                        </div>

                        <div class="mt-10 space-y-6">
                            <div class="animate-float-b -rotate-1 w-full md:w-52 md:-rotate-2 md:mr-8 rounded-2xl bg-white p-5 shadow-xl shadow-slate-200/70 ring-1 ring-slate-100">
                                <div class="flex items-center gap-1 text-amber-500">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" /></svg>
                                    @endfor
                                </div>
                                <p class="mt-2 text-sm font-medium leading-snug text-slate-800">"Keranjang belanjaan selalu diisi penuh."</p>
                                <p class="mt-1.5 text-xs text-slate-400">— Pak Made</p>
                            </div>

                            <div class="animate-float-a rotate-1 w-full md:w-48 md:rotate-3 md:mr-2 rounded-2xl bg-white p-5 shadow-xl shadow-slate-200/70 ring-1 ring-slate-100" style="animation-delay: -1.5s">
                                <div class="flex items-center gap-1 text-amber-500">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" /></svg>
                                    @endfor
                                </div>
                                <p class="mt-2 text-sm font-medium leading-snug text-slate-800">"Harga selalu pas sama timbangan."</p>
                                <p class="mt-1.5 text-xs text-slate-400">— Pak Agus</p>
                            </div>

                            <div class="animate-float-b -rotate-2 w-full md:w-56 md:-rotate-6 md:mr-4 rounded-2xl bg-white p-5 shadow-xl shadow-slate-200/70 ring-1 ring-slate-100" style="animation-delay: -3s">
                                <div class="flex items-center gap-1 text-amber-500">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" /></svg>
                                    @endfor
                                </div>
                                <p class="mt-2 text-sm font-medium leading-snug text-slate-800">"Gampang, deket banget dari rumah."</p>
                                <p class="mt-1.5 text-xs text-slate-400">— Mas Budi</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Narasi toko --}}
                <div class="order-2">
                    <span class="reveal text-sm font-semibold uppercase tracking-wider text-brand">Tentang Kami</span>
                    <h2 class="reveal mt-3 text-3xl font-bold text-slate-900" style="animation-delay: 0.08s">Warung kecil yang dipercaya masyarakat</h2>
                    <p class="reveal mt-5 leading-relaxed text-slate-600" style="animation-delay: 0.16s">
                        Sembako Ibu bermula dari warung kecil di halaman rumah — tempat tetangga mampir
                        untuk kebutuhan harian, sesekali sambil ngobrol pagi. Dari beras, telur, hingga
                        bumbu dapur, semua disiapkan dengan telaten persis untuk keluarga sendiri.
                    </p>
                    <p class="reveal mt-4 leading-relaxed text-slate-600" style="animation-delay: 0.22s">
                        Sampai sekarang kami memegang prinsip yang sama: barang lengkap, harga jujur,
                        dan pelayanan yang ramah. Mampir kapan saja, sapa Ibu, atau langsung chat lewat WhatsApp.
                    </p>

                    {{-- Statistik 3 kolom --}}
                    <div class="reveal mt-12 grid grid-cols-3 gap-8" style="animation-delay: 0.3s">
                        <div>
                            <p class="text-3xl font-bold text-brand">50+</p>
                            <p class="mt-1.5 text-sm text-slate-500">Jenis kebutuhan pokok</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-slate-800">06.00</p>
                            <p class="mt-1.5 text-sm text-slate-500">Sudah buka sejak pagi</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-slate-800">100%</p>
                            <p class="mt-1.5 text-sm text-slate-500">Harga jujur &amp; takaran pas</p>
                        </div>
                    </div>

                    <div class="reveal mt-10 flex flex-wrap gap-3" style="animation-delay: 0.36s">
                        <a href="#catalog"
                            class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-2.5 text-sm font-semibold text-slate-700 transition duration-300 hover:bg-slate-50 active:scale-95">
                            Lihat Katalog Barang
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5-5 5M6 12h12" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== KATALOG BARANG ===================== --}}
    <section id="catalog" class="bg-slate-50 py-20">
        <div class="mx-auto max-w-5xl px-4 sm:px-6">
            <div class="reveal flex flex-wrap items-end justify-between gap-4">
                <div>
                    <span class="text-sm font-semibold uppercase tracking-wider text-brand">Katalog Barang</span>
                    <h2 class="mt-3 text-3xl font-bold text-slate-900">Sembako yang tersedia</h2>
                    <p class="mt-2 max-w-xl text-slate-500">
                        Harga dan stok bisa berubah sewaktu-waktu — tanyakan langsung via WhatsApp.
                    </p>
                </div>
            </div>

            <div x-data="{ expanded: false }">
                @if ($products->count() > 0)
                    {{-- 8 produk pertama selalu tampil --}}
                    <div class="mt-8 grid grid-cols-2 gap-4 sm:gap-5 md:grid-cols-3 lg:grid-cols-4">
                        @foreach ($products->take(8) as $index => $product)
                            <div class="reveal h-full" style="animation-delay: {{ min($index, 9) * 60 }}ms">
                                <x-product-card :product="$product" />
                            </div>
                        @endforeach
                    </div>

                    @if ($products->count() > 8)
                        {{-- Sisa produk: terbuka ke bawah saat tombol diklik --}}
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
                        {{-- Tombol buka/tutup katalog --}}
                        <div class="reveal mt-10 flex justify-center">
                            <button type="button" @click="expanded = !expanded"
                                class="inline-flex items-center justify-center gap-2 rounded-xl bg-brand px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-brand/25 transition duration-300 hover:bg-brand-dark active:scale-95">
                                <span x-text="expanded ? 'Tampilkan Lebih Sedikit' : 'Lihat Semua Katalog Barang'">Lihat Semua Katalog Barang</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 transition-transform duration-300" :class="expanded ? 'rotate-180' : ''"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                        </div>
                    @endif
                @else
                <div class="mt-8 rounded-2xl border border-dashed border-slate-300 bg-white p-12 text-center">
                    <p class="text-slate-500">Belum ada produk sembako yang ditampilkan saat ini.</p>
                    <p class="mt-1 text-sm text-slate-400">Silakan kembali lagi nanti.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- ===================== LOKASI & KONTAK ===================== --}}
    <section id="location" class="relative overflow-hidden bg-slate-50 py-20">
        <div class="pointer-events-none absolute -left-20 bottom-0 h-72 w-72 rounded-full bg-cyan-200/40 blur-3xl"></div>
        <div class="pointer-events-none absolute -right-16 top-10 h-64 w-64 rounded-full bg-brand/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-5xl px-4 sm:px-6">
            <div class="grid items-stretch gap-12 lg:grid-cols-2 lg:gap-14">
                {{-- Informasi & aksi --}}
                <div class="reveal flex flex-col">
                    <span class="text-sm font-semibold uppercase tracking-wider text-brand">Lokasi & Kontak</span>
                    <h2 class="mt-3 text-3xl font-bold text-slate-900">Mampir atau chat kami</h2>
                    <p class="mt-4 max-w-md leading-relaxed text-slate-500">
                        Dekat dengan pasar dan sekolah, mudah dijangkau warga sekitar.
                        Pesan duluan lewat WhatsApp biar siap saat Anda tiba.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-start gap-4 rounded-2xl border border-slate-200/60 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
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

                        <div class="flex items-start gap-4 rounded-2xl border border-slate-200/60 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18z" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">Jam Buka</p>
                                <p class="mt-1 text-sm font-medium text-slate-800">Senin–Sabtu 06.00–17.00 &nbsp;•&nbsp; Minggu 06.00–14.00 WITA</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 rounded-2xl border border-slate-200/60 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-green-50 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2a10 10 0 00-8.6 15.1L2 22l5-1.3A10 10 0 1012 2zm5.2 13.9c-.5.5-1.2.7-2.2.5-.5-.1-1.1-.2-1.6-.6a9 9 0 01-2.5-2.6c-.4-.6-.6-1.3-.5-2.2.1-.5.4-1 .8-1.4a.7.7 0 011 0c.2.2.5.7.7.9a.4.4 0 01-.1.6c-.2.2-.3.4-.1.6.5.7 1 1.3 1.6 1.7a11 11 0 002.9 1.2c.3 0 .6.1.7.3l.4.4c.1.2.1.4-.1.6z" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">WhatsApp / Telepon</p>
                                <p class="mt-1 text-sm font-medium text-slate-800">0896-7563-2471</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
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
                            class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-6 py-3 text-sm font-semibold text-slate-700 transition duration-300 hover:bg-slate-50 active:scale-95">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            Buka di Google Maps
                        </a>
                    </div>
                </div>

                {{-- Peta --}}
                <div class="reveal overflow-hidden rounded-3xl ring-1 ring-slate-200 shadow-xl shadow-slate-200/60" style="animation-delay: 0.1s">
                    <div class="h-[22rem] sm:h-[24rem] lg:h-full lg:min-h-[30rem]">
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
            </div>
        </div>
    </section>

    <script>
        // Entrance hero + scroll reveal halus
        document.addEventListener('DOMContentLoaded', function () {
            const revealEls = document.querySelectorAll('.reveal');

            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

                revealEls.forEach(function (el) {
                    if (el.closest('#home')) {
                        // Elemen hero langsung tampil berurutan saat halaman dibuka
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

    <script>
        // Efek typewriter inline pada kata kunci hero
        document.addEventListener('DOMContentLoaded', function () {
            const el = document.getElementById('hero-typewriter');
            if (!el) return;

            // Jika user memilih reduced motion, biarkan teks statis
            if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                return;
            }

            const words = ['lengkap', 'murah', 'segar', 'terjamin', 'terjangkau'];
            let wordIndex = 0;
            let charIndex = words[0].length;
            let isDeleting = true; // mulai dari kata pertama yang sudah ada, lalu menghapus setelah jeda

            function tick() {
                const currentWord = words[wordIndex];

                if (isDeleting) {
                    charIndex--;
                    el.textContent = currentWord.substring(0, charIndex);
                } else {
                    charIndex++;
                    el.textContent = currentWord.substring(0, charIndex);
                }

                let speed = isDeleting ? 45 : 90;

                if (!isDeleting && charIndex === currentWord.length) {
                    isDeleting = true;
                    setTimeout(tick, 2000); // jeda saat kata selesai diketik
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    wordIndex = (wordIndex + 1) % words.length;
                    setTimeout(tick, 350); // jeda sebelum mulai mengetik kata berikutnya
                } else {
                    setTimeout(tick, speed);
                }
            }

            // Tunggu 2.5 detik setelah halaman dimuat sebelum mulai berganti
            setTimeout(tick, 2500);
        });

        // Carousel foto toko (slide otomatis) + lightbox perbesar
        document.addEventListener('DOMContentLoaded', function () {
            const track = document.getElementById('carousel-track');
            const dots = document.querySelectorAll('.carousel-dot');
            const btnPrev = document.getElementById('carousel-prev');
            const btnNext = document.getElementById('carousel-next');
            const box = document.getElementById('hero-carousel');
            const trigger = document.getElementById('lightbox-trigger');
            const lightbox = document.getElementById('lightbox');
            const closeBtn = document.getElementById('lightbox-close');
            const lightboxImg = document.getElementById('lightbox-img');

            // ---------- Carousel ----------
            if (track && dots.length) {
                const total = dots.length;
                let index = 0;
                let timer = null;
                // Hormati preferensi pengguna yang memilih mengurangi animasi
                const reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

                function goToSlide(i) {
                    index = (i + total) % total;
                    track.style.transform = 'translateX(-' + index * 100 + '%)';

                    dots.forEach(function (dot, n) {
                        const active = n === index;
                        dot.classList.toggle('w-6', active);
                        dot.classList.toggle('w-2', !active);
                        dot.classList.toggle('bg-brand', active);
                        dot.classList.toggle('bg-white/60', !active);
                    });

                    // Sinkronkan foto lightbox dengan slide aktif
                    if (lightboxImg) {
                        const src = track.children[index].getAttribute('src');
                        if (src) lightboxImg.setAttribute('src', src);
                    }
                }

                function next() { goToSlide(index + 1); }
                function prev() { goToSlide(index - 1); }

                function startAuto() {
                    stopAuto();
                    if (!reduceMotion) timer = setInterval(next, 4000); // geser tiap 4 detik
                }
                function stopAuto() { if (timer) { clearInterval(timer); timer = null; } }

                if (btnNext) btnNext.addEventListener('click', function () { next(); startAuto(); });
                if (btnPrev) btnPrev.addEventListener('click', function () { prev(); startAuto(); });
                dots.forEach(function (dot) {
                    dot.addEventListener('click', function () {
                        goToSlide(parseInt(dot.getAttribute('data-slide'), 10));
                        startAuto();
                    });
                });
                if (box) {
                    box.addEventListener('mouseenter', stopAuto);
                    box.addEventListener('mouseleave', startAuto);
                }

                goToSlide(0);
                startAuto();
            }

            // ---------- Lightbox ----------
            if (trigger && lightbox && closeBtn) {
                function openLightbox() {
                    lightbox.classList.remove('hidden');
                    lightbox.classList.add('flex');
                    document.body.style.overflow = 'hidden'; // kunci scroll di belakang modal
                }
                function closeLightbox() {
                    lightbox.classList.add('hidden');
                    lightbox.classList.remove('flex');
                    document.body.style.overflow = '';
                }

                trigger.addEventListener('click', openLightbox);
                closeBtn.addEventListener('click', closeLightbox);
                lightbox.addEventListener('click', function (e) {
                    if (e.target === lightbox) closeLightbox();
                });
                document.addEventListener('keydown', function (e) {
                    if (e.key === 'Escape') closeLightbox();
                });
            }
        });
    </script>
@endsection