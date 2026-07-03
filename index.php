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

            <h1>Dijital ürün sistemleri.</h1>
            <p>
                Markanız için hızlı, sade ve ölçeklenebilir dijital ürünler tasarlıyoruz.
            </p>

            <div class="hero-actions">
                <a href="#contact" class="btn hero-btn hero-btn-primary">
                    Projeni Başlat
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="#projects" class="btn hero-btn hero-btn-secondary">
                    Çalışmaları Gör
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
                    <strong>Web • Mobile • QR Systems</strong>
                    <small>Modern markalar için ölçeklenebilir yazılım sistemleri.</small>
                </div>
            </div>
        </div>

        <div class="hero-visual" aria-label="Hanrota Studio dashboard önizlemesi">
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

    <a class="scroll-indicator" href="#services" aria-label="Aşağı kaydır">
        <span></span>
    </a>
</section>

<!-- Capabilities -->
<section class="capability-strip" aria-label="Hanrota Studio kabiliyetleri">
    <div class="container capability-list">
        <span>Web Development</span>
        <span>Mobile Apps</span>
        <span>QR Systems</span>
        <span>Backend & API</span>
        <span>UI/UX Design</span>
        <span>Product Strategy</span>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="studio-section">
    <div class="container">
        <div class="section-heading gs-reveal">
            <span class="section-kicker">Hizmetler</span>
            <h2>İşinizi taşıyacak dijital sistemler.</h2>
            <p>Hanrota Studio, fikir aşamasından yayına ve büyümeye kadar ürününüzün tüm teknik ve görsel omurgasını kurar.</p>
        </div>

        <div class="studio-grid services-grid">
            <article class="studio-card gs-reveal">
                <i class="fas fa-laptop-code"></i>
                <h3>Web Development</h3>
                <p>Hızlı, güvenli, SEO odaklı ve markanızın seviyesini yansıtan kurumsal web deneyimleri.</p>
            </article>
            <article class="studio-card gs-reveal">
                <i class="fas fa-mobile-screen"></i>
                <h3>Mobile Apps</h3>
                <p>React Native ve modern mobil altyapılarla ölçeklenebilir iOS ve Android ürünleri.</p>
            </article>
            <article class="studio-card gs-reveal">
                <i class="fas fa-qrcode"></i>
                <h3>QR Systems</h3>
                <p>Restoran, etkinlik ve ekipler için yönetilebilir QR platformları ve analiz panelleri.</p>
            </article>
            <article class="studio-card gs-reveal">
                <i class="fas fa-diagram-project"></i>
                <h3>Product Systems</h3>
                <p>Operasyon, içerik, panel ve müşteri akışlarını düzenleyen özel yazılım sistemleri.</p>
            </article>
            <article class="studio-card gs-reveal">
                <i class="fas fa-server"></i>
                <h3>Backend & API</h3>
                <p>Sağlam veri yapıları, güvenli API'ler ve uzun vadeli büyümeye hazır sistem mimarisi.</p>
            </article>
            <article class="studio-card gs-reveal">
                <i class="fas fa-pen-nib"></i>
                <h3>UI/UX Design</h3>
                <p>Premium his veren arayüzler, net kullanıcı akışları ve ürün odaklı tasarım sistemleri.</p>
            </article>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="studio-section studio-section-muted">
    <div class="container">
        <div class="section-heading section-heading-row gs-reveal">
            <div>
                <span class="section-kicker">Seçili İşler</span>
                <h2>Gerçek iş hedefleri için tasarlanan ürünler.</h2>
            </div>
            <a href="#contact" class="text-link">Proje konuşalım <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="work-grid">
            <article class="work-card gs-reveal">
                <div class="work-preview work-preview-dashboard">
                    <span></span><span></span><span></span>
                </div>
                <div>
                    <small>Web Application</small>
                    <h3>Hanrota Dashboard</h3>
                    <p>Operasyon, analiz ve proje akışlarını tek panelde birleştiren SaaS deneyimi.</p>
                </div>
            </article>
            <article class="work-card gs-reveal">
                <div class="work-preview work-preview-qr">
                    <i class="fas fa-qrcode"></i>
                </div>
                <div>
                    <small>QR Platform</small>
                    <h3>QR Menu System</h3>
                    <p>Markaya özel menü yönetimi, QR analytics ve mobil uyumlu ürün sayfaları.</p>
                </div>
            </article>
            <article class="work-card gs-reveal">
                <div class="work-preview work-preview-system">
                    <i class="fas fa-diagram-project"></i>
                </div>
                <div>
                    <small>Product System</small>
                    <h3>Operations Portal</h3>
                    <p>İç ekipler için proje, içerik ve müşteri süreçlerini düzenleyen özel yönetim paneli.</p>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Process Section -->
<section id="about" class="studio-section">
    <div class="container">
        <div class="section-heading gs-reveal">
            <span class="section-kicker">Süreç</span>
            <h2>Fikirden yayına net bir yol haritası.</h2>
            <p>Her projede stratejiyi, arayüzü ve mühendisliği aynı kalite standardında ele alıyoruz.</p>
        </div>

        <div class="process-grid">
            <article class="process-card gs-reveal">
                <span>01</span>
                <h3>Discovery</h3>
                <p>İş hedefi, kullanıcı ihtiyacı ve teknik kapsam netleşir.</p>
            </article>
            <article class="process-card gs-reveal">
                <span>02</span>
                <h3>Design</h3>
                <p>Premium arayüz, kullanıcı akışı ve ürün sistemi hazırlanır.</p>
            </article>
            <article class="process-card gs-reveal">
                <span>03</span>
                <h3>Development</h3>
                <p>Frontend, backend, mobil ve entegrasyonlar üretime hazır geliştirilir.</p>
            </article>
            <article class="process-card gs-reveal">
                <span>04</span>
                <h3>Launch</h3>
                <p>Yayın, ölçümleme ve büyüme süreci kontrollü şekilde yönetilir.</p>
            </article>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="final-cta">
    <div class="container">
        <div class="final-cta-panel gs-reveal">
            <span class="section-kicker">Başlayalım</span>
            <h2>Bir sonraki dijital sisteminizi birlikte tasarlayalım.</h2>
            <p>Web, mobil, QR veya özel yazılım projeniz için Hanrota Studio ile tanışın.</p>
            <a href="mailto:info@hanrotaweb.com" class="btn hero-btn hero-btn-primary">
                Strateji Görüşmesi Al
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
