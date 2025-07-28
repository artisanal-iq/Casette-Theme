/**
 * Cassette Brutal Grid Theme JavaScript
 * 
 * @package CassetteBrutalGrid
 * @since 1.0.0
 */

(function() {
    'use strict';
    
    // Utility functions
    const utils = {
        // Debounce function for performance
        debounce: function(func, wait, immediate) {
            let timeout;
            return function executedFunction() {
                const context = this;
                const args = arguments;
                const later = function() {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };
                const callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func.apply(context, args);
            };
        },
        
        // Check if element is in viewport
        isInViewport: function(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        },
        
        // Smooth scroll to element
        scrollToElement: function(element, offset = 0) {
            const elementPosition = element.getBoundingClientRect().top + window.pageYOffset;
            const offsetPosition = elementPosition - offset;
            
            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    };
    
    // Theme initialization
    const CassetteBrutalTheme = {
        init: function() {
            this.setupMobileMenu();
            this.setupSearchOverlay();
            this.setupThemeToggle();
            this.setupBackToTop();
            this.setupSmoothScrolling();
            this.setupAnimations();
            this.setupInteractiveElements();
            this.setupResourceFiltering();
            this.setupAccessibility();
            this.setupPerformanceOptimizations();
        },
        
        // Mobile menu functionality
        setupMobileMenu: function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const mobileMenu = document.querySelector('.mobile-menu');
            
            if (!menuToggle || !mobileMenu) return;
            
            menuToggle.addEventListener('click', function() {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
                
                // Trap focus in mobile menu when open
                if (!isExpanded) {
                    const focusableElements = mobileMenu.querySelectorAll('a, button, input, textarea, select');
                    if (focusableElements.length > 0) {
                        focusableElements[0].focus();
                    }
                }
            });
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!menuToggle.contains(e.target) && !mobileMenu.contains(e.target)) {
                    menuToggle.setAttribute('aria-expanded', 'false');
                    mobileMenu.classList.add('hidden');
                }
            });
            
            // Close mobile menu on escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
                    menuToggle.setAttribute('aria-expanded', 'false');
                    mobileMenu.classList.add('hidden');
                    menuToggle.focus();
                }
            });
        },
        
        // Search overlay functionality
        setupSearchOverlay: function() {
            const searchToggle = document.querySelector('.search-toggle');
            const searchOverlay = document.querySelector('.search-overlay');
            const searchClose = document.querySelector('.search-close');
            const searchField = document.querySelector('.search-field');
            
            if (!searchToggle || !searchOverlay) return;
            
            // Open search overlay
            searchToggle.addEventListener('click', function() {
                searchOverlay.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
                
                if (searchField) {
                    setTimeout(() => {
                        searchField.focus();
                        searchField.select();
                    }, 100);
                }
            });
            
            // Close search overlay
            const closeSearch = function() {
                searchOverlay.classList.add('hidden');
                document.body.style.overflow = '';
                searchToggle.focus();
            };
            
            if (searchClose) {
                searchClose.addEventListener('click', closeSearch);
            }
            
            // Close on overlay click
            searchOverlay.addEventListener('click', function(e) {
                if (e.target === searchOverlay) {
                    closeSearch();
                }
            });
            
            // Close on escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !searchOverlay.classList.contains('hidden')) {
                    closeSearch();
                }
            });
        },
        
        // Dark mode toggle functionality
        setupThemeToggle: function() {
            const themeToggle = document.querySelector('.theme-toggle');
            const sunIcon = document.querySelector('.sun-icon');
            const moonIcon = document.querySelector('.moon-icon');
            
            if (!themeToggle) return;
            
            // Check for saved theme preference or default to system preference
            const savedTheme = localStorage.getItem('cassette-brutal-theme');
            const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const currentTheme = savedTheme || (systemPrefersDark ? 'dark' : 'light');
            
            this.setTheme(currentTheme);
            
            // Toggle theme
            themeToggle.addEventListener('click', () => {
                const currentTheme = document.documentElement.getAttribute('data-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                this.setTheme(newTheme);
            });
            
            // Listen for system theme changes
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
                if (!localStorage.getItem('cassette-brutal-theme')) {
                    this.setTheme(e.matches ? 'dark' : 'light');
                }
            });
        },
        
        // Set theme helper function
        setTheme: function(theme) {
            document.documentElement.setAttribute('data-theme', theme);
            localStorage.setItem('cassette-brutal-theme', theme);
            
            const sunIcon = document.querySelector('.sun-icon');
            const moonIcon = document.querySelector('.moon-icon');
            
            if (theme === 'dark') {
                sunIcon?.classList.add('hidden');
                moonIcon?.classList.remove('hidden');
            } else {
                sunIcon?.classList.remove('hidden');
                moonIcon?.classList.add('hidden');
            }
            
            // Dispatch custom event for theme change
            window.dispatchEvent(new CustomEvent('themeChanged', { detail: { theme } }));
        },
        
        // Back to top button functionality
        setupBackToTop: function() {
            const backToTopButton = document.getElementById('back-to-top');
            if (!backToTopButton) return;
            
            const toggleVisibility = utils.debounce(function() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.remove('opacity-0', 'invisible');
                    backToTopButton.classList.add('opacity-100', 'visible');
                } else {
                    backToTopButton.classList.add('opacity-0', 'invisible');
                    backToTopButton.classList.remove('opacity-100', 'visible');
                }
            }, 100);
            
            window.addEventListener('scroll', toggleVisibility);
            
            backToTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        },
        
        // Smooth scrolling for anchor links
        setupSmoothScrolling: function() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href === '#') return;
                    
                    const target = document.querySelector(href);
                    if (target) {
                        e.preventDefault();
                        utils.scrollToElement(target, 80);
                    }
                });
            });
        },
        
        // Enhanced animations and scroll effects
        setupAnimations: function() {
            // Intersection Observer for scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const animateOnScroll = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in');
                        
                        // Add staggered animation for child elements
                        const children = entry.target.querySelectorAll('.card, .post-entry, .widget');
                        children.forEach((child, index) => {
                            setTimeout(() => {
                                child.classList.add('animate-slide-up');
                            }, index * 100);
                        });
                    }
                });
            }, observerOptions);
            
            // Observe elements for animation
            document.querySelectorAll('.section, .card, .post-entry, .widget').forEach(el => {
                animateOnScroll.observe(el);
            });
            
            // Parallax effect for hero section
            const heroSection = document.querySelector('.hero-section');
            if (heroSection) {
                const parallaxScroll = utils.debounce(function() {
                    const scrolled = window.pageYOffset;
                    const rate = scrolled * -0.5;
                    heroSection.style.transform = `translateY(${rate}px)`;
                }, 10);
                
                window.addEventListener('scroll', parallaxScroll);
            }
        },
        
        // Interactive elements enhancements
        setupInteractiveElements: function() {
            // Enhanced button interactions
            document.querySelectorAll('.interactive').forEach(element => {
                element.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                });
                
                element.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
                
                element.addEventListener('mousedown', function() {
                    this.style.transform = 'translateY(0) scale(0.98)';
                });
                
                element.addEventListener('mouseup', function() {
                    this.style.transform = 'translateY(-2px) scale(1)';
                });
            });
            
            // Card hover effects
            document.querySelectorAll('.card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    if (this.classList.contains('interactive')) {
                        this.style.boxShadow = 'var(--shadow-lg)';
                    }
                });

                card.addEventListener('mouseleave', function() {
                    this.style.boxShadow = '';
                });
            });
        },

        // Resources page filtering
        setupResourceFiltering: function() {
            const buttons = document.querySelectorAll('#resources-cards .filter-btn');
            const cards = document.querySelectorAll('#resources-cards .resource-card');

            if (!buttons.length || !cards.length) return;

            buttons.forEach(btn => {
                btn.addEventListener('click', function() {
                    const category = this.dataset.filter;
                    buttons.forEach(b => b.classList.toggle('active', b === this));
                    cards.forEach(card => {
                        if (category === 'all' || card.dataset.category === category) {
                            card.classList.remove('hidden');
                        } else {
                            card.classList.add('hidden');
                        }
                    });
                });
            });
        },
        
        // Accessibility enhancements
        setupAccessibility: function() {
            // Skip link functionality
            const skipLink = document.querySelector('.skip-link');
            if (skipLink) {
                skipLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.focus();
                        target.scrollIntoView();
                    }
                });
            }
            
            // Focus management for modals and overlays
            document.addEventListener('keydown', function(e) {
                // Tab trapping for search overlay
                const searchOverlay = document.querySelector('.search-overlay');
                if (!searchOverlay.classList.contains('hidden') && e.key === 'Tab') {
                    const focusableElements = searchOverlay.querySelectorAll(
                        'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
                    );
                    const firstElement = focusableElements[0];
                    const lastElement = focusableElements[focusableElements.length - 1];
                    
                    if (e.shiftKey && document.activeElement === firstElement) {
                        e.preventDefault();
                        lastElement.focus();
                    } else if (!e.shiftKey && document.activeElement === lastElement) {
                        e.preventDefault();
                        firstElement.focus();
                    }
                }
            });
            
            // Announce theme changes to screen readers
            window.addEventListener('themeChanged', function(e) {
                const announcement = document.createElement('div');
                announcement.setAttribute('aria-live', 'polite');
                announcement.setAttribute('aria-atomic', 'true');
                announcement.className = 'sr-only';
                announcement.textContent = `Theme changed to ${e.detail.theme} mode`;
                document.body.appendChild(announcement);
                
                setTimeout(() => {
                    document.body.removeChild(announcement);
                }, 1000);
            });
        },
        
        // Performance optimizations
        setupPerformanceOptimizations: function() {
            // Lazy load images
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                            imageObserver.unobserve(img);
                        }
                    });
                });
                
                document.querySelectorAll('img[data-src]').forEach(img => {
                    imageObserver.observe(img);
                });
            }
            
            // Preload critical resources
            const preloadLink = document.createElement('link');
            preloadLink.rel = 'preload';
            preloadLink.as = 'font';
            preloadLink.type = 'font/woff2';
            preloadLink.crossOrigin = 'anonymous';
            preloadLink.href = 'https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyfAZ9hiJ-Ek-_EeA.woff2';
            document.head.appendChild(preloadLink);
            
            // Optimize scroll performance
            let ticking = false;
            const optimizedScroll = function() {
                if (!ticking) {
                    requestAnimationFrame(function() {
                        // Scroll-dependent operations here
                        ticking = false;
                    });
                    ticking = true;
                }
            };
            
            window.addEventListener('scroll', optimizedScroll);
        }
    };
    
    // Initialize theme when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            CassetteBrutalTheme.init();
        });
    } else {
        CassetteBrutalTheme.init();
    }
    
    // Expose theme object globally for extensibility
    window.CassetteBrutalTheme = CassetteBrutalTheme;
    
})();

