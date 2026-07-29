<section class="section why-electric-premium" id="why-electric">
    <div class="glow-orb glow-orb--left" aria-hidden="true"></div>
    <div class="container">
        <div class="section-header-premium reveal">
            <span class="eyebrow-premium">The Switch is Simple</span>
            <h2>The Smarter Way to Move Around Hyderabad</h2>
            <p>Why choose electric? Experience the exceptional benefits of switching to sustainable, high-performance mobility in Kompally.</p>
        </div>

        <div class="why-electric-split-premium">
            <!-- Left Column: Interactive Commute Calculator -->
            <div class="savings-calculator-panel reveal">
                <div class="calculator-glow-border"></div>
                <div class="calculator-inner-premium">
                    <div class="calculator-header">
                        <span class="calc-badge">HYDERABAD COMMUTE</span>
                        <h3>Petrol vs. EV Savings Calculator</h3>
                        <p>Adjust the slider to your average daily travel distance to see your monthly cost comparison and massive yearly savings.</p>
                    </div>

                    <div class="calculator-control">
                        <div class="control-label-row">
                            <span>Daily Commute Distance</span>
                            <span class="commute-value-display"><strong id="commute-distance-text">40</strong> km</span>
                        </div>
                        <input type="range" id="commute-distance-slider" min="10" max="150" step="5" value="40" class="premium-range-slider" aria-label="Daily Commute Distance Slider">
                        <div class="slider-ticks" aria-hidden="true">
                            <span>10km</span>
                            <span>40km</span>
                            <span>80km</span>
                            <span>120km</span>
                            <span>150km</span>
                        </div>
                    </div>

                    <div class="calculator-results-grid">
                        <div class="calc-result-card petrol">
                            <span class="res-card-label">Monthly Petrol Cost</span>
                            <span class="res-card-value" id="petrol-cost-display">₹3,300</span>
                            <span class="res-card-sub">₹110/L @ 40 km/l mileage</span>
                        </div>
                        <div class="calc-result-card ev">
                            <span class="res-card-label">Monthly EV Cost</span>
                            <span class="res-card-value accent-text" id="ev-cost-display">₹180</span>
                            <span class="res-card-sub">₹15/charge @ 100km range</span>
                        </div>
                    </div>

                    <div class="calculator-total-savings">
                        <div class="savings-card-inner">
                            <div class="savings-highlight">
                                <span class="savings-label">ESTIMATED YEARLY SAVINGS</span>
                                <span class="savings-amount" id="savings-amount-display">₹37,440</span>
                            </div>
                            <div class="savings-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="tag-icon" aria-hidden="true"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                                <span>Save over 94% on your daily commute!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Re-designed Premium Benefit Strips -->
            <div class="why-electric-benefits-panel">
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
                
                foreach ($why_electric_custom as $index => $item) { 
                    $benefit_color_class = '';
                    if ($index === 0) $benefit_color_class = 'card-theme--green';
                    elseif ($index === 1) $benefit_color_class = 'card-theme--gold';
                    elseif ($index === 2) $benefit_color_class = 'card-theme--blue';
                ?>
                <div class="benefit-strip-premium <?php echo $benefit_color_class; ?> reveal" data-index="<?php echo $index; ?>">
                    <div class="benefit-strip-glow"></div>
                    <div class="benefit-strip-inner">
                        <div class="benefit-icon-box">
                            <?php echo $item['svg']; ?>
                        </div>
                        <div class="benefit-content-box">
                            <span class="benefit-meta">0<?php echo $index + 1; ?> &middot; <?php echo htmlspecialchars($item['badge']); ?></span>
                            <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                            <p><?php echo htmlspecialchars($item['text']); ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
