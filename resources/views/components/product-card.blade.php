<div class="group flex h-full flex-col rounded-2xl border border-slate-200/60 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-slate-200 hover:shadow-lg">
    <div class="relative flex h-44 shrink-0 items-center justify-center overflow-hidden rounded-xl bg-gradient-to-br from-blue-50 via-white to-amber-50">
        @if ($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="h-full w-full object-cover">
        @else
            <div class="flex h-20 w-20 items-center justify-center rounded-2xl bg-white ring-1 ring-slate-100 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-brand/60" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007z" />
                </svg>
            </div>
        @endif
        <span class="absolute left-3 top-3 inline-flex items-center rounded-full bg-white/90 px-2.5 py-1 text-xs font-medium text-slate-600 shadow-sm backdrop-blur">
            {{ $product->category }}
        </span>
    </div>

    <div class="flex flex-1 flex-col pt-4">
        <h3 class="text-base font-semibold leading-snug text-slate-800">{{ $product->name }}</h3>

        <div class="mt-3 flex items-end justify-between border-t border-slate-100 pt-3">
            <p class="text-lg font-bold text-brand">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            <p class="text-xs font-medium text-slate-400">Stok {{ $product->stock }}</p>
        </div>
    </div>

    <a href="https://wa.me/6289675632471?text={{ urlencode('Halo Ibu, apakah ' . $product->name . ' masih tersedia?') }}"
        target="_blank" rel="noopener"
        class="mt-4 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-green-600 px-4 py-2.5 text-sm font-semibold text-white shadow-md shadow-green-600/20 transition duration-300 hover:bg-green-700 active:scale-95">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2a10 10 0 00-8.6 15.1L2 22l5-1.3A10 10 0 1012 2zm5.2 13.9c-.5.5-1.2.7-2.2.5-.5-.1-1.1-.2-1.6-.6a9 9 0 01-2.5-2.6c-.4-.6-.6-1.3-.5-2.2.1-.5.4-1 .8-1.4a.7.7 0 011 0c.2.2.5.7.7.9a.4.4 0 01-.1.6c-.2.2-.3.4-.1.6.5.7 1 1.3 1.6 1.7a11 11 0 002.9 1.2c.3 0 .6.1.7.3l.4.4c.1.2.1.4-.1.6z" />
        </svg>
        Tanya Stok
    </a>
</div>