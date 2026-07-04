<?php include 'includes/header.php'; ?>

<!-- 3D Background Canvas -->
<div id="webgl-canvas"></div>

<!-- Hero Section -->
<section id="home" class="hero">
    <div class="hero-glow hero-glow-one"></div>
    <div class="hero-glow hero-glow-two"></div>

    <div class="container hero-layout">
        <div class="hero-content">
            <div class="hero-eyebrow">
                <i class="fas fa-bolt"></i>
                Hanrota Studio
            </div>

            <h1>Dijital &#252;r&#252;n sistemleri.</h1>
            <p>
                Markan&#305;z i&#231;in h&#305;zl&#305;, sade ve &#246;l&#231;eklenebilir dijital &#252;r&#252;nler tasarl&#305;yoruz.
            </p>

            <div class="hero-actions">
                <a href="#contact" class="btn hero-btn hero-btn-primary">
                    Projeni Ba&#351;lat
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="#projects" class="btn hero-btn hero-btn-secondary">
                    &#199;al&#305;&#351;malar&#305; G&#246;r
                    <i class="fas fa-arrow-up-right-from-square"></i>
                </a>
            </div>

            <div class="hero-proof">
                <div class="proof-badges" aria-hidden="true">
                    <span><i class="fas fa-layer-group"></i></span>
                    <span><i class="fas fa-code"></i></span>
                    <span><i class="fas fa-chart-line"></i></span>
                </div>
                <div>
                    <strong>Web, Mobile & QR Systems</strong>
                    <small>Modern markalar i&#231;in &#246;l&#231;eklenebilir yaz&#305;l&#305;m sistemleri.</small>
                </div>
            </div>
        </div>

        <div class="hero-visual" aria-label="Hanrota Studio dashboard &#246;nizlemesi">
            <div class="hero-orbit hero-orbit-one"></div>
            <div class="hero-orbit hero-orbit-two"></div>

            <div class="dashboard-card parallax-layer" data-depth="12" data-base-transform="rotateX(2deg) rotateY(-3deg)">
                <div class="dashboard-topbar">
                    <div>
                        <span class="dashboard-mark"></span>
                        Hanrota OS
                    </div>
                    <div class="dashboard-user">
                        <span></span>
                        Live
                    </div>
                </div>

                <div class="dashboard-body">
                    <aside class="dashboard-sidebar">
                        <span class="active"><i class="fas fa-chart-line"></i> Overview</span>
                        <span><i class="fas fa-qrcode"></i> QR</span>
                        <span><i class="fas fa-layer-group"></i> Projects</span>
                        <span class="sidebar-stat"><strong>8</strong> Live builds</span>
                        <span class="sidebar-stat"><strong>99.9%</strong> API uptime</span>
                    </aside>

                    <div class="dashboard-main">
                        <div class="metric-grid">
                            <div class="metric-card">
                                <small>Active Projects</small>
                                <strong>12</strong>
                                <span>Live delivery</span>
                            </div>
                            <div class="metric-card">
                                <small>Launch Score</small>
                                <strong>98%</strong>
                                <span>On track</span>
                            </div>
                        </div>

                        <div class="chart-card">
                            <div class="chart-header">
                                <strong>Product Growth</strong>
                                <span>Live roadmap</span>
                            </div>
                            <div class="chart-lines">
                                <span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <svg class="chart-svg" viewBox="0 0 360 150" aria-hidden="true">
                                <defs>
                                    <linearGradient id="heroChartGradient" x1="0" x2="1" y1="0" y2="0">
                                        <stop offset="0%" stop-color="#5b5cff" />
                                        <stop offset="100%" stop-color="#9b5cff" />
                                    </linearGradient>
                                </defs>
                                <path class="chart-fill" d="M8 118 C38 102, 52 132, 82 104 S128 72, 158 88 S202 125, 232 72 S278 38, 306 62 S336 48, 352 26 L352 150 L8 150 Z" />
                                <path class="chart-line" d="M8 118 C38 102, 52 132, 82 104 S128 72, 158 88 S202 125, 232 72 S278 38, 306 62 S336 48, 352 26" />
                            </svg>
                        </div>

                        <div class="dashboard-footer-row">
                            <div>
                                <small>Launch readiness</small>
                                <strong>Production build</strong>
                            </div>
                            <div class="sprint-progress" aria-hidden="true">
                                <span></span>
                            </div>
                        </div>

                        <div class="dashboard-insights">
                            <div>
                                <small>Next release</small>
                                <strong>Client portal</strong>
                            </div>
                            <span>Ready</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="floating-card system-card parallax-layer" data-depth="16">
                <div class="floating-card-label">
                    <i class="fas fa-shield-halved"></i>
                    System Health
                </div>
                <div class="health-lines" aria-hidden="true">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <small>All services operational</small>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="hanrota-services-v2">
    <div class="container">
        <div class="hanrota-services-heading gs-reveal">
            <span>Dijital &#252;r&#252;n st&#252;dyosu</span>
            <h2>Hizmetler</h2>
        </div>

        <div class="hanrota-services-rail gs-reveal">
            <div class="hanrota-services-track">
                <article class="hanrota-service-card hanrota-service-web">
                    <figure class="hanrota-service-media">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="" loading="lazy">
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
                            <img src="assets/images/anka_logo.png" alt="Anka ikon" loading="lazy">
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
                        <img class="hanrota-qr-image" src="https://api.qrserver.com/v1/create-qr-code/?size=260x260&amp;margin=10&amp;data=https%3A%2F%2Fhanrotaweb.com" alt="Hanrota QR kod" loading="lazy">
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
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="" loading="lazy">
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
                        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="" loading="lazy">
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
</section>
<!-- Projects Section -->
<section id="projects" class="studio-section studio-section-muted">
    <div class="container">
        <div class="section-heading section-heading-row gs-reveal">
            <div>
                <span class="section-kicker">Se&#231;ili &#304;&#351;ler</span>
                <h2>Ger&#231;ek i&#351; hedefleri i&#231;in tasarlanan &#252;r&#252;nler.</h2>
            </div>
            <a href="#contact" class="text-link">Proje konu&#351;al&#305;m <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="work-grid">
            <article class="work-card gs-reveal">
                <div class="work-preview work-preview-dashboard">
                    <span></span><span></span><span></span>
                </div>
                <div>
                    <small>Web Application</small>
                    <h3>Hanrota Dashboard</h3>
                    <p>Operasyon, analiz ve proje ak&#305;&#351;lar&#305;n&#305; tek panelde birle&#351;tiren SaaS deneyimi.</p>
                </div>
            </article>
            <article class="work-card gs-reveal">
                <div class="work-preview work-preview-qr">
                    <i class="fas fa-qrcode"></i>
                </div>
                <div>
                    <small>QR Platform</small>
                    <h3>QR Menu System</h3>
                    <p>Markaya &#246;zel men&#252; y&#246;netimi, QR analytics ve mobil uyumlu &#252;r&#252;n sayfalar&#305;.</p>
                </div>
            </article>
            <article class="work-card gs-reveal">
                <div class="work-preview work-preview-system">
                    <i class="fas fa-diagram-project"></i>
                </div>
                <div>
                    <small>Product System</small>
                    <h3>Operations Portal</h3>
                    <p>&#304;&#231; ekipler i&#231;in proje, i&#231;erik ve m&#252;&#351;teri s&#252;re&#231;lerini d&#252;zenleyen &#246;zel y&#246;netim paneli.</p>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- Contact Section -->
<section id="contact" class="final-cta">
    <div class="container">
        <div class="final-cta-panel gs-reveal">
            <span class="section-kicker">Ba&#351;layal&#305;m</span>
            <h2>Bir sonraki dijital sisteminizi birlikte tasarlayal&#305;m.</h2>
            <p>Web, mobil, QR veya &#246;zel yaz&#305;l&#305;m projeniz i&#231;in Hanrota Studio ile tan&#305;&#351;&#305;n.</p>
            <a href="mailto:info@hanrotaweb.com" class="btn hero-btn hero-btn-primary">
                Strateji G&#246;r&#252;&#351;mesi Al
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Process Section -->
<section id="about" class="studio-section">
    <div class="container">
        <div class="section-heading gs-reveal">
            <span class="section-kicker">S&#252;re&#231;</span>
            <h2>Fikirden yay&#305;na net bir yol haritas&#305;.</h2>
            <p>Her projede stratejiyi, aray&#252;z&#252; ve m&#252;hendisli&#287;i ayn&#305; kalite standard&#305;nda ele al&#305;yoruz.</p>
        </div>

        <div class="process-grid">
            <article class="process-card gs-reveal">
                <span>01</span>
                <h3>Discovery</h3>
                <p>&#304;&#351; hedefi, kullan&#305;c&#305; ihtiyac&#305; ve teknik kapsam netle&#351;ir.</p>
            </article>
            <article class="process-card gs-reveal">
                <span>02</span>
                <h3>Design</h3>
                <p>Premium aray&#252;z, kullan&#305;c&#305; ak&#305;&#351;&#305; ve &#252;r&#252;n sistemi haz&#305;rlan&#305;r.</p>
            </article>
            <article class="process-card gs-reveal">
                <span>03</span>
                <h3>Development</h3>
                <p>Frontend, backend, mobil ve entegrasyonlar &#252;retime haz&#305;r geli&#351;tirilir.</p>
            </article>
            <article class="process-card gs-reveal">
                <span>04</span>
                <h3>Launch</h3>
                <p>Yay&#305;n, &#246;l&#231;&#252;mleme ve b&#252;y&#252;me s&#252;reci kontroll&#252; &#351;ekilde y&#246;netilir.</p>
            </article>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
