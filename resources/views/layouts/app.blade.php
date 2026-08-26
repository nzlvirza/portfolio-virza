<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('portfolio.meta.title') }}</title>
        <meta name="description" content="{{ config('portfolio.meta.description') }}">
        <meta property="og:title" content="{{ config('portfolio.meta.title') }}">
        <meta property="og:description" content="{{ config('portfolio.meta.description') }}">
        <meta property="og:type" content="website">
        <meta name="theme-color" content="#030710">

        <link rel="icon" href="{{ asset('favicon.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|jetbrains-mono:400,500" rel="stylesheet" />

        <!-- Enable JS-dependent styles as early as possible -->
        <script>
            document.documentElement.classList.remove('no-js');
            document.documentElement.classList.add('js');
        </script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen overflow-x-clip bg-night-950 font-sans text-slate-300 antialiased">
        <!-- Ambient background glow -->
        <div class="pointer-events-none fixed inset-0 -z-10" aria-hidden="true">
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_60%_45%_at_50%_-5%,rgba(75,118,238,0.14),transparent_70%)]"></div>
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_40%_40%_at_88%_108%,rgba(44,69,148,0.16),transparent_70%)]"></div>
        </div>

        <x-navbar />

        <main id="content">
            @yield('content')
        </main>

        <x-footer />
    </body>
</html>
