@php
    $education = config('portfolio.education');
@endphp

<section id="education" class="relative scroll-mt-20 py-24 sm:py-28">
    <div class="container-site">
        <x-section-heading number="05" title="Education" />

        <ol class="max-w-3xl" data-reveal-group>
            @foreach ($education as $item)
                <li data-reveal class="timeline-item">
                    <span class="timeline-dot timeline-dot--icon" aria-hidden="true">
                        <x-icon name="cap" class="size-2.5 text-accent-300" />
                    </span>

                    <p class="eyebrow text-xs">{{ $item['period'] }}</p>

                    <h3 class="mt-2 text-lg font-semibold text-white">{{ $item['degree'] }}</h3>

                    <p class="mt-1 text-sm font-medium text-accent-300">{{ $item['school'] }}</p>

                    @if (!empty($item['description']))
                        <p class="mt-3 max-w-2xl text-sm leading-relaxed text-slate-400">
                            {{ $item['description'] }}
                        </p>
                    @endif
                </li>
            @endforeach
        </ol>
    </div>
</section>
