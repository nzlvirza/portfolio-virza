@php
    $portfolio = config('portfolio');
@endphp

<section id="contact" class="relative scroll-mt-20 py-24 sm:py-28">
    <div class="container-site">
        <x-section-heading number="07" title="Get In Touch" />

        <div class="grid gap-14 lg:grid-cols-2 lg:gap-20">
            {{-- Info --}}
            <div data-reveal>
                <p class="max-w-md text-base leading-relaxed text-slate-400">
                    My inbox is always open — whether you have a project idea, a job opportunity,
                    or just want to say hi. I will do my best to get back to you as soon as possible.
                </p>

                <div class="mt-10">
                    <p class="text-xs font-semibold uppercase tracking-widest text-slate-500">Email me at</p>
                    <div class="mt-3 flex flex-wrap items-center gap-4">
                        <a
                            href="mailto:{{ $portfolio['email'] }}"
                            class="break-all text-xl font-semibold text-white transition-colors duration-300 hover:text-accent-300 sm:text-2xl"
                        >
                            {{ $portfolio['email'] }}
                        </a>
                        <button
                            type="button"
                            data-copy="{{ $portfolio['email'] }}"
                            aria-label="Copy email address"
                            class="copy-btn icon-btn size-9 cursor-pointer"
                        >
                            <x-icon name="copy" class="icon-copy size-4" />
                            <x-icon name="check" class="icon-check size-4" />
                        </button>
                    </div>
                </div>

                <div class="mt-10">
                    <p class="text-xs font-semibold uppercase tracking-widest text-slate-500">Find me on</p>
                    <div class="mt-4 flex items-center gap-3">
                        @foreach ($portfolio['socials'] as $social)
                            <a
                                href="{{ $social['url'] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="{{ $social['label'] }}"
                                title="{{ $social['label'] }} — {{ $social['handle'] }}"
                                class="icon-btn"
                            >
                                <x-icon :name="$social['icon']" class="size-[18px]" />
                            </a>
                        @endforeach
                    </div>
                </div>

                <p class="mt-10 flex items-center gap-2 text-sm text-slate-500">
                    <x-icon name="pin" class="size-4 text-accent-400" />
                    {{ $portfolio['location'] }} · {{ $portfolio['availability'] }}
                </p>
            </div>

            {{-- Form (UI only) --}}
            <form
                data-contact-form
                action="#"
                method="POST"
                class="card p-7 sm:p-9"
                data-reveal="right"
            >
                <div class="space-y-6">
                    <div>
                        <label for="contact-name" class="mb-2 block text-xs font-semibold uppercase tracking-widest text-slate-400">
                            Name
                        </label>
                        <input
                            id="contact-name"
                            name="name"
                            type="text"
                            required
                            autocomplete="name"
                            placeholder="Your name"
                            class="input-field"
                        />
                    </div>

                    <div>
                        <label for="contact-email" class="mb-2 block text-xs font-semibold uppercase tracking-widest text-slate-400">
                            Email
                        </label>
                        <input
                            id="contact-email"
                            name="email"
                            type="email"
                            required
                            autocomplete="email"
                            placeholder="you@example.com"
                            class="input-field"
                        />
                    </div>

                    <div>
                        <label for="contact-message" class="mb-2 block text-xs font-semibold uppercase tracking-widest text-slate-400">
                            Message
                        </label>
                        <textarea
                            id="contact-message"
                            name="message"
                            rows="5"
                            required
                            placeholder="Tell me about your project..."
                            class="input-field resize-none"
                        ></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary group mt-8 w-full sm:w-auto">
                    Send Message
                    <x-icon name="send" class="size-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" />
                </button>

                <p class="mt-5 text-xs leading-relaxed text-slate-600">
                    This form is a UI preview — backend delivery is coming soon. Meanwhile, reach me directly via email.
                </p>

                <p
                    role="status"
                    data-form-note
                    class="mt-5 hidden rounded-xl border border-emerald-400/25 bg-emerald-400/[0.06] px-4 py-3 text-sm text-emerald-300"
                >
                    Thanks! Your message draft has been noted locally — please also send it via email.
                </p>
            </form>
        </div>
    </div>
</section>
