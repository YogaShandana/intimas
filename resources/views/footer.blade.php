<footer class="bg-[#1a1a1a] text-white pt-8 md:pt-16 pb-4 font-['Poppins']">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-start gap-6 md:gap-8 mb-8 md:mb-12">
            
            <!-- Left Section: Logo & Description -->
            <div class="w-full md:w-5/12 pr-0 md:pr-8">
                <div class="mb-4 md:mb-6 flex items-center gap-2 md:gap-3">
                    <img src="{{ asset('img/intimas logo.png') }}" alt="Intan Seafood" class="h-12 md:h-16 object-contain brightness-0 invert">
                    <div>
                        <h2 class="text-base md:text-xl font-bold tracking-wide text-white">PT INTIMAS SURYA</h2>
                        <p class="text-xs md:text-sm text-gray-400">We Care Our Product</p>
                    </div>
                </div>
                <p class="text-gray-300 mb-4 md:mb-8 leading-relaxed text-xs md:text-sm">
                    We are the reliable supplier for Demersal and Pelagic Fish from Indonesia.
                </p>
                
                <!-- Certification Logos -->
                <div class="flex flex-wrap gap-4 items-center">
                    <img src="{{ asset('img/sertif.png') }}" alt="Certifications" class="h-16 md:h-24 object-contain brightness-0 invert">
                </div>
            </div>

            <!-- Vertical Divider (Hidden on mobile) -->
            <div class="hidden md:block w-px bg-gray-600 self-stretch mx-4"></div>

            <!-- Middle Section: Contact Us -->
            <div class="w-full md:w-4/12 px-0 md:px-4">
                <h3 class="text-xl md:text-2xl font-bold mb-4 md:mb-6">Contact us</h3>
                <div class="text-gray-300 text-xs md:text-sm space-y-1 md:space-y-2 leading-relaxed">
                    <p>Jl. Raya Pelabuhan Benoa, Denpasar, Bali</p>
                    <p>Jl. Muara Karang Blok O VI Timur No. 2, Jakarta</p>
                    <p>Jl. Muara Baru Ujung Blok E No. 1, Jakarta</p>
                </div>
            </div>

            <!-- Right Section: Information -->
            <div class="w-full md:w-2/12">
                <h3 class="text-xl md:text-2xl font-bold mb-4 md:mb-6">Information</h3>
                <div class="flex flex-wrap gap-3 md:gap-4">
                    <a href="#" class="w-10 h-10 border border-gray-400 rounded-full flex items-center justify-center hover:bg-white hover:text-black transition-colors">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </a>
                    <a href="#" class="w-10 h-10 border border-gray-400 rounded-full flex items-center justify-center hover:bg-white hover:text-black transition-colors">
                        <i class="fas fa-phone-alt text-sm"></i>
                    </a>
                    <a href="https://www.instagram.com/intimassurya_" target="_blank" class="w-10 h-10 border border-gray-400 rounded-full flex items-center justify-center hover:bg-white hover:text-black transition-colors">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                    <a href="#" class="w-10 h-10 border border-gray-400 rounded-full flex items-center justify-center hover:bg-white hover:text-black transition-colors">
                        <i class="fas fa-envelope text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-gray-800 mt-6 md:mt-8 pt-4 md:pt-6">
        <div class="container mx-auto px-4 text-center text-xs text-gray-400">
            <p>
                &copy; {{ date('Y') }} PT. Intimas Surya. Website by <span class="text-[#d6336c]">YOGA SHANDANA</span>
            </p>
        </div>
    </div>
</footer>