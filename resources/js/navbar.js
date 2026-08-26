const initNavbar = () => {
    const header = document.querySelector('[data-site-nav]');
    const toggle = document.querySelector('[data-nav-toggle]');
    const menu = document.querySelector('[data-mobile-menu]');
    const links = Array.from(document.querySelectorAll('[data-nav-link]'));

    /* Navbar background on scroll */
    const onScroll = () => {
        if (!header) return;
        header.classList.toggle('is-scrolled', window.scrollY > 24);
    };

    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });

    /* Mobile menu */
    const setOpen = (open) => {
        if (!header || !toggle) return;
        header.classList.toggle('menu-open', open);
        toggle.setAttribute('aria-expanded', String(open));
    };

    const isOpen = () => (header ? header.classList.contains('menu-open') : false);

    toggle?.addEventListener('click', () => setOpen(!isOpen()));

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && isOpen()) setOpen(false);
    });

    document.addEventListener('click', (event) => {
        if (isOpen() && header && !header.contains(event.target)) setOpen(false);
    });

    menu?.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => setOpen(false));
    });

    window.addEventListener(
        'resize',
        () => {
            if (window.innerWidth >= 1024 && isOpen()) setOpen(false);
            onScroll();
        },
        { passive: true },
    );

    /* Scroll spy: highlight the nav link of the section in view */
    const setActive = (id) => {
        links.forEach((link) => {
            link.classList.toggle('is-active', link.hash === `#${id}`);
        });
    };

    const sections = links
        .map((link) => (link.hash ? document.querySelector(link.hash) : null))
        .filter(Boolean);

    if (sections.length > 0 && 'IntersectionObserver' in window) {
        const spy = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) setActive(entry.target.id);
                });
            },
            { rootMargin: '-40% 0px -55% 0px' },
        );

        sections.forEach((section) => spy.observe(section));
    }
};

initNavbar();
