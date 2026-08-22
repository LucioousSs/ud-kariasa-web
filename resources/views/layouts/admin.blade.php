<!DOCTYPE html>
<html lang="id">
    <x-header />

    <body class="bg-slate-100 font-sans text-slate-700 antialiased">
        <header class="border-b border-slate-200 bg-white">
            <div class="mx-auto flex h-16 max-w-5xl items-center justify-between px-4 sm:px-6">
                <a href="#" class="flex items-center gap-2">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand text-lg font-bold text-white">I</span>
                    <span class="text-lg font-bold text-slate-800">Admin <span class="text-brand">Sembako Ibu</span></span>
                </a>

                <nav class="hidden items-center gap-6 text-sm font-medium text-slate-600 md:flex">
                    <a href="{{ route('admin.dashboard') }}" class="hover:text-brand transition">Dashboard</a>
                    <a href="{{ route('admin.products.index') }}" class="hover:text-brand transition">Daftar Produk</a>
                    <a href="{{ route('admin.products.create') }}" class="hover:text-brand transition">Tambah Produk</a>
                </nav>

                <div class="flex items-center gap-3">
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit"
                            class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-medium text-slate-700 transition duration-300 hover:bg-slate-50 active:scale-95">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </header>

        <main class="mx-auto w-full max-w-5xl px-4 py-8 sm:px-6">
            <x-flash />
            @yield('content')
        </main>
    </body>
</html>