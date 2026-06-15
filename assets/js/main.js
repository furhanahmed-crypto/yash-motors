/**
 * Yash Motors — Premium UI/UX Interactions & Microinteractions
 * 2026-06-09
 */

document.addEventListener("DOMContentLoaded", () => {
    // 1. Header Scroll Effect
    const header = document.getElementById("site-header");
    const handleScroll = () => {
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            // Only remove scrolled class if we are on the homepage
            const isHome = document.body.getAttribute("data-page") === "home";
            if (isHome) {
                header.classList.remove("scrolled");
            } else {
                header.classList.add("scrolled");
            }
        }
    };
    window.addEventListener("scroll", handleScroll);
    handleScroll(); // Initial run

    // Smooth scroll for scroll indicator
    const scrollIndicator = document.querySelector(".scroll-indicator");
    if (scrollIndicator) {
        scrollIndicator.addEventListener("click", (e) => {
            e.preventDefault();
            const targetId = scrollIndicator.getAttribute("href");
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const headerHeight = header ? header.offsetHeight : 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerHeight;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });
            }
        });
    }

    // 2. Mobile Menu Toggle (right-side drawer)
    const navToggle = document.getElementById("nav-toggle");
    const mainNav = document.getElementById("main-nav");
    const navBackdrop = document.getElementById("nav-backdrop");

    const closeMobileNav = () => {
        if (!navToggle || !mainNav) return;
        navToggle.classList.remove("open");
        mainNav.classList.remove("open");
        navToggle.setAttribute("aria-expanded", "false");
        if (navBackdrop) {
            navBackdrop.classList.remove("open");
            navBackdrop.setAttribute("aria-hidden", "true");
        }
        document.body.classList.remove("nav-open");
    };

    const openMobileNav = () => {
        navToggle.classList.add("open");
        mainNav.classList.add("open");
        navToggle.setAttribute("aria-expanded", "true");
        if (navBackdrop) {
            navBackdrop.classList.add("open");
            navBackdrop.setAttribute("aria-hidden", "false");
        }
        document.body.classList.add("nav-open");
    };

    if (navToggle && mainNav) {
        navToggle.addEventListener("click", () => {
            if (mainNav.classList.contains("open")) {
                closeMobileNav();
            } else {
                openMobileNav();
            }
        });

        if (navBackdrop) {
            navBackdrop.addEventListener("click", closeMobileNav);
        }

        mainNav
            .querySelectorAll(".nav-link, .nav-mobile-cta a, .nav-drawer-logo")
            .forEach((link) => {
                link.addEventListener("click", closeMobileNav);
            });

        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape" && mainNav.classList.contains("open")) {
                closeMobileNav();
            }
        });

        window.addEventListener("resize", () => {
            if (
                window.innerWidth > 1024 &&
                mainNav.classList.contains("open")
            ) {
                closeMobileNav();
            }
        });
    }

    // 3. Reveal on Scroll (Intersection Observer)
    const revealElements = document.querySelectorAll(".reveal");
    if ("IntersectionObserver" in window) {
        const revealObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                root: null,
                threshold: 0.12,
                rootMargin: "0px 0px -6% 0px",
            },
        );

        revealElements.forEach((el) => {
            const parent = el.parentElement;
            if (parent) {
                const siblings = Array.from(
                    parent.querySelectorAll(":scope > .reveal"),
                );
                const index = siblings.indexOf(el);
                if (index > 0) {
                    el.style.transitionDelay = `${Math.min(index * 0.12, 0.6)}s`;
                }
            }
            revealObserver.observe(el);
        });
    } else {
        revealElements.forEach((el) => el.classList.add("visible"));
    }

    // 4. Interactive FAQ Accordion (Smooth Sliding Panels)
    const faqItems = document.querySelectorAll(".faq-item");
    faqItems.forEach((item) => {
        const trigger = item.querySelector(".faq-trigger");
        const panel = item.querySelector(".faq-panel");

        if (trigger && panel) {
            trigger.addEventListener("click", () => {
                const isExpanded =
                    trigger.getAttribute("aria-expanded") === "true";

                // Close other open panels
                faqItems.forEach((otherItem) => {
                    if (
                        otherItem !== item &&
                        otherItem.classList.contains("active")
                    ) {
                        const otherTrigger =
                            otherItem.querySelector(".faq-trigger");
                        const otherPanel =
                            otherItem.querySelector(".faq-panel");
                        otherItem.classList.remove("active");
                        otherTrigger.setAttribute("aria-expanded", "false");
                        otherPanel.style.maxHeight = null;
                        setTimeout(() => {
                            otherPanel.setAttribute("hidden", "");
                        }, 450); // Match transition duration
                    }
                });

                // Toggle current panel
                if (isExpanded) {
                    item.classList.remove("active");
                    trigger.setAttribute("aria-expanded", "false");
                    panel.style.maxHeight = null;
                    setTimeout(() => {
                        panel.setAttribute("hidden", "");
                    }, 450);
                } else {
                    panel.removeAttribute("hidden");
                    item.classList.add("active");
                    trigger.setAttribute("aria-expanded", "true");
                    // Force repaint to calculate height
                    const scrollHeight = panel.scrollHeight;
                    panel.style.maxHeight = scrollHeight + "px";
                }
            });
        }
    });

    // 5. Premium Lightbox Gallery (3-slide track slider)
    const galleryItems = document.querySelectorAll(".gallery-item-premium");
    const lightbox = document.getElementById("lightbox");
    const lightboxTrack = document.getElementById("lightbox-track");
    const lightboxImg = document.getElementById("lightbox-image");
    const lightboxImgPrev = document.getElementById("lightbox-image-prev");
    const lightboxImgNext = document.getElementById("lightbox-image-next");
    const lightboxClose = document.getElementById("lightbox-close");
    const lightboxPrev = document.getElementById("lightbox-prev");
    const lightboxNext = document.getElementById("lightbox-next");

    if (galleryItems.length > 0 && lightbox && lightboxTrack && lightboxImg && lightboxImgPrev && lightboxImgNext) {
        if (lightbox.parentElement !== document.body) {
            document.body.appendChild(lightbox);
        }

        let currentIndex = 0;
        const imagesList = Array.from(galleryItems).map((item) => {
            const img = item.querySelector("img");
            return {
                src: img ? img.getAttribute("src") : "",
                alt: img ? img.getAttribute("alt") : "",
            };
        });
        const canSwipe = imagesList.length > 1;

        const updateSlides = () => {
            if (!canSwipe) {
                lightboxImg.src = imagesList[currentIndex].src;
                lightboxImg.alt = imagesList[currentIndex].alt;
                lightboxImgPrev.style.display = "none";
                lightboxImgNext.style.display = "none";
                return;
            }
            const len = imagesList.length;
            const prevIdx = (currentIndex - 1 + len) % len;
            const nextIdx = (currentIndex + 1) % len;

            lightboxImgPrev.src = imagesList[prevIdx].src;
            lightboxImgPrev.alt = imagesList[prevIdx].alt;

            lightboxImg.src = imagesList[currentIndex].src;
            lightboxImg.alt = imagesList[currentIndex].alt;

            lightboxImgNext.src = imagesList[nextIdx].src;
            lightboxImgNext.alt = imagesList[nextIdx].alt;
        };

        const openLightbox = (index) => {
            currentIndex = index;
            updateSlides();
            lightboxTrack.style.transition = "none";
            lightboxTrack.style.transform = canSwipe ? "translateX(-100vw)" : "translateX(0)";
            lightbox.removeAttribute("hidden");
            document.body.style.overflow = "hidden";
        };

        const closeLightbox = () => {
            lightbox.setAttribute("hidden", "");
            document.body.style.overflow = "";
            lightboxImg.src = "";
            if (canSwipe) {
                lightboxImgPrev.src = "";
                lightboxImgNext.src = "";
            }
        };

        const showNext = () => {
            if (!canSwipe) return;
            goToNext();
        };

        const showPrev = () => {
            if (!canSwipe) return;
            goToPrev();
        };

        const goToNext = () => {
            lightboxTrack.style.transition = "transform 0.3s cubic-bezier(0.25, 1, 0.5, 1)";
            lightboxTrack.style.transform = "translateX(-200vw)";
            setTimeout(() => {
                currentIndex = (currentIndex + 1) % imagesList.length;
                updateSlides();
                lightboxTrack.style.transition = "none";
                lightboxTrack.style.transform = "translateX(-100vw)";
            }, 300);
        };

        const goToPrev = () => {
            lightboxTrack.style.transition = "transform 0.3s cubic-bezier(0.25, 1, 0.5, 1)";
            lightboxTrack.style.transform = "translateX(0vw)";
            setTimeout(() => {
                currentIndex = (currentIndex - 1 + imagesList.length) % imagesList.length;
                updateSlides();
                lightboxTrack.style.transition = "none";
                lightboxTrack.style.transform = "translateX(-100vw)";
            }, 300);
        };

        galleryItems.forEach((item) => {
            const index = parseInt(item.getAttribute("data-gallery-index"), 10);
            item.setAttribute("role", "button");
            item.setAttribute("tabindex", "0");
            item.setAttribute("aria-label", "View gallery image");

            item.addEventListener("click", () => {
                openLightbox(index);
            });

            item.addEventListener("keydown", (e) => {
                if (e.key === "Enter" || e.key === " ") {
                    e.preventDefault();
                    openLightbox(index);
                }
            });
        });

        lightboxClose.addEventListener("click", closeLightbox);
        lightboxNext.addEventListener("click", showNext);
        lightboxPrev.addEventListener("click", showPrev);

        lightbox.querySelector(".lightbox-backdrop").addEventListener("click", closeLightbox);

        document.addEventListener("keydown", (e) => {
            if (lightbox.hasAttribute("hidden")) return;
            if (e.key === "Escape") closeLightbox();
            if (e.key === "ArrowRight") showNext();
            if (e.key === "ArrowLeft") showPrev();
        });

        // Touch & Mouse Drag/Swipe Mechanics
        if (canSwipe) {
            let isDragging = false;
            let startX = 0;
            let startY = 0;
            let currentX = 0;
            let deltaX = 0;
            let deltaY = 0;
            let isHorizontalSwipe = false;

            const dragStart = (clientX, clientY, target) => {
                if (target.closest("button, .lightbox-close-premium, .lightbox-nav-premium")) {
                    return;
                }
                isDragging = true;
                startX = clientX;
                startY = clientY;
                currentX = clientX;
                deltaX = 0;
                deltaY = 0;
                isHorizontalSwipe = false;
                lightboxTrack.style.transition = "none";
            };

            const dragMove = (clientX, clientY) => {
                if (!isDragging) return;
                currentX = clientX;
                deltaX = currentX - startX;
                deltaY = clientY - startY;

                if (!isHorizontalSwipe) {
                    if (Math.abs(deltaX) > 10 && Math.abs(deltaX) > Math.abs(deltaY)) {
                        isHorizontalSwipe = true;
                    }
                }

                if (isHorizontalSwipe) {
                    lightboxTrack.style.transform = `translateX(calc(-100vw + ${deltaX}px))`;
                }
            };

            const dragEnd = () => {
                if (!isDragging) return;
                isDragging = false;

                if (isHorizontalSwipe) {
                    const threshold = 80;
                    if (deltaX < -threshold) {
                        goToNext();
                    } else if (deltaX > threshold) {
                        goToPrev();
                    } else {
                        // Bounce back to center
                        lightboxTrack.style.transition = "transform 0.25s cubic-bezier(0.25, 1, 0.5, 1)";
                        lightboxTrack.style.transform = "translateX(-100vw)";
                    }
                }
                isHorizontalSwipe = false;
            };

            lightbox.addEventListener("touchstart", (e) => {
                dragStart(e.touches[0].clientX, e.touches[0].clientY, e.target);
            }, { passive: true });

            lightbox.addEventListener("touchmove", (e) => {
                dragMove(e.touches[0].clientX, e.touches[0].clientY);
            }, { passive: true });

            lightbox.addEventListener("touchend", dragEnd);
            lightbox.addEventListener("touchcancel", dragEnd);

            lightbox.addEventListener("mousedown", (e) => {
                dragStart(e.clientX, e.clientY, e.target);
            });

            window.addEventListener("mousemove", (e) => {
                if (isDragging) {
                    e.preventDefault();
                    dragMove(e.clientX, e.clientY);
                }
            });

            window.addEventListener("mouseup", () => {
                if (isDragging) dragEnd();
            });
        }
    }

    // 6. Testimonials Swiper
    const testimonialsEl = document.querySelector(".testimonials-swiper-premium");
    const testimonialsWrap = document.querySelector(".testimonials-carousel");

    function initTestimonialsSwiper() {
        if (!testimonialsEl || testimonialsEl.swiper || typeof Swiper === "undefined") {
            return;
        }

        const slideCount = testimonialsEl.querySelectorAll(".swiper-slide").length;
        const paginationEl = testimonialsEl.querySelector(
            ".testimonials-pagination-premium",
        );

        const testimonialsSwiper = new Swiper(testimonialsEl, {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 24,
            speed: 500,
            rewind: slideCount > 1,
            watchOverflow: true,
            grabCursor: true,
            resistanceRatio: 0.85,
            longSwipesRatio: 0.3,
            shortSwipes: true,
            autoplay:
                slideCount > 1
                    ? {
                          delay: 5000,
                          disableOnInteraction: true,
                          pauseOnMouseEnter: true,
                      }
                    : false,
            pagination: paginationEl
                ? {
                      el: paginationEl,
                      clickable: true,
                  }
                : undefined,
            breakpoints: {
                768: {
                    slidesPerView: Math.min(2, slideCount),
                    spaceBetween: 24,
                },
                1024: {
                    slidesPerView: Math.min(3, slideCount),
                    spaceBetween: 30,
                },
            },
        });

        let resizeTimer;
        window.addEventListener("resize", () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => testimonialsSwiper.update(), 150);
        });
    }

    if (testimonialsWrap && "IntersectionObserver" in window) {
        const testimonialsObserver = new IntersectionObserver(
            (entries, observer) => {
                if (entries[0].isIntersecting) {
                    initTestimonialsSwiper();
                    observer.disconnect();
                }
            },
            { threshold: 0.15 },
        );
        testimonialsObserver.observe(testimonialsWrap);
    } else {
        initTestimonialsSwiper();
    }

    // 6.5 Interactive Commute Savings Calculator
    const slider = document.getElementById("commute-distance-slider");
    const distanceText = document.getElementById("commute-distance-text");
    const petrolCostDisplay = document.getElementById("petrol-cost-display");
    const evCostDisplay = document.getElementById("ev-cost-display");
    const savingsAmountDisplay = document.getElementById("savings-amount-display");

    if (slider && distanceText && petrolCostDisplay && evCostDisplay && savingsAmountDisplay) {
        const updateSavings = () => {
            const distance = parseInt(slider.value, 10);
            
            // Update slider value text
            distanceText.textContent = distance;
            
            // Formulas:
            // Petrol: Daily Distance * 30 days / 40 km/l mileage * 110 Petrol Price
            const petrolCost = Math.round((distance * 30 / 40) * 110);
            
            // EV: Daily Distance * 30 days / 100 km range * 15 Charge Price
            const evCost = Math.round((distance * 30 / 100) * 15);
            
            // Savings
            const monthlySavings = petrolCost - evCost;
            const yearlySavings = monthlySavings * 12;
            
            // Format currency helper
            const formatCurrency = (amount) => "₹" + amount.toLocaleString("en-IN");
            
            // Update displays
            petrolCostDisplay.textContent = formatCurrency(petrolCost);
            evCostDisplay.textContent = formatCurrency(evCost);
            savingsAmountDisplay.textContent = formatCurrency(yearlySavings);
        };
        
        // Listen for input changes
        slider.addEventListener("input", updateSavings);
        
        // Initial execution
        updateSavings();
    }

    // 7. Pre-fill Contact Form Parameters from URL
    const urlParams = new URLSearchParams(window.location.search);
    const reasonParam = urlParams.get("reason");
    const vehicleParam = urlParams.get("vehicle");

    if (reasonParam) {
        const reasonSelect = document.getElementById("enquiry-reason");
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
        const vehicleSelect = document.getElementById("enquiry-vehicle");
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
