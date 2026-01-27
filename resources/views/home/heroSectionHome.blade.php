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
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.8s ease-in;
        display: block !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        z-index: 1 !important;
    }
    
    #heroVideoHome.loaded {
        opacity: 1 !important;
        visibility: visible !important;
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
            console.log('Hero video element found, initializing fade effect...');
            
            function showVideo() {
                setTimeout(function() {
                    video.classList.add('loaded');
                    console.log('Hero video fade-in applied');
                }, 200);
            }
            
            // Show video when ready to play
            const playVideo = () => {
                video.play().then(() => {
                    console.log('Hero video playing successfully');
                    showVideo();
                }).catch((error) => {
                    console.log('Video play error:', error);
                    showVideo(); // Show even if play fails
                });
            };
            
            if (video.readyState >= 2) {
                playVideo();
            } else {
                video.addEventListener('canplay', playVideo, { once: true });
            }
            
            // Fallback: force show after delay
            setTimeout(function() {
                if (!video.classList.contains('loaded')) {
                    showVideo();
                }
            }, 1500);
        } else {
            console.error('Hero video element not found');
        }
    });
</script>
