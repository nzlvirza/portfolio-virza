const prefersReducedMotion = () =>
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;

const revealAll = (elements) => {
    elements.forEach((element) => element.classList.add('is-visible'));
};

const initReveal = () => {
    const elements = Array.from(document.querySelectorAll('[data-reveal]'));

    if (elements.length === 0) return;

    if (prefersReducedMotion() || !('IntersectionObserver' in window)) {
        revealAll(elements);
        return;
    }

    /* Stagger: assign incremental delays to children of [data-reveal-group] */
    document.querySelectorAll('[data-reveal-group]').forEach((group) => {
        const children = group.querySelectorAll(':scope > [data-reveal]');
        children.forEach((child, index) => {
            child.style.setProperty('--reveal-delay', `${Math.min(index * 90, 540)}ms`);
        });
    });

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            });
        },
        { threshold: 0.15, rootMargin: '0px 0px -40px 0px' },
    );

    elements.forEach((element) => observer.observe(element));
};

initReveal();
