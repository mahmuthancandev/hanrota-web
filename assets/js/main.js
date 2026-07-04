const ankaLogoPath = 'assets/images/anka_logo.png';

const servicesSection = document.querySelector('#services');

if (servicesSection && !servicesSection.classList.contains('hanrota-services-v2')) {
    servicesSection.className = 'hanrota-services-v2';
    servicesSection.innerHTML = `
        <div class="container">
            <div class="hanrota-services-heading gs-reveal">
                <span>Dijital &#252;r&#252;n st&#252;dyosu</span>
                <h2>Hizmetler</h2>
            </div>

            <div class="hanrota-services-rail gs-reveal">
                <div class="hanrota-services-track">
                    <article class="hanrota-service-card hanrota-service-web">
                        <figure class="hanrota-service-media">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80" alt="" loading="lazy">
                            <div class="hanrota-web-glass">
                                <span>Kurumsal</span>
                                <strong>Web Suite</strong>
                                <small>Panel + Landing + SEO</small>
                            </div>
                        </figure>
                        <div class="hanrota-service-body">
                            <small>Web Development</small>
                            <h3>Web Geli&#351;tirme</h3>
                            <p>Kurumsal web siteleri, landing page ve y&#246;netim paneliyle markay&#305; modern bir &#252;r&#252;n deneyimine ta&#351;&#305;yoruz.</p>
                            <div class="hanrota-service-tags"><span>Kurumsal Web Siteleri</span><span>Landing Page</span><span>Y&#246;netim Paneli</span></div>
                        </div>
                    </article>

                    <article class="hanrota-service-card hanrota-service-mobile">
                        <figure class="hanrota-service-media hanrota-service-phone">
                            <div class="hanrota-phone-shell">
                                <span class="hanrota-phone-notch"></span>
                                <img src="${ankaLogoPath}" alt="Anka ikon" loading="lazy">
                                <strong>ANKA+</strong>
                                <small>Mobil Suite</small>
                            </div>
                            <div class="hanrota-floating-badge hanrota-badge-one"><i class="fab fa-android"></i><span>Android</span></div>
                            <div class="hanrota-floating-badge hanrota-badge-two"><i class="fab fa-apple"></i><span>iOS</span></div>
                        </figure>
                        <div class="hanrota-service-body">
                            <small>Mobile Apps</small>
                            <h3>Mobil Uygulamalar</h3>
                            <p>ANKA+ kimli&#287;iyle Android ve iOS i&#231;in temiz, h&#305;zl&#305; ve premium mobil uygulamalar geli&#351;tiriyoruz.</p>
                            <div class="hanrota-service-tags"><span>Android</span><span>iOS</span></div>
                        </div>
                    </article>

                    <article class="hanrota-service-card hanrota-service-qr">
                        <figure class="hanrota-service-media hanrota-service-qr-media">
                            <img class="hanrota-qr-image" src="https://api.qrserver.com/v1/create-qr-code/?size=260x260&margin=10&data=https%3A%2F%2Fhanrotaweb.com" alt="Hanrota QR kod" loading="lazy">
                            <div class="hanrota-qr-menu-card"><strong>QR Men&#252;</strong><small>Canl&#305; kategori paneli</small></div>
                        </figure>
                        <div class="hanrota-service-body">
                            <small>QR Systems</small>
                            <h3>QR Sistemleri</h3>
                            <p>Restoran ve servis deneyimleri i&#231;in h&#305;zl&#305;, &#351;&#305;k ve y&#246;netilebilir QR men&#252; altyap&#305;s&#305; kuruyoruz.</p>
                            <div class="hanrota-service-tags"><span>QR Men&#252;</span></div>
                        </div>
                    </article>

                    <article class="hanrota-service-card hanrota-service-automation">
                        <figure class="hanrota-service-media">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80" alt="" loading="lazy">
                            <div class="hanrota-flow-card hanrota-flow-a">Form</div>
                            <div class="hanrota-flow-card hanrota-flow-b">API</div>
                            <div class="hanrota-flow-card hanrota-flow-c">CRM</div>
                            <span class="hanrota-flow-beam hanrota-beam-one"></span>
                            <span class="hanrota-flow-beam hanrota-beam-two"></span>
                        </figure>
                        <div class="hanrota-service-body">
                            <small>Automation</small>
                            <h3>Otomasyon</h3>
                            <p>&#304;&#351; s&#252;re&#231;lerini, API katmanlar&#305;n&#305; ve entegrasyonlar&#305; tek ak&#305;&#351;ta birbirine ba&#287;l&#305;yoruz.</p>
                            <div class="hanrota-service-tags"><span>&#304;&#351; S&#252;re&#231;leri</span><span>API</span><span>Entegrasyon</span></div>
                        </div>
                    </article>

                    <article class="hanrota-service-card hanrota-service-ai">
                        <figure class="hanrota-service-media">
                            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=1200&q=80" alt="" loading="lazy">
                            <div class="hanrota-ai-core"><span></span><strong>AI</strong></div>
                            <div class="hanrota-ai-node hanrota-node-one"></div>
                            <div class="hanrota-ai-node hanrota-node-two"></div>
                            <div class="hanrota-ai-node hanrota-node-three"></div>
                        </figure>
                        <div class="hanrota-service-body">
                            <small>AI Solutions</small>
                            <h3>Yapay Zeka &#199;&#246;z&#252;mleri</h3>
                            <p>AI Chat, AI Automation ve AI Assistant yap&#305;lar&#305;yla operasyonu daha ak&#305;ll&#305; hale getiriyoruz.</p>
                            <div class="hanrota-service-tags"><span>AI Chat</span><span>AI Automation</span><span>AI Assistant</span></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    `;
}

document.querySelectorAll('.hanrota-services-track').forEach((track) => {
    if (track.dataset.cloned === 'true') {
        return;
    }

    Array.from(track.children).forEach((card) => {
        const clone = card.cloneNode(true);
        clone.setAttribute('aria-hidden', 'true');
        track.appendChild(clone);
    });

    track.dataset.cloned = 'true';
    track.style.animation = 'none';
    track.offsetHeight;
    track.style.animation = 'hanrotaServicesReel 18s linear infinite';
});

const aboutSection = document.querySelector('#about');
const siteFooter = document.querySelector('footer');

if (aboutSection && siteFooter) {
    siteFooter.before(aboutSection);
}

// Custom Cursor Logic
const cursor = document.querySelector('.cursor');
const links = document.querySelectorAll('a, .btn, .hanrota-service-card, .project-card');

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
