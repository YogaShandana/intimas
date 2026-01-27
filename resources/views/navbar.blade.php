<style>
    #main-navbar {
        visibility: visible;
        opacity: 1;
        transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
    #main-navbar.loaded {
        visibility: visible;
        opacity: 1;
    }
</style>

<div class="fixed top-0 left-0 right-0 z-50" style="font-family: 'Poppins', sans-serif; font-weight: 600;">
    <!-- Top Bar -->
    <div class="bg-[#2E3192] text-white py-2">
        <div class="container mx-auto px-4 flex justify-between items-center text-sm">
            <!-- Left Side: Social Icons -->
            <div class="flex items-center">
                <div class="flex items-center divide-x divide-white/30 border-l border-r border-white/30">
                    <a href="#" class="hover:text-gray-300 px-2 md:px-4"><i class="fab fa-facebook-f text-xs md:text-sm"></i></a>
                    <a href="#" class="hover:text-gray-300 px-2 md:px-4"><i class="fas fa-phone-alt text-xs md:text-sm"></i></a>
                </div>
            </div>

            <!-- Right Side: Social Icons -->
            <div class="flex items-center">
                <div class="flex items-center divide-x divide-white/30 border-l border-r border-white/30">
                    <a href="https://www.instagram.com/intimassurya_" target="_blank" class="hover:text-gray-300 px-2 md:px-4"><i class="fab fa-instagram text-xs md:text-sm"></i></a>
                    <a href="#" class="hover:text-gray-300 px-2 md:px-4"><i class="fas fa-envelope text-xs md:text-sm"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navbar -->
    <nav id="main-navbar" class="bg-transparent py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <!-- Logo Section -->
            <div class="flex items-center space-x-2 md:space-x-3">
                <!-- Logo -->
                <img src="{{ asset('img/intimas logo.png') }}" alt="PT Intimas Surya Logo" class="h-8 md:h-10" style="filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.3));">
                <div class="flex flex-col">
                    <span class="text-[#2E3192] text-sm md:text-xl leading-none" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">PT INTIMAS SURYA</span>
                    <span class="text-[#2E3192] text-xs md:text-sm tracking-wider" style="font-weight: 400; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">We Care Our Product</span>
                </div>
            </div>

            <!-- Hamburger Menu Button (Mobile & Tablet) -->
            <button id="mobile-menu-button" class="lg:hidden text-[#2E3192] focus:outline-none">
                <i class="fas fa-bars text-2xl" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);"></i>
            </button>

            <!-- Navigation Links (Desktop) -->
            <div class="hidden lg:flex items-center space-x-8 text-[#2E3192] text-sm" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
                <a href="/" class="{{ request()->is('/') ? 'border-b-2 border-[#2E3192]' : '' }} hover:text-blue-800">HOME</a>
                <div class="relative" id="about-dropdown-wrapper">
                    <a href="#" id="about-menu-btn" class="{{ request()->is('about*') ? 'border-b-2 border-[#2E3192]' : '' }} flex items-center space-x-1 hover:text-blue-800">
                        <span>ABOUT</span>
                        <i id="about-chevron" class="fas fa-chevron-down text-xs transition-transform duration-200"></i>
                    </a>
                    <!-- Dropdown Menu -->
                    <div id="about-dropdown" class="absolute top-full left-1/2 transform -translate-x-1/2 mt-2 bg-[#2E3192] shadow-lg rounded-3xl hidden z-50 min-w-[220px] p-4">
                        <a href="/about/company-profile" class="block {{ request()->is('about/company-profile') ? 'bg-white text-[#2E3192]' : 'text-white hover:bg-[#3d4ab5]' }} text-center text-sm py-2 px-4 rounded-full mb-3 transition-colors">
                            COMPANY PROFILE
                        </a>
                        <a href="/about/sustainability" class="block {{ request()->is('about/sustainability') ? 'bg-white text-[#2E3192]' : 'text-white hover:bg-[#3d4ab5]' }} text-center text-sm py-2 px-4 rounded-full transition-colors">
                            SUSTAINABILITY
                        </a>
                    </div>
                </div>
                <a href="/product" class="{{ request()->is('product*') ? 'border-b-2 border-[#2E3192]' : '' }} hover:text-blue-800">OUR PRODUCT</a>
                <a href="/gallery" class="{{ request()->is('gallery*') ? 'border-b-2 border-[#2E3192]' : '' }} hover:text-blue-800">GALLERY</a>
                <a href="/contact" class="{{ request()->is('contact*') ? 'border-b-2 border-[#2E3192]' : '' }} hover:text-blue-800">CONTACT</a>
            </div>
        </div>

        <!-- Mobile Menu (Mobile & Tablet) -->
        <div id="mobile-menu" class="hidden lg:hidden mt-4 bg-white shadow-xl rounded-2xl mx-4 overflow-hidden">
            <div class="flex flex-col text-[#2E3192]">
                <a href="/" class="px-6 py-4 border-b border-gray-100 hover:bg-gray-50 {{ request()->is('/') ? 'bg-blue-50 font-semibold' : '' }} transition-colors">HOME</a>
                
                <!-- ABOUT with dropdown -->
                <div class="border-b border-gray-100">
                    <button id="mobile-about-btn" class="w-full text-left px-6 py-4 hover:bg-gray-50 {{ request()->is('about*') ? 'bg-blue-50 font-semibold' : '' }} flex justify-between items-center transition-colors">
                        <span>ABOUT</span>
                        <i id="mobile-about-chevron" class="fas fa-chevron-down text-xs transition-transform duration-200"></i>
                    </button>
                    <div id="mobile-about-dropdown" class="hidden bg-gray-50">
                        <a href="/about/company-profile" class="block px-10 py-4 hover:bg-gray-100 {{ request()->is('about/company-profile') ? 'bg-blue-100 font-semibold' : '' }} transition-colors border-l-4 {{ request()->is('about/company-profile') ? 'border-[#2E3192]' : 'border-transparent' }}">Company Profile</a>
                        <a href="/about/sustainability" class="block px-10 py-4 hover:bg-gray-100 {{ request()->is('about/sustainability') ? 'bg-blue-100 font-semibold' : '' }} transition-colors border-l-4 {{ request()->is('about/sustainability') ? 'border-[#2E3192]' : 'border-transparent' }}">Sustainability</a>
                    </div>
                </div>
                <a href="/product" class="px-6 py-4 border-b border-gray-100 hover:bg-gray-50 {{ request()->is('product*') ? 'bg-blue-50 font-semibold' : '' }} transition-colors">OUR PRODUCT</a>
                <a href="/gallery" class="px-6 py-4 border-b border-gray-100 hover:bg-gray-50 {{ request()->is('gallery*') ? 'bg-blue-50 font-semibold' : '' }} transition-colors">GALLERY</a>
                <a href="/contact" class="px-6 py-4 hover:bg-gray-50 {{ request()->is('contact*') ? 'bg-blue-50 font-semibold' : '' }} transition-colors">CONTACT</a>
            </div>
        </div>
    </nav>
</div>

<script>
    // Toggle mobile menu
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        const icon = this.querySelector('i');
        
        mobileMenu.classList.toggle('hidden');
        
        // Toggle icon between bars and times
        if (mobileMenu.classList.contains('hidden')) {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        } else {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        }
    });

    // Toggle ABOUT dropdown on click
    document.getElementById('about-menu-btn').addEventListener('click', function(e) {
        e.preventDefault();
        const dropdown = document.getElementById('about-dropdown');
        const chevron = document.getElementById('about-chevron');
        
        dropdown.classList.toggle('hidden');
        
        // Rotate chevron icon
        if (dropdown.classList.contains('hidden')) {
            chevron.style.transform = 'rotate(0deg)';
        } else {
            chevron.style.transform = 'rotate(180deg)';
        }
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        const wrapper = document.getElementById('about-dropdown-wrapper');
        const dropdown = document.getElementById('about-dropdown');
        const chevron = document.getElementById('about-chevron');
        
        if (wrapper && !wrapper.contains(e.target)) {
            dropdown.classList.add('hidden');
            chevron.style.transform = 'rotate(0deg)';
        }
    });

    // Toggle mobile ABOUT dropdown
    document.getElementById('mobile-about-btn').addEventListener('click', function() {
        const dropdown = document.getElementById('mobile-about-dropdown');
        const chevron = document.getElementById('mobile-about-chevron');
        
        dropdown.classList.toggle('hidden');
        
        // Rotate chevron icon
        if (dropdown.classList.contains('hidden')) {
            chevron.style.transform = 'rotate(0deg)';
        } else {
            chevron.style.transform = 'rotate(180deg)';
        }
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('main-navbar');
        
        if (window.scrollY > 50) {
            // When scrolled
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-white', 'shadow-md');
        } else {
            // At top
            navbar.classList.remove('bg-white', 'shadow-md');
            navbar.classList.add('bg-transparent');
        }
    });

    // Navbar fade-in animation on page load
    (function() {
        const navbar = document.getElementById('main-navbar');
        
        // Show navbar with smooth fade-in
        function showNavbar() {
            requestAnimationFrame(function() {
                navbar.classList.add('loaded');
            });
        }
        
        // Trigger fade-in after a short delay to sync with video
        setTimeout(showNavbar, 100);
    })();
</script>
