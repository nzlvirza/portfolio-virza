@php
    $certifications = config('portfolio.certifications');
@endphp

@if (!empty($certifications) && count($certifications) > 0)
<section id="certifications" class="relative scroll-mt-20 py-24 sm:py-28">
    <div class="container-site">
        <x-section-heading number="06" title="Certifications" />

        <div class="grid gap-6 md:grid-cols-2" data-reveal-group>
            @foreach ($certifications as $cert)
                <div data-reveal class="card card-hover group p-7">
                    <div class="mb-5 grid size-12 place-items-center rounded-xl border border-accent-400/20 bg-accent-500/10 text-accent-300 transition-all duration-300 group-hover:border-accent-400/50 group-hover:shadow-glow">
                        <x-icon name="award" class="size-6" />
                    </div>

                    <h3 class="text-lg font-semibold text-white">{{ $cert['name'] }}</h3>

                    @if (!empty($cert['issuer']))
                        <p class="mt-2 text-sm text-slate-500">{{ $cert['issuer'] }}</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
