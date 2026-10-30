@extends('layouts.app')

@section('title', 'Home — Bryant Portfolio')

@section('content')

@php
    $projects = [
        ['no' => '01', 'name' => 'Portfolio Laravel', 'desc' => 'Membentuk Portofolio menggunakan framework Laravel bahasa PHP beserta menggunakan Tailwind CSS.', 'tags' => 'Laravel · Tailwind'],
        ['no' => '02', 'name' => 'PureMarine',        'desc' => 'Sebuah platform berbasis website yang memberikan edukasi terhadap pentingnya menjaga laut.',                  'tags' => 'Spring Boot · MySQL'],
        ['no' => '03', 'name' => 'Cybersecurity Lab', 'desc' => 'Sistem berbasis homelab mengenai Cybersecurity dengan menggunakan Metasploitable beserta arsitektur Kali Linux.', 'tags' => 'Security · Lab'],
    ];

    $skills = ['Laravel', 'Flutter', 'Metasploitable', 'Spring Boot', 'MySQL', 'HTML', 'CSS', 'Java', 'PHP', 'Dart'];
@endphp

{{-- HERO --}}
<section class="max-w-6xl mx-auto px-4 md:px-8 pt-8 md:pt-12">
    <div class="panel cut hero p-8 pb-24 md:p-14 md:pb-28">

        {{-- tulisan cat semprot di belakang --}}
        <div class="hero-spray font-display" aria-hidden="true">BRYANT</div>

        {{-- gunung di bawah --}}
        @include('partials.mountain', ['class' => 'hero-mountain'])

        <div class="hero-content">
            <p class="tag text-soft">[ Portfolio ] &nbsp; [ Makassar ]</p>

            <h1 class="font-display text-6xl md:text-8xl mt-6">
                Fullstack<br>Development
            </h1>

            <p class="mt-6 max-w-2xl text-base md:text-lg leading-relaxed">
                Mahasiswa Universitas Ciputra Makassar jurusan Fullstack Development.
                Saya membuat portofolio ini untuk menampilkan beberapa proyek yang telah saya kerjakan,
                serta mempelajari penggunaan Laravel dan Tailwind CSS.
            </p>

            <div class="mt-8  fflexlex-wrap gap-4">
                <a href="#work" class="btn tag">View projects</a>
                <a href="{{ url('/contact') }}" class="btn tag">Contact me</a>
            </div>
        </div>
    </div>
</section>

{{-- PROJECTS --}}
<section id="work" class="max-w-6xl mx-auto px-4 md:px-8 pt-16">
    <h2 class="font-display text-5xl">Selected Work</h2>

    <div class="mt-8 grid gap-6 md:grid-cols-3">
        @foreach ($projects as $p)
            <article class="card cut p-6 flex flex-col justify-between transition" style="min-height: 260px;">
                <span class="tag">{{ $p['no'] }}</span>
                <div>
                    <h3 class="font-display text-3xl">{{ $p['name'] }}</h3>
                    <p class="mt-3 text-sm">{{ $p['desc'] }}</p>
                    <p class="tag mt-4 opacity-70">{{ $p['tags'] }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>

{{-- SKILLS --}}
<section class="max-w-6xl mx-auto px-4 md:px-8 pt-16">
    <h2 class="font-display text-5xl">Skills</h2>

    <div class="marquee mt-6">
        <div class="marquee-track">
            {{-- daftar asli --}}
            @foreach ($skills as $s)
                <span class="marquee-item tag border border-white/70 rounded-full px-4 py-2 whitespace-nowrap">{{ $s }}</span>
            @endforeach
            {{-- daftar duplikat supaya looping --}}
            @foreach ($skills as $s)
                <span class="marquee-item marquee-dup tag border border-white/70 rounded-full px-4 py-2 whitespace-nowrap" aria-hidden="true">{{ $s }}</span>
            @endforeach
        </div>
    </div>
</section>

@endsection