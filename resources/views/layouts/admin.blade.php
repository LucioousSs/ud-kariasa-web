<!DOCTYPE html>
<html lang="id">
    <x-header />

    <body x-data="{ sidebarOpen: false }"
        class="bg-cream font-sans text-slate-700 antialiased">

        {{-- Sidebar --}}
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 z-40 flex w-64 flex-col border-r border-warm-200 bg-warm-50 transition-transform duration-300 md:translate-x-0">

            {{-- Logo --}}
            <div class="flex h-16 items-center justify-center border-b border-warm-100 px-6">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <span class="text-lg font-bold tracking-tight text-slate-800">UD.<span class="text-brand">KARIASA</span></span>
                </a>
            </div>

            {{-- Navigation --}}
            <nav class="flex-1 space-y-1 px-3 py-4">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 rounded-lg border-l-[3px] border-brand px-3 py-2.5 text-sm font-medium transition {{ request()->routeIs('admin.dashboard') ? 'border-brand bg-brand/10 text-brand' : 'border-transparent text-slate-600 hover:bg-warm-100 hover:text-slate-900' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    Dashboard
                </a>

                <a href="{{ route('admin.products.index') }}"
                    class="flex items-center gap-3 rounded-lg border-l-[3px] border-brand px-3 py-2.5 text-sm font-medium transition {{ request()->routeIs('admin.products.*') && !request()->routeIs('admin.products.create') ? 'border-brand bg-brand/10 text-brand' : 'border-transparent text-slate-600 hover:bg-warm-100 hover:text-slate-900' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                    </svg>
                    Daftar Produk
                </a>

                <a href="{{ route('admin.products.create') }}"
                    class="flex items-center gap-3 rounded-lg border-l-[3px] border-brand px-3 py-2.5 text-sm font-medium transition {{ request()->routeIs('admin.products.create') ? 'border-brand bg-brand/10 text-brand' : 'border-transparent text-slate-600 hover:bg-warm-100 hover:text-slate-900' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah Produk
                </a>
            </nav>

            {{-- Bottom section --}}
            <div class="border-t border-warm-100 px-3 py-4">
                <a href="{{ route('home') }}" target="_blank"
                    class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-warm-100 hover:text-slate-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                    </svg>
                    Lihat Website
                </a>

                <div class="my-2 border-t border-warm-100"></div>

                {{-- User info --}}
                <div class="flex items-center gap-3 px-3 py-2">
                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-brand/10 text-xs font-bold text-brand">{{ strtoupper(substr(Auth::user()->name, 0, 2)) }}</span>
                    <div class="min-w-0 flex-1">
                        <p class="truncate text-sm font-medium text-slate-800">{{ Auth::user()->name }}</p>
                        <p class="truncate text-xs text-slate-400">{{ Auth::user()->email }}</p>
                    </div>
                </div>

                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit"
                        class="flex w-full items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-red-500 transition hover:bg-red-50/80">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        {{-- Mobile overlay --}}
        <div x-show="sidebarOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            @click="sidebarOpen = false"
            class="fixed inset-0 z-30 bg-black/50 md:hidden"></div>

        {{-- Main content --}}
        <div class="md:ml-64">
            {{-- Top bar --}}
            <header class="sticky top-0 z-20 flex h-16 items-center gap-4 border-b border-warm-200 bg-cream/90 backdrop-blur-sm px-4 sm:px-6">
                {{-- Mobile hamburger --}}
                <button type="button" @click="sidebarOpen = !sidebarOpen"
                    class="rounded-lg p-2 text-slate-500 hover:bg-warm-100 md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>

                {{-- Page title (from section) --}}
                <div class="flex-1">
                    <h2 class="text-lg font-semibold text-slate-800">@yield('page-title', 'Dashboard')</h2>
                </div>
            </header>

            {{-- Flash toast --}}
            <div class="fixed top-4 right-4 z-50 flex flex-col gap-2">
                <x-flash />
            </div>

            {{-- Page content --}}
            <main class="p-4 sm:p-6">
                @yield('content')
            </main>
        </div>

        @stack('scripts')
    </body>
</html>
