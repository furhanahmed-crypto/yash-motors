<?php $slide = $banner_slides[0]; ?>
<section class="hero-premium" id="home" aria-label="Hero banner">
    <div class="hero-video-wrapper">
        <video
            class="hero-background-video"
            autoplay
            muted
            loop
            playsinline
            preload="auto"
            aria-hidden="true"
        >
            <source src="<?php echo asset('assets/videos/banner-video.mp4'); ?>" type="video/mp4">
        </video>
        <div class="hero-overlay-dark" aria-hidden="true"></div>
        <div class="hero-noise" aria-hidden="true"></div>
    </div>
    
    <div class="container hero-content-premium">
        <div class="hero-text-premium reveal">
            <div class="hero-badge">
                <span class="pulse-dot"></span>
                <span><?php echo htmlspecialchars($slide['eyebrow']); ?></span>
            </div>
            
            <h1>
                Drive the <span class="text-gradient">Future.</span> <br>
                <span class="text-glow">Experience It First.</span>
            </h1>
            
            <p class="hero-subtitle-premium">
                <?php echo htmlspecialchars($slide['subtitle']); ?>
            </p>
            
            <div class="hero-actions-premium">
                <a href="<?php echo page_url($slide['cta_link']); ?>" class="btn-premium btn-premium--primary">
                    <span><?php echo htmlspecialchars($slide['cta']); ?></span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="btn-arrow" aria-hidden="true">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
                <?php if (!empty($slide['secondary_cta'])) { ?>
                <a href="<?php echo page_url($slide['secondary_link']); ?>" class="btn-premium btn-premium--ghost">
                    <span><?php echo htmlspecialchars($slide['secondary_cta']); ?></span>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Quick highlights bar inside hero -->
    <div class="hero-quick-highlights">
        <div class="container">
            <div class="quick-highlights-grid">
                <div class="q-highlight-item">
                    <span class="q-num">12+</span>
                    <span class="q-label">Premium Brands</span>
                </div>
                <div class="q-highlight-divider"></div>
                <div class="q-highlight-item">
                    <span class="q-num">100%</span>
                    <span class="q-label">Genuine Spares</span>
                </div>
                <div class="q-highlight-divider"></div>
                <div class="q-highlight-item">
                    <span class="q-num">30 Min</span>
                    <span class="q-label">Loan Approvals</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Smooth floating scroll indicator -->
    <a href="#why-electric" class="scroll-indicator" aria-label="Scroll down to next section">
        <div class="mouse-icon">
            <span class="mouse-wheel"></span>
        </div>
    </a>
</section>
