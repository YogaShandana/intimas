<style>
    #heroVideoHome {
        visibility: visible;
        opacity: 1;
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
    
    /* Hero section */
    .hero-section {
        position: static;
        z-index: 1;
    }
    
    /* Ensure normal document flow */
    .hero-section ~ section,
    .hero-section ~ footer {
        position: static;
        background: white;
        z-index: auto;
    }
    
    /* Footer specific styling */
    footer {
        background: #1a1a1a !important;
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

<section class="relative w-full h-[70vh] bg-black hero-section overflow-hidden" data-scroll-element>
    <!-- Background Video -->
    <video 
        id="heroVideoHome"
        autoplay 
        loop 
        muted 
        playsinline
        preload="auto"
        class="w-full h-full object-cover"
    >
        <source src="{{ asset('video/v.mp4') }}" type="video/mp4">
        <source src="{{ url('/video/v.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
</section>
    
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('heroVideoHome');
    
    if (video) {
        // Set video properties
        video.muted = true;
        video.loop = true;
        video.autoplay = true;
        video.playsInline = true;
        
        // Load and play video
        video.addEventListener('loadeddata', () => {
            video.play().catch(() => {
                // Silent fail - video will try to autoplay
            });
        });
        
        video.load();
    }
});

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
