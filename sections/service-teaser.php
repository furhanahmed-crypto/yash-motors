<section class="section service-teaser-premium" id="service-teaser">
    <div class="glow-orb glow-orb--left" aria-hidden="true"></div>
    <div class="container">
        <div class="service-teaser-inner-premium reveal">
            <div class="service-teaser-content-premium">
                <span class="eyebrow-premium">Professional EV Servicing</span>
                <h2><?php echo htmlspecialchars($service_teaser['heading']); ?></h2>
                <p class="service-teaser-lead"><?php echo htmlspecialchars($service_teaser['text']); ?></p>
                
                <div class="service-teaser-points">
                    <div class="t-point">
                        <div class="t-point-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <div>
                            <strong>Trained EV Technicians</strong>
                            <span>Specialized diagnostics and electrical wiring checks.</span>
                        </div>
                    </div>
                    <div class="t-point">
                        <div class="t-point-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <div>
                            <strong>100% Genuine OEM Spares</strong>
                            <span>Extend your vehicle\'s life and safeguard your manufacturer warranty.</span>
                        </div>
                    </div>
                </div>

                <div class="service-teaser-cta">
                    <a href="<?php echo page_url('services'); ?>" class="btn-premium btn-premium--primary">
                        <span><?php echo htmlspecialchars($service_teaser['cta']); ?></span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="btn-arrow" aria-hidden="true">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="service-teaser-image-premium">
                <div class="teaser-image-frame">
                    <img
                        src="<?php echo htmlspecialchars($images['about']['innovation']); ?>"
                        alt="Yash Motors EV service facility with advanced diagnostics"
                        loading="lazy"
                        decoding="async"
                        data-image-key="about.innovation"
                    >
                    <div class="teaser-image-overlay"></div>
                </div>
                
                <!-- Floating Service Badge -->
                <div class="floating-service-badge">
                    <span class="badge-icon-tool">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                    </span>
                    <div>
                        <strong>State-of-the-Art Service</strong>
                        <span>Multi-brand diagnostics bay</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
