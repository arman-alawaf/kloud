@extends('layouts.newFront')

@section('content')
@php
    $galleries = App\Models\Gallery::where('status', 'active')->get();
@endphp
<style>
    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .gallery-item:hover {
        transform: scale(1.02);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .gallery-item img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.05);
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .filter-btn {
        padding: 8px 16px;
        border: 1px solid #e5e7eb;
        background: white;
        border-radius: 25px;
        font-size: 14px;
        font-weight: 500;
        color: #6b7280;
        cursor: pointer;
        transition: all 0.3s ease;
        margin: 0 4px;
    }

    .filter-btn:hover,
    .filter-btn.active {
        background: #6366f1;
        color: white;
        border-color: #6366f1;
    }

    /* Lightbox Styles */
    .lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.95);
        display: none;
        z-index: 10000;
        align-items: center;
        justify-content: center;
    }

    .lightbox.active {
        display: flex;
    }

    .lightbox-content {
        max-width: 90%;
        max-height: 90%;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .lightbox img {
        max-width: 100%;
        max-height: 100%;
        border-radius: 8px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
    }

    .lightbox-close {
        position: absolute;
        top: 20px;
        right: 20px;
        color: white;
        font-size: 40px;
        cursor: pointer;
        background: rgba(0, 0, 0, 0.5);
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.3s ease;
        z-index: 10001;
    }

    .lightbox-close:hover {
        background: rgba(0, 0, 0, 0.8);
    }

    .lightbox-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: white;
        font-size: 50px;
        cursor: pointer;
        background: rgba(0, 0, 0, 0.5);
        border: none;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        z-index: 10001;
    }

    .lightbox-nav:hover {
        background: rgba(0, 0, 0, 0.8);
        transform: translateY(-50%) scale(1.1);
    }

    .lightbox-prev {
        left: 20px;
    }

    .lightbox-next {
        right: 20px;
    }

    @media (max-width: 768px) {
        .lightbox-nav {
            width: 50px;
            height: 50px;
            font-size: 30px;
        }

        .lightbox-prev {
            left: 10px;
        }

        .lightbox-next {
            right: 10px;
        }

        .lightbox-close {
            top: 10px;
            right: 10px;
            width: 40px;
            height: 40px;
            font-size: 30px;
        }
    }

    .scroll-reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .scroll-reveal.revealed {
        opacity: 1;
        transform: translateY(0);
    }

    .masonry-item {
        break-inside: avoid;
        margin-bottom: 16px;
    }
</style>

    <!-- Hero Section -->
    <section class="pt-24 pb-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-4xl mx-auto text-center">
            <div class="mb-8">
                <span class="inline-block px-4 py-2 bg-gray-100 text-gray-600 text-sm font-medium rounded-full mb-6">
                    Our Gallery
                </span>
                <h1 class="text-4xl md:text-6xl font-light text-gray-900 mb-6">
                    <span class="gradient-text font-normal">Moments</span> That
                    <br>Inspire
                </h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Explore our collection of premium installations, satisfied customers, and the technology that powers Bangladesh's digital future.
                </p>
            </div>

            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="installations">Installations</button>
                <button class="filter-btn" data-filter="customers">Customers</button>
                <button class="filter-btn" data-filter="technology">Technology</button>
                <button class="filter-btn" data-filter="events">Events</button>
            </div>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="columns-1 md:columns-2 lg:columns-3 xl:columns-4 gap-6 space-y-6" id="gallery-grid">
                @foreach($galleries as $gallery)
                <div class="masonry-item gallery-item scroll-reveal" data-category="gallery">
                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full rounded-lg">
                    <div class="gallery-overlay">
                        <div class="text-center text-white">
                            <h3 class="text-lg font-semibold mb-2">{{ $gallery->title }}</h3>
                            <p class="text-sm opacity-90">{{ $gallery->description ?: 'Gallery image' }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center scroll-reveal">
                    <div class="text-3xl font-light gradient-text mb-2">500+</div>
                    <div class="text-sm text-gray-600 uppercase tracking-wide">Installations</div>
                </div>
                <div class="text-center scroll-reveal">
                    <div class="text-3xl font-light gradient-text mb-2">50K+</div>
                    <div class="text-sm text-gray-600 uppercase tracking-wide">Happy Customers</div>
                </div>
                <div class="text-center scroll-reveal">
                    <div class="text-3xl font-light gradient-text mb-2">64</div>
                    <div class="text-sm text-gray-600 uppercase tracking-wide">Districts Covered</div>
                </div>
                <div class="text-center scroll-reveal">
                    <div class="text-3xl font-light gradient-text mb-2">24/7</div>
                    <div class="text-sm text-gray-600 uppercase tracking-wide">Support Available</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div class="lightbox" id="lightbox">
        <button class="lightbox-close" id="lightbox-close" aria-label="Close gallery">&times;</button>
        <button class="lightbox-nav lightbox-prev" id="lightbox-prev" aria-label="Previous image">&#10094;</button>
        <div class="lightbox-content">
            <img id="lightbox-image" src="" alt="Gallery image">
            <div class="lightbox-caption" id="lightbox-caption" style="position: absolute; bottom: -60px; left: 50%; transform: translateX(-50%); color: white; text-align: center; max-width: 80%;"></div>
        </div>
        <button class="lightbox-nav lightbox-next" id="lightbox-next" aria-label="Next image">&#10095;</button>
    </div>

<script>
    // Gallery filtering
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.masonry-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');

            const filterValue = button.getAttribute('data-filter');

            galleryItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Lightbox functionality
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxCaption = document.getElementById('lightbox-caption');
    const lightboxClose = document.getElementById('lightbox-close');
    const lightboxPrev = document.getElementById('lightbox-prev');
    const lightboxNext = document.getElementById('lightbox-next');

    let currentImageIndex = 0;
    let visibleImages = [];

    // Update visible images array
    function updateVisibleImages() {
        visibleImages = Array.from(galleryItems).filter(item =>
            item.style.display !== 'none'
        );
    }

    // Update lightbox content
    function updateLightboxContent() {
        const currentItem = visibleImages[currentImageIndex];
        const imgSrc = currentItem.querySelector('img').src;
        const imgAlt = currentItem.querySelector('img').alt;
        const overlay = currentItem.querySelector('.gallery-overlay');
        const title = overlay.querySelector('h3').textContent;
        const description = overlay.querySelector('p').textContent;

        lightboxImage.src = imgSrc;
        lightboxImage.alt = imgAlt;
        lightboxCaption.innerHTML = `<h3 class="text-lg font-semibold mb-1">${title}</h3><p class="text-sm opacity-90">${description}</p>`;
    }

    // Open lightbox
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            updateVisibleImages();
            currentImageIndex = visibleImages.indexOf(item);
            updateLightboxContent();
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        });
    });

    // Close lightbox
    lightboxClose.addEventListener('click', () => {
        lightbox.classList.remove('active');
        document.body.style.overflow = ''; // Restore scrolling
    });

    // Close lightbox when clicking outside
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        }
    });

    // Navigate images
    lightboxPrev.addEventListener('click', (e) => {
        e.stopPropagation(); // Prevent closing lightbox
        currentImageIndex = (currentImageIndex - 1 + visibleImages.length) % visibleImages.length;
        updateLightboxContent();
    });

    lightboxNext.addEventListener('click', (e) => {
        e.stopPropagation(); // Prevent closing lightbox
        currentImageIndex = (currentImageIndex + 1) % visibleImages.length;
        updateLightboxContent();
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;

        if (e.key === 'Escape') {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        } else if (e.key === 'ArrowLeft') {
            lightboxPrev.click();
        } else if (e.key === 'ArrowRight') {
            lightboxNext.click();
        }
    });

    // Scroll reveal animation
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.scroll-reveal').forEach(el => {
        observer.observe(el);
    });
</script>

@endsection