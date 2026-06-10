<section class="section services-premium" id="services">
    <div class="container">
        <?php if (empty($page_heading)) { ?>
        <div class="section-header-premium reveal">
            <span class="eyebrow-premium">Our Capabilities</span>
            <h2>Everything Your EV Needs — Under One Roof</h2>
            <p>From the moment you step into our showroom to the years of riding that follow, Yash Motors is built to support your electric journey at every stage.</p>
        </div>
        <?php } ?>

        <div class="services-list-premium">
            <?php foreach ($services as $index => $service) {
                $is_reversed = ($index % 2 === 1);
                $image_key = !empty($service['image_key']) ? $service['image_key'] : 'sales';
                $image_url = isset($images['services'][$image_key]) ? $images['services'][$image_key] : $images['gallery']['item_1'];
            ?>
            <article class="service-card-premium service-card-premium--split<?php echo $is_reversed ? ' service-card-premium--reverse' : ''; ?> reveal" data-index="<?php echo $index; ?>">
                <div class="service-card-glow"></div>
                <div class="service-card-split">
                    <div class="service-card-content">
                        <div class="service-card-header-premium">
                            <div class="service-icon-wrapper">
                                <?php
                                switch ($service['icon']) {
                                    case 'factory':
                                        echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="service-svg-icon"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H5a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>';
                                        break;
                                    case 'check':
                                        echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="service-svg-icon"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>';
                                        break;
                                    case 'shield':
                                        echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="service-svg-icon"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>';
                                        break;
                                    case 'battery':
                                        echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="service-svg-icon"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>';
                                        break;
                                    case 'research':
                                        echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="service-svg-icon"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><circle cx="12" cy="12" r="3" /></svg>';
                                        break;
                                    default:
                                        echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="service-svg-icon"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>';
                                }
                                ?>
                            </div>
                            <div class="service-card-title-wrap">
                                <span class="service-card-num">0<?php echo $index + 1; ?></span>
                                <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                            </div>
                        </div>

                        <p class="service-card-description"><?php echo htmlspecialchars($service['text']); ?></p>

                        <?php if (!empty($service['items'])) { ?>
                        <div class="service-card-bullets">
                            <span class="bullets-heading">WHAT'S INCLUDED:</span>
                            <ul class="service-card-bullet-list">
                                <?php foreach ($service['items'] as $bullet) { ?>
                                <li>
                                    <span class="bullet-dot-premium"></span>
                                    <span><?php echo htmlspecialchars($bullet); ?></span>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>

                    <div class="service-card-media">
                        <div class="service-card-image-frame">
                            <img
                                src="<?php echo htmlspecialchars($image_url); ?>"
                                alt="<?php echo htmlspecialchars($service['title']); ?> at Yash Motors"
                                loading="lazy"
                                decoding="async"
                                data-image-key="services.<?php echo htmlspecialchars($image_key); ?>"
                            >
                            <div class="service-card-image-overlay" aria-hidden="true"></div>
                        </div>
                    </div>
                </div>
            </article>
            <?php } ?>
        </div>

        <?php if (!empty($is_services_page)) { ?>
        <div class="services-cta-banner reveal">
            <div class="services-cta-inner">
                <h2>Book a Service or Visit the Showroom</h2>
                <p>Call us, drop by, or send us a message. Our team at Kompally is ready to assist you Monday through Saturday.</p>
                <a href="<?php echo page_url('contact'); ?>" class="btn-premium btn-premium--primary">
                    <span>Contact Us</span>
                </a>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
