<footer class="border-t border-warm-200 bg-warm-50">
    <div class="mx-auto grid max-w-5xl gap-10 px-4 py-12 sm:px-6 md:grid-cols-3">
        <div>
            <div class="flex items-center gap-2">
                <span class="text-base font-bold text-slate-800">UD.<span class="text-brand">KARIASA</span></span>
            </div>
            <p class="mt-3 max-w-xs text-sm leading-relaxed text-slate-500">
                Toko sembako keluarga yang dekat dengan warga. Harga bersahabat, stok selalu segar.
            </p>
        </div>

        <div>
            <h3 class="text-sm font-semibold uppercase tracking-wider text-slate-800">Menu</h3>
            <ul class="mt-4 space-y-2 text-sm text-slate-500">
                <li><a href="#home" class="transition hover:text-brand">Beranda</a></li>
                <li><a href="#about" class="transition hover:text-brand">Tentang Kami</a></li>
                <li><a href="{{ route('catalog') }}" class="transition hover:text-brand">Katalog Barang</a></li>
                <li><a href="#location" class="transition hover:text-brand">Lokasi</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-sm font-semibold uppercase tracking-wider text-slate-800">Kontak</h3>
            <ul class="mt-4 space-y-2.5 text-sm">
                <li>
                    <a href="https://wa.me/6289675632471?text=Halo%20Ibu%2C%20saya%20ingin%20pesan"
                        target="_blank" rel="noopener"
                        class="group inline-flex items-center gap-2.5 text-slate-600 transition hover:text-green-600">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-green-50 text-green-600 ring-1 ring-green-200/60 transition group-hover:bg-green-600 group-hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2a10 10 0 00-8.6 15.1L2 22l5-1.3A10 10 0 1012 2zm5.2 13.9c-.5.5-1.2.7-2.2.5-.5-.1-1.1-.2-1.6-.6a9 9 0 01-2.5-2.6c-.4-.6-.6-1.3-.5-2.2.1-.5.4-1 .8-1.4a.7.7 0 011 0c.2.2.5.7.7.9a.4.4 0 01-.1.6c-.2.2-.3.4-.1.6.5.7 1 1.3 1.6 1.7a11 11 0 002.9 1.2c.3 0 .6.1.7.3l.4.4c.1.2.1.4-.1.6z" />
                            </svg>
                        </span>
                        <span class="text-xs font-medium">WhatsApp (0896-7563-2471)</span>
                    </a>
                </li>

                <li>
                    <a href="https://maps.app.goo.gl/FiNUJGQr2u79Z24J8"
                        target="_blank" rel="noopener"
                        class="group inline-flex items-center gap-2.5 text-slate-600 transition hover:text-amber-600">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-amber-50 text-amber-600 ring-1 ring-amber-200/60 transition group-hover:bg-amber-500 group-hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </span>
                        <span class="text-xs font-medium">Jl. Ahmad Yani No. 47, Denpasar</span>
                    </a>
                </li>
            </ul>

            <div class="mt-4 pt-3 border-t border-warm-100 text-xs text-slate-500 space-y-1">
                <p class="font-medium text-slate-700">Jam Operasional:</p>
                <p>Senin–Sabtu: 06.00–17.00 WITA</p>
                <p>Minggu: 06.00–14.00 WITA</p>
            </div>
        </div>
    </div>

    <div class="border-t border-warm-100 py-4 text-center text-xs text-slate-400">
        &copy; {{ date('Y') }} UD. KARIASA. Hak cipta dilindungi.
    </div>
</footer>
