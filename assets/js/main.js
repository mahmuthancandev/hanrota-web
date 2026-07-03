// Custom Cursor Logic
const cursor = document.querySelector('.cursor');
const links = document.querySelectorAll('a, .btn, .service-card, .project-card');

if (cursor) {
    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    });

    links.forEach(link => {
        link.addEventListener('mouseenter', () => {
            cursor.classList.add('hovered');
        });
        link.addEventListener('mouseleave', () => {
            cursor.classList.remove('hovered');
        });
    });
}

// Navbar Scroll Effect
const nav = document.querySelector('nav');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
});

// Hero Mouse Parallax
const hero = document.querySelector('.hero');
const parallaxLayers = document.querySelectorAll('.parallax-layer');
const canUseParallax = window.matchMedia('(hover: hover) and (pointer: fine)').matches &&
    !window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (hero && parallaxLayers.length && canUseParallax) {
    let parallaxFrame = null;
    let pointerX = 0;
    let pointerY = 0;

    const updateHeroParallax = () => {
        parallaxLayers.forEach((layer) => {
            const depth = Number(layer.dataset.depth || 12);
            const baseTransform = layer.dataset.baseTransform ? ` ${layer.dataset.baseTransform}` : '';
            layer.style.transform = `translate3d(${pointerX * depth}px, ${pointerY * depth}px, 0)${baseTransform}`;
        });

        parallaxFrame = null;
    };

    hero.addEventListener('mousemove', (event) => {
        const rect = hero.getBoundingClientRect();
        pointerX = ((event.clientX - rect.left) / rect.width - 0.5) * 2;
        pointerY = ((event.clientY - rect.top) / rect.height - 0.5) * 2;

        if (!parallaxFrame) {
            parallaxFrame = requestAnimationFrame(updateHeroParallax);
        }
    });

    hero.addEventListener('mouseleave', () => {
        if (parallaxFrame) {
            cancelAnimationFrame(parallaxFrame);
            parallaxFrame = null;
        }

        parallaxLayers.forEach((layer) => {
            layer.style.transform = layer.dataset.baseTransform || 'translate3d(0, 0, 0)';
        });
    });
}

// GSAP Animations
gsap.registerPlugin(ScrollTrigger);

// Hero Animations
gsap.from('.hero h1', {
    duration: 1.5,
    y: 100,
    opacity: 0,
    ease: 'power4.out',
    delay: 0.5
});

gsap.from('.hero p', {
    duration: 1.5,
    y: 50,
    opacity: 0,
    ease: 'power4.out',
    delay: 0.8
});

gsap.from('.hero .btn', {
    duration: 1.5,
    y: 50,
    opacity: 0,
    ease: 'power4.out',
    delay: 1,
    stagger: 0.2
});

// Reveal Elements on Scroll
const revealElements = document.querySelectorAll('.gs-reveal');

revealElements.forEach(element => {
    gsap.fromTo(element,
        {
            y: 50,
            opacity: 0
        },
        {
            y: 0,
            opacity: 1,
            duration: 1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: element,
                start: 'top 85%', // Start animation when top of element hits 85% of viewport height
                toggleActions: 'play none none reverse'
            }
        }
    );
});
