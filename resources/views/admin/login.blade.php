@extends('layouts.auth')

@section('title', 'Login Admin')

@section('content')
    <div class="w-full max-w-4xl overflow-hidden rounded-2xl border border-warm-200 bg-warm-50 shadow-xl md:grid md:grid-cols-2">
        {{-- Left panel: brand --}}
        <div class="relative flex flex-col items-center justify-center bg-gradient-to-br from-amber-700 to-amber-900 p-10 text-white md:p-12">
            <div class="relative z-10 text-center">
                <span class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-white/20 text-2xl font-bold">K</span>
                <h2 class="mt-5 text-2xl font-bold">UD. KARIASA</h2>
                <p class="mt-1 text-sm text-amber-100">Sembako Ibu</p>
                <div class="mx-auto mt-6 h-px w-16 bg-white/30"></div>
                <p class="mt-6 text-sm leading-relaxed text-amber-100">Kelola produk, stok, dan informasi toko sembako dari satu tempat yang mudah.</p>
                <div class="mt-8 rounded-xl bg-white/10 px-5 py-3 backdrop-blur-sm">
                    <p class="text-xs text-amber-200">Jam Operasional</p>
                    <p class="mt-0.5 text-sm font-semibold">Setiap Hari, 08.00 - 21.00</p>
                </div>
            </div>
        </div>

        {{-- Right panel: form --}}
        <div class="flex flex-col justify-center p-8 sm:p-10">
            <h1 class="text-2xl font-bold text-slate-900">Masuk Panel Admin</h1>
            <p class="mt-1 text-sm text-slate-500">Kelola barang &amp; stok toko sembako.</p>

            <x-flash />

            <form method="POST" action="{{ route('admin.login.submit') }}" class="mt-8 space-y-5">
                @csrf

                <div>
                    <label for="email" class="mb-1.5 block text-sm font-medium text-slate-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" autofocus autocomplete="email" required
                        class="w-full rounded-xl border border-warm-200 bg-warm-50 px-4 py-2.5 text-slate-800 placeholder-slate-400 outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/30 @error('email') border-red-400 @enderror">
                    @error('email')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="mb-1.5 block text-sm font-medium text-slate-700">Password</label>
                    <input type="password" name="password" id="password" required autocomplete="current-password"
                        class="w-full rounded-xl border border-warm-200 bg-warm-50 px-4 py-2.5 text-slate-800 placeholder-slate-400 outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/30">
                </div>

                <label class="flex items-center gap-2 text-sm text-slate-600">
                    <input type="checkbox" name="remember" value="1"
                        class="h-4 w-4 rounded border-slate-300 text-brand accent-brand">
                    Ingat saya
                </label>

                <button type="submit"
                    class="w-full rounded-xl bg-brand px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-brand/25 transition duration-300 hover:bg-brand-dark active:scale-[0.98]">
                    Masuk
                </button>
            </form>

            <p class="mt-6 text-center text-sm text-slate-500">
                Kembali ke
                <a href="{{ route('home') }}" class="font-medium text-brand transition hover:text-brand-dark">website publik</a>
            </p>
        </div>
    </div>
@endsection
