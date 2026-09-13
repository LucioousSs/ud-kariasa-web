<div x-data="{ open: false }" class="group flex h-full flex-col overflow-hidden rounded-2xl border border-warm-200 bg-warm-50 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-lg">
    <div class="relative h-52 shrink-0 overflow-hidden bg-warm-100">
        @if ($product->image)
            <button type="button" @click="open = true" class="h-full w-full cursor-zoom-in">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
            </button>
        @else
            <div class="flex h-full w-full items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-warm-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007z" />
                </svg>
            </div>
        @endif
        <span class="absolute left-3 top-3 inline-flex items-center rounded-full bg-white/90 px-2.5 py-1 text-xs font-medium text-slate-600 shadow-sm backdrop-blur">
            {{ $product->category }}
        </span>
    </div>

    <div class="flex flex-1 flex-col p-5">
        <h3 class="text-base font-semibold leading-snug text-slate-800">{{ $product->name }}</h3>

        <div class="mt-auto pt-4">
            <div class="flex items-end justify-between border-t border-warm-100 pt-3">
                <p class="text-lg font-bold text-brand">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <p class="text-xs font-medium text-slate-500">Stok {{ $product->stock }}</p>
            </div>
        </div>
    </div>

    <a href="https://wa.me/6289675632471?text={{ urlencode('Halo Ibu, apakah ' . $product->name . ' masih tersedia?') }}"
        target="_blank" rel="noopener"
        class="mx-5 mb-5 inline-flex items-center justify-center gap-2 rounded-xl bg-green-600 px-4 py-2.5 text-sm font-semibold text-white shadow-md shadow-green-600/20 transition duration-300 hover:bg-green-700 active:scale-95">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2a10 10 0 00-8.6 15.1L2 22l5-1.3A10 10 0 1012 2zm5.2 13.9c-.5.5-1.2.7-2.2.5-.5-.1-1.1-.2-1.6-.6a9 9 0 01-2.5-2.6c-.4-.6-.6-1.3-.5-2.2.1-.5.4-1 .8-1.4a.7.7 0 011 0c.2.2.5.7.7.9a.4.4 0 01-.1.6c-.2.2-.3.4-.1.6.5.7 1 1.3 1.6 1.7a11 11 0 002.9 1.2c.3 0 .6.1.7.3l.4.4c.1.2.1.4-.1.6z" />
        </svg>
        Tanya Stok
    </a>

    {{-- Lightbox --}}
    @if ($product->image)
        <div x-show="open" x-cloak @keydown.escape.window="open = false"
            x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-[70] flex items-center justify-center bg-slate-950/80 p-4 backdrop-blur-sm sm:p-8"
            role="dialog" aria-modal="true" aria-label="Foto {{ $product->name }}">
            <button type="button" @click="open = false"
                class="absolute right-4 top-4 flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-white transition duration-200 hover:bg-white/25 active:scale-95"
                aria-label="Tutup">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                class="max-h-[85vh] w-auto max-w-full rounded-2xl object-contain shadow-2xl" />
        </div>
    @endif
</div>
