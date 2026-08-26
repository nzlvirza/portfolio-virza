@props(['number', 'title'])

<div class="mb-14 mt-0" data-reveal>
    <div class="flex items-center gap-4">
        <p class="eyebrow">{{ $number }}.</p>
        <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">
            {{ $title }}
        </h2>
        <span class="h-px flex-1 bg-gradient-to-r from-white/15 to-transparent" aria-hidden="true"></span>
    </div>
</div>
