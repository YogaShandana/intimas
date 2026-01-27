<section class="contact-section py-20 bg-gray-50" id="contact">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-12 max-w-6xl mx-auto">
            
            <!-- Contact Info (Left Side) -->
            <div class="w-full md:w-5/12 pt-0 md:pt-8 fade-in-left" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-[#2a3891] mb-6">Get in Touch</h2>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    Have questions about our products or services? We're here to help. 
                    Reach out to us through any of the following channels.
                </p>

                <!-- Location Tabs -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <!-- Tab Headers -->
                    <div class="flex border-b border-gray-100 overflow-x-auto scrollbar-hide">
                        <button onclick="switchTab('bali')" id="tab-bali" class="px-6 py-4 text-sm font-semibold text-[#2a3891] border-b-2 border-[#2a3891] bg-blue-50/50 whitespace-nowrap transition-colors">
                            Bali Office
                        </button>
                        <button onclick="switchTab('jakarta')" id="tab-jakarta" class="px-6 py-4 text-sm font-medium text-gray-500 hover:text-[#2a3891] whitespace-nowrap transition-colors">
                            Jakarta Office
                        </button>
                        <button onclick="switchTab('processing')" id="tab-processing" class="px-6 py-4 text-sm font-medium text-gray-500 hover:text-[#2a3891] whitespace-nowrap transition-colors">
                            Processing Facility
                        </button>
                    </div>

                    <!-- Tab Contents -->
                    <div class="p-6 min-h-[280px]">
                        <!-- Bali Office -->
                        <div id="content-bali" class="tab-content block animate-fade-in">
                            <h4 class="font-bold text-gray-900 mb-4 text-lg">Bali Office & Processing Facility</h4>
                            <ul class="space-y-4 text-sm text-gray-600">
                                <li class="flex items-start space-x-3">
                                    <div class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0 text-[#2a3891]">
                                        <i class="fas fa-map-marker-alt text-xs"></i>
                                    </div>
                                    <span class="mt-1.5 leading-relaxed">Jl. Ikan Tuna Raya, Pelabuhan Benoa Denpasar, Bali - 80361 Indonesia</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Jakarta Office -->
                        <div id="content-jakarta" class="tab-content hidden animate-fade-in">
                            <h4 class="font-bold text-gray-900 mb-4 text-lg">Jakarta Office</h4>
                            <ul class="space-y-4 text-sm text-gray-600">
                                <li class="flex items-start space-x-3">
                                    <div class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0 text-[#2a3891]">
                                        <i class="fas fa-map-marker-alt text-xs"></i>
                                    </div>
                                    <span class="mt-1.5 leading-relaxed">Jl. Muara Karang Blok O VI Timur No. 2 Jakarta Utara - 14450 Indonesia</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Jakarta Processing -->
                        <div id="content-processing" class="tab-content hidden animate-fade-in">
                            <h4 class="font-bold text-gray-900 mb-4 text-lg">Jakarta Processing Facility</h4>
                            <ul class="space-y-4 text-sm text-gray-600">
                                <li class="flex items-start space-x-3">
                                    <div class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0 text-[#2a3891]">
                                        <i class="fas fa-map-marker-alt text-xs"></i>
                                    </div>
                                    <span class="mt-1.5 leading-relaxed">Jl. Muara Baru Ujung Blok E No. 1 Penjaringan, Jakarta Utara - 14440 Indonesia</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <script>
                    function switchTab(tabName) {
                        // Hide all contents
                        document.querySelectorAll('.tab-content').forEach(el => {
                            el.classList.add('hidden');
                            el.classList.remove('block');
                        });
                        
                        // Show selected content
                        document.getElementById('content-' + tabName).classList.remove('hidden');
                        document.getElementById('content-' + tabName).classList.add('block');
                        
                        // Reset all tab styles
                        const tabs = ['bali', 'jakarta', 'processing'];
                        tabs.forEach(t => {
                            const btn = document.getElementById('tab-' + t);
                            if (t === tabName) {
                                btn.classList.add('text-[#2a3891]', 'border-b-2', 'border-[#2a3891]', 'bg-blue-50/50', 'font-semibold');
                                btn.classList.remove('text-gray-500', 'font-medium');
                            } else {
                                btn.classList.remove('text-[#2a3891]', 'border-b-2', 'border-[#2a3891]', 'bg-blue-50/50', 'font-semibold');
                                btn.classList.add('text-gray-500', 'font-medium');
                            }
                        });
                    }
                </script>

                <style>
                    .scrollbar-hide::-webkit-scrollbar {
                        display: none;
                    }
                    .scrollbar-hide {
                        -ms-overflow-style: none;
                        scrollbar-width: none;
                    }
                    @keyframes fadeIn {
                        from { opacity: 0; transform: translateY(5px); }
                        to { opacity: 1; transform: translateY(0); }
                    }
                    .animate-fade-in {
                        animation: fadeIn 0.3s ease-out forwards;
                    }
                </style>
            </div>

            <!-- Contact Form (Right Side) -->
            <div class="w-full md:w-7/12 fade-in-right animate-delay-200" data-aos="fade-left" data-aos-delay="200">
                <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                    <h3 class="text-2xl font-bold text-[#2a3891] mb-6">Send us a Message</h3>
                    
                    <form action="#" method="POST" class="space-y-5">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-[#2a3891] focus:bg-white focus:ring-0 transition-colors outline-none" placeholder="John Doe">
                            </div>
                            
                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-[#2a3891] focus:bg-white focus:ring-0 transition-colors outline-none" placeholder="john@example.com">
                            </div>
                        </div>

                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-[#2a3891] focus:bg-white focus:ring-0 transition-colors outline-none" placeholder="How can we help?">
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-[#2a3891] focus:bg-white focus:ring-0 transition-colors outline-none resize-none" placeholder="Write your message here..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-[#2a3891] text-white font-medium py-3.5 rounded-lg hover:bg-[#1e2a6e] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
