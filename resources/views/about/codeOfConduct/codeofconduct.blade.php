<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Title -->
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8 fade-in-up">
                Code of Conduct
            </h2>

            <!-- Text Content -->
            <div class="space-y-6 text-gray-700 text-lg leading-relaxed mb-12 text-justify">
                <p class="fade-in-up animate-delay-100">
                   PT Intimas Surya stands firmly by its commitment to ethical labor practices and full regulatory compliance, maintaining a zero-tolerance policy for modern slavery throughout its operations.
                </p>
                 <p class="fade-in-up animate-delay-300">
                  Our operations, including our seafaring work agreements, are in absolute compliance with all established government regulations, specifically citing Minister of Maritime Affairs and Fisheries Regulation No. 33 / 2021 and Regulation No. 4 / 2025, which ensure fairness and transparency in our manning system. 
                </p>
                <p class="fade-in-up animate-delay-200">
                  We confirm that the Indonesian Tuna Longline Fisheries Improvement Project (FIP) successfully completed a comprehensive social audit assessment in October 2023.
                </p>
                <p class="fade-in-up animate-delay-300">
                   As a result of the FIP's social audit requirements, we have already implemented a formal and accessible grievance mechanism to serve as an appropriate, transparent channel for any complaints or opinions from aggrieved parties.
                </p>
            </div>

            <!-- Image Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 scale-in animate-delay-400">
                @foreach(range(1, 12) as $i)
                <div class="overflow-hidden rounded-lg shadow-md cursor-pointer" onclick="openLightbox('{{ asset('img/about/codeOfConduct/' . $i . '.jpeg') }}', {{ $i }})">
                    <img 
                        src="{{ asset('img/about/codeOfConduct/' . $i . '.jpeg') }}" 
                        alt="Code of Conduct {{ $i }}" 
                        class="w-full h-40 object-cover hover:scale-105 transition-transform duration-300"
                    >
                </div>
                @endforeach
            </div>

            <!-- Lightbox Modal -->
            <div id="lightbox" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden items-center justify-center p-4" onclick="closeLightbox(event)">
                <button class="absolute top-4 right-4 text-white text-4xl font-bold leading-none hover:text-gray-300 z-10" onclick="closeLightboxBtn()">&times;</button>
                <button class="absolute left-4 top-1/2 -translate-y-1/2 text-white text-4xl font-bold hover:text-gray-300 z-10 px-2" onclick="prevImage(event)">&#8249;</button>
                <button class="absolute right-14 top-1/2 -translate-y-1/2 text-white text-4xl font-bold hover:text-gray-300 z-10 px-2" onclick="nextImage(event)">&#8250;</button>
                <img id="lightbox-img" src="" alt="Code of Conduct" class="max-h-[85vh] max-w-full rounded-lg shadow-2xl object-contain">
            </div>

            <script>
                let currentIndex = 1;
                const totalImages = 12;
                const baseUrl = "{{ asset('img/about/codeOfConduct/') }}";

                function openLightbox(src, index) {
                    currentIndex = index;
                    document.getElementById('lightbox-img').src = src;
                    const lb = document.getElementById('lightbox');
                    lb.classList.remove('hidden');
                    lb.classList.add('flex');
                    document.body.style.overflow = 'hidden';
                }

                function closeLightbox(event) {
                    if (event.target === document.getElementById('lightbox')) {
                        closeLightboxBtn();
                    }
                }

                function closeLightboxBtn() {
                    const lb = document.getElementById('lightbox');
                    lb.classList.add('hidden');
                    lb.classList.remove('flex');
                    document.body.style.overflow = '';
                }

                function prevImage(event) {
                    event.stopPropagation();
                    currentIndex = currentIndex === 1 ? totalImages : currentIndex - 1;
                    document.getElementById('lightbox-img').src = baseUrl + '/' + currentIndex + '.jpeg';
                }

                function nextImage(event) {
                    event.stopPropagation();
                    currentIndex = currentIndex === totalImages ? 1 : currentIndex + 1;
                    document.getElementById('lightbox-img').src = baseUrl + '/' + currentIndex + '.jpeg';
                }

                document.addEventListener('keydown', function(e) {
                    if (document.getElementById('lightbox').classList.contains('flex')) {
                        if (e.key === 'ArrowRight') nextImage(e);
                        if (e.key === 'ArrowLeft') prevImage(e);
                        if (e.key === 'Escape') closeLightboxBtn();
                    }
                });
            </script>
            
        </div>
    </div>
</section>

