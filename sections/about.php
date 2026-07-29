<?php if (!empty($is_about_page)) { ?>
<section class="section about-page-premium" id="about">
    <div class="glow-orb glow-orb--right" aria-hidden="true"></div>
    <div class="container">
        <!-- Lead Intro -->
        <div class="about-page-intro-premium reveal">
            <p class="lead-premium"><?php echo htmlspecialchars($about_story['paragraphs'][0]); ?></p>
        </div>

        <!-- Asymmetrical Story & Mission Split -->
        <div class="about-story-mission-split">
            <div class="about-story-premium reveal">
                <div class="about-card-badge">OUR BACKGROUND</div>
                <h2><?php echo htmlspecialchars($about_story['heading']); ?></h2>
                <?php foreach (array_slice($about_story['paragraphs'], 1) as $paragraph) { ?>
                <p><?php echo htmlspecialchars($paragraph); ?></p>
                <?php } ?>
            </div>

            <div class="about-mission-premium reveal">
                <div class="mission-card-premium">
                    <div class="mission-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                    </div>
                    <h2>Our Mission</h2>
                    <p><?php echo htmlspecialchars($about_mission); ?></p>
                </div>
            </div>
        </div>

        <!-- Core Values as Grid -->
        <div class="about-values-premium reveal">
            <div class="section-header-premium">
                <span class="eyebrow-premium">Our Core Philosophy</span>
                <h2>Values that Drive Us</h2>
            </div>
            <div class="values-grid-premium">
                <?php foreach ($about_values as $index => $value) { 
                    $value_theme = '';
                    if ($index === 0) $value_theme = 'card-theme--green';
                    elseif ($index === 1) $value_theme = 'card-theme--blue';
                    elseif ($index === 2) $value_theme = 'card-theme--gold';
                    elseif ($index === 3) $value_theme = 'card-theme--purple';
                ?>
                <article class="value-card-premium <?php echo $value_theme; ?>">
                    <div class="value-index">0<?php echo $index + 1; ?></div>
                    <h3><?php echo htmlspecialchars($value['title']); ?></h3>
                    <p><?php echo htmlspecialchars($value['text']); ?></p>
                </article>
                <?php } ?>
            </div>
        </div>

        <!-- What Sets Us Apart (Bento Grid comparison) -->
        <div class="about-differentiators-premium reveal">
            <div class="section-header-premium">
                <span class="eyebrow-premium">The Yash Advantage</span>
                <h2>Why Choose Yash Motors?</h2>
            </div>
            <div class="diff-grid-premium">
                <?php foreach ($about_differentiators as $index => $row) { 
                    $diff_theme = '';
                    if ($index === 0) $diff_theme = 'card-theme--green';
                    elseif ($index === 1) $diff_theme = 'card-theme--blue';
                    elseif ($index === 2) $diff_theme = 'card-theme--gold';
                ?>
                <div class="diff-card-premium <?php echo $diff_theme; ?>">
                    <div class="diff-feature-badge">YASH ADVANTAGE</div>
                    <h3><?php echo htmlspecialchars($row['feature']); ?></h3>
                    <p><?php echo htmlspecialchars($row['benefit']); ?></p>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- Sleek Contact CTA -->
        <div class="about-cta-premium reveal">
            <div class="about-cta-inner">
                <h2>Ready to experience the future of riding?</h2>
                <p>Visit our showroom in Kompally today or schedule a consultation with our EV specialists.</p>
                <div class="about-cta-buttons">
                    <a href="<?php echo page_url('contact'); ?>" class="btn-premium btn-premium--primary">
                        <span>Get in Touch</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } else { ?>
<!-- Homepage Showroom Highlight -->
<section class="section showroom-highlight-premium" id="about">
    <div class="container">
        <?php if (empty($page_heading)) { ?>
        <div class="section-header-premium reveal">
            <span class="eyebrow-premium">Showroom Experience</span>
            <h2><?php echo htmlspecialchars($showroom_highlights['heading']); ?></h2>
            <p>Step into Kompally's premier multi-brand EV showroom. Compare and test-ride the best electric vehicles with expert assistance.</p>
        </div>
        <?php } ?>

        <div class="showroom-split-grid">
            <div class="showroom-media-container reveal">
                <div class="media-frame">
                    <img
                        src="<?php echo htmlspecialchars($images['about']['facility']); ?>"
                        alt="Yash Motors showroom floor in Kompally"
                        loading="lazy"
                        decoding="async"
                        class="showroom-main-image"
                        data-image-key="about.facility"
                    >
                    <div class="media-frame-overlay"></div>
                </div>

                <!-- Floating glassmorphic badges inside media -->
                <div class="floating-badge badge--top-left">
                    <div class="badge-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg>
                    </div>
                    <div>
                        <strong>Kompally, Hyd</strong>
                        <span>Showroom &amp; Service</span>
                    </div>
                </div>

                <div class="floating-badge badge--bottom-right">
                    <div class="badge-icon badge-icon--active">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div>
                        <strong>Multi-Brand Showroom</strong>
                        <span>Side-by-Side Comparison</span>
                    </div>
                </div>
            </div>

            <div class="showroom-content-container reveal">
                <div class="showroom-desc-intro">
                    <p class="lead-premium"><?php echo htmlspecialchars($showroom_highlights['intro']); ?></p>
                </div>

                <div class="highlights-list-premium">
                    <?php
                    $highlight_descriptions = array(
                        'Carefully curated selection of electric two-wheelers and vehicles' => 'Explore the finest models from Ola, Ather, TVS, Bajaj, Hero, and more.',
                        'Expert guidance from trained EV consultants' => 'No single-brand pressure. Get transparent details on range, battery, and durability.',
                        'Test-ride experience available at the showroom' => 'Take your shortlisted vehicles for a spin around Kompally before making a choice.',
                        'Transparent pricing with flexible finance options' => 'Quick loan approvals in 30 minutes with multiple NBFC partners.',
                        'Dedicated service bay for post-purchase support' => 'Professional certified technicians to keep your vehicle running like new.'
                    );

                    foreach ($showroom_highlights['items'] as $item) {
                        $desc = isset($highlight_descriptions[$item]) ? $highlight_descriptions[$item] : 'Expertly assisted processes.';
                    ?>
                    <div class="highlight-item-premium">
                        <div class="highlight-check">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                        </div>
                        <div class="highlight-text-wrap">
                            <h4><?php echo htmlspecialchars($item); ?></h4>
                            <p><?php echo htmlspecialchars($desc); ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <div class="showroom-cta-actions">
                    <a href="<?php echo page_url('contact'); ?>" class="btn-premium btn-premium--primary">
                        <span>Visit Our Showroom Today</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="btn-arrow" aria-hidden="true">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
