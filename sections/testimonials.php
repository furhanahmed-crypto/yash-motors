<section class="section testimonials-premium" id="testimonials">
    <div class="glow-orb glow-orb--right" aria-hidden="true"></div>
    <div class="container">
        <?php if (empty($page_heading)) { ?>
        <div class="section-header-premium reveal">
            <span class="eyebrow-premium">Testimonials</span>
            <h2>Loved by Riders Across Hyderabad</h2>
            <p>Real experiences from customers who visited our Kompally showroom and service centre.</p>
        </div>
        <?php } ?>

        <div class="testimonials-carousel">
            <div class="swiper testimonials-swiper-premium">
                <div class="swiper-wrapper">
                <?php foreach ($testimonials as $testimonial) { ?>
                <div class="swiper-slide">
                    <article class="testimonial-card-premium">
                        <div class="testimonial-card-glow"></div>
                        <div class="testimonial-card-inner">
                            <div class="testimonial-header-premium">
                                <div class="testimonial-rating-premium" aria-label="<?php echo $testimonial['rating']; ?> out of 5 stars">
                                    <?php for ($i = 0; $i < $testimonial['rating']; $i++) { ?>
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="star-svg" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <?php } ?>
                                </div>
                                <div class="quote-icon-wrapper" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="quote-svg"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                                </div>
                            </div>
                            
                            <blockquote>
                                <p class="testimonial-quote-text">&ldquo;<?php echo htmlspecialchars($testimonial['quote']); ?>&rdquo;</p>
                            </blockquote>
                            
                            <footer class="testimonial-author-premium">
                                <div class="author-avatar-premium">
                                    <span class="avatar-letter"><?php echo strtoupper(substr($testimonial['name'], 0, 1)); ?></span>
                                </div>
                                <div class="author-info-premium">
                                    <cite class="author-name-premium"><?php echo htmlspecialchars($testimonial['name']); ?></cite>
                                    <span class="author-meta-premium"><?php echo htmlspecialchars($testimonial['role']); ?> &middot; <?php echo htmlspecialchars($testimonial['city']); ?></span>
                                </div>
                            </footer>
                        </div>
                    </article>
                </div>
                <?php } ?>
                </div>
                <div class="testimonials-pagination-premium swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
