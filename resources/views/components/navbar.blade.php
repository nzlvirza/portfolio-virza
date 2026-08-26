@php
    $links = [
        ['label' => 'Home', 'href' => '#home'],
        ['label' => 'About', 'href' => '#about'],
        ['label' => 'Skills', 'href' => '#skills'],
        ['label' => 'Projects', 'href' => '#projects'],
        ['label' => 'Experience', 'href' => '#experience'],
        ['label' => 'Education', 'href' => '#education'],
        ['label' => 'Contact', 'href' => '#contact'],
    ];
@endphp

<header data-site-nav class="site-nav">
    <div class="container-site">
        <div class="nav-inner">
            {{-- Brand --}}
            <a href="#home" class="text-lg font-bold tracking-tight text-white transition-colors duration-300 hover:text-accent-300">
                {{ config('portfolio.name') }}<span class="text-accent-400">.</span>
            </a>

            {{-- Desktop links --}}
            <nav class="hidden items-center gap-8 lg:flex" aria-label="Main navigation">
                @foreach ($links as $link)
                    <a href="{{ $link['href'] }}" data-nav-link class="nav-link">{{ $link['label'] }}</a>
                @endforeach
                <span class="h-5 w-px bg-white/10" aria-hidden="true"></span>
                <a
                    href="{{ config('portfolio.cv_url') }}"
                    download="Nazla-Virza-Rahman-CV.pdf"
                    class="rounded-full border border-accent-400/40 px-4 py-1.5 text-sm font-medium text-accent-300 transition-all duration-300 hover:-translate-y-0.5 hover:bg-accent-500/10 hover:text-white"
                >
                    Resume
                </a>
            </nav>

            {{-- Mobile hamburger --}}
            <button
                type="button"
                data-nav-toggle
                aria-label="Toggle navigation"
                aria-expanded="false"
                aria-controls="mobile-menu"
                class="grid size-10 cursor-pointer place-items-center rounded-lg border border-white/10 text-slate-300 transition-colors duration-300 hover:border-accent-400/40 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-400/60 lg:hidden"
            >
                <span class="flex flex-col gap-[5px]">
                    <span class="bar bar-1"></span>
                    <span class="bar bar-2"></span>
                    <span class="bar bar-3"></span>
                </span>
            </button>
        </div>
    </div>

    {{-- Mobile menu panel --}}
    <div id="mobile-menu" data-mobile-menu class="mobile-menu">
        <div class="container-site py-6">
            <ul class="flex flex-col gap-1">
                @foreach ($links as $link)
                    <li>
                        <a
                            href="{{ $link['href'] }}"
                            data-nav-link
                            class="block rounded-lg px-4 py-3 text-base font-medium text-slate-300 transition-colors duration-300 hover:bg-white/5 hover:text-white"
                        >
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endforeach
                <li class="mt-3 border-t border-white/[0.06] pt-4 px-2">
                    <a href="{{ config('portfolio.cv_url') }}" download="Nazla-Virza-Rahman-CV.pdf" class="btn btn-secondary w-full">
                        <x-icon name="download" class="size-4" />
                        Download CV
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
