<section class="content-home-3 relative py-20 lg:py-32 flex items-center justify-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('img/home/highStandard.png') }}" 
             alt="High Standard Quality Control" 
             class="w-full h-full object-cover"
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;"
             onload="console.log('High Standard image loaded and positioned');">
        <div class="absolute inset-0 bg-black bg-opacity-40" style="z-index: 2;"></div>
    </div>

    <!-- Content -->
    <div class="container mx-auto px-6 lg:px-8 relative z-10 text-center text-white max-w-4xl" style="z-index: 10;">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-8 fade-in-up leading-tight" data-aos="fade-down">
            High Standard in Quality Control
        </h2>
        
        <p class="text-lg md:text-xl font-light leading-relaxed fade-in-up animate-delay-300" data-aos="fade-up" data-aos-delay="200">
            We apply strict quality control at every production stage to ensure each product meets international safety, 
            hygiene, and freshness standards.
        </p>
    </div>
</section>

<style>
    .content-home-3 {
        /* Fallback background color */
        background-color: #2a3891;
        min-height: 60vh;
        position: relative;
    }
    
    .content-home-3 .absolute.inset-0.z-0 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
    }
    
    .content-home-3 .absolute.inset-0.z-0 img {
        display: block !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        object-position: center !important;
        z-index: 1 !important;
    }
    
    /* Enhanced text styling */
    .content-home-3 h2 {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .content-home-3 p {
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        line-height: 1.8;
    }
    
    /* Mobile optimizations */
    @media (max-width: 768px) {
        .content-home-3 {
            min-height: 50vh;
        }
    }
</style>
