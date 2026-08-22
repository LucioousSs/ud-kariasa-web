<!DOCTYPE html>
<html lang="id" class="scroll-smooth [scroll-padding-top:5rem]">
    <x-header />

    <body class="overflow-x-hidden bg-slate-50 pt-16 font-sans text-slate-700 antialiased">
        <noscript>
            <style>.reveal { opacity: 1; transform: none; }</style>
        </noscript>
        <x-navbar />

        <main>
            @yield('content')
        </main>

        <x-footer />
    </body>
</html>