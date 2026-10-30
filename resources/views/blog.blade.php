@extends('layouts.app')

@section('title', 'Halaman Blog — Bryant Portfolio')

@section('content')

@php

    $articles = [
        [
            'title'   => 'Laravel Docs',
            'date'    => '24 Oct 2026',
            'tag'     => 'Laravel',
            'excerpt' => 'Panduan resmi Laravel, framework web PHP dengan sintaks yang ekspresif dan elegan. Halaman Installation menjelaskan cara membuat aplikasi pertama.',
            'url'     => 'https://laravel.com/framework/docs/installation',
        ],
        [
            'title'   => 'Tailwind CSS Docs',
            'date'    => '17 Oct 2026',
            'tag'     => 'Tailwind CSS',
            'excerpt' => 'Tailwind memindai file HTML kita untuk mencari nama class, lalu membuat CSS statisnya. Panduan ini menjelaskan pemasangan lewat Vite, yang dipakai di proyek Laravel.',
            'url'     => 'https://tailwindcss.com/docs/installation/using-vite',
        ],
        [
            'title'   => 'Flutter Docs',
            'date'    => '10 Oct 2026',
            'tag'     => 'Flutter',
            'excerpt' => 'Dokumentasi resmi Flutter berisi widget, contoh, dan API docs untuk membantu membuat aplikasi Flutter pertamamu.',
            'url'     => 'https://docs.flutter.dev/',
        ],
    ];
@endphp

<section class="max-w-6xl mx-auto px-4 md:px-8 pt-8 md:pt-12">

    @include('partials.hero', [
        'label' => 'Blog',
        'title' => 'Welcome to<br>Blog Page',
        'spray' => 'BLOG',
    ])

    <div class="mt-8 grid gap-6 md:grid-cols-3">
        @foreach ($articles as $a)
            <article class="card cut p-6 flex flex-col justify-between transition" style="min-height: 280px;">
                <div>
                    <p class="tag opacity-70">{{ $a['date'] }} · {{ $a['tag'] }}</p>
                    <h2 class="font-display text-3xl mt-3">{{ $a['title'] }}</h2>
                    <p class="mt-3 text-sm">{{ $a['excerpt'] }}</p>
                </div>

                <a href="{{ $a['url'] }}" target="_blank" rel="noopener"
                class="tag mt-6 inline-block underline">Read docs ↗</a>
            </article>
        @endforeach
    </div>
</section>

@endsection