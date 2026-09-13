<!DOCTYPE html>
<html lang="id" class="scroll-smooth [scroll-padding-top:5rem]">
    <x-header />

    <body class="overflow-x-hidden bg-cream pt-16 font-sans text-slate-700 antialiased">
        <noscript>
            <style>.reveal { opacity: 1; transform: none; }</style>
        </noscript>
        <x-navbar />

        <main>
            @yield('content')
        </main>

        <x-footer />

        {{-- WhatsApp Floating Button --}}
        <div x-data="{ show: false }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 300 }, { passive: true })"
            x-show="show" x-cloak
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
            class="fixed bottom-6 right-6 z-50">
            <a href="https://wa.me/6289675632471?text=Halo%20Ibu%2C%20saya%20ingin%20pesan"
                target="_blank" rel="noopener" aria-label="Chat WhatsApp"
                class="flex h-14 w-14 items-center justify-center rounded-full bg-green-600 text-white shadow-lg shadow-green-600/30 transition duration-300 hover:bg-green-700 hover:shadow-xl active:scale-90">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
            </a>
        </div>

        {{-- Back to Top Button --}}
        <div x-data="{ show: false }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 400 }, { passive: true })"
            x-show="show" x-cloak
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
            class="fixed bottom-6 left-6 z-50">
            <button type="button" @click="window.scrollTo({ top: 0, behavior: 'smooth' })" aria-label="Kembali ke atas"
                class="flex h-12 w-12 items-center justify-center rounded-full border border-warm-200 bg-warm-50 text-slate-600 shadow-lg shadow-slate-900/10 transition duration-300 hover:bg-warm-100 hover:text-slate-900 active:scale-90">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
            </button>
        </div>
    </body>
</html>
