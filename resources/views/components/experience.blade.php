@php
    $experience = config('portfolio.experience');
@endphp

<section id="experience" class="relative scroll-mt-20 py-24 sm:py-28">
    <div class="container-site">
        <x-section-heading number="04" title="Where I've Worked" />

        <ol class="max-w-3xl" data-reveal-group>
            @foreach ($experience as $item)
                <li data-reveal class="timeline-item">
                    <span class="timeline-dot" aria-hidden="true"></span>

                    <p class="eyebrow text-xs">{{ $item['period'] }}</p>

                    <h3 class="mt-2 text-lg font-semibold text-white">
                        {{ $item['role'] }}
                        <span class="text-slate-600">·</span>
                        <span class="text-accent-300">{{ $item['company'] }}</span>
                    </h3>

                    <p class="mt-1 flex items-center gap-1.5 text-sm text-slate-500">
                        <x-icon name="pin" class="size-3.5" />
                        {{ $item['location'] }}
                    </p>

                    <p class="mt-3 max-w-2xl text-sm leading-relaxed text-slate-400">
                        {{ $item['description'] }}
                    </p>

                    @if (!empty($item['points']))
                        <ul class="mt-4 max-w-2xl space-y-2.5">
                            @foreach ($item['points'] as $point)
                                <li class="flex gap-2.5 text-sm leading-relaxed text-slate-400">
                                    <x-icon name="chevron-right" class="mt-0.5 size-3.5 shrink-0 text-accent-400" />
                                    {{ $point }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ol>
    </div>
</section>
