<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="only light">
    <title>@yield('title', 'Bryant — Portfolio')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Space+Grotesk:wght@400;500;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="min-h-screen flex flex-col">

{{-- NAVBAR --}}
@include('partials.navbar')

{{-- ISI HALAMAN --}}
<main class="flex-1">
    @yield('content')
</main>

{{-- FOOTER --}}
@include('partials.footer')

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>