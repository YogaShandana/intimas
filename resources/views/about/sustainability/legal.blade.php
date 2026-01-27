<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <!-- Title -->
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12 tracking-wide fade-in-up">
                Legal & Quality Assurance
            </h2>

            <!-- Auto-Sliding Carousel with 2-Column Grid -->
            <div class="relative overflow-hidden mb-12 md:mb-0 scale-in animate-delay-200">
                <!-- Carousel Container -->
                <div id="certification-carousel" class="relative pb-8 md:pb-0">
                    <!-- Desktop Slides (2 columns) -->
                    <div class="hidden md:block">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="carousel-slide desktop-slide {{ $i === 0 ? 'active' : '' }}" data-slide="{{ $i }}">
                                <div class="flex flex-row gap-8 justify-center">
                                    @php
                                        $firstImg = ($i * 2) + 1;
                                        $secondImg = ($i * 2) + 2;
                                    @endphp
                                    
                                    <!-- First Column -->
                                    @if ($firstImg <= 9)
                                    <div class="flex justify-center items-center bg-gray-50 p-6 rounded-lg shadow-md flex-1" style="max-width: 450px;">
                                        <div class="w-full" style="max-width: 400px;">
                                            <img src="{{ asset('img/about/sustainability/sertif/' . $firstImg . '.png') }}" 
                                                 alt="Certification {{ $firstImg }}" 
                                                 class="w-full h-auto object-contain"
                                                 style="aspect-ratio: 3/4;">
                                        </div>
                                    </div>
                                    @endif
                                    
                                    <!-- Second Column -->
                                    @if ($secondImg <= 9)
                                    <div class="flex justify-center items-center bg-gray-50 p-6 rounded-lg shadow-md flex-1" style="max-width: 450px;">
                                        <div class="w-full" style="max-width: 400px;">
                                            <img src="{{ asset('img/about/sustainability/sertif/' . $secondImg . '.png') }}" 
                                                 alt="Certification {{ $secondImg }}" 
                                                 class="w-full h-auto object-contain"
                                                 style="aspect-ratio: 3/4;">
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        @endfor
                    </div>

                    <!-- Mobile Slides (1 column) -->
                    <div class="block md:hidden">
                        @for ($i = 1; $i <= 9; $i++)
                            <div class="carousel-slide mobile-slide {{ $i === 1 ? 'active' : '' }}" data-slide="{{ $i - 1 }}">
                                <div class="flex justify-center items-center bg-gray-50 p-2 rounded-lg shadow-md max-w-md mx-auto mb-8">
                                    <div class="w-full" style="max-width: 400px;">
                                        <img src="{{ asset('img/about/sustainability/sertif/' . $i . '.png') }}" 
                                             alt="Certification {{ $i }}" 
                                             class="w-full h-auto object-contain"
                                             style="aspect-ratio: 3/4;">
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>

                    <!-- Mobile Navigation Dots (Inside, Absolute) -->
                    <div class="absolute bottom-2 left-0 w-full flex justify-center z-10 md:hidden">
                        <div class="flex space-x-2">
                            @for ($i = 0; $i < 9; $i++)
                                <button class="carousel-dot mobile-dot {{ $i === 0 ? 'active' : '' }}" 
                                        data-slide="{{ $i }}"
                                        aria-label="Go to slide {{ $i + 1 }}">
                                </button>
                            @endfor
                        </div>
                    </div>
                </div>

                <!-- Desktop Navigation Dots (Outside, Relative) -->
                <div class="hidden md:flex justify-center mt-8 space-x-2">
                    @for ($i = 0; $i < 5; $i++)
                        <button class="carousel-dot desktop-dot {{ $i === 0 ? 'active' : '' }}" 
                                data-slide="{{ $i }}"
                                aria-label="Go to slide {{ $i + 1 }}">
                        </button>
                    @endfor
                </div>


            </div>

            <!-- Certification Logos -->
            <div class="flex justify-center mt-8">
                <img src="{{ asset('img/sertif.png') }}" alt="Certifications" class="sertif-img object-contain">
            </div>
        </div>
    </div>
</section>

<style>
    /* Custom Image Size */
    .sertif-img {
        width: 100%;
        height: auto;
        max-width: 500px;
    }
    
    @media (min-width: 768px) {
        .sertif-img {
            max-width: 900px;
        }
        .sertif-container {
            margin-top: 3rem; /* md:mt-12 */
        }
    }
    
    @media (max-width: 767px) {
        .sertif-container {
            margin-top: -50px !important;
        }
    }

    /* Carousel Styles */
    #certification-carousel {
        position: relative;
    }
    
    @media (min-width: 768px) {
        #certification-carousel {
            min-height: 520px;
        }
    }

    .carousel-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        opacity: 0;
        transition: opacity 0.8s ease-in-out;
        pointer-events: none;
    }

    .carousel-slide.active {
        opacity: 1;
        position: relative;
        pointer-events: auto;
    }

    /* Navigation Dots */
    .carousel-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: #d1d5db;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .carousel-dot:hover {
        background-color: #9ca3af;
        transform: scale(1.2);
    }

    .carousel-dot.active {
        background-color: #1f2937;
        width: 32px;
        border-radius: 6px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        #certification-carousel {
            min-height: 520px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const isMobile = () => window.innerWidth < 768;
        
        let currentSlide = 0;
        let autoSlideInterval;

        function getActiveElements() {
            if (isMobile()) {
                return {
                    slides: document.querySelectorAll('.mobile-slide'),
                    dots: document.querySelectorAll('.mobile-dot'),
                    totalSlides: 9
                };
            } else {
                return {
                    slides: document.querySelectorAll('.desktop-slide'),
                    dots: document.querySelectorAll('.desktop-dot'),
                    totalSlides: 5
                };
            }
        }

        // Function to show specific slide
        function showSlide(index) {
            const { slides, dots } = getActiveElements();
            
            // Remove active class from all slides and dots
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            // Add active class to current slide and dot
            if (slides[index]) {
                slides[index].classList.add('active');
                dots[index].classList.add('active');
                currentSlide = index;
            }
        }

        // Function to go to next slide
        function nextSlide() {
            const { totalSlides } = getActiveElements();
            let next = (currentSlide + 1) % totalSlides;
            showSlide(next);
        }

        // Auto-slide functionality (every 2 seconds)
        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 2000);
        }

        // Stop auto-slide
        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        // Initialize carousel
        function initCarousel() {
            stopAutoSlide();
            currentSlide = 0;
            showSlide(0);
            startAutoSlide();
        }

        // Add click event to all dots (both desktop and mobile)
        document.querySelectorAll('.carousel-dot').forEach((dot, index) => {
            dot.addEventListener('click', function() {
                const slideIndex = parseInt(this.getAttribute('data-slide'));
                stopAutoSlide();
                showSlide(slideIndex);
                startAutoSlide(); // Restart auto-slide after manual navigation
            });
        });

        // Initialize on load
        initCarousel();

        // Reinitialize on window resize
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                initCarousel();
            }, 250);
        });
    });
</script>
