// ===== MAIN APPLICATION SCRIPT =====

class LPMaarifPortal {
    constructor() {
        this.init();
    }

    init() {
        this.setupSmoothScrolling();
        this.setupActiveNavigation();
        this.setupCounterAnimation();
        this.setupScrollAnimations();
        this.setupLazyLoading();
        this.setupPerformanceOptimization();
    }

    // Smooth scrolling for navigation links
    setupSmoothScrolling() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                e.preventDefault();
                const target = document.querySelector(anchor.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80; // Account for fixed navbar
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // Active navigation highlighting
    setupActiveNavigation() {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        
        const updateActiveLink = () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                const sectionHeight = section.clientHeight;
                if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        };

        window.addEventListener('scroll', this.throttle(updateActiveLink, 100));
    }

    // Counter animation for statistics
    setupCounterAnimation() {
        const animateCounters = () => {
            const counters = document.querySelectorAll('.stats-number');
            
            counters.forEach(counter => {
                if (counter.classList.contains('animated')) return;
                
                const target = parseInt(counter.getAttribute('data-count'));
                const duration = 2000;
                const increment = target / (duration / 16);
                let current = 0;
                
                counter.classList.add('animated');
                
                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        if (target >= 1000000) {
                            counter.textContent = (Math.floor(current / 1000000)) + ' Juta+';
                        } else if (target >= 1000) {
                            counter.textContent = Math.floor(current).toLocaleString() + '+';
                        } else {
                            counter.textContent = Math.floor(current) + ' Tahun';
                        }
                        requestAnimationFrame(updateCounter);
                    } else {
                        if (target >= 1000000) {
                            counter.textContent = (Math.floor(target / 1000000)) + ' Juta+';
                        } else if (target >= 1000) {
                            counter.textContent = target.toLocaleString() + '+';
                        } else {
                            counter.textContent = target + ' Tahun';
                        }
                    }
                };
                
                updateCounter();
            });
        };

        // Intersection Observer for counter animation
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                }
            });
        }, observerOptions);

        const statsSection = document.querySelector('#statistik');
        if (statsSection) {
            observer.observe(statsSection);
        }
    }

    // Scroll animations for elements
    setupScrollAnimations() {
        const animateElements = document.querySelectorAll('.animate__animated');
        
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    if (!element.classList.contains('animate__fadeInUp')) {
                        element.classList.add('animate__fadeInUp');
                    }
                }
            });
        }, observerOptions);

        animateElements.forEach(element => {
            observer.observe(element);
        });
    }

    // Lazy loading for images
    setupLazyLoading() {
        const images = document.querySelectorAll('img[data-src]');
        
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

        images.forEach(img => imageObserver.observe(img));
    }

    // Performance optimization
    setupPerformanceOptimization() {
        // Preload important resources
        this.preloadCriticalResources();
        
        // Optimize scroll performance
        this.optimizeScrollPerformance();
        
        // Setup service worker (if supported)
        this.setupServiceWorker();
    }

    preloadCriticalResources() {
        const criticalResources = [
            './assets/img/LOGO-MAARIF-WEB.jpg',
            './assets/img/Sipinter-LPMaarifNU.jpg'
        ];

        criticalResources.forEach(resource => {
            const link = document.createElement('link');
            link.rel = 'preload';
            link.href = resource;
            link.as = 'image';
            document.head.appendChild(link);
        });
    }

    optimizeScrollPerformance() {
        // Use passive listeners for better performance
        document.addEventListener('scroll', this.throttle(() => {
            // Scroll-based animations can be added here
        }, 16), { passive: true });
    }

    setupServiceWorker() {
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then(registration => {
                        console.log('SW registered: ', registration);
                    })
                    .catch(registrationError => {
                        console.log('SW registration failed: ', registrationError);
                    });
            });
        }
    }

    // Utility function for throttling
    throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        }
    }

    // Utility function for debouncing
    debounce(func, wait, immediate) {
        let timeout;
        return function() {
            const context = this, args = arguments;
            const later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            const callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    }
}

// Additional utility functions
const LPMaarifUtils = {
    // Format number with Indonesian locale
    formatNumber: (num) => {
        return new Intl.NumberFormat('id-ID').format(num);
    },

    // Get current date in Indonesian format
    getCurrentDate: () => {
        return new Intl.DateTimeFormat('id-ID', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        }).format(new Date());
    },

    // Smooth scroll to element
    scrollToElement: (elementId, offset = 80) => {
        const element = document.getElementById(elementId);
        if (element) {
            const elementPosition = element.offsetTop - offset;
            window.scrollTo({
                top: elementPosition,
                behavior: 'smooth'
            });
        }
    },

    // Check if element is in viewport
    isInViewport: (element) => {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
};

// Initialize the application when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new LPMaarifPortal();
    
    // Add loading animation
    const loader = document.querySelector('.loader');
    if (loader) {
        setTimeout(() => {
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 300);
        }, 1000);
    }
});

// Handle page visibility for performance
document.addEventListener('visibilitychange', () => {
    if (document.hidden) {
        // Page is hidden, pause non-essential animations
        document.body.classList.add('page-hidden');
    } else {
        // Page is visible, resume animations
        document.body.classList.remove('page-hidden');
    }
});

// Export for use in other scripts
window.LPMaarif = {
    Portal: LPMaarifPortal,
    Utils: LPMaarifUtils
};