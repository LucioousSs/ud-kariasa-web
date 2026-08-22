@extends('layouts.auth')

@section('title', 'Login Admin')

@section('content')
    <div class="w-full max-w-md">
        <div class="rounded-[2rem] border border-slate-200/60 bg-white p-8 shadow-lg shadow-slate-200/50 sm:p-10">
            <div class="flex items-center justify-center gap-2">
                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand text-lg font-bold text-white">I</span>
                <span class="text-xl font-bold text-slate-800">Sembako <span class="text-brand">Ibu</span></span>
            </div>

            <h1 class="mt-6 text-center text-2xl font-bold text-slate-900">Masuk Panel Admin</h1>
            <p class="mt-1 text-center text-sm text-slate-500">Kelola barang &amp; stok toko sembako.</p>

            <x-flash />

            <form method="POST" action="{{ route('admin.login.submit') }}" class="mt-8 space-y-5">
                @csrf

                <div>
                    <label for="email" class="mb-1.5 block text-sm font-medium text-slate-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" autofocus autocomplete="email" required
                        class="w-full rounded-xl border border-slate-300 px-4 py-2.5 text-slate-800 placeholder-slate-400 outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/30 @error('email') border-red-400 @enderror">
                    @error('email')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="mb-1.5 block text-sm font-medium text-slate-700">Password</label>
                    <input type="password" name="password" id="password" required autocomplete="current-password"
                        class="w-full rounded-xl border border-slate-300 px-4 py-2.5 text-slate-800 placeholder-slate-400 outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/30">
                </div>

                <label class="flex items-center gap-2 text-sm text-slate-600">
                    <input type="checkbox" name="remember" value="1"
                        class="h-4 w-4 rounded border-slate-300 text-brand accent-brand">
                    Ingat saya
                </label>

                <button type="submit"
                    class="w-full rounded-xl bg-brand px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-brand/25 transition duration-300 hover:bg-brand-dark active:scale-95">
                    Masuk
                </button>
            </form>
        </div>

        <p class="mt-6 text-center text-sm text-slate-500">
            Kembali ke
            <a href="{{ route('home') }}" class="font-medium text-brand transition hover:text-brand-dark">website publik</a>
        </p>
    </div>
@endsection