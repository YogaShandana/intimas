<style>
    #heroVideoGallery {
        opacity: 0;
    }
    #heroVideoGallery.loaded {
        opacity: 1;
        transition: opacity 0.5s ease-in;
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
    
    footer {
        background: #1a1a1a !important;
    }
    
    .hero-section + section {
        margin-top: -10vh;
        padding-top: 10vh;
    }
</style>

<section class="relative w-full h-[70vh] bg-gray-900 hero-section overflow-hidden">
      <!-- Background Image -->
    <img 
        src="{{ asset('img/gallery/HeroGallery.png') }}"
        alt="Gallery Hero"
        class="w-full h-full object-cover pointer-events-none fade-in-up"
        id="heroImageGallery"
    />

</section>

<script>
    (function() {
        const video = document.getElementById('heroVideoGallery');
        let hasShown = false;
        
        function showVideo() {
            if (!hasShown) {
                hasShown = true;
                requestAnimationFrame(function() {
                    video.classList.add('loaded');
                });
            }
        }
        
        video.addEventListener('canplaythrough', showVideo, { once: true });
        
        video.addEventListener('canplay', function() {
            if (!hasShown) {
                setTimeout(showVideo, 150);
            }
        }, { once: true });
        
        setTimeout(function() {
            if (!hasShown) {
                showVideo();
            }
        }, 1500);
        
        video.play().catch(function(error) {
            console.error('Play failed:', error);
            showVideo();
        });
    })();
</script>
