<footer class="site-footer mt-16 pt-14 pb-8">
    <div class="max-w-6xl mx-auto px-4 md:px-8">

        {{-- 4 kolom --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-y-10 gap-x-6">
            <div class="col-span-2 lg:col-span-1">
                <p class="font-display text-4xl">BRYANT</p>
                <p class="mt-4 text-sm text-soft max-w-xs">
                    Fullstack Development student. Built for the web, made for scale, coded to last.
                </p>
            </div>

            <div class="text-center">
                <h3 class="tag text-soft mb-5">[ Navigate ]</h3>
                <ul class="space-y-3 text-sm">
                    <li><a class="hover:underline" href="{{ url('/') }}">Home</a></li>
                    <li><a class="hover:underline" href="{{ url('/blog') }}">Blog</a></li>
                    <li><a class="hover:underline" href="{{ url('/about') }}">About</a></li>
                    <li><a class="hover:underline" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="text-center">
                <h3 class="tag text-soft mb-5">[ Stack ]</h3>
                <ul class="space-y-3 text-sm">
                    <li>Laravel</li>
                    <li>Flutter</li>
                    <li>MySQL</li>
                    <li>Tailwind CSS</li>
                </ul>
            </div>

            <div class="text-center">
                <h3 class="tag text-soft mb-5">[ Connect ]</h3>
                <ul class="space-y-3 text-sm">
                    <li><a class="hover:underline" href="https://github.com/Bryaanntt" target="_blank" rel="noopener">GitHub</a></li>
                    <li><a class="hover:underline" href="https://www.instagram.com/ryaanntttt/" target="_blank" rel="noopener">Instagram</a></li>
                    <li><a class="hover:underline" href="https://wa.me/6282197287194" target="_blank" rel="noopener">WhatsApp</a></li>
                </ul>
            </div>
        </div>

        {{-- Quote + laba-laba --}}
        <div class="relative mt-12">
            <div id="spiderWrap" class="spider-wrap" title="Geser aku!">
                @include('partials.spider', ['class' => 'spider-svg'])
            </div>

            <blockquote class="relative border-l-2 border-white/40 pl-5 max-w-3xl">
                <p class="text-base md:text-lg leading-relaxed">
                    “I believe that things that are supposed to happen, always find a way to happen.
                    Sometimes it makes sense, sometimes it doesn't, and sometimes it really hurts.
                    But it's okay, because those things put us on a path to becoming who we're meant to be.”
                </p>
                <p class="tag text-soft mt-3">— Spider-Man</p>
            </blockquote>
        </div>

        <hr class="border-white/20 my-8">

        {{-- Baris bawah --}}
        <div class="flex flex-wrap items-center justify-between gap-4">
            <p class="tag text-soft">© {{ date('Y') }} Bryant. All rights reserved.</p>
            <div class="flex items-center gap-4">
                <span class="tag text-soft">[ Makassar, ID ]</span>
            </div>
        </div>
    </div>
</footer>