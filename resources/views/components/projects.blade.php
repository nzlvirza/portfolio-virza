@php
    $projects = config('portfolio.projects');
@endphp

<section id="projects" class="relative scroll-mt-20 py-24 sm:py-28">
    <div class="container-site">
        <x-section-heading number="03" title="Featured Projects" />

        <div class="grid gap-7 md:grid-cols-2" data-reveal-group>
            @foreach ($projects as $project)
                <article data-reveal class="card card-hover group/card flex flex-col overflow-hidden">
                    {{-- Cover: image or elegant placeholder --}}
                    <figure class="relative aspect-[16/10] overflow-hidden border-b border-white/[0.06]">
                        @if (!empty($project['image']))
                            <img
                                src="{{ asset($project['image']) }}"
                                alt="Preview of the {{ $project['title'] }} project"
                                loading="lazy"
                                class="size-full object-cover transition-transform duration-500 group-hover/card:scale-105"
                            />
                        @else
                            <div class="project-ph absolute inset-0 bg-night-900 transition-transform duration-500 group-hover/card:scale-105">
                                <span class="absolute inset-0 bg-gradient-to-br from-accent-600/15 via-transparent to-transparent" aria-hidden="true"></span>
                                <span class="absolute left-6 top-6 text-accent-400/70" aria-hidden="true">
                                    <x-icon name="folder" class="size-6" />
                                </span>
                                <span
                                    class="pointer-events-none absolute inset-0 grid select-none place-items-center font-mono text-7xl font-bold text-white/[0.05]"
                                    aria-hidden="true"
                                >
                                    {{ mb_strtoupper(mb_substr($project['title'], 0, 1)) }}
                                </span>
                                <figcaption class="absolute bottom-5 right-6 font-mono text-xs tracking-widest text-accent-400/50">
                                    // {{ strtolower(str_replace(' ', '_', $project['title'])) }}
                                </figcaption>
                            </div>
                        @endif
                        <span class="pointer-events-none absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-accent-400/40 to-transparent opacity-0 transition-opacity duration-500 group-hover/card:opacity-100" aria-hidden="true"></span>
                    </figure>

                    {{-- Body --}}
                    <div class="flex grow flex-col p-7">
                        <h3 class="text-xl font-semibold text-white transition-colors duration-300 group-hover/card:text-accent-200">
                            {{ $project['title'] }}
                        </h3>

                        <p class="mt-3 grow text-sm leading-relaxed text-slate-400">
                            {{ $project['description'] }}
                        </p>

                        @if (!empty($project['features']))
                            <ul class="mt-4 space-y-2">
                                @foreach ($project['features'] as $feature)
                                    <li class="flex gap-2.5 text-sm leading-relaxed text-slate-400">
                                        <x-icon name="chevron-right" class="mt-0.5 size-3.5 shrink-0 text-accent-400" />
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                        <ul class="mt-5 flex flex-wrap gap-2">
                            @foreach ($project['technologies'] as $technology)
                                <li class="tech-chip">{{ $technology }}</li>
                            @endforeach
                        </ul>

                        <footer class="mt-6 flex items-center justify-between border-t border-white/[0.06] pt-5">
                            <div class="flex items-center gap-3">
                                @if (!empty($project['github']))
                                    <a
                                        href="{{ $project['github'] }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        aria-label="View source code of {{ $project['title'] }} on GitHub"
                                        class="icon-btn size-9"
                                    >
                                        <x-icon name="github" class="size-[18px]" />
                                    </a>
                                @endif

                                @if (!empty($project['demo']))
                                    <a
                                        href="{{ $project['demo'] }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        aria-label="Open live demo of {{ $project['title'] }}"
                                        class="icon-btn size-9"
                                    >
                                        <x-icon name="external" class="size-[18px]" />
                                    </a>
                                @endif

                                @if (empty($project['github']) && empty($project['demo']))
                                    <span class="font-mono text-xs text-slate-600">Source available on request</span>
                                @endif
                            </div>

                            @if (!empty($project['demo']))
                                <a
                                    href="{{ $project['demo'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="group/link inline-flex items-center gap-1.5 text-sm font-medium text-slate-400 transition-colors duration-300 hover:text-accent-300"
                                >
                                    Live Demo
                                    <x-icon name="arrow-right" class="size-4 transition-transform duration-300 group-hover/link:translate-x-1" />
                                </a>
                            @endif
                        </footer>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
