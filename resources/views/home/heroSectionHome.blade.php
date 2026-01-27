<style>
    /* Hero section */
    .hero-section {
        position: relative;
        z-index: 1;
        height: 70vh !important;
        display: block !important;
    }
    
    /* Video styling */
    #heroVideoHome {
        opacity: 1 !important;
        visibility: visible !important;
        transition: none;
        display: block !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        z-index: 1 !important;
    }
    
    /* Sections after hero */
    .hero-section ~ section,
    .hero-section ~ footer {
        position: relative;
        background: white;
        z-index: 2;
    }
    
    /* Footer specific styling */
    footer {
        background: #1a1a1a !important;
    }
</style>

<section class="relative w-full bg-black hero-section overflow-hidden" style="height: 70vh !important;">
    <!-- Background Video -->
    <video 
        autoplay 
        loop 
        muted 
        playsinline
        preload="auto"
        class="w-full h-full object-cover pointer-events-none"
        id="heroVideoHome"
        style="opacity: 1 !important; visibility: visible !important; display: block !important; z-index: 1;"
    >
        <source src="{{ asset('video/v.mp4') }}" type="video/mp4">
        <source src="{{ url('/video/v.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('heroVideoHome');
        
        if (video) {
            console.log('Hero video element found, forcing display...');
            
            // Force all styles
            video.style.cssText = `
                opacity: 1 !important;
                visibility: visible !important;
                display: block !important;
                position: absolute !important;
                top: 0 !important;
                left: 0 !important;
                width: 100% !important;
                height: 100% !important;
                object-fit: cover !important;
                z-index: 1 !important;
            `;
            
            // Force load and play
            video.load();
            
            const playVideo = () => {
                video.play().then(() => {
                    console.log('Hero video playing successfully');
                }).catch((error) => {
                    console.log('Video play error:', error);
                });
            };
            
            if (video.readyState >= 2) {
                playVideo();
            } else {
                video.addEventListener('canplay', playVideo, { once: true });
            }
            
            // Additional fallback
            setTimeout(playVideo, 1000);
        } else {
            console.error('Hero video element not found');
        }
    });
</script>
