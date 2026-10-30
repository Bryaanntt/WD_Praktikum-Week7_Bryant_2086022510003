<div class="panel cut hero hero-sm p-8 md:p-14">

    {{-- tulisan cat semprot di belakang --}}
    <div class="hero-spray font-display" aria-hidden="true">{{ $spray }}</div>

    {{-- gunung di bawah --}}
    @include('partials.mountain', ['class' => 'hero-mountain'])

    <div class="hero-content">
        <p class="tag text-soft">[ {{ $label }} ]</p>
        <h1 class="font-display text-6xl md:text-7xl mt-4">{!! $title !!}</h1>
    </div>
</div>