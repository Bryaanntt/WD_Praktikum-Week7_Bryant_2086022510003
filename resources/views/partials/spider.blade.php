@php
    $legs = [
        'M93 120 Q74 84 46 90 Q30 94 20 112',
        'M92 126 Q64 104 36 120 Q22 128 14 148',
        'M92 134 Q64 128 38 148 Q26 158 22 180',
        'M94 142 Q74 150 54 176 Q46 190 46 212',
    ];
@endphp

<svg class="{{ $class ?? '' }}" viewBox="0 0 200 230" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">

    {{-- benang --}}
    <line x1="100" y1="0" x2="100" y2="112" stroke="#e6f0f8" stroke-opacity=".7" stroke-width="1.5"/>

    {{-- 8 kaki: kiri lalu kanan (dicerminkan) --}}
    @foreach ([false, true] as $mirror)
        <g @if($mirror) transform="translate(200 0) scale(-1 1)" @endif
            fill="none" stroke="#e6f0f8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            @foreach ($legs as $d)
                <path d="{{ $d }}"/>
            @endforeach
        </g>
    @endforeach

    {{-- badan --}}
    <ellipse cx="100" cy="164" rx="24" ry="30" fill="#e6f0f8"/>
    <ellipse cx="100" cy="164" rx="10" ry="16" fill="#8fb0c8"/>
    <ellipse cx="100" cy="124" rx="14" ry="12" fill="#e6f0f8"/>
</svg>