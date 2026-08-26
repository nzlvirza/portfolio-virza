@php
    $about = config('portfolio.about');
@endphp

<section id="about" class="relative scroll-mt-20 py-24 sm:py-28">
    <div class="container-site">
        <x-section-heading number="01" title="About Me" />

        <div class="grid gap-12 lg:grid-cols-[1fr_320px] lg:gap-16">
            <div data-reveal-group>
                @foreach ($about['paragraphs'] as $paragraph)
                    <p data-reveal class="mb-5 leading-relaxed text-slate-400 last:mb-0">
                        {{ $paragraph }}
                    </p>
                @endforeach
            </div>

            <aside data-reveal="right" class="card h-fit p-7">
                <h3 class="text-sm font-semibold uppercase tracking-widest text-white">Quick Facts</h3>

                <dl class="mt-6 space-y-5">
                    @foreach ($about['facts'] as $fact)
                        <div class="flex items-start justify-between gap-4 border-b border-white/[0.05] pb-4 last:border-0 last:pb-0">
                            <dt class="flex items-center gap-2 text-sm text-slate-500">
                                <x-icon name="chevron-right" class="size-3.5 text-accent-400" />
                                {{ $fact['label'] }}
                            </dt>
                            <dd class="text-right text-sm font-medium text-slate-200">{{ $fact['value'] }}</dd>
                        </div>
                    @endforeach
                </dl>

                <span
                    class="mt-7 inline-flex items-center gap-2 rounded-full border border-emerald-400/25 bg-emerald-400/[0.06] px-3 py-1.5 text-xs font-medium text-emerald-300"
                >
                    <span class="relative flex size-2">
                        <span class="absolute inline-flex size-full animate-ping rounded-full bg-emerald-400 opacity-60 motion-reduce:animate-none"></span>
                        <span class="relative inline-flex size-2 rounded-full bg-emerald-400"></span>
                    </span>
                    {{ config('portfolio.availability') }}
                </span>
            </aside>
        </div>


    </div>
</section>
