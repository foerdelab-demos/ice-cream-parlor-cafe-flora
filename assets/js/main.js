const header = document.querySelector('[data-header]');

if (header) {
    const updateHeader = () => {
        header.classList.toggle('is-scrolled', window.scrollY > 12);
    };

    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });
}

document.querySelectorAll('a[href*="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (event) => {
        const url = new URL(anchor.href, window.location.href);

        if (!url.hash || url.origin !== window.location.origin) {
            return;
        }

        if (url.pathname !== window.location.pathname) {
            return;
        }

        const target = document.querySelector(url.hash);

        if (!target) {
            return;
        }

        event.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});
