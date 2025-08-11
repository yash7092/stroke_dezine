<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Stroke Dezine | Premium Creative Design Services</title>

    <meta name="description"
        content="Stroke Dezine offers premium creative design services including branding, web design, apparel, color separation, and promotional designs. Based in the USA." />
    <meta name="keywords"
        content="Stroke Dezine, Creative Design, Branding, Web Design USA, Apparel Design, Color Separation, Promotional Product Design" />
    <meta name="author" content="Stroke Dezine Team" />

    <!-- Canonical URL -->
    <link rel="canonical" href="https://strokedezine.com/" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://strokedezine.com/">
    <meta property="og:title" content="Stroke Dezine | Premium Creative Design Services">
    <meta property="og:description"
        content="We deliver high-quality, professional design services including branding, web design, and more. Elevate your business with Stroke Dezine.">
    <meta property="og:image" content="https://strokedezine.com/logo.svg" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://strokedezine.com/">
    <meta name="twitter:title" content="Stroke Dezine | Premium Creative Design Services">
    <meta name="twitter:description"
        content="We deliver high-quality, professional design services including branding, web design, and more. Elevate your business with Stroke Dezine.">
    <meta name="twitter:image" content="https://strokedezine.com/logo.svg" />

    <title>Stroke Dezine</title>
    <!-- Clean Modern CSS -->
    <link rel="stylesheet" href="{{ asset('css/clean-style.css') }}">

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

</head>

<body>
    <!-- <header>
        <nav id="navbar" role="navigation">
            <div class="logo">
                <a href="#home">
                    <img src="images/logo.svg" alt="sd stroke design" />
                </a>
            </div>
            <button class="menu-toggle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navMenu" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-menu" id="navMenu">
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT FATBEE</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#projects">PROJECT</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </nav>
    </header> -->
    @include('components.header')

    <main role="main">
        <section id="home">
            <div class="section-container">
                <div class="home-content">
                    <div class="home-text custom-fade-in">
                        <h1>
                            Nothing is Possible <br />
                            Without Stroke, Everything <br />
                            Starts with Stroke and Ends with Stroke
                        </h1>
                        <p>
                            We create compelling designs that connect deeply and<br />
                            inspire action from your customers
                        </p>
                    </div>
                    <div class="home-image" data-aos="fade-left" data-aos-delay="200">
                        <img src="images/home_pic.png" alt="Pointing Man" />
                    </div>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="section-container">
                <div class="about-content" data-aos="fade-up">
                    <div class="about-image custom-fade-in">
                        <img src="images/about.jpg" alt="About us image" />
                    </div>
                    <div class="about-text custom-fade-in" data-aos="fade-left" data-aos-delay="400">
                        <h2>About us</h2>
                        <h3>Premium Design Services for Your Business</h3>
                        <p>
                            Stroke Dezine is a team of talented designers dedicated to creating
                            exceptional visual solutions for your brand. We blend creativity
                            and professionalism to deliver high-quality design services that
                            help you stand out.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-section" id="services">
            <h2>OUR SERVICES</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <div class="service-title">
                        <h3>Creative Design</h3>
                    </div>
                    <p>We create alluring designs for brochures, magazines, and more! Our designs speak louder than words.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="service-title">
                        <h3>Virtual Samples</h3>
                    </div>
                    <p>Our virtual samples set the tone for your brand and leave a long-lasting impression on customers.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-vector-square"></i>
                    </div>
                    <div class="service-title">
                        <h3>Raster to Vector</h3>
                    </div>
                    <p>Convert your documents into electronic formats securely without any hassles.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="service-title">
                        <h3>Web Design</h3>
                    </div>
                    <p>Make your way to the online world with our captivating Web Design services!</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-print"></i>
                    </div>
                    <div class="service-title">
                        <h3>Files Ready to Print</h3>
                    </div>
                    <p>Cost-effective and custom print service from the best in the business.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-trademark"></i>
                    </div>
                    <div class="service-title">
                        <h3>Branding</h3>
                    </div>
                    <p>We provide powerful branding services that will grow your business to new heights.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <div class="service-title">
                        <h3>Apparel Design</h3>
                    </div>
                    <p>From trend research to choosing colors, materials, and brand identity—everything is included.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <div class="service-title">
                        <h3>Color Separation</h3>
                    </div>
                    <p>Get the best color separation service with top-notch results.</p>
                </div>
            </div>

            <div class="dev custom-fade-in" data-aos="fade-up">
                <h1>Developers</h1>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="service-title">
                        <h3>Mobile App Development</h3>
                    </div>
                    <p>Developing user-friendly and high-performance applications for Android and iOS devices.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <div class="service-title">
                        <h3>Software Development</h3>
                    </div>
                    <p>Creating reliable and scalable software solutions for desktops, servers, and enterprise systems.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="service-title">
                        <h3>Web Development</h3>
                    </div>
                    <p>Designing and building responsive, interactive websites and web applications for all devices.</p>
                </div>
            </div>
        </section>

        <section id="projects" class="projects-section">
            <h1 class="projects-title custom-fade-in">My Projects</h1>
            <div class="custom-slider-container">
                <div class="custom-slider-track" id="customSliderTrack">
                    <div class="custom-slide" onclick="goToProject('project-1')" style="cursor: pointer;"><img src="images/01.jpg" alt="Project 1"></div>
                    <div class="custom-slide" onclick="goToProject('project-2')" style="cursor: pointer;"><img src="images/02.jpg" alt="Project 2"></div>
                    <div class="custom-slide" onclick="goToProject('project-3')" style="cursor: pointer;"><img src="images/03.jpg" alt="Project 3"></div>
                    <div class="custom-slide" onclick="goToProject('project-4')" style="cursor: pointer;"><img src="images/04.jpg" alt="Project 4"></div>
                 
                    <!-- <div class="custom-slide" onclick="goToProject('project-5')" style="cursor: pointer;"><img src="images/01.jpg" alt="Project 5"></div>
                    <div class="custom-slide" onclick="goToProject('project-6')" style="cursor: pointer;"><img src="images/02.jpg" alt="Project 6"></div> -->
                </div>
            </div>
            <div class="custom-slider-dots" id="customSliderDots"></div>
            <div class="custom-slider-btn-wrapper">
                <button class="custom-slider-btn">MORE WORKS</button>
            </div>
        </section>

        <section class="contact-section" id="contact">
            <div class="contact-form">
                <h2>Get In Touch</h2>
                <form action="{{ url('/sendmail') }}" method="POST" id="contactForm">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" required />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Subject" required />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <textarea name="message" rows="5" placeholder="Describe what you need" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="submit-btn">
                        Send Message
                    </button>
                </form>
                <div id="successPopup" style="display:none; padding: var(--space-4); background: #48bb78; color: white; border-radius: 8px; text-align: center; margin-top: var(--space-4);">Mail sent successfully!</div>
            </div>
        </section>
    </main>

        @include('components.footer')


    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        // Navigation Menu Toggle
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

            // Initialize AOS
            AOS.init({
                duration: 1000,
                once: true
            });
        });

        // Slider functionality is handled by the advanced script below

        function goToProject(projectId) {
            // You can implement project detail navigation here
            console.log('Go to project:', projectId);
        }

        // Contact form handling
        const form = document.getElementById("contactForm");
        const btn = document.querySelector(".submit-btn");
        const popup = document.getElementById("successPopup");

        if (form && btn) {
            form.addEventListener("submit", async function(e) {
                e.preventDefault();
                
                // Show loading state
                const originalText = btn.textContent;
                btn.disabled = true;
                btn.textContent = "Sending...";

                const formData = new FormData(form);

                try {
                    const response = await fetch("{{ url('/sendmail') }}", {
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: formData
                    });

                    const result = await response.json();

                    if (result.status === "success") {
                        form.reset();
                        if (popup) {
                            popup.style.display = "block";
                            setTimeout(() => popup.style.display = "none", 3000);
                        }
                    } else {
                        alert("Message failed. Try again.");
                    }
                } catch (err) {
                    alert("An error occurred.");
                    console.error(err);
                }

                // Reset button state
                btn.disabled = false;
                btn.textContent = originalText;
            });
        }

        function goToHome() {
            window.location.href = window.location.origin + window.location.pathname;
        }

        function goToProject(project) {
            window.location.href = window.location.origin + '/project/' + project;
        }

        // Force AOS to refresh when scrolling to the top, so home animation re-triggers
        window.addEventListener('scroll', function() {
            if (window.scrollY === 0) {
                if (window.AOS && typeof window.AOS.refreshHard === 'function') {
                    window.AOS.refreshHard();
                }
                // Manually replay AOS animation for home section
                const homeSection = document.querySelector('#home');
                if (homeSection) {
                    homeSection.classList.remove('aos-animate');
                    void homeSection.offsetWidth; // Force reflow
                    setTimeout(() => {
                        homeSection.classList.add('aos-animate');
                    }, 10);
                }
            }
        });

        // Remove aos-animate class when element leaves the viewport, so AOS can re-apply it
        const aosElements = document.querySelectorAll('[data-aos]');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    entry.target.classList.remove('aos-animate');
                }
            });
        }, { threshold: 0.1 }); // Lower threshold for more reliable exit detection

        aosElements.forEach(el => observer.observe(el));
    </script>
    <script>
        // Custom fade-in animation for .custom-fade-in elements
        document.querySelectorAll('.custom-fade-in').forEach(el => {
          el.classList.remove('visible');
        });
        const fadeEls = document.querySelectorAll('.custom-fade-in');
        const fadeObserver = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('visible');
            } else {
              entry.target.classList.remove('visible');
            }
          });
        }, { threshold: 0.01 });
        fadeEls.forEach(el => fadeObserver.observe(el));
    </script>
    <script>
// Enhanced carousel slider logic with better slide handling
const sliderTrack = document.getElementById('customSliderTrack');
const sliderContainer = document.querySelector('.custom-slider-container');
const dotsContainer = document.getElementById('customSliderDots');
const slides = document.querySelectorAll('.custom-slide');
const totalSlides = slides.length;

let currentSlide = 0;
let slidesToShow = 3; // Default for large screens

function getSlidesToShow() {
    if (window.innerWidth <= 768) return 1;
    if (window.innerWidth <= 1200) return 2;
    return 3; // For screens wider than 1200px
}

function updateSlider() {
    slidesToShow = getSlidesToShow();
    const gap = parseInt(getComputedStyle(sliderTrack).gap) || 20; // Default gap of 20px if not set
    const containerWidth = sliderContainer.offsetWidth;
    const slideWidth = (containerWidth / slidesToShow) - (gap * (slidesToShow - 1) / slidesToShow);

    // Update slide widths
    slides.forEach(slide => {
        slide.style.minWidth = `${slideWidth}px`;
        slide.style.maxWidth = `${slideWidth}px`;
        slide.style.flex = `0 0 ${slideWidth}px`;
    });

    // Update track width to fit all slides
    const totalWidth = (slideWidth * totalSlides) + (gap * (totalSlides - 1));
    sliderTrack.style.width = `${totalWidth}px`;
    
    // Update track position
    const maxSlide = Math.max(0, totalSlides - slidesToShow);
    currentSlide = Math.min(currentSlide, maxSlide);
    sliderTrack.style.transform = `translateX(-${currentSlide * (slideWidth + gap)}px)`;
    
    updateDots();
}

function updateDots() {
    if (!dotsContainer) return;
    
    dotsContainer.innerHTML = '';
    const maxSlide = Math.max(0, totalSlides - slidesToShow);
    
    for (let i = 0; i <= maxSlide; i++) {
        const dot = document.createElement('span');
        dot.className = `custom-dot ${i === currentSlide ? 'active' : ''}`;
        dot.onclick = () => {
            currentSlide = i;
            updateSlider();
        };
        dotsContainer.appendChild(dot);
    }
}

function nextSlide() {
    const maxSlide = Math.max(0, totalSlides - slidesToShow);
    currentSlide = (currentSlide + 1) % (maxSlide + 1);
    updateSlider();
}

function prevSlide() {
    const maxSlide = Math.max(0, totalSlides - slidesToShow);
    currentSlide = (currentSlide - 1 + maxSlide + 1) % (maxSlide + 1);
    updateSlider();
}

// Initialize slider
function initSlider() {
    // Add event listeners for navigation buttons if they exist
    const nextBtn = document.querySelector('.custom-slider-next');
    const prevBtn = document.querySelector('.custom-slider-prev');
    
    if (nextBtn) nextBtn.addEventListener('click', nextSlide);
    if (prevBtn) prevBtn.addEventListener('click', prevSlide);
    
    // Initial update
    updateSlider();
}

// Handle window resize with debounce
let resizeTimer;
window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        updateSlider();
    }, 250);
});

// Initialize slider when DOM is loaded
document.addEventListener('DOMContentLoaded', initSlider);

// Auto-slide functionality
let slideInterval = setInterval(nextSlide, 3000);

// Pause auto-slide on hover
if (sliderContainer) {
    sliderContainer.addEventListener('mouseenter', () => clearInterval(slideInterval));
    sliderContainer.addEventListener('mouseleave', () => {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 3000);
    });
}
</script>
</body>

</html>