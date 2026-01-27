<style>
    /* Hero section - NOT FIXED */
    .hero-section {
        position: static;
        z-index: 1;
    }
    
    /* Video styling */
    #heroVideoHome {
        opacity: 1 !important;
        visibility: visible !important;
        transition: none;
    }
    
    /* Sections after hero */
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
</style>

<section class="relative w-full h-[70vh] bg-black hero-section overflow-hidden" data-scroll-element>
    <!-- Background Video -->
    <video 
        autoplay 
        loop 
        muted 
        playsinline
        preload="metadata"
        class="w-full h-full object-cover pointer-events-none"
        id="heroVideoHome"
        style="opacity: 1; visibility: visible;"
    >
        <source src="{{ asset('video/v.mp4') }}" type="video/mp4">
        <source src="{{ url('/video/v.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('heroVideoHome');
        
        // Simple video initialization
        if (video) {
            video.style.opacity = '1';
            video.style.visibility = 'visible';
            
            // Start playing immediately
            video.play().catch(function(error) {
                console.log('Video autoplay prevented:', error);
            });
        }
    });
</script>
