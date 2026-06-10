/**
 * Yash Motors — Premium UI/UX Interactions & Microinteractions
 * 2026-06-09
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Header Scroll Effect
    const header = document.getElementById('site-header');
    const handleScroll = () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            // Only remove scrolled class if we are on the homepage
            const isHome = document.body.getAttribute('data-page') === 'home';
            if (isHome) {
                header.classList.remove('scrolled');
            } else {
                header.classList.add('scrolled');
            }
        }
    };
    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Initial run

    // 2. Mobile Menu Toggle
    const navToggle = document.getElementById('nav-toggle');
    const mainNav = document.getElementById('main-nav');
    if (navToggle && mainNav) {
        navToggle.addEventListener('click', () => {
            const isOpen = navToggle.classList.toggle('open');
            mainNav.classList.toggle('open');
            navToggle.setAttribute('aria-expanded', isOpen);
        });

        // Close menu when clicking a link
        mainNav.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navToggle.classList.remove('open');
                mainNav.classList.remove('open');
                navToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // 3. Reveal on Scroll (Intersection Observer)
    const revealElements = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // Stop observing once revealed
                }
            });
        }, {
            root: null,
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        revealElements.forEach(el => revealObserver.observe(el));
    } else {
        // Fallback for older browsers
        revealElements.forEach(el => el.classList.add('visible'));
    }

    // 4. Interactive FAQ Accordion (Smooth Sliding Panels)
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const trigger = item.querySelector('.faq-trigger');
        const panel = item.querySelector('.faq-panel');

        if (trigger && panel) {
            trigger.addEventListener('click', () => {
                const isExpanded = trigger.getAttribute('aria-expanded') === 'true';
                
                // Close other open panels
                faqItems.forEach(otherItem => {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        const otherTrigger = otherItem.querySelector('.faq-trigger');
                        const otherPanel = otherItem.querySelector('.faq-panel');
                        otherItem.classList.remove('active');
                        otherTrigger.setAttribute('aria-expanded', 'false');
                        otherPanel.style.maxHeight = null;
                        setTimeout(() => {
                            otherPanel.setAttribute('hidden', '');
                        }, 450); // Match transition duration
                    }
                });

                // Toggle current panel
                if (isExpanded) {
                    item.classList.remove('active');
                    trigger.setAttribute('aria-expanded', 'false');
                    panel.style.maxHeight = null;
                    setTimeout(() => {
                        panel.setAttribute('hidden', '');
                    }, 450);
                } else {
                    panel.removeAttribute('hidden');
                    item.classList.add('active');
                    trigger.setAttribute('aria-expanded', 'true');
                    // Force repaint to calculate height
                    const scrollHeight = panel.scrollHeight;
                    panel.style.maxHeight = scrollHeight + 'px';
                }
            });
        }
    });

    // 5. Premium Lightbox Gallery
    const galleryItems = document.querySelectorAll('.gallery-item-premium');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-image');
    const lightboxClose = document.getElementById('lightbox-close');
    const lightboxPrev = document.getElementById('lightbox-prev');
    const lightboxNext = document.getElementById('lightbox-next');

    if (galleryItems.length > 0 && lightbox && lightboxImg) {
        let currentIndex = 0;
        const imagesList = Array.from(galleryItems).map(item => {
            const img = item.querySelector('img');
            return {
                src: img.getAttribute('src'),
                alt: img.getAttribute('alt')
            };
        });

        const openLightbox = (index) => {
            currentIndex = index;
            lightboxImg.setAttribute('src', imagesList[currentIndex].src);
            lightboxImg.setAttribute('alt', imagesList[currentIndex].alt);
            lightbox.removeAttribute('hidden');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        };

        const closeLightbox = () => {
            lightbox.setAttribute('hidden', '');
            document.body.style.overflow = '';
            lightboxImg.setAttribute('src', '');
        };

        const showNext = () => {
            currentIndex = (currentIndex + 1) % imagesList.length;
            lightboxImg.setAttribute('src', imagesList[currentIndex].src);
            lightboxImg.setAttribute('alt', imagesList[currentIndex].alt);
        };

        const showPrev = () => {
            currentIndex = (currentIndex - 1 + imagesList.length) % imagesList.length;
            lightboxImg.setAttribute('src', imagesList[currentIndex].src);
            lightboxImg.setAttribute('alt', imagesList[currentIndex].alt);
        };

        // Attach click events
        galleryItems.forEach(item => {
            item.addEventListener('click', () => {
                const index = parseInt(item.getAttribute('data-gallery-index'), 10);
                openLightbox(index);
            });
        });

        lightboxClose.addEventListener('click', closeLightbox);
        lightboxNext.addEventListener('click', showNext);
        lightboxPrev.addEventListener('click', showPrev);

        // Backdrop click close
        lightbox.querySelector('.lightbox-backdrop').addEventListener('click', closeLightbox);

        // Keyboard Navigation
        document.addEventListener('keydown', (e) => {
            if (lightbox.hasAttribute('hidden')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowRight') showNext();
            if (e.key === 'ArrowLeft') showPrev();
        });
    }

    // 6. Testimonials Swiper JS Initialization
    if (typeof Swiper !== 'undefined') {
        new Swiper('.testimonials-swiper-premium', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            pagination: {
                el: '.testimonials-pagination-premium',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                }
            },
            speed: 800,
            grabCursor: true
        });
    }

    // 7. Pre-fill Contact Form Parameters from URL
    const urlParams = new URLSearchParams(window.location.search);
    const reasonParam = urlParams.get('reason');
    const vehicleParam = urlParams.get('vehicle');

    if (reasonParam) {
        const reasonSelect = document.getElementById('enquiry-reason');
        if (reasonSelect) {
            for (let option of reasonSelect.options) {
                if (option.value.toLowerCase() === reasonParam.toLowerCase()) {
                    option.selected = true;
                    break;
                }
            }
        }
    }

    if (vehicleParam) {
        const vehicleSelect = document.getElementById('enquiry-vehicle');
        if (vehicleSelect) {
            for (let option of vehicleSelect.options) {
                if (option.value.toLowerCase() === vehicleParam.toLowerCase()) {
                    option.selected = true;
                    break;
                }
            }
        }
    }
});
