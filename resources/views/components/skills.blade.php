@php
    $skills = config('portfolio.skills');
@endphp

<section id="skills" class="relative scroll-mt-20 py-24 sm:py-28">
    <div class="container-site">
        <x-section-heading number="02" title="Skills & Technologies" />

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3" data-reveal-group>
            @foreach ($skills as $group)
                <div data-reveal class="card card-hover group p-8">
                    <div class="mb-6 grid size-12 place-items-center rounded-xl border border-accent-400/20 bg-accent-500/10 text-accent-300 transition-all duration-300 group-hover:border-accent-400/50 group-hover:shadow-glow">
                        <x-icon :name="$group['icon']" class="size-6" />
                    </div>

                    <h3 class="text-lg font-semibold text-white">{{ $group['category'] }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-500">{{ $group['description'] }}</p>

                    <ul class="mt-6 flex flex-wrap gap-2">
                        @foreach ($group['items'] as $item)
                            <li class="chip">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>
