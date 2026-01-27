<section class="content-home-2 py-16 bg-white overflow-hidden">
    <div class="container mx-auto px-4">
        <!-- Title -->
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-8 fade-in-up" data-aos="fade-down">
            Quality Seafood
        </h2>

        <!-- Description -->
        <div class="text-center mb-8 fade-in-up animate-delay-200" data-aos="fade-up" data-aos-delay="100">
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Premium tuna products processed to international standards with guaranteed freshness and quality.
            </p>
        </div>

        <!-- Tuna Products Carousel -->
        <div class="relative mb-12 slide-up animate-delay-300" data-aos="fade-up">
            <div class="product-carousel-container overflow-hidden">
                <div class="product-track flex gap-6">
                    <!-- Tuna Product Images -->
                    @php
                        $tunaImages = [
                            'Tuna Portion.png',
                            'Tuna Portion 2.png',
                            'Tuna Portion 3.png',
                            'Tuna Saku 2.png',
                            'sashimi saku.png',
                            'sashimi tuna cube.png',
                            'sashimi tuna otoro.png',
                            'sashimi tuna silce.png',
                            'tuna cube.png',
                            'tuna cube 2.png',
                            'tuna loin.png',
                            'tuna loin 2.png',
                            'tuna loin 3.png',
                            'tuna minced.png',
                            'tuna saku.png',
                            'tuna steak.png',
                            'tuna steak 2.png',
                            'tuna strip.png'
                        ];
                    @endphp
                    
                    @foreach ($tunaImages as $image)
                    <div class="product-item flex-shrink-0 w-64 md:w-64 group cursor-pointer transform hover:scale-105 transition-transform duration-300">
                        <div class="mb-4 transition-transform duration-300 group-hover:-translate-y-2">
                            <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg">
                                <img src="{{ asset('img/ourProduct/tuna/' . $image) }}" alt="{{ pathinfo($image, PATHINFO_FILENAME) }}" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h3 class="text-lg md:text-lg font-medium text-center text-gray-900 group-hover:text-[#2a3891] transition-colors">
                            {{ trim(ucwords(preg_replace('/\d+/', '', str_replace(['.png', '-', '_'], ['', ' ', ' '], pathinfo($image, PATHINFO_FILENAME))))) }}
                        </h3>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- CTA Button -->
        <div class="text-center mb-16 fade-in-up animate-delay-400" data-aos="fade-up" data-aos-delay="200">
            <a href="/product" class="inline-block px-12 py-3 bg-[#2a3891] text-white font-medium rounded hover:bg-[#1e2a6e] transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 duration-300">
                All Products
            </a>
        </div>

        <!-- Certifications -->
        <div class="flex justify-center items-center scale-in animate-delay-500" data-aos="fade-up" data-aos-delay="400">
            <img src="{{ asset('img/sertif.png') }}" alt="Certifications" class="max-w-full h-auto md:h-40 object-contain opacity-90 hover:opacity-100 transition-opacity">
        </div>
    </div>
</section>

<style>
    /* Infinite Scroll Animation for Tuna Products */
    @keyframes scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(-264px * 18)); } /* 18 items x (256px + 8px gap) */
    }

    .product-track {
        animation: scroll 150s linear infinite;
        width: max-content;
    }

    .product-carousel-container:hover .product-track {
        animation-play-state: paused;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Clone items for infinite scroll effect
        const productTrack = document.querySelector('.product-track');
        if (productTrack) {
            const productItems = productTrack.innerHTML;
            productTrack.innerHTML = productItems + productItems; // Duplicate content for seamless loop
        }
    });
</script>
