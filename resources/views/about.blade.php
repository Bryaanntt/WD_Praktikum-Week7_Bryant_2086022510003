@extends('layouts.app')

@section('title', 'About — Bryant Portfolio')

@section('content')

@php
    $songs = [
        ['title' => 'Adaptasi', 'artist' => 'Muhammad Tulus', 'url' => 'https://music.youtube.com/watch?v=EpJeMozU2Tw'],
        ['title' => 'Demam Unyu Unyu', 'artist' => 'Coboy Junior', 'url' => 'https://music.youtube.com/watch?v=pEaG4-Oo4ig&list=RDAMVMpEaG4-Oo4ig'],
        ['title' => 'Mata ke Hati', 'artist' => 'Hivi!', 'url' => 'https://music.youtube.com/watch?v=lLYXRfJ3Chg'],
    ];
@endphp

<section class="max-w-6xl mx-auto px-4 md:px-8 pt-8 md:pt-12">

    @include('partials.hero', [
        'label' => 'About',
        'title' => 'Welcome to<br>About Page',
        'spray' => 'ABOUT',
    ])

    <div class="panel-dark cut mt-8 p-8 md:p-12 grid md:grid-cols-[320px_1fr] gap-10 items-start">

        {{-- foto --}}
        <div>
            <img src="{{ asset('images/myfotoguwe.jpeg') }}" alt="SangBintang"
                    class="w-full rounded-lg">
            <h3 class="tag text-soft mt-3">Mahasiswa UC : {{ $nama }}</h3>
        </div>

        {{-- bio --}}
        <div>
            <p class="text-lg max-w-2xl">
                OLLA, saya <strong>{{ $nama }}</strong>, seorang mahasiswa Fullstack Development <Script></Script>Semester 3
                di Universitas Ciputra Makassar. saat ini saya sedang mempelajari berbagai teknologi 
                web dan aplikasi, termasuk Laravel, Spring Boot, dan MySQL.
            </p>

            <dl class="mt-8 divide-y divide-white/20 border-y border-white/20 tag">
                <div class="flex gap-6 py-3"><dt class="w-24 text-soft">Base</dt><dd>Makassar, Indonesia</dd></div>
                <div class="flex gap-6 py-3"><dt class="w-24 text-soft">Campus</dt><dd>Universitas Ciputra Makassar</dd></div>
                <div class="flex gap-6 py-3"><dt class="w-24 text-soft">Stack</dt><dd>Laravel · MySQL · Flutter</dd></div>
            </dl>
        </div>
    </div>
</section>

{{-- LAGU FAVORIT --}}
<section class="max-w-6xl mx-auto px-4 md:px-8 pt-16">
    <h2 class="font-display text-5xl">On Repeat</h2>
    <p class="tag text-soft mt-3">[ 3 lagu favorit saya saat ini ]</p>

    <div class="mt-8 grid gap-6 md:grid-cols-3">
        @foreach ($songs as $i => $s)
            @php
                $link = $s['url'] ?? 'https://www.youtube.com/results?search_query=' . urlencode($s['title'] . ' ' . $s['artist']);
            @endphp

            <a href="{{ $link }}" target="_blank" rel="noopener"
                class="panel-dark cut block p-6 transition hover:opacity-80">
                <span class="tag text-soft">0{{ $i + 1 }}</span>
                <h3 class="font-display text-3xl mt-4">{{ $s['title'] }}</h3>
                <p class="text-sm text-soft mt-2">{{ $s['artist'] }}</p>
                <span class="tag mt-6 inline-block border border-white/70 rounded-full px-4 py-2">▶ Play ↗</span>
            </a>
        @endforeach
    </div>
</section>

@endsection