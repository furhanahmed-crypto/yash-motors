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

    // 5. Premium Lightbox Gallery (3-slide track for smooth drag)
    const galleryItems = document.querySelectorAll(".gallery-item-premium");
    const lightbox = document.getElementById("lightbox");
    const lightboxTrack = document.getElementById("lightbox-track");
    const lightboxImg = document.getElementById("lightbox-image");
    const lightboxImgPrev = document.getElementById("lightbox-image-prev");
    const lightboxImgNext = document.getElementById("lightbox-image-next");
    const lightboxClose = document.getElementById("lightbox-close");
    const lightboxPrev = document.getElementById("lightbox-prev");
    const lightboxNext = document.getElementById("lightbox-next");

    if (
        galleryItems.length > 0 &&
        lightbox &&
        lightboxTrack &&
        lightboxImg &&
        lightboxImgPrev &&
        lightboxImgNext
    ) {
        let currentIndex = 0;
        let isDragging = false;
        let isAnimating = false;
        const lightboxContent = lightbox.querySelector(
            ".lightbox-content-premium",
        );
        const imagesList = Array.from(galleryItems).map((item) => {
            const img = item.querySelector("img");
            return {
                src: img.getAttribute("src"),
                alt: img.getAttribute("alt"),
            };
        });
        const canSwipe = imagesList.length > 1;

        const preloadImages = () => {
            imagesList.forEach((item) => {
                const img = new Image();
                img.src = item.src;
            });
        };

        const getSlideWidth = () =>
            lightboxContent ? lightboxContent.offsetWidth : 0;

        const setSlideImage = (element, index) => {
            element.src = imagesList[index].src;
            element.alt = imagesList[index].alt;
        };

        const updateSlides = () => {
            const len = imagesList.length;
            const prevIdx = (currentIndex - 1 + len) % len;
            const nextIdx = (currentIndex + 1) % len;
            setSlideImage(lightboxImgPrev, prevIdx);
            setSlideImage(lightboxImg, currentIndex);
            setSlideImage(lightboxImgNext, nextIdx);
        };

        const setTrackPosition = (deltaPx, animate) => {
            const slideWidth = getSlideWidth();
            lightboxTrack.style.transition = animate
                ? "transform 0.35s var(--ease)"
                : "none";
            lightboxTrack.style.transform = `translateX(${-slideWidth + deltaPx}px)`;
        };

        const resetTrack = (animate) => setTrackPosition(0, animate);

        const clearDragState = () => {
            isDragging = false;
            lightboxTrack.classList.remove("is-dragging");
            if (lightboxContent) {
                lightboxContent.classList.remove("is-dragging");
            }
        };

        const afterSlideChange = (direction) => {
            if (direction === "next") {
                currentIndex = (currentIndex + 1) % imagesList.length;
            } else {
                currentIndex =
                    (currentIndex - 1 + imagesList.length) %
                    imagesList.length;
            }
            updateSlides();
            resetTrack(false);
            isAnimating = false;
        };

        const commitSlide = (direction) => {
            if (!canSwipe || isAnimating) return;
            isAnimating = true;
            const slideWidth = getSlideWidth();
            const targetDelta = direction === "next" ? -slideWidth : slideWidth;
            setTrackPosition(targetDelta, true);

            lightboxTrack.addEventListener(
                "transitionend",
                () => afterSlideChange(direction),
                { once: true },
            );
        };

        const openLightbox = (index) => {
            currentIndex = index;
            preloadImages();
            updateSlides();
            lightbox.removeAttribute("hidden");
            document.body.style.overflow = "hidden";
            requestAnimationFrame(() => resetTrack(false));
        };

        const closeLightbox = () => {
            lightbox.setAttribute("hidden", "");
            document.body.style.overflow = "";
            isAnimating = false;
            clearDragState();
            lightboxImg.src = "";
            lightboxImgPrev.src = "";
            lightboxImgNext.src = "";
        };

        const showNext = (animate) => {
            if (!canSwipe) return;
            if (animate) {
                commitSlide("next");
            } else {
                currentIndex = (currentIndex + 1) % imagesList.length;
                updateSlides();
                resetTrack(false);
            }
        };

        const showPrev = (animate) => {
            if (!canSwipe) return;
            if (animate) {
                commitSlide("prev");
            } else {
                currentIndex =
                    (currentIndex - 1 + imagesList.length) %
                    imagesList.length;
                updateSlides();
                resetTrack(false);
            }
        };

        galleryItems.forEach((item) => {
            item.addEventListener("click", () => {
                const index = parseInt(
                    item.getAttribute("data-gallery-index"),
                    10,
                );
                openLightbox(index);
            });
        });

        lightboxClose.addEventListener("click", closeLightbox);
        lightboxNext.addEventListener("click", () => showNext(false));
        lightboxPrev.addEventListener("click", () => showPrev(false));

        lightbox
            .querySelector(".lightbox-backdrop")
            .addEventListener("click", closeLightbox);

        document.addEventListener("keydown", (e) => {
            if (lightbox.hasAttribute("hidden")) return;
            if (e.key === "Escape") closeLightbox();
            if (e.key === "ArrowRight") showNext(false);
            if (e.key === "ArrowLeft") showPrev(false);
        });

        if (lightboxContent && canSwipe) {
            let dragStartX = 0;
            let dragCurrentX = 0;
            const dragThreshold = 60;

            const onDragStart = (clientX) => {
                if (
                    lightbox.hasAttribute("hidden") ||
                    isAnimating ||
                    !canSwipe
                ) {
                    return;
                }
                updateSlides();
                dragStartX = clientX;
                dragCurrentX = clientX;
                isDragging = true;
                lightboxTrack.classList.add("is-dragging");
                lightboxContent.classList.add("is-dragging");
            };

            const onDragMove = (clientX) => {
                if (!isDragging) return;
                dragCurrentX = clientX;
                setTrackPosition(dragCurrentX - dragStartX, false);
            };

            const onDragEnd = () => {
                if (!isDragging) return;
                clearDragState();

                const delta = dragCurrentX - dragStartX;

                if (delta < -dragThreshold) {
                    commitSlide("next");
                } else if (delta > dragThreshold) {
                    commitSlide("prev");
                } else {
                    resetTrack(true);
                }
            };

            const isLightboxDragTarget = (target) =>
                !target.closest(
                    "button, .lightbox-close-premium, .lightbox-nav-premium",
                );

            const bindDragEvents = (element) => {
                element.addEventListener(
                    "touchstart",
                    (e) => {
                        if (!isLightboxDragTarget(e.target)) return;
                        onDragStart(e.touches[0].clientX);
                    },
                    { passive: true },
                );

                element.addEventListener(
                    "touchmove",
                    (e) => {
                        if (!isDragging) return;
                        onDragMove(e.touches[0].clientX);
                    },
                    { passive: true },
                );

                element.addEventListener("touchend", onDragEnd);
                element.addEventListener("touchcancel", onDragEnd);
            };

            bindDragEvents(lightboxContent);
            bindDragEvents(lightbox);

            lightboxContent.addEventListener("mousedown", (e) => {
                if (!isLightboxDragTarget(e.target)) return;
                e.preventDefault();
                onDragStart(e.clientX);
            });

            window.addEventListener("mousemove", (e) => {
                if (!isDragging) return;
                onDragMove(e.clientX);
            });

            window.addEventListener("mouseup", () => {
                if (isDragging) onDragEnd();
            });

            window.addEventListener("resize", () => {
                if (!lightbox.hasAttribute("hidden")) {
                    resetTrack(false);
                }
            });
        }
    }

    // 6. Testimonials Swiper JS Initialization
    if (typeof Swiper !== "undefined") {
        new Swiper(".testimonials-swiper-premium", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: ".testimonials-pagination-premium",
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
                },
            },
            speed: 800,
            grabCursor: true,
        });
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
