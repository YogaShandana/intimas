<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-black mb-4 font-poppins fade-in-up">Our Gallery</h2>
            <p class="text-gray-800 text-lg max-w-3xl mx-auto font-poppins fade-in-up animate-delay-200">
                Explore moments from our daily operations and high-standard seafood processing, showcasing our commitment to quality and hygiene in every step.
            </p>
        </div>

        <!-- Mobile Slider -->
        <div class="md:hidden scale-in animate-delay-300">
            <div class="swiper gallerySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="aspect-[4/5] overflow-hidden rounded shadow-lg">
                            <img src="{{ asset('img/produksi/p1.png') }}" alt="Seafood Processing 1" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="aspect-[4/5] overflow-hidden rounded shadow-lg">
                            <img src="{{ asset('img/produksi/p2.png') }}" alt="Seafood Processing 2" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="aspect-[4/5] overflow-hidden rounded shadow-lg">
                            <img src="{{ asset('img/produksi/p3.png') }}" alt="Seafood Processing 3" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Desktop Grid -->
        <div class="hidden md:grid grid-cols-3 gap-8">
            <!-- Image 1 -->
            <div class="aspect-[4/5] overflow-hidden rounded-lg shadow-lg fade-in-up animate-delay-100">
                <img src="{{ asset('img/produksi/p8.png') }}" alt="Seafood Processing 1" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>

            <!-- Image 2 -->
            <div class="aspect-[4/5] overflow-hidden rounded-lg shadow-lg fade-in-up animate-delay-300">
                <img src="{{ asset('img/produksi/p3.png') }}" alt="Seafood Processing 2" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>

            <!-- Image 3 -->
            <div class="aspect-[4/5] overflow-hidden rounded-lg shadow-lg fade-in-up animate-delay-500">
                <img src="{{ asset('img/produksi/p6.png') }}" alt="Seafood Processing 3" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        /* Custom pagination styling for mobile only */
        .gallerySwiper .swiper-pagination {
            position: relative;
            margin-top: 1rem;
            bottom: auto;
        }
        
        .gallerySwiper .swiper-pagination-bullet {
            width: 0.75rem;
            height: 0.75rem;
            background-color: #d1d5db;
            opacity: 1;
            transition: background-color 0.3s;
        }
        
        .gallerySwiper .swiper-pagination-bullet:hover {
            background-color: #9ca3af;
        }
        
        .gallerySwiper .swiper-pagination-bullet-active {
            background-color: #2a3891;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const gallerySwiper = new Swiper('.gallerySwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                loop: true,
            });
        });
    </script>
    </div>
</section>
