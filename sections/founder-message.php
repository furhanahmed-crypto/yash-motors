<section class="section founder-message-premium" id="founder-message">
    <div class="glow-orb glow-orb--right" aria-hidden="true"></div>
    <div class="container">
        <div class="founder-message-grid reveal">
            <div class="founder-media">
                <div class="founder-media-frame">
                    <img
                        src="<?php echo htmlspecialchars($images['about']['founder']); ?>"
                        alt="<?php echo htmlspecialchars($founder_message['name']); ?>"
                        loading="lazy"
                        decoding="async"
                        data-image-key="about.founder"
                    >
                    <div class="founder-media-overlay" aria-hidden="true"></div>
                </div>

                <div class="founder-floating-badge">
                    <span class="founder-badge-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </span>
                    <div class="founder-badge-text">
                        <strong><?php echo htmlspecialchars($founder_message['name']); ?></strong>
                        <span><?php echo htmlspecialchars($founder_message['role']); ?></span>
                    </div>
                </div>
            </div>

            <div class="founder-content">
                <span class="eyebrow-premium"><?php echo htmlspecialchars($founder_message['eyebrow']); ?></span>
                <h2><?php echo htmlspecialchars($founder_message['heading']); ?></h2>
                <p class="founder-quote">&ldquo;<?php echo htmlspecialchars($founder_message['quote']); ?>&rdquo;</p>
                <p class="founder-lead"><?php echo htmlspecialchars($founder_message['message']); ?></p>

                <div class="founder-amenities">
                    <?php foreach ($founder_message['amenities'] as $index => $amenity) {
                        $theme = '';
                        if ($index === 0) $theme = 'card-theme--green';
                        elseif ($index === 1) $theme = 'card-theme--blue';
                        elseif ($index === 2) $theme = 'card-theme--gold';
                        elseif ($index === 3) $theme = 'card-theme--purple';
                    ?>
                    <article class="founder-amenity <?php echo $theme; ?>">
                        <div class="founder-amenity-icon" aria-hidden="true">
                            <?php if ($index === 0) { ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            <?php } elseif ($index === 1) { ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <?php } elseif ($index === 2) { ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            <?php } else { ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            <?php } ?>
                        </div>
                        <div>
                            <h3><?php echo htmlspecialchars($amenity['title']); ?></h3>
                            <p><?php echo htmlspecialchars($amenity['text']); ?></p>
                        </div>
                    </article>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
