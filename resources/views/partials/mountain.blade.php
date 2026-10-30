{{-- Gambar gunung salju (SVG). Dipanggil: @include('partials.mountain', ['class' => '...']) --}}
<svg class="{{ $class ?? '' }}" viewBox="0 0 800 400" preserveAspectRatio="xMidYMax slice"
    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    {{-- barisan gunung belakang --}}
    <polygon fill="#3a5873"
        points="0,400 0,255 90,185 165,235 265,125 360,225 455,150 560,245 665,170 800,265 800,400" />
    {{-- puncak utama (sisi terang) --}}
    <polygon fill="#e6f0f8"
        points="90,400 250,232 330,142 402,70 475,150 548,232 710,400" />
    {{-- sisi gelap puncak --}}
    <polygon fill="#8fb0c8"
        points="402,70 348,134 382,192 342,262 384,330 330,400 90,400 250,232 330,142" />
    {{-- garis salju --}}
    <polyline fill="none" stroke="#2e4962" stroke-opacity=".35" stroke-width="2"
        points="402,70 420,130 400,180 440,240 420,300 470,400" />
    <polyline fill="none" stroke="#2e4962" stroke-opacity=".25" stroke-width="2"
        points="475,150 500,210 540,300 560,400" />
</svg>