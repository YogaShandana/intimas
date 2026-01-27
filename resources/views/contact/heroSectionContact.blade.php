<style>
    #heroImageContact {
        opacity: 0;
    }
    #heroImageContact.loaded {
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

<section class="relative w-full h-[70vh] bg-gray-900 hero-section overflow-hidden">
      <!-- Background Image -->
    <img 
        src="{{ asset('img/contact/heroContact.png') }}"
        alt="Contact Hero"
        class="w-full h-full object-cover pointer-events-none fade-in-up"
        id="heroImageContact"
    />
</section>

<script>
    (function() {
        const image = document.getElementById('heroImageContact');
        
        if (image) {
            // Show image with fade-in effect
            image.addEventListener('load', function() {
                image.classList.add('loaded');
            });
            
            // If image is already loaded
            if (image.complete) {
                image.classList.add('loaded');
            }
        }
    })();
</script>
