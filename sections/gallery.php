<section class="section gallery-premium" id="gallery">
    <div class="glow-orb glow-orb--left" aria-hidden="true"></div>
    <div class="container">
        <?php if (empty($page_heading)) { ?>
        <div class="section-header-premium reveal">
            <span class="eyebrow-premium">Showroom Gallery</span>
            <h2>Inside Our Kompally Showroom</h2>
            <p>Take a look at the electric vehicles on display, our showroom floor, and the service facility that keeps your EV running smoothly.</p>
        </div>
        <?php } ?>

        <div class="gallery-grid-premium">
            <?php
            $gallery_index = 0;
            foreach ($images['gallery'] as $key => $url) {
                $gallery_index++;
                // Determine a size modifier class for masonry layout
                $size_class = '';
                if ($gallery_index === 1) {
                    $size_class = 'gallery-item-premium--large';
                } else if ($gallery_index === 4 || $gallery_index === 7) {
                    $size_class = 'gallery-item-premium--medium';
                }
            ?>
            <figure class="gallery-item-premium <?php echo $size_class; ?> reveal" data-gallery-index="<?php echo $gallery_index - 1; ?>">
                <div class="gallery-image-wrapper-premium">
                    <img
                        src="<?php echo htmlspecialchars($url); ?>"
                        alt="Yash Motors electric vehicle showroom photo <?php echo $gallery_index; ?>"
                        loading="lazy"
                        decoding="async"
                        data-image-key="gallery.<?php echo htmlspecialchars($key); ?>"
                    >
                    <div class="gallery-overlay-premium">
                        <div class="gallery-overlay-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m4-3H6" /></svg>
                        </div>
                        <span class="gallery-overlay-text">View Image</span>
                    </div>
                </div>
            </figure>
            <?php } ?>
        </div>
    </div>

    <!-- Premium Lightbox -->
    <div class="lightbox-premium" id="lightbox" role="dialog" aria-modal="true" aria-label="Image gallery" hidden>
        <div class="lightbox-backdrop"></div>
        <button class="lightbox-close-premium" id="lightbox-close" aria-label="Close gallery">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        <button class="lightbox-nav-premium lightbox-prev-premium" id="lightbox-prev" aria-label="Previous image">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"/></svg>
        </button>
        <div class="lightbox-content-premium">
            <div class="lightbox-track" id="lightbox-track">
                <div class="lightbox-slide">
                    <img src="" alt="" id="lightbox-image-prev">
                </div>
                <div class="lightbox-slide">
                    <img src="" alt="" id="lightbox-image">
                </div>
                <div class="lightbox-slide">
                    <img src="" alt="" id="lightbox-image-next">
                </div>
            </div>
        </div>
        <button class="lightbox-nav-premium lightbox-next-premium" id="lightbox-next" aria-label="Next image">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
    </div>
</section>
