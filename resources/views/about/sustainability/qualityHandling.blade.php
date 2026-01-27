<section class="py-16 bg-[#2a3891] text-white" style="background-color: #2a3891 !important;">
    <div class="container mx-auto px-4">
        <!-- Row 1: Image Left, Text Right -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
            <!-- Fish Image 1 -->
            <div class="flex justify-center fade-in-left">
                <img src="{{ asset('img/about/sustainability/ikan1Sustainability.png') }}" alt="Fish 1" class="w-full max-w-md h-auto object-contain">
            </div>

            <!-- Text Content -->
            <div class="fade-in-right animate-delay-200">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Quality Handling
                </h2>
                <p class="text-white/90 text-lg leading-relaxed text-justify">
                   We apply careful handling methods from the moment the fish arrives to ensure optimal freshness and texture. Every step is monitored closely so the final product maintains consistent quality and meets international standards.
                </p>
            </div>
        </div>

        <!-- Row 2: Text Left, Image Right -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="order-2 lg:order-1 fade-in-left animate-delay-300">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Consistent Processing
                </h2>
                <p class="text-white/90 text-lg leading-relaxed text-justify">
                   Our processing team follows strict procedures to preserve natural color, taste, and safety. With controlled workflows and regular inspections, we deliver products that stay stable, clean, and ready for various market needs.
            </div>

            <!-- Fish Image 2 -->
            <div class="flex justify-center order-1 lg:order-2 fade-in-right animate-delay-400">
                <img src="{{ asset('img/about/sustainability/ikan2Sustainability.png') }}" alt="Fish 2" class="w-full max-w-md h-auto object-contain">
            </div>
        </div>
    </div>
</section>
