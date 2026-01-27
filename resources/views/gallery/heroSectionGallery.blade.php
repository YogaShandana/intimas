<style>
    #heroVideoGallery {
        opacity: 0;
    }
    #heroVideoGallery.loaded {
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
</style>

<section class="relative w-full h-[70vh] bg-gray-900 hero-section overflow-hidden">
      <!-- Background Image -->
    <img 
        src="{{ asset('img/gallery/heroGallery.png') }}"
        alt="Gallery Hero"
        class="w-full h-full object-cover pointer-events-none fade-in-up"
        id="heroImageGallery"
    />

</section>

<script>
    (function() {
        const image = document.getElementById('heroImageGallery');
        
        if (image) {
            // Show image with fade-in effect
            image.addEventListener('load', function() {
                image.style.opacity = '1';
            });
            
            // If image is already loaded
            if (image.complete) {
                image.style.opacity = '1';
            }
        }
    })();
</script>
