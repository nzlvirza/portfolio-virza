@php
    $portfolio = config('portfolio');
@endphp

<footer class="border-t border-white/[0.06] py-10">
    <div class="container-site flex flex-col items-center justify-between gap-6 sm:flex-row">
        <div class="text-center sm:text-left">
            <a href="#home" class="font-bold tracking-tight text-white transition-colors duration-300 hover:text-accent-300">
                {{ $portfolio['name'] }}<span class="text-accent-400">.</span>
            </a>
            <p class="mt-1 text-xs text-slate-600">
                &copy; {{ date('Y') }} {{ $portfolio['name'] }} · Built with Laravel, Tailwind CSS &amp; vanilla JavaScript
            </p>
        </div>

        <div class="flex items-center gap-3">
            @foreach ($portfolio['socials'] as $social)
                <a
                    href="{{ $social['url'] }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="{{ $social['label'] }}"
                    class="icon-btn size-9"
                >
                    <x-icon :name="$social['icon']" class="size-4" />
                </a>
            @endforeach

            <span class="mx-1 hidden h-5 w-px bg-white/10 sm:block" aria-hidden="true"></span>

            <a href="#home" aria-label="Back to top" class="icon-btn size-9">
                <x-icon name="arrow-up" class="size-4" />
            </a>
        </div>
    </div>
</footer>
