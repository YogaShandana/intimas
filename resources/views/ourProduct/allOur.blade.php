<section class="content-home-2 py-16 bg-white overflow-hidden">
    <div class="container mx-auto px-4">
        <!-- Title -->
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12 fade-in-up" data-aos="fade-down">
            All Our Products
        </h2>

        <!-- Tuna 1 Products Carousel -->
        <div class="relative mb-12 slide-up animate-delay-200" data-aos="fade-up">
            <div class="product-carousel-container overflow-hidden">
                    <!-- Tuna 1 Product Images -->
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
                        ];
                    @endphp
                    <div class="product-track flex gap-6" style="--item-count: {{ count($tunaImages) }}">
                    
                    @foreach ($tunaImages as $image)
                    <div class="product-item flex-shrink-0 w-32 md:w-64 group cursor-pointer transform hover:scale-105 transition-transform duration-300">
                        <div class="mb-4 transition-transform duration-300 group-hover:-translate-y-2">
                            <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg">
                                <img src="{{ asset('img/ourProduct/tuna/' . $image) }}" alt="{{ pathinfo($image, PATHINFO_FILENAME) }}" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h3 class="text-sm md:text-lg font-medium text-center text-gray-900 group-hover:text-[#2a3891] transition-colors">
                            {{ trim(ucwords(preg_replace('/\d+/', '', str_replace(['.png', '-', '_'], ['', ' ', ' '], pathinfo($image, PATHINFO_FILENAME))))) }}
                        </h3>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

         <!-- Tuna 2 Products Carousel -->
        <div class="relative mb-12 slide-up animate-delay-400" data-aos="fade-up">
            <div class="product-carousel-container overflow-hidden">
                    <!-- Tuna 2 Product Images -->
                    @php
                        $tunaImages2 = [
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
                    <div class="product-track product-track-reverse flex gap-6" style="--item-count: {{ count($tunaImages2) }}">
                    
                    @foreach ($tunaImages2 as $image)
                    <div class="product-item flex-shrink-0 w-32 md:w-64 group cursor-pointer transform hover:scale-105 transition-transform duration-300">
                        <div class="mb-4 transition-transform duration-300 group-hover:-translate-y-2">
                            <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg">
                                <img src="{{ asset('img/ourProduct/tuna/' . $image) }}" alt="{{ pathinfo($image, PATHINFO_FILENAME) }}" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h3 class="text-sm md:text-lg font-medium text-center text-gray-900 group-hover:text-[#2a3891] transition-colors">
                            {{ trim(ucwords(preg_replace('/\d+/', '', str_replace(['.png', '-', '_'], ['', ' ', ' '], pathinfo($image, PATHINFO_FILENAME))))) }}
                        </h3>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

            <!-- Text Content -->
            <p class="text-lg leading-relaxed mb-12 max-w-3xl mx-auto text-center fade-in-up animate-delay-600">
                PT Intimas Surya also offers high-quality seafood products beyond tuna for both local and export markets.
            </p>

        <!-- CTA Button -->
        <div class="text-center mb-16 scale-in animate-delay-800" data-aos="fade-up" data-aos-delay="200">
            <button id="toggleLainnyaBtn" class="inline-flex items-center justify-center space-x-3 px-10 py-3 bg-[#2a3891] rounded text-white font-medium text-base hover:bg-[#1e2a6e] transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 duration-300">
                <span>See More</span>
                <i id="chevronIcon" class="fas fa-chevron-down transition-transform duration-300"></i>
            </button>
        </div>

         <!-- lainnya Products Carousel -->
        <div id="lainnyaCarousel" class="relative mb-12 hidden fade-in-up" data-aos="fade-up">
            <div class="product-carousel-container overflow-hidden">
                    <!-- lainnya Product Images -->
                    @php
                        $lainnyaImages = [
                            'Albacore Cube.jpg.png',
                            'Albacore Strip.jpg.png',
                            'Albacore Tuna slice.jpg.png',
                            'Albacore loin.jpg.png',
                            'Albacore steak.jpg.png',
                            'Barramundi.jpg.png',
                            'Cobia fillet.jpg.png',
                            'Emperor.jpg.png',
                            'Grouper.jpg.png',
                            'Kingfish cube.jpg.png',
                            'Kingfish steak (3).jpg.png',
                            'Kingfish.jpg.png',
                            'Loligo Squid.jpg.png',
                            'Loligo Squid Ring.jpg.png',
                            'Loligo Squid Tube.jpg.png',
                            'Loligo squid tentacle.jpg.png',
                            'Octopus Slice.jpg.png',
                            'Octopus flower.jpg.png',
                            'Parrotfish.jpg.png',
                            'Red Grouper.jpg.png',
                            'Red Mullet.jpg.png',
                            'Red Snapper.jpg.png',
                            'Red bass.jpg.png',
                            'Skipjack Cube.jpg.png',
                            'Skipjack Strip.jpg.png',
                            'Skipjack loin.jpg.png',
                            'Squid Tube + Tentacle.jpg.png',
                            'Swetlips.jpg.png',
                            'Swordfish Loin.jpg.png',
                            'Swordfish saku.jpg.png',
                            'Swordfish slice.jpg.png',
                            'Swordfish steak.jpg.png',
                            'Tako slice.jpg.png',
                            'Wahoo Slice (2).jpg.png',
                            'black pomfret.jpg.png',
                            'greenjobfish.jpg.png',
                            'kingfish steak.jpg.png',
                            'mahi mahi fillet.jpg.png',
                            'mahi mahi steak.jpg.png',
                            'marlin loin.jpg.png',
                            'marlin steak.jpg.png',
                            'oilfish HGT.jpg.png',
                            'oilfish fillet.jpg.png',
                            'oilfish portion.jpg.png',
                            'oilfish saku.jpg.png',
                            'sashimi otoro.jpg.png',
                            'swordfish belly slice.jpg.png',
                            'swordfish cube.jpg.png'
                        ];
                    @endphp
                    <div class="product-track flex gap-6" style="--item-count: {{ count($lainnyaImages) }}">
                    
                    @foreach ($lainnyaImages as $image)
                    <div class="product-item flex-shrink-0 w-32 md:w-64 group cursor-pointer">
                        <div class="mb-4 transition-transform duration-300 group-hover:-translate-y-2">
                            <div class="aspect-square flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('img/ourProduct/lainnya/' . $image) }}" alt="{{ pathinfo($image, PATHINFO_FILENAME) }}" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h3 class="text-sm md:text-lg font-medium text-center text-gray-900 group-hover:text-[#2a3891] transition-colors">
                            {{ trim(ucwords(preg_replace('/\d+/', '', str_replace(['.jpg', '.png', '-', '_', '(', ')'], ['', '', ' ', ' ', '', ''], pathinfo($image, PATHINFO_FILENAME))))) }}
                        </h3>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Certifications -->
        <div class="flex justify-center items-center" data-aos="fade-up" data-aos-delay="400">
            <img src="{{ asset('img/sertif.png') }}" alt="Certifications" class="max-w-full h-auto md:h-40 object-contain opacity-90 hover:opacity-100 transition-opacity">
        </div>
    </div>
</section>

<style>
    :root {
        --carousel-item-width: 8rem; /* w-32 = 128px */
        --carousel-gap: 1.5rem; /* gap-6 = 24px */
    }
    @media (min-width: 768px) {
        :root {
            --carousel-item-width: 16rem; /* w-64 = 256px */
        }
    }

    /* Infinite Scroll Animation */
    @keyframes scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(-1 * var(--item-count) * (var(--carousel-item-width) + var(--carousel-gap)))); }
    }

    @keyframes scroll-reverse {
        0% { transform: translateX(calc(-1 * var(--item-count) * (var(--carousel-item-width) + var(--carousel-gap)))); }
        100% { transform: translateX(0); }
    }

    .product-track {
        animation: scroll calc(var(--item-count) * 18s) linear infinite;
        width: max-content;
    }

    .product-track-reverse {
        animation: scroll-reverse calc(var(--item-count) * 18s) linear infinite;
    }

    .product-carousel-container:hover .product-track {
        animation-play-state: paused;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Clone items for infinite scroll effect for ALL carousels
        const productTracks = document.querySelectorAll('.product-track');
        
        productTracks.forEach(function(track) {
            const productItems = track.innerHTML;
            // Duplicate content 3 times for truly seamless loop
            track.innerHTML = productItems + productItems + productItems;
        });

        // Toggle lainnya carousel
        const toggleBtn = document.getElementById('toggleLainnyaBtn');
        const lainnyaCarousel = document.getElementById('lainnyaCarousel');
        const chevronIcon = document.getElementById('chevronIcon');

        toggleBtn.addEventListener('click', function() {
            // Toggle visibility
            lainnyaCarousel.classList.toggle('hidden');
            
            // Rotate chevron icon
            if (lainnyaCarousel.classList.contains('hidden')) {
                chevronIcon.style.transform = 'rotate(0deg)';
            } else {
                chevronIcon.style.transform = 'rotate(180deg)';
            }
        });
    });
</script>
