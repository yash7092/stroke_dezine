<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ $projectTitle }} | Stroke Dezine</title>

    <meta name="description" content="Explore our {{ strtolower($projectTitle) }} project and portfolio at Stroke Dezine." />
    <meta name="keywords" content="Stroke Dezine, {{ $projectTitle }}, Portfolio, Creative Design" />
    <meta name="author" content="Stroke Dezine Team" />

    <!-- Canonical URL -->
    <link rel="canonical" href="https://strokedezine.com/project/{{ $projectSlug }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://strokedezine.com/project/{{ $projectSlug }}">
    <meta property="og:title" content="{{ $projectTitle }} | Stroke Dezine">
    <meta property="og:description" content="Explore our {{ strtolower($projectTitle) }} project and portfolio at Stroke Dezine.">
    <meta property="og:image" content="https://strokedezine.com/{{ $mainImage }}" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://strokedezine.com/project/{{ $projectSlug }}">
    <meta name="twitter:title" content="{{ $projectTitle }} | Stroke Dezine">
    <meta name="twitter:description" content="Explore our {{ strtolower($projectTitle) }} project and portfolio at Stroke Dezine.">
    <meta name="twitter:image" content="https://strokedezine.com/{{ $mainImage }}" />

    <title>Sd stroke design</title>
    <!-- ✅ Local CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/project-details.css') }}">

    <!-- ✅ Favicon -->
    <link rel="icon" href="images/logo.svg" type="image/svg+xml">

    <!-- ✅ Font Awesome (Latest + Secure) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ✅ Bootstrap Icons (optional if used) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <style>
        .project-hero::before {
            background: url('{{ $mainImage }}') center/cover;
        }
    </style>
</head>

<body>
    @include('components.header')

    <main role="main">

    <div class="project-container">
        <!-- Project Hero Section -->
        <div class="project-hero">
            <div class="hero-content">
                <h1 class="project-title">{{ $projectTitle }}</h1>
                <p class="project-description">{{ $projectDescription }}</p>
            </div>
        </div>

        <!-- Project Info Section -->
        <!-- <div class="project-info">
            <div class="info-grid">
                <div class="info-item" data-aos="fade-up">
                    <div class="info-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="info-title">Creative Design</h3>
                    <p class="info-text">Innovative and creative design solutions tailored to your project needs.</p>
                </div>
                <div class="info-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="info-title">Responsive</h3>
                    <p class="info-text">All designs are optimized for all devices and screen sizes.</p>
                </div>
                <div class="info-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="info-title">Fast Delivery</h3>
                    <p class="info-text">Quick turnaround times without compromising on quality.</p>
                </div>
            </div>
        </div> -->

        <!-- Gallery Section -->
        <div class="gallery-section">
            <h2 class="gallery-title">Project Gallery</h2>
            <div class="gallery-grid{{ $showThreeColumns ? ' grid-3-cols' : '' }}">
                @foreach($relatedImages as $index => $image)
                    @php
                        $isLastRow = $showThreeColumns && $loop->index >= count($relatedImages) - 2;
                    @endphp
                    <div class="gallery-item{{ $isLastRow ? ' last-row' : '' }}" onclick="openModal('{{ asset($image['src']) }}', '{{ $image['title'] }}', '{{ $image['description'] }}')">
                        <img src="{{ asset($image['src']) }}" alt="{{ $image['title'] }}" loading="lazy" style="max-width:100%;height:auto;display:block;margin:0 auto;">
                        <div class="gallery-overlay">
                            <h3 class="gallery-title-text">{{ $image['title'] }}</h3>
                            <p class="gallery-description">{{ $image['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </main>

    @include('components.footer')

    <!-- Modal for image preview -->
    <div id="imageModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImage">
        <div id="modalCaption"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        function toggleMenu() {
            const navMenu = document.getElementById('navMenu');
            const menuToggle = document.querySelector('.menu-toggle');
            navMenu.classList.toggle('active');
            menuToggle.classList.toggle('active');
            menuToggle.setAttribute('aria-expanded', navMenu.classList.contains('active'));
        }

        // Close menu when a nav link is clicked (on mobile)
        document.addEventListener('DOMContentLoaded', () => {
            const navLinks = document.querySelectorAll('.nav-menu a');
            const navMenu = document.getElementById('navMenu');
            const menuToggle = document.querySelector('.menu-toggle');

            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth <= 768) {
                        navMenu.classList.remove('active');
                        menuToggle.classList.remove('active');
                        menuToggle.setAttribute('aria-expanded', 'false');
                    }
                });
            });
        });

        function openModal(src, title, description) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            const modalCaption = document.getElementById('modalCaption');
            
            modal.style.display = "block";
            modalImg.src = src;
            modalCaption.innerHTML = `<h3>${title}</h3><p>${description}</p>`;
        }

        function closeModal() {
            document.getElementById('imageModal').style.display = "none";
        }

        // Close modal when clicking outside the image
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>

</html> 