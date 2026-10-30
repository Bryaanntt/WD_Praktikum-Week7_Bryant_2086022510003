<header class="site-header sticky top-0 z-50">
    <nav class="max-w-6xl mx-auto px-4 md:px-8 h-16 flex items-center justify-between"
        aria-label="Main navigation">

        <a href="{{ url('/') }}" class="font-display text-2xl tracking-wider">BRYANT</a>

        {{-- menu desktop --}}
        <ul class="hidden md:flex gap-8 tag">
            <li><a class="nav-link pb-1" href="{{ url('/') }}"        @if(request()->is('/')) aria-current="page" @endif>[ Home ]</a></li>
            <li><a class="nav-link pb-1" href="{{ url('/blog') }}"    @if(request()->is('blog')) aria-current="page" @endif>[ Blog ]</a></li>
            <li><a class="nav-link pb-1" href="{{ url('/about') }}"   @if(request()->is('about')) aria-current="page" @endif>[ About ]</a></li>
            <li><a class="nav-link pb-1" href="{{ url('/contact') }}" @if(request()->is('contact')) aria-current="page" @endif>[ Contact ]</a></li>
        </ul>
    </nav>

    {{-- menu HP --}}
    <div id="mobileMenu" class="hidden md:hidden panel">
        <ul class="px-4 py-4 flex flex-col gap-4 tag">
            <li><a href="{{ url('/') }}">[ Home ]</a></li>
            <li><a href="{{ url('/blog') }}">[ Blog ]</a></li>
            <li><a href="{{ url('/about') }}">[ About ]</a></li>
            <li><a href="{{ url('/contact') }}">[ Contact ]</a></li>
        </ul>
    </div>
</header>