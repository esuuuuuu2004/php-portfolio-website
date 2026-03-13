// assets/js/script.js — Mohammad's Portfolio

/* ================================================
   1. Dark / Light Mode Toggle
   ================================================ */
(function initTheme() {
    const root    = document.documentElement;
    const btn     = document.getElementById('themeToggle');
    const icon    = btn ? btn.querySelector('.theme-icon') : null;
    const saved   = localStorage.getItem('theme') || 'light';

    root.setAttribute('data-theme', saved);
    if (icon) icon.textContent = saved === 'dark' ? '☀️' : '🌙';

    if (btn) {
        btn.addEventListener('click', () => {
            const current = root.getAttribute('data-theme');
            const next    = current === 'dark' ? 'light' : 'dark';
            root.setAttribute('data-theme', next);
            localStorage.setItem('theme', next);
            if (icon) icon.textContent = next === 'dark' ? '☀️' : '🌙';
        });
    }
})();


/* ================================================
   2. Sticky Navbar Shadow
   ================================================ */
(function initNavbar() {
    const navbar = document.getElementById('navbar');
    if (!navbar) return;
    const onScroll = () => navbar.classList.toggle('scrolled', window.scrollY > 40);
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
})();


/* ================================================
   3. Hamburger Menu
   ================================================ */
(function initHamburger() {
    const btn      = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');
    if (!btn || !navLinks) return;

    btn.addEventListener('click', () => {
        const isOpen = navLinks.classList.toggle('open');
        btn.classList.toggle('open', isOpen);
        btn.setAttribute('aria-expanded', isOpen);
    });

    // Close on nav link click
    navLinks.querySelectorAll('a').forEach(a => {
        a.addEventListener('click', () => {
            navLinks.classList.remove('open');
            btn.classList.remove('open');
            btn.setAttribute('aria-expanded', 'false');
        });
    });

    // Close on outside click
    document.addEventListener('click', e => {
        if (!btn.contains(e.target) && !navLinks.contains(e.target)) {
            navLinks.classList.remove('open');
            btn.classList.remove('open');
            btn.setAttribute('aria-expanded', 'false');
        }
    });
})();


/* ================================================
   4. Skill Bars — IntersectionObserver
   ================================================ */
(function initSkillBars() {
    const fills = document.querySelectorAll('.skill-fill');
    if (!fills.length) return;

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const fill  = entry.target;
                const level = fill.getAttribute('data-level') || '0';
                // Small delay so AOS fade lands first
                setTimeout(() => { fill.style.width = level + '%'; }, 200);
                observer.unobserve(fill);
            }
        });
    }, { threshold: 0.35 });

    fills.forEach(fill => {
        fill.style.width = '0';
        observer.observe(fill);
    });
})();


/* ================================================
   5. Stats Counter Animation
   ================================================ */
(function initCounters() {
    const counters = document.querySelectorAll('.stat-number[data-target]');
    if (!counters.length) return;

    const easeOut = t => 1 - Math.pow(1 - t, 3);

    const animateCounter = (el, target, duration = 1800) => {
        const start = performance.now();
        const suffix = el.getAttribute('data-suffix') || '';

        const step = now => {
            const elapsed  = now - start;
            const progress = Math.min(elapsed / duration, 1);
            const current  = Math.round(easeOut(progress) * target);
            el.textContent = current.toLocaleString() + suffix;
            if (progress < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el     = entry.target;
                const target = parseInt(el.getAttribute('data-target'), 10);
                animateCounter(el, target);
                observer.unobserve(el);
            }
        });
    }, { threshold: 0.6 });

    counters.forEach(el => observer.observe(el));
})();


/* ================================================
   6. Carousel — Drag Scroll + Touch + Dots
   ================================================ */
(function initCarousel() {
    const carousel      = document.getElementById('projectsCarousel');
    const dotsContainer = document.getElementById('carouselDots');
    const prevBtn       = document.getElementById('carouselPrev');
    const nextBtn       = document.getElementById('carouselNext');

    if (!carousel) return;

    // ── Drag scroll (mouse) ──
    let isDown = false, startX, scrollLeft;

    carousel.addEventListener('mousedown', e => {
        isDown     = true;
        startX     = e.pageX - carousel.offsetLeft;
        scrollLeft = carousel.scrollLeft;
        carousel.style.cursor = 'grabbing';
    });
    document.addEventListener('mouseup', () => {
        isDown = false;
        carousel.style.cursor = 'grab';
    });
    carousel.addEventListener('mouseleave', () => {
        isDown = false;
        carousel.style.cursor = 'grab';
    });
    carousel.addEventListener('mousemove', e => {
        if (!isDown) return;
        e.preventDefault();
        const x    = e.pageX - carousel.offsetLeft;
        const walk = (x - startX) * 1.6;
        carousel.scrollLeft = scrollLeft - walk;
    });

    // ── Touch scroll ──
    let touchStartX = 0, touchScrollLeft = 0;
    carousel.addEventListener('touchstart', e => {
        touchStartX    = e.touches[0].clientX;
        touchScrollLeft = carousel.scrollLeft;
    }, { passive: true });
    carousel.addEventListener('touchmove', e => {
        const diff = touchStartX - e.touches[0].clientX;
        carousel.scrollLeft = touchScrollLeft + diff;
    }, { passive: true });

    // ── Arrow buttons ──
    const getItemWidth = () => {
        const item = carousel.querySelector('.project-card');
        return item ? item.offsetWidth + 24 : 324; // 24 = gap
    };
    if (prevBtn) prevBtn.addEventListener('click', () => {
        carousel.scrollBy({ left: -getItemWidth(), behavior: 'smooth' });
    });
    if (nextBtn) nextBtn.addEventListener('click', () => {
        carousel.scrollBy({ left:  getItemWidth(), behavior: 'smooth' });
    });

    // ── Dots ──
    if (!dotsContainer) return;
    const items = carousel.querySelectorAll('.project-card');
    if (items.length <= 1) return;

    items.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.className   = 'carousel-dot' + (i === 0 ? ' active' : '');
        dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
        dot.addEventListener('click', () => {
            carousel.scrollTo({ left: i * getItemWidth(), behavior: 'smooth' });
        });
        dotsContainer.appendChild(dot);
    });

    const dots = dotsContainer.querySelectorAll('.carousel-dot');
    const updateDots = () => {
        const idx = Math.round(carousel.scrollLeft / getItemWidth());
        dots.forEach((d, i) => d.classList.toggle('active', i === idx));
    };
    carousel.addEventListener('scroll', updateDots, { passive: true });
})();


/* ================================================
   7. Project Modal
   ================================================ */
(function initModal() {
    const overlay = document.getElementById('projectModal');
    if (!overlay) return;

    const closeBtn   = overlay.querySelector('.modal-close');
    const modalImg   = overlay.querySelector('#modalImg');
    const modalTitle = overlay.querySelector('#modalTitle');
    const modalDesc  = overlay.querySelector('#modalDesc');
    const modalTags  = overlay.querySelector('#modalTags');
    const modalLink  = overlay.querySelector('#modalLink');
    const modalDemo  = overlay.querySelector('#modalDemo');

    const open = data => {
        if (modalImg)   { modalImg.src = data.image; modalImg.alt = data.title; }
        if (modalTitle) modalTitle.textContent = data.title;
        if (modalDesc)  modalDesc.textContent  = data.description;
        if (modalTags && data.tags) {
            modalTags.innerHTML = data.tags.map(t => `<span class="tag">${t}</span>`).join('');
        }
        if (modalLink) { modalLink.href = data.link; }
        if (modalDemo) { modalDemo.href = data.demo || '#'; }

        overlay.classList.add('open');
        document.body.style.overflow = 'hidden';
        closeBtn && closeBtn.focus();
    };

    const close = () => {
        overlay.classList.remove('open');
        document.body.style.overflow = '';
    };

    // Trigger open from cards
    document.querySelectorAll('[data-modal]').forEach(card => {
        card.addEventListener('click', e => {
            // Don't open if clicking a button/link inside the overlay
            if (e.target.closest('a, button') && !e.target.closest('[data-modal]')) return;
            try {
                const data = JSON.parse(card.getAttribute('data-modal'));
                open(data);
            } catch (_) {}
        });
        // Keyboard accessibility
        card.addEventListener('keydown', e => {
            if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); card.click(); }
        });
        if (!card.hasAttribute('tabindex')) card.setAttribute('tabindex', '0');
    });

    if (closeBtn) closeBtn.addEventListener('click', close);
    overlay.addEventListener('click', e => { if (e.target === overlay) close(); });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') close(); });
})();


/* ================================================
   8. Smooth Scroll for anchor links
   ================================================ */
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
        const target = document.querySelector(a.getAttribute('href'));
        if (!target) return;
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});


/* ================================================
   9. Contact Form — Client-side validation
   ================================================ */
(function initContactForm() {
    const form = document.getElementById('contactForm');
    if (!form) return;

    const validate = () => {
        let valid = true;
        form.querySelectorAll('[data-required]').forEach(field => {
            const errEl = form.querySelector(`[data-error="${field.name}"]`);
            const val   = field.value.trim();
            let msg     = '';

            if (!val) {
                msg = `${field.getAttribute('data-label') || field.name} is required.`;
            } else if (field.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
                msg = 'Please enter a valid email address.';
            }

            if (errEl) errEl.textContent = msg;
            if (msg) { valid = false; field.focus(); }
        });
        return valid;
    };

    form.addEventListener('submit', e => {
        if (!validate()) { e.preventDefault(); return; }
        // PHP will handle the actual submission
    });

    // Live validation
    form.querySelectorAll('[data-required]').forEach(field => {
        field.addEventListener('blur', () => {
            const errEl = form.querySelector(`[data-error="${field.name}"]`);
            const val   = field.value.trim();
            if (errEl) errEl.textContent = !val
                ? `${field.getAttribute('data-label') || field.name} is required.`
                : '';
        });
    });
})();
