<section class="py-5 md:py-15 bg-white">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Gallery Grid -->
        <div id="gallery-container" class="fade-in-up">
            <!-- Images will be dynamically shown/hidden by JavaScript -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6" id="gallery-grid" style="min-height: 600px;">
                <div class="gallery-item aspect-[4/3] overflow-hidden rounded shadow-md cursor-pointer scale-in animate-delay-100" data-index="1">
                    <img src="{{ asset('img/produksi/p1.png') }}" alt="Gallery Image 1" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" data-img-index="1">
                </div>
                <div class="gallery-item aspect-[4/3] overflow-hidden rounded shadow-md cursor-pointer scale-in animate-delay-200" data-index="2">
                    <img src="{{ asset('img/produksi/p2.png') }}" alt="Gallery Image 2" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" data-img-index="2">
                </div>
                <div class="gallery-item aspect-[4/3] overflow-hidden rounded shadow-md cursor-pointer scale-in animate-delay-300" data-index="3">
                    <img src="{{ asset('img/produksi/p3.png') }}" alt="Gallery Image 3" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" data-img-index="3">
                </div>
                <div class="gallery-item aspect-[4/3] overflow-hidden rounded shadow-md cursor-pointer scale-in animate-delay-400" data-index="4">
                    <img src="{{ asset('img/produksi/p4.png') }}" alt="Gallery Image 4" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" data-img-index="4">
                </div>
                <div class="gallery-item aspect-[4/3] overflow-hidden rounded shadow-md cursor-pointer scale-in animate-delay-500" data-index="5">
                    <img src="{{ asset('img/produksi/p5.png') }}" alt="Gallery Image 5" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" data-img-index="5">
                </div>
                <div class="gallery-item aspect-[4/3] overflow-hidden rounded shadow-md cursor-pointer scale-in animate-delay-100" data-index="6">
                    <img src="{{ asset('img/produksi/p6.png') }}" alt="Gallery Image 6" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" data-img-index="6">
                </div>
                <div class="gallery-item aspect-[4/3] overflow-hidden rounded shadow-md cursor-pointer scale-in animate-delay-200" data-index="7">
                    <img src="{{ asset('img/produksi/p7.png') }}" alt="Gallery Image 7" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" data-img-index="7">
                </div>
                <div class="gallery-item aspect-[4/3] overflow-hidden rounded shadow-md cursor-pointer scale-in animate-delay-300" data-index="8">
                    <img src="{{ asset('img/produksi/p8.png') }}" alt="Gallery Image 8" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" data-img-index="8">
                </div>
            </div>
        </div>

        <!-- Pagination Controls -->
        <div class="flex items-center justify-center gap-4 mt-8 fade-in-up animate-delay-500">
            <!-- Previous Arrow -->
            <button id="prev-btn" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-200 hover:bg-gray-300 transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <!-- Page Numbers -->
            <div id="page-numbers" class="flex gap-2">
                <!-- Will be populated by JavaScript -->
            </div>

            <!-- Next Arrow -->
            <button id="next-btn" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-200 hover:bg-gray-300 transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Lightbox Modal -->
    <div id="lightbox-modal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden items-center justify-center">
        <button id="close-modal" class="absolute top-4 right-4 text-white hover:text-gray-300 transition-colors z-10">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Previous Image -->
        <button id="modal-prev" class="absolute left-4 text-white hover:text-gray-300 transition-colors">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <!-- Image Container -->
        <div class="max-w-7xl max-h-screen p-4">
            <img id="modal-image" src="" alt="" class="max-w-full max-h-[90vh] object-contain">
        </div>

        <!-- Next Image -->
        <button id="modal-next" class="absolute right-4 text-white hover:text-gray-300 transition-colors">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <!-- Image Counter -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-white text-lg">
            <span id="current-image-number">1</span> / <span id="total-images">8</span>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const itemsPerPage = 8;
            const galleryItems = document.querySelectorAll('.gallery-item');
            const totalItems = galleryItems.length;
            const totalPages = Math.ceil(totalItems / itemsPerPage);
            let currentPage = 1;

            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const pageNumbersContainer = document.getElementById('page-numbers');

            // Lightbox elements
            const lightboxModal = document.getElementById('lightbox-modal');
            const modalImage = document.getElementById('modal-image');
            const closeModal = document.getElementById('close-modal');
            const modalPrev = document.getElementById('modal-prev');
            const modalNext = document.getElementById('modal-next');
            const currentImageNumber = document.getElementById('current-image-number');
            const totalImagesSpan = document.getElementById('total-images');
            let currentImageIndex = 1;

            totalImagesSpan.textContent = totalItems;

            // Create page number buttons
            function createPageNumbers() {
                pageNumbersContainer.innerHTML = '';
                for (let i = 1; i <= totalPages; i++) {
                    const pageBtn = document.createElement('button');
                    pageBtn.textContent = i;
                    pageBtn.className = `w-10 h-10 flex items-center justify-center rounded-full transition-colors ${
                        i === currentPage 
                            ? 'bg-[#2a3891] text-white' 
                            : 'bg-gray-200 hover:bg-gray-300 text-gray-700'
                    }`;
                    pageBtn.addEventListener('click', () => goToPage(i));
                    pageNumbersContainer.appendChild(pageBtn);
                }
            }

            // Show items for current page
            function showPage(page) {
                const startIndex = (page - 1) * itemsPerPage;
                const endIndex = startIndex + itemsPerPage;

                galleryItems.forEach((item, index) => {
                    if (index >= startIndex && index < endIndex) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });

                // Update button states
                prevBtn.disabled = page === 1;
                nextBtn.disabled = page === totalPages;

                // Update page number buttons
                createPageNumbers();
            }

            // Go to specific page
            function goToPage(page) {
                currentPage = page;
                showPage(currentPage);
            }

            // Previous page
            prevBtn.addEventListener('click', () => {
                if (currentPage > 1) {
                    goToPage(currentPage - 1);
                }
            });

            // Next page
            nextBtn.addEventListener('click', () => {
                if (currentPage < totalPages) {
                    goToPage(currentPage + 1);
                }
            });

            // Lightbox functionality
            function openLightbox(imageIndex) {
                currentImageIndex = imageIndex;
                updateModalImage();
                lightboxModal.classList.remove('hidden');
                lightboxModal.classList.add('flex');
                document.body.style.overflow = 'hidden';
            }

            function closeLightbox() {
                lightboxModal.classList.add('hidden');
                lightboxModal.classList.remove('flex');
                document.body.style.overflow = 'auto';
            }

            function updateModalImage() {
                modalImage.src = `{{ asset('img/produksi/p') }}${currentImageIndex}.png`;
                modalImage.alt = `Gallery Image ${currentImageIndex}`;
                currentImageNumber.textContent = currentImageIndex;
            }

            function showPrevImage() {
                if (currentImageIndex > 1) {
                    currentImageIndex--;
                    updateModalImage();
                }
            }

            function showNextImage() {
                if (currentImageIndex < totalItems) {
                    currentImageIndex++;
                    updateModalImage();
                }
            }

            // Add click event to all gallery images
            galleryItems.forEach((item) => {
                item.addEventListener('click', function() {
                    const imgIndex = parseInt(this.dataset.index);
                    openLightbox(imgIndex);
                });
            });

            // Modal controls
            closeModal.addEventListener('click', closeLightbox);
            modalPrev.addEventListener('click', showPrevImage);
            modalNext.addEventListener('click', showNextImage);

            // Close on background click
            lightboxModal.addEventListener('click', function(e) {
                if (e.target === lightboxModal) {
                    closeLightbox();
                }
            });

            // Keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (!lightboxModal.classList.contains('hidden')) {
                    if (e.key === 'Escape') closeLightbox();
                    if (e.key === 'ArrowLeft') showPrevImage();
                    if (e.key === 'ArrowRight') showNextImage();
                }
            });

            // Initialize
            showPage(currentPage);
        });
    </script>
</section>
