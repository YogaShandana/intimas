<style>
    #heroVideoHome {
        visibility: hidden;
        opacity: 0;
    }
    #heroVideoHome.loaded {
        visibility: visible;
        opacity: 1;
        transition: opacity 0.5s ease-in;
    }
    
    /* Scroll Effect Styles */
    .scroll-effect {
        transform: translateY(20px);
        opacity: 0;
        transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    
    .scroll-effect.visible {
        transform: translateY(0);
        opacity: 1;
    }
    
    /* Hero section sticky effect */
    .hero-section {
        position: sticky;
        top: 0;
        z-index: 1;
    }
    
    /* Sections overlay effect */
    .hero-section ~ section,
    .hero-section ~ footer {
        position: relative;
        z-index: 10;
        background: white;
    }
    
    /* Footer specific styling */
    footer {
        background: #1a1a1a !important;
    }
    
    /* First section after hero gets negative margin */
    .hero-section + section {
        margin-top: -10vh;
        padding-top: 10vh;
    }
    
    /* Fade in from bottom effect */
    .fade-in-up {
        transform: translateY(30px);
        opacity: 0;
        transition: all 0.6s ease-out;
    }
    
    .fade-in-up.visible {
        transform: translateY(0);
        opacity: 1;
    }
    
    /* Scale effect */
    .scale-effect {
        transform: scale(0.95);
        opacity: 0;
        transition: all 0.7s ease-out;
    }
    
    .scale-effect.visible {
        transform: scale(1);
        opacity: 1;
    }
</style>

<section class="relative w-full h-[70vh] bg-gray-900 hero-section overflow-hidden" data-scroll-element>
    <!-- Background Video -->
    <video 
        autoplay 
        loop 
        muted 
        playsinline
        preload="metadata"
        class="w-full h-full object-cover pointer-events-none scale-effect fade-in-up"
        id="heroVideoHome"
        data-scroll-element
    >
        <source src="/video/v.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
</section>

<script>
    (function() {
        const video = document.getElementById('heroVideoHome');
        let hasShown = false;
        
        function showVideo() {
            if (!hasShown) {
                hasShown = true;
                // Use requestAnimationFrame to ensure smooth transition
                requestAnimationFrame(function() {
                    video.classList.add('loaded');
                });
            }
        }
        
        // Show video when it can play through without buffering
        video.addEventListener('canplaythrough', showVideo, { once: true });
        
        // Fallback 1: Show when enough data is loaded
        video.addEventListener('canplay', function() {
            if (!hasShown) {
                setTimeout(showVideo, 150);
            }
        }, { once: true });
        
        // Fallback 2: Force show after delay
        setTimeout(function() {
            if (!hasShown) {
                showVideo();
            }
        }, 1500);
        
        // Start playing
        video.play().catch(function(error) {
            console.error('Play failed:', error);
            showVideo(); // Show even if play fails
        });
    })();

    // Scroll Effects Implementation
    (function() {
        const scrollElements = document.querySelectorAll('[data-scroll-element]');
        
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);
        
        // Observe scroll elements
        scrollElements.forEach(element => {
            observer.observe(element);
        });
        
        // Initial trigger for elements already in viewport
        setTimeout(function() {
            scrollElements.forEach(element => {
                const rect = element.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    element.classList.add('visible');
                }
            });
        }, 100);
    })();
</script>
