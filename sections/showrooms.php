<section class="section showrooms-premium" id="showrooms">
    <div class="container">
        <?php if (empty($page_heading)) { ?>
        <div class="section-header-premium reveal">
            <span class="eyebrow-premium">Our Showrooms</span>
            <h2>Find us in Hyderabad.</h2>
            <p>Visit any of our showrooms across Hyderabad — each staffed with EV specialists ready to help you explore, test-ride, and service your electric vehicle.</p>
        </div>
        <?php } ?>

        <div class="showrooms-grid-premium reveal">
            <?php foreach ($showrooms as $showroom) {
                $is_featured = !empty($showroom['featured']);
            ?>
            <article class="showroom-card-premium<?php echo $is_featured ? ' showroom-card-premium--featured' : ''; ?>">
                <div class="showroom-card-inner">
                    <div class="showroom-card-header">
                        <h3><?php echo htmlspecialchars($showroom['name']); ?></h3>
                        <span class="showroom-card-badge"><?php echo htmlspecialchars($showroom['badge']); ?></span>
                    </div>

                    <ul class="showroom-details-list">
                        <li>
                            <span class="showroom-detail-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </span>
                            <span><?php echo htmlspecialchars($showroom['address']); ?></span>
                        </li>
                        <li>
                            <span class="showroom-detail-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </span>
                            <span>
                                <?php
                                $phone_links = array();
                                foreach ($showroom['phones'] as $phone) {
                                    $phone_links[] = '<a href="tel:' . preg_replace('/\s+/', '', $phone) . '" class="showroom-phone-link">' . htmlspecialchars($phone) . '</a>';
                                }
                                echo implode('<br>', $phone_links);
                                ?>
                            </span>
                        </li>
                        <li>
                            <span class="showroom-detail-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            </span>
                            <span>
                                <?php echo implode('<br>', array_map('htmlspecialchars', $showroom['hours'])); ?>
                            </span>
                        </li>
                    </ul>

                    <div class="showroom-card-actions">
                        <a href="<?php echo htmlspecialchars($showroom['whatsapp']); ?>" class="btn-premium<?php echo $is_featured ? ' btn-premium--ghost showroom-btn-whatsapp--featured' : ' btn-premium--primary'; ?>" target="_blank" rel="noopener noreferrer">
                            <span>WhatsApp</span>
                        </a>
                    </div>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
</section>
