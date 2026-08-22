<style>[x-cloak]{display:none!important}</style>

<header id="site-header" x-data="{ open: false }"
    class="fixed inset-x-0 top-0 z-50 overflow-x-hidden border-b border-transparent bg-white/70 backdrop-blur transition">
    <nav class="mx-auto flex h-16 w-full max-w-7xl items-center justify-between px-4 sm:px-6">
        {{-- Logo teks kiri --}}
        <a href="#home" class="flex shrink-0 items-center">
            <span class="text-xl font-bold tracking-tight text-slate-800">UD.<span class="text-brand">KARIASA</span></span>
        </a>

        {{-- Menu navigasi tengah (desktop) --}}
        <div class="absolute left-1/2 hidden -translate-x-1/2 items-center gap-8 text-sm font-medium text-slate-600 md:flex">
            <a href="#home" class="nav-link transition hover:text-brand">Home</a>
            <a href="#about" class="nav-link transition hover:text-brand">Tentang Kami</a>
            <a href="#catalog" class="nav-link transition hover:text-brand">Katalog Barang</a>
            <a href="#location" class="nav-link transition hover:text-brand">Lokasi</a>
        </div>

        {{-- Tombol WhatsApp + Hamburger (kanan) --}}
        <div class="flex items-center gap-3">
            <a href="https://wa.me/6289675632471?text=Halo%20Ibu%2C%20saya%20ingin%20pesan" target="_blank" rel="noopener"
                class="hidden items-center rounded-xl bg-green-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition duration-300 hover:bg-green-700 active:scale-95 md:inline-flex">
                Chat WhatsApp
            </a>

            <button type="button" @click="open = !open" :aria-expanded="open.toString()" aria-label="Buka menu"
                class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-600 transition hover:bg-slate-50 md:hidden">
                {{-- Ikon garis tiga --}}
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                {{-- Ikon X (saat menu terbuka) --}}
                <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </nav>

    {{-- Menu drop-down mobile --}}
    <div x-show="open" x-cloak @click.outside="open = false"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="-translate-y-2 opacity-0"
        x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="-translate-y-2 opacity-0"
        class="border-t border-slate-200 bg-white md:hidden">
        <div class="flex flex-col gap-1 px-4 py-3 text-sm font-medium text-slate-600">
            <a href="#home" @click="open = false" class="nav-link rounded-lg px-3 py-2 transition hover:bg-slate-50 hover:text-brand">Home</a>
            <a href="#about" @click="open = false" class="nav-link rounded-lg px-3 py-2 transition hover:bg-slate-50 hover:text-brand">Tentang Kami</a>
            <a href="#catalog" @click="open = false" class="nav-link rounded-lg px-3 py-2 transition hover:bg-slate-50 hover:text-brand">Katalog Barang</a>
            <a href="#location" @click="open = false" class="nav-link rounded-lg px-3 py-2 transition hover:bg-slate-50 hover:text-brand">Lokasi</a>
        </div>
    </div>
</header>

<script>
    // Efek border saat scroll + scrollspy penanda menu aktif
    document.addEventListener('DOMContentLoaded', function () {
        const header = document.getElementById('site-header');
        const links = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('section[id]');

        function onScroll() {
            header.classList.toggle('border-slate-200', window.scrollY > 8);
        }
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();

        if ('IntersectionObserver' in window) {
            const spy = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        links.forEach(function (link) {
                            link.classList.toggle('text-brand', link.getAttribute('href') === '#' + entry.target.id);
                        });
                    }
                });
            }, { rootMargin: '-40% 0px -55% 0px' });
            sections.forEach(function (section) { spy.observe(section); });
        }
    });
</script>
