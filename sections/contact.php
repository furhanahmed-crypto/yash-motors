<section class="section contact-premium" id="contact">
    <div class="glow-orb glow-orb--left" aria-hidden="true"></div>
    <div class="container">
        <?php if (empty($page_heading)) { ?>
        <div class="section-header-premium reveal">
            <span class="eyebrow-premium">Get in Touch</span>
            <h2>We're Right Here in Kompally — Come Say Hello</h2>
            <p>Whether you have a question about a vehicle, want to book a service appointment, or simply want to browse our showroom — we're easy to find and always happy to help.</p>
        </div>
        <?php } ?>

        <div class="contact-grid-premium">
            <!-- Contact Info Panel -->
            <div class="contact-info-premium reveal">
                <div class="contact-cards-stack">
                    <div class="contact-card-premium">
                        <div class="contact-card-icon-premium" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div class="contact-card-text-premium">
                            <h3>Showroom &amp; Service Address</h3>
                            <p><?php echo htmlspecialchars($site['address']); ?></p>
                        </div>
                    </div>

                    <div class="contact-card-premium">
                        <div class="contact-card-icon-premium" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div class="contact-card-text-premium">
                            <h3>Phone / WhatsApp</h3>
                            <p><a href="tel:<?php echo preg_replace('/\s+/', '', $site['phone']); ?>" class="contact-link"><?php echo htmlspecialchars($site['phone']); ?></a></p>
                        </div>
                    </div>

                    <div class="contact-card-premium">
                        <div class="contact-card-icon-premium" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div class="contact-card-text-premium">
                            <h3>Email Address</h3>
                            <p><a href="mailto:<?php echo htmlspecialchars($site['email']); ?>" class="contact-link"><?php echo htmlspecialchars($site['email']); ?></a></p>
                        </div>
                    </div>

                    <div class="contact-card-premium">
                        <div class="contact-card-icon-premium" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div class="contact-card-text-premium">
                            <h3>Operating Hours</h3>
                            <p>
                                <strong>Showroom:</strong> <?php echo htmlspecialchars($site['showroom_hours']); ?><br>
                                <strong>Sunday:</strong> <?php echo htmlspecialchars($site['sunday_hours']); ?><br>
                                <strong>Service Bay:</strong> <?php echo htmlspecialchars($site['service_hours']); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Map & Directions -->
                <div class="contact-map-wrapper-premium">
                    <div class="map-frame-premium">
                        <iframe
                            src="<?php echo htmlspecialchars($site['map_embed']); ?>"
                            width="100%"
                            height="240"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Yash Motors location on Google Maps"
                        ></iframe>
                    </div>
                    <div class="map-actions-premium">
                        <a href="<?php echo htmlspecialchars($site['map_directions']); ?>" class="btn-premium btn-premium--outline btn-premium--block" target="_blank" rel="noopener noreferrer">
                            <span>Get Directions on Google Maps</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="btn-arrow" aria-hidden="true">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form Panel -->
            <div class="contact-form-panel-premium reveal">
                <div class="form-panel-glow"></div>
                <div class="form-panel-inner">
                    <h3>Send Us a Message</h3>
                    <p class="form-panel-subtitle">Fill out the form below, and our Kompally team will get back to you within 24 hours.</p>

                    <?php if (!empty($_GET['success'])) { ?>
                    <div class="form-alert-premium form-alert-premium--success" role="alert">
                        <div class="alert-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <p>Thank you! We've received your message and will get back to you within 24 hours.</p>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($_GET['error'])) { ?>
                    <div class="form-alert-premium form-alert-premium--error" role="alert">
                        <div class="alert-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        </div>
                        <p><?php echo htmlspecialchars($_GET['error']); ?></p>
                    </div>
                    <?php } ?>

                    <form class="contact-form-premium" action="<?php echo asset('handlers/enquiry.php'); ?>" method="POST" novalidate>
                        <input type="hidden" name="form_type" value="enquiry">
                        
                        <div class="form-row-premium">
                            <div class="form-group-premium">
                                <label for="enquiry-name">Full Name <span aria-hidden="true">*</span></label>
                                <div class="input-wrapper-premium">
                                    <input type="text" id="enquiry-name" name="name" required autocomplete="name" placeholder="Your full name">
                                    <span class="input-focus-line"></span>
                                </div>
                            </div>
                            
                            <div class="form-group-premium">
                                <label for="enquiry-phone">Phone Number <span aria-hidden="true">*</span></label>
                                <div class="input-wrapper-premium">
                                    <input type="tel" id="enquiry-phone" name="phone" required autocomplete="tel" placeholder="+91 76809 66594">
                                    <span class="input-focus-line"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group-premium">
                            <label for="enquiry-email">Email Address</label>
                            <div class="input-wrapper-premium">
                                <input type="email" id="enquiry-email" name="email" autocomplete="email" placeholder="you@example.com">
                                <span class="input-focus-line"></span>
                            </div>
                        </div>

                        <div class="form-row-premium">
                            <div class="form-group-premium">
                                <label for="enquiry-reason">Reason for Contact <span aria-hidden="true">*</span></label>
                                <div class="input-wrapper-premium select-wrapper-premium">
                                    <select id="enquiry-reason" name="reason" required>
                                        <option value="">Select a reason</option>
                                        <?php foreach ($contact_reasons as $reason) { ?>
                                        <option value="<?php echo htmlspecialchars($reason); ?>"<?php echo (isset($_GET['reason']) && $_GET['reason'] === $reason) ? ' selected' : ''; ?>><?php echo htmlspecialchars($reason); ?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="input-focus-line"></span>
                                </div>
                            </div>

                            <div class="form-group-premium">
                                <label for="enquiry-vehicle">Interested Vehicle (optional)</label>
                                <div class="input-wrapper-premium select-wrapper-premium">
                                    <select id="enquiry-vehicle" name="vehicle">
                                        <option value="">Select a vehicle</option>
                                        <?php foreach ($vehicles as $vehicle) { ?>
                                        <option value="<?php echo htmlspecialchars($vehicle['name']); ?>"<?php echo (isset($_GET['vehicle']) && $_GET['vehicle'] === $vehicle['name']) ? ' selected' : ''; ?>><?php echo htmlspecialchars($vehicle['name']); ?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="input-focus-line"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group-premium">
                            <label for="enquiry-message">Message / Additional Details <span aria-hidden="true">*</span></label>
                            <div class="input-wrapper-premium">
                                <textarea id="enquiry-message" name="message" rows="5" required placeholder="Tell us how we can help you..."></textarea>
                                <span class="input-focus-line"></span>
                            </div>
                        </div>

                        <button type="submit" class="btn-premium btn-premium--primary btn-premium--block">
                            <span>Send Message</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="btn-arrow" aria-hidden="true">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
