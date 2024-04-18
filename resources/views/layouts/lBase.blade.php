<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TALL STACK Component</title>

    @vite('resources/css/app.css')
    @livewireScripts
    @livewireStyles
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.8/dist/cdn.min.js"></script>

</head>
<header>
    @include('layouts.nav')
</header>
<body class="antialiased">
<div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-24 lg:py-32">

@yield('content')

</div>
</body>
</html>

