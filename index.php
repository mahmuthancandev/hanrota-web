<?php include 'includes/header.php'; ?>

<!-- 3D Background Canvas -->
<div id="webgl-canvas"></div>

<!-- Hero Section -->
<section id="home" class="hero">
    <div class="container hero-content">
        <h4 style="color: var(--secondary-color); margin-bottom: 10px;">Geleceğin Teknolojisi</h4>
        <h1>Dijital Dünyada <br> <span style="font-family: 'Orbitron'; -webkit-text-stroke: 1px #fff; color: transparent;">Fark Yaratın</span></h1>
        <p>Hanrotaweb olarak markanızı modern web teknolojileri, etkileyici 3D tasarımlar ve kusursuz kullanıcı deneyimi ile bir üst seviyeye taşıyoruz.</p>
        <div style="display: flex; gap: 20px;">
            <a href="#projects" class="btn">Projelerimiz</a>
            <a href="#contact" class="btn" style="border-color: #fff;">Bize Ulaşın</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="glass-panel gs-reveal">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                <div>
                    <h2 style="margin-bottom: 20px;">Biz Kimiz?</h2>
                    <p style="color: #ccc; margin-bottom: 20px;">
                        Yazılım dünyasının sınırlarını zorlayan, yaratıcı ve analitik düşünen bir ekibiz. 
                        Sıradan web siteleri değil, yaşayan, etkileşimli dijital deneyimler tasarlıyoruz.
                    </p>
                    <ul style="list-style: none; margin-bottom: 30px;">
                        <li style="margin-bottom: 10px; display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--secondary-color); margin-right: 10px;"></i> Modern UI/UX Tasarım
                        </li>
                        <li style="margin-bottom: 10px; display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--secondary-color); margin-right: 10px;"></i> Yüksek Performanslı Kodlama
                        </li>
                        <li style="margin-bottom: 10px; display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--secondary-color); margin-right: 10px;"></i> 3D Web Teknolojileri
                        </li>
                    </ul>
                </div>
                <div style="position: relative;">
                    <!-- Placeholder for an image or graphic -->
                    <div style="width: 100%; height: 300px; background: linear-gradient(45deg, var(--primary-color), transparent); border-radius: 16px; opacity: 0.5;"></div>
                    <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 8rem; opacity: 0.1;">ART</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services">
    <div class="container">
        <div style="text-align: center; margin-bottom: 60px;" class="gs-reveal">
            <h4 style="color: var(--secondary-color);">Hizmetlerimiz</h4>
            <h2>Neler Yapıyoruz?</h2>
        </div>
        
        <div class="services-grid">
            <div class="service-card gs-reveal">
                <i class="fas fa-laptop-code service-icon"></i>
                <h3>Web Geliştirme</h3>
                <p style="color: #aaa; margin-top: 15px;">Hızlı, güvenli ve SEO uyumlu kurumsal web siteleri.</p>
            </div>
            <div class="service-card gs-reveal">
                <i class="fas fa-cube service-icon"></i>
                <h3>3D Tasarım</h3>
                <p style="color: #aaa; margin-top: 15px;">Three.js ile web sitenizde etkileyici 3D deneyimler.</p>
            </div>
            <div class="service-card gs-reveal">
                <i class="fas fa-mobile-alt service-icon"></i>
                <h3>Mobil Uyumlu</h3>
                <p style="color: #aaa; margin-top: 15px;">Tüm cihazlarda kusursuz çalışan responsive tasarımlar.</p>
            </div>
            <div class="service-card gs-reveal">
                <i class="fas fa-rocket service-icon"></i>
                <h3>Dijital Pazarlama</h3>
                <p style="color: #aaa; margin-top: 15px;">Markanızı dijital dünyada öne çıkaracak stratejiler.</p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects">
    <div class="container">
        <div style="text-align: center; margin-bottom: 60px;" class="gs-reveal">
            <h4 style="color: var(--secondary-color);">Portfolyo</h4>
            <h2>Son Projelerimiz</h2>
        </div>

        <div class="projects-grid">
            <!-- Project 1 -->
            <div class="project-card gs-reveal">
                <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&q=80" alt="Project 1" class="project-img">
                <div class="project-info">
                    <h3>Cyberpunk E-Ticaret</h3>
                    <p style="color: #ddd;">Geleceğin alışveriş deneyimi.</p>
                </div>
            </div>
             <!-- Project 2 -->
             <div class="project-card gs-reveal">
                <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&q=80" alt="Project 2" class="project-img">
                <div class="project-info">
                    <h3>Neon Finans App</h3>
                    <p style="color: #ddd;">Kripto para takip platformu.</p>
                </div>
            </div>
             <!-- Project 3 -->
             <div class="project-card gs-reveal">
                <img src="https://images.unsplash.com/photo-1558655146-d09347e0c766?auto=format&fit=crop&q=80" alt="Project 3" class="project-img">
                <div class="project-info">
                    <h3>AI Agency</h3>
                    <p style="color: #ddd;">Yapay zeka çözümleri.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" style="background: linear-gradient(to top, #111, var(--bg-color));">
    <div class="container">
        <div class="glass-panel gs-reveal" style="max-width: 800px; margin: 0 auto; text-align: center;">
            <h2 style="margin-bottom: 30px;">Bir Projeniz mi Var?</h2>
            <p style="margin-bottom: 40px; font-size: 1.2rem;">Hayallerinizi gerçeğe dönüştürmek için buradayız. Hemen iletişime geçin.</p>
            <a href="mailto:info@hanrotaweb.com" class="btn">İletişime Geç</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
