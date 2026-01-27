<style>
    #heroVideoHome {
        opacity: 0;
    }
    #heroVideoHome.loaded {
        opacity: 1;
        transition: opacity 0.5s ease-in;
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
    
    footer {
        background: #1a1a1a !important;
    }
    
    /* Fade effects */
    .fade-in-up {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s ease-out;
    }
    
    .fade-in-up.loaded {
        opacity: 1;
        transform: translateY(0);
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
        class="w-full h-full object-cover pointer-events-none fade-in-up"
    >
        <source src="{{ asset('video/v.mp4') }}" type="video/mp4">
        <source src="{{ url('/video/v.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
</section>
    
</section>

<script>
<script>
    (function() {
        const video = document.getElementById('heroVideoHome');
        
        if (video) {
            // Show video with fade-in effect
            video.addEventListener('loadeddata', function() {
                video.classList.add('loaded');
                video.play().catch(() => {
                    // Silent fail
                });
            });
            
            // If video is ready
            if (video.readyState >= 2) {
                video.classList.add('loaded');
            }
            
            video.load();
        }
    })();
</script>
