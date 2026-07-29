<section class="section vehicles-premium" id="vehicles">
    <div class="glow-orb glow-orb--right" aria-hidden="true"></div>
    <div class="container">
        <?php if (empty($page_heading)) { ?>
        <div class="section-header-premium reveal">
            <span class="eyebrow-premium">Showroom Range</span>
            <h2>Explore Electric Two-Wheelers at Our Kompally Showroom</h2>
            <p>Carefully curated selection of premium electric scooters from leading brands. Compare specs, batteries, and design side-by-side.</p>
        </div>
        <?php } ?>

        <div class="vehicles-grid-premium">
            <?php foreach ($vehicles as $vehicle) { ?>
            <article class="vehicle-card-premium reveal" id="<?php echo htmlspecialchars($vehicle['id']); ?>">
                <div class="vehicle-image-wrapper">
                    <img
                        src="<?php echo htmlspecialchars($images['vehicles'][$vehicle['image_key']]); ?>"
                        alt="<?php echo htmlspecialchars($vehicle['name']); ?>"
                        loading="lazy"
                        decoding="async"
                        data-image-key="vehicles.<?php echo htmlspecialchars($vehicle['image_key']); ?>"
                    >
                    <div class="vehicle-overlay-gradient"></div>
                    <span class="vehicle-category-premium"><?php echo htmlspecialchars($vehicle['category']); ?></span>
                </div>
                
                <div class="vehicle-details-premium">
                    <div class="vehicle-title-wrap">
                        <h3><?php echo htmlspecialchars($vehicle['name']); ?></h3>
                    </div>
                    <p class="vehicle-highlight-text"><?php echo htmlspecialchars($vehicle['highlight']); ?></p>
                    
                    <div class="vehicle-specs-premium">
                        <div class="spec-row-premium">
                            <span class="spec-lbl">MOTOR POWER</span>
                            <span class="spec-val"><?php echo htmlspecialchars($vehicle['motor']); ?></span>
                        </div>
                        <div class="spec-row-premium">
                            <span class="spec-lbl">REAL-WORLD RANGE</span>
                            <span class="spec-val highlight-val"><?php echo htmlspecialchars($vehicle['range']); ?></span>
                        </div>
                        <div class="spec-row-premium">
                            <span class="spec-lbl">CHARGING TIME</span>
                            <span class="spec-val"><?php echo htmlspecialchars($vehicle['charge_time']); ?></span>
                        </div>
                    </div>
                    
                    <div class="vehicle-actions-premium">
                        <a href="<?php echo page_url('contact') . '?reason=' . urlencode('Test Ride Request') . '&vehicle=' . urlencode($vehicle['name']); ?>" class="btn-premium btn-premium--outline btn-premium--block">
                            <span>Book a Test Ride</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="btn-arrow" aria-hidden="true">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
</section>
