const initContact = () => {
    /* Copy email to clipboard */
    document.querySelectorAll('[data-copy]').forEach((button) => {
        button.addEventListener('click', async () => {
            const value = button.getAttribute('data-copy');
            if (!value) return;

            try {
                await navigator.clipboard.writeText(value);
            } catch {
                const helper = document.createElement('textarea');
                helper.value = value;
                helper.setAttribute('readonly', '');
                helper.style.position = 'fixed';
                helper.style.opacity = '0';
                document.body.appendChild(helper);
                helper.select();
                document.execCommand('copy');
                helper.remove();
            }

            button.classList.add('copied');
            button.setAttribute('aria-label', 'Copied!');
            window.setTimeout(() => {
                button.classList.remove('copied');
                button.setAttribute('aria-label', 'Copy email address');
            }, 2000);
        });
    });

    /* Contact form is UI-only for now: intercept submit and show a note */
    const form = document.querySelector('[data-contact-form]');

    if (!form) return;

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const note = form.querySelector('[data-form-note]');
        if (note) note.classList.remove('hidden');

        form.reset();
    });
};

initContact();
