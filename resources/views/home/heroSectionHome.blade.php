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

<section class="relative w-full h-[70vh] bg-gray-900 hero-section overflow-hidden" data-scroll-element style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('img/home/highStandard.png') }}'); background-size: cover; background-position: center;">
    <!-- Background Video -->
    <video 
        autoplay 
        loop 
        muted 
        playsinline
        preload="none"
        class="w-full h-full object-cover pointer-events-none"
        id="heroVideoHome"
        style="position: absolute; top: 0; left: 0; z-index: 1;"
    >
        <source src="{{ asset('video/v.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
</section>
    
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('heroVideoHome');
    const section = video.closest('section');
    
    if (video && section) {
        // Function to show video when it's ready
        function showVideo() {
            video.style.display = 'block';
            video.style.opacity = '1';
            console.log('Video is now visible');
        }
        
        // Function to hide video if it fails
        function hideVideo() {
            video.style.display = 'none';
            console.log('Video hidden, showing background image');
        }
        
        // Initially hide video
        video.style.opacity = '0';
        video.style.transition = 'opacity 1s ease-in-out';
        
        // Try to load and play video
        video.addEventListener('canplay', function() {
            console.log('Video can play');
            showVideo();
        });
        
        video.addEventListener('loadeddata', function() {
            console.log('Video data loaded');
            video.play().then(() => {
                console.log('Video playing successfully');
                showVideo();
            }).catch((error) => {
                console.error('Video play failed:', error);
                hideVideo();
            });
        });
        
        video.addEventListener('error', function(e) {
            console.error('Video error:', e);
            hideVideo();
        });
        
        // Fallback: if video doesn't load within 3 seconds, hide it
        setTimeout(() => {
            if (video.style.opacity === '0') {
                console.log('Video timeout, showing background');
                hideVideo();
            }
        }, 3000);
        
        // Load the video
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
