@extends('layouts.app')

@section('title', 'Contact — Bryant Portfolio')

@section('content')

@php
    // Ganti nama dan link sesuai punyamu
    $links = [
        ['Instagram', 'ryaanntttt', 'https://www.instagram.com/USERNAME_KAMU/'],
        ['Github',    'bryaanntt',  'https://github.com/Bryaanntt'],
        ['WhatsApp',  'brayent',    'https://wa.me/6282197287194'],
    ];
@endphp

<section class="max-w-6xl mx-auto px-4 md:px-8 pt-8 md:pt-12">

    @include('partials.hero', [
        'label' => 'Contact',
        'title' => 'Welcome to<br>Contact Page',
        'spray' => 'CONTACT',
    ])

    {{-- KARTU KONTAK --}}
    <div class="mt-8 grid gap-6 md:grid-cols-3">
        @foreach ($links as $l)
            <a href="{{ $l[2] }}" target="_blank" rel="noopener"
            class="card cut block p-6 transition">
                <p class="tag opacity-70">{{ $l[0] }}</p>
                <p class="font-display text-4xl mt-2 break-words">{{ $l[1] }}</p>
            </a>
        @endforeach
    </div>

    {{-- PESAN SINGKAT --}}
    <div class="panel-dark cut mt-8 p-8 md:p-12 grid md:grid-cols-2 gap-10 items-start">
        <div>
            <p class="tag text-soft">[ Let's talk ]</p>
            <h2 class="font-display text-4xl md:text-5xl mt-4">Mari berkolaborasi</h2>
            <p class="mt-4 text-base md:text-lg leading-relaxed">
                Gabut? Lagi butuh teman ngobrol? Lagi butuh partner kolaborasi?
                Silakan hubungi saya lewat salah satu section di atas. Saya senang bertukar ide dan belajar hal baru.
            </p>
        </div>

        <dl class="divide-y divide-white/20 border-y border-white/20 tag">
            <div class="flex gap-6 py-3"><dt class="w-28 text-soft">Lokasi</dt><dd>Makassar, Indonesia</dd></div>
            <div class="flex gap-6 py-3"><dt class="w-28 text-soft">Kampus</dt><dd>Universitas Ciputra Makassar</dd></div>
            <div class="flex gap-6 py-3"><dt class="w-28 text-soft">Fokus</dt><dd>Fullstack Development</dd></div>
            <div class="flex gap-6 py-3"><dt class="w-28 text-soft">Topik</dt><dd>Laravel · Calculus · Flutter</dd></div>
        </dl>
    </div>
</section>

@endsection