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
                    <span class="q-num">Multi-Brand</span>
                    <span class="q-label">Showroom Collection</span>
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
    <a href="#about" class="scroll-indicator" aria-label="Scroll down to Showroom Experience">
        <div class="scroll-chevron-btn">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" class="chevron-down-svg" aria-hidden="true">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </div>
    </a>
</section>
