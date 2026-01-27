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
        style="display: block; position: absolute; top: 0; left: 0; z-index: 1;"
    >
        <source src="{{ asset('video/v.mp4') }}" type="video/mp4">
        Video not supported
    </video>
    
    <!-- Debug Info (remove after fixing) -->
    <div id="debug-info" style="position: absolute; top: 10px; left: 10px; color: white; background: rgba(0,0,0,0.7); padding: 10px; z-index: 100; font-size: 12px;">
        Video path: {{ asset('video/v.mp4') }}
    </div>
    
</section>
    
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('heroVideoHome');
    
    if (video) {
        console.log('🎬 Video element found');
        
        // Test if video file exists
        const videoSrc = '{{ asset('video/v.mp4') }}';
        console.log('📍 Video source:', videoSrc);
        
        // Test video file accessibility
        fetch(videoSrc, { method: 'HEAD' })
            .then(response => {
                if (response.ok) {
                    console.log('✅ Video file accessible, size:', response.headers.get('Content-Length'));
                    console.log('📄 Content-Type:', response.headers.get('Content-Type'));
                } else {
                    console.error('❌ Video file not accessible. Status:', response.status);
                    console.error('Response:', response);
                }
            })
            .catch(error => {
                console.error('❌ Error checking video file:', error);
            });
        
        // Force video display
        video.style.display = 'block';
        video.style.position = 'absolute';
        video.style.top = '0';
        video.style.left = '0';
        video.style.width = '100%';
        video.style.height = '100%';
        video.style.objectFit = 'cover';
        video.style.zIndex = '10';
        video.style.backgroundColor = 'black';
        
        // Set all video properties
        video.muted = true;
        video.loop = true;
        video.autoplay = true;
        video.playsInline = true;
        
        // Comprehensive event logging
        video.addEventListener('loadstart', () => console.log('🔄 Video: Load started'));
        video.addEventListener('durationchange', () => console.log('⏱️ Video: Duration =', video.duration));
        video.addEventListener('loadedmetadata', () => console.log('📊 Video: Metadata loaded'));
        video.addEventListener('loadeddata', () => {
            console.log('📥 Video: Data loaded');
            console.log('📐 Video dimensions:', video.videoWidth, 'x', video.videoHeight);
            video.play().then(() => {
                console.log('▶️ Video: Playing successfully');
            }).catch(error => {
                console.error('❌ Video play failed:', error);
            });
        });
        video.addEventListener('canplay', () => console.log('✅ Video: Can play'));
        video.addEventListener('canplaythrough', () => console.log('✅ Video: Can play through'));
        video.addEventListener('playing', () => console.log('🎬 Video: Is playing'));
        video.addEventListener('pause', () => console.log('⏸️ Video: Paused'));
        video.addEventListener('error', (e) => {
            console.error('❌ Video error:', e);
            console.error('Error code:', video.error?.code);
            console.error('Error message:', video.error?.message);
        });
        
        // Force load
        video.load();
        
    } else {
        console.error('❌ Video element not found');
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
