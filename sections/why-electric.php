<section class="section why-electric-premium" id="why-electric">
    <div class="glow-orb glow-orb--left" aria-hidden="true"></div>
    <div class="container">
        <div class="section-header-premium reveal">
            <span class="eyebrow-premium">The Switch is Simple</span>
            <h2>The Smarter Way to Move Around Hyderabad</h2>
            <p>Why choose electric? Experience the exceptional benefits of switching to sustainable, high-performance mobility in Kompally.</p>
        </div>

        <div class="why-electric-grid-premium">
            <?php 
            $why_electric_custom = array(
                array(
                    'title' => 'Zero Emissions',
                    'text' => 'Go green without compromise. Electric vehicles produce zero tailpipe emissions, making every journey a step toward cleaner air for Hyderabad.',
                    'badge' => 'ECO FRIENDLY',
                    'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="icon-svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m11.314 11.314l.707.707M12 5a7 7 0 100 14 7 7 0 000-14z" /><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3l2 2" /></svg>'
                ),
                array(
                    'title' => 'Lower Running Costs',
                    'text' => 'Spend a fraction of what you would on fuel. Electricity is cheaper, and EV maintenance is simpler — fewer moving parts, fewer bills.',
                    'badge' => 'COST EFFECTIVE',
                    'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="icon-svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 16v-1m0-1V14m0-6h.01M12 21H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v7" /></svg>'
                ),
                array(
                    'title' => 'Smooth & Silent Performance',
                    'text' => 'Instant torque, whisper-quiet rides, and seamless acceleration — electric mobility redefines what driving feels like.',
                    'badge' => 'SUPERIOR DRIVE',
                    'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="icon-svg"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>'
                )
            );
            
            foreach ($why_electric_custom as $index => $item) { ?>
            <div class="why-electric-card-premium reveal" data-index="<?php echo $index; ?>">
                <div class="card-glow-border"></div>
                <div class="card-inner-premium">
                    <span class="card-badge-premium"><?php echo htmlspecialchars($item['badge']); ?></span>
                    <div class="icon-wrapper-premium">
                        <?php echo $item['svg']; ?>
                    </div>
                    <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                    <p><?php echo htmlspecialchars($item['text']); ?></p>
                    
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
