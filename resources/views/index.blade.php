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

    <title>Sd stroke design</title>
    <!-- ✅ Local CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
            <h2 class="custom-fade-in">OUR SERVICES</h2>
            <div class="services-grid">
                <div class="service-card custom-fade-in" data-aos="zoom-in-up" data-aos-duration="800" onclick="goToHome()" tabindex="0" aria-label="Creative Design" onkeydown="if(event.key==='Enter'){goToHome();}">
                    <img src="images/1st.png" alt="Creative Design" class="service-icon">
                    <div>
                        <div class="service-title">
                            <h1>Creative Design</h1>
                        </div>
                        <p>We create alluring designs for brochures, magazines, and more! Our designs speak louder than
                            words.</p>
                    </div>
                </div>

                <div class="service-card custom-fade-in" data-aos="fade-right" data-aos-duration="800" onclick="goToHome()" tabindex="0" aria-label="Virtual Samples" onkeydown="if(event.key==='Enter'){goToHome();}">
                    <img src="images/2nd.png" alt="Virtual Samples" class="service-icon">
                    <div>
                        <div class="service-title">
                            <h1>Virtual Samples</h1>
                        </div>
                        <p>Our virtual samples set the tone for your brand and leave a long-lasting impression on customers.
                        </p>
                    </div>
                </div>

                <div class="service-card custom-fade-in" data-aos="fade-left" data-aos-duration="800" onclick="goToHome()" tabindex="0" aria-label="Raster to Vector" onkeydown="if(event.key==='Enter'){goToHome();}">
                    <img src="images/3rd.png" alt="Raster to Vector" class="service-icon">
                    <div>
                        <div class="service-title">
                            <h1>Raster to Vector</h1>
                        </div>
                        <p>Convert your documents into electronic formats securely without any hassles with Stroke Dezine
                        </p>
                    </div>
                </div>

                <div class="service-card custom-fade-in" data-aos="fade-up" data-aos-duration="800" onclick="goToHome()" tabindex="0" aria-label="Web Design" onkeydown="if(event.key==='Enter'){goToHome();}">
                    <img src="images/7th.png" alt="Web Design" class="service-icon">
                    <div>
                        <div class="service-title">
                            <h1>Web Design</h1>
                        </div>
                        <p>Make your way to the online world with our captivating Web Design services!</p>
                    </div>
                </div>

                <div class="service-card custom-fade-in" data-aos="zoom-in" data-aos-duration="800" onclick="goToHome()" tabindex="0" aria-label="Files Ready to Print" onkeydown="if(event.key==='Enter'){goToHome();}">
                    <img src="images/8th.png" alt="Files Ready to Print" class="service-icon">
                    <div>
                        <div class="service-title">
                            <h1>Files Ready to Print</h1>
                        </div>
                        <p>Cost-effective and custom print service from the best in the business.</p>
                    </div>
                </div>

                <div class="service-card custom-fade-in" data-aos="zoom-in-up" data-aos-duration="800" onclick="goToHome()" tabindex="0" aria-label="Branding" onkeydown="if(event.key==='Enter'){goToHome();}">
                    <img src="images/4th.png" alt="Branding" class="service-icon">
                    <div>
                        <div class="service-title">
                            <h1>Branding</h1>
                        </div>
                        <p>We provide powerful branding services that will grow your business to new zeniths.</p>
                    </div>
                </div>

                <div class="service-card custom-fade-in" data-aos="fade-up" data-aos-duration="800" onclick="goToHome()" tabindex="0" aria-label="Apparel Design" onkeydown="if(event.key==='Enter'){goToHome();}">
                    <img src="images/5th.png" alt="Apparel Design" class="service-icon">
                    <div>
                        <div class="service-title">
                            <h1>Apparel Design</h1>
                        </div>
                        <p>From trend research to choosing colors, materials, and brand identity—everything is included.</p>
                    </div>
                </div>

                <div class="service-card custom-fade-in" data-aos="fade-up" data-aos-duration="800" onclick="goToHome()" tabindex="0" aria-label="Color Separation" onkeydown="if(event.key==='Enter'){goToHome();}">
                    <img src="images/6th.png" alt="Color Separation" class="service-icon">
                    <div>
                        <div class="service-title">
                            <h1>Color Separation</h1>
                        </div>
                        <p>Get the best color separation service with top-notch results.</p>
                    </div>
                </div>

                <div class="service-card custom-fade-in" data-aos="fade-up" data-aos-duration="800" onclick="goToHome()" tabindex="0" aria-label="Promotional Product Design" onkeydown="if(event.key==='Enter'){goToHome();}">
                    <img src="images/9th.png" alt="Promotional Design" class="service-icon">
                    <div>
                        <div class="service-title">
                            <h1>Promotional Product Design</h1>
                        </div>
                        <p>Your product design should speak the quality & features, and we take that seriously!</p>
                    </div>
                </div>
            </div>

            <div class="dev custom-fade-in" data-aos="fade-up">
                <h1>Developers</h1>
            </div>

            <div class="services-grid">
                <div class="service-card custom-fade-in" data-aos="zoom-in-left" data-aos-duration="800" onclick="goToHome()" tabindex="0" aria-label="Mobile App Development" onkeydown="if(event.key==='Enter'){goToHome();}">
                    <img src="images/mobile.jpg" alt="Mobile App Development" class="service-icon">
                    <div>
                        <div class="service-title">
                            <h1>Mobile App Development</h1>
                        </div>
                        <p>Developing user-friendly and high-performance applications for Android and iOS devices</p>
                    </div>
                </div>

                <div class="service-card custom-fade-in" data-aos="zoom-in-right" data-aos-duration="800" onclick="goToHome()" tabindex="0" aria-label="Software Development" onkeydown="if(event.key==='Enter'){goToHome();}">
                    <img src="images/desk.png" alt="Software Development" class="service-icon">
                    <div>
                        <div class="service-title">
                            <h1>Software Development</h1>
                        </div>
                        <p>Creating reliable and scalable software solutions for desktops, servers, and enterprise systems.
                        </p>
                    </div>
                </div>

                <div class="service-card custom-fade-in" data-aos="zoom-in-up" data-aos-duration="800" onclick="goToHome()" tabindex="0" aria-label="Web Development" onkeydown="if(event.key==='Enter'){goToHome();}">
                    <img src="images/web.png" alt="Web Development" class="service-icon">
                    <div>
                        <div class="service-title">
                            <h1>Web Development</h1>
                        </div>
                        <p>Designing and building responsive, interactive websites and web applications for all devices.</p>
                    </div>
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

                </div>
            </div>
            <div class="custom-slider-dots" id="customSliderDots"></div>
            <div class="custom-slider-btn-wrapper">
                <button class="custom-slider-btn">MORE WORKS</button>
            </div>
        </section>

        <section class="contact-section" id="contact">
            <div class="contact-form custom-fade-in">
                <form action="{{ url('/sendmail') }}" method="POST" id="contactForm">
                    @csrf
                    <div class="row two-cols">
                        <div class="form-group">
                            <input type="text" name="name" placeholder=" " required />
                            <label>Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder=" " required />
                            <label>Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <input type="text" name="subject" placeholder=" " required />
                            <label>Subject</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <textarea name="message" rows="5" placeholder=" " required></textarea>
                            <label>Message</label>
                        </div>
                    </div>
                    <div class="row center">
                        <button type="submit" id="sendBtn" class="send-btn">
                            <span id="btnText">Send Message</span>
                            <span id="btnLoader" style="display: none;">Sending...</span>
                        </button>
                    </div>
                </form>
                <div id="successPopup" style="display:none;">Mail sent successfully!</div>
            </div>
        </section>
    </main>

        @include('components.footer')


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

        const images = document.querySelectorAll('.slide img');
        const zoomedImg = document.getElementById('zoomedImage');
        const zoomDots = document.getElementById('zoomDots');
        const sliderTrack = document.getElementById('customSliderTrack');
        const dotsContainer = document.getElementById('customSliderDots');
        const slides = document.querySelectorAll('.slide');

        let currentIndex = 0;
        let zoomIndex = 0;
        let autoSlideTimer;

        // === Slideshow Dots ===
        slides.forEach((_, i) => {
            const dot = document.createElement('span');
            dot.classList.add('dot');
            if (i === 0) dot.classList.add('active');
            dot.onclick = () => {
                currentIndex = i;
                updateSlider();
                resetAutoSlide();
            };
            dotsContainer.appendChild(dot);
        });

        function updateSlider() {
            sliderTrack.style.transform = `translateX(-${currentIndex * 100}%)`;
            document.querySelectorAll('.dots-container .dot').forEach((dot, i) => {
                dot.classList.toggle('active', i === currentIndex);
            });
        }

        function moveSlide(step) {
            currentIndex += step;
            if (currentIndex >= slides.length) currentIndex = 0;
            if (currentIndex < 0) currentIndex = slides.length - 1;
            updateSlider();
            resetAutoSlide();
        }

        // === Auto Slide every 5 seconds ===
        function startAutoSlide() {
            autoSlideTimer = setInterval(() => {
                moveSlide(1);
            }, 2500); // 2500ms = 2.5s
        }

        function resetAutoSlide() {
            clearInterval(autoSlideTimer);
            startAutoSlide();
        }

        // === Zoom Modal ===
        function zoomImage(img) {
            zoomIndex = Array.from(images).indexOf(img);
            updateZoomModal();
            document.getElementById('zoomModal').style.display = 'flex';
        }

        function closeZoom() {
            document.getElementById('zoomModal').style.display = 'none';
        }

        function zoomNavigate(step) {
            zoomIndex += step;
            if (zoomIndex >= images.length) zoomIndex = 0;
            if (zoomIndex < 0) zoomIndex = images.length - 1;
            updateZoomModal();
        }

        function updateZoomModal() {
            zoomedImg.src = images[zoomIndex].src;
            renderZoomDots();
        }

        function renderZoomDots() {
            zoomDots.innerHTML = '';
            images.forEach((_, i) => {
                const dot = document.createElement('span');
                dot.classList.add('dot');
                if (i === zoomIndex) dot.classList.add('active');
                dot.onclick = () => {
                    zoomIndex = i;
                    updateZoomModal();
                };
                zoomDots.appendChild(dot);
            });
        }

        // Keyboard Support
        document.addEventListener('keydown', (e) => {
            const modal = document.getElementById('zoomModal');
            if (modal.style.display === 'flex') {
                if (e.key === 'Escape') closeZoom();
                if (e.key === 'ArrowLeft') zoomNavigate(-1);
                if (e.key === 'ArrowRight') zoomNavigate(1);
            }
        });

        // === Start everything ===
        updateSlider();
        startAutoSlide(); // begin auto slide on page load


        const serviceCards = document.querySelectorAll(".services-grid .service-card");

        serviceCards.forEach(card => {
            card.addEventListener("mouseenter", () => {
                serviceCards.forEach(c => {
                    if (c !== card) {
                        c.classList.add("dimmed");
                        c.classList.remove("active");
                    } else {
                        c.classList.add("active");
                    }
                });
            });

            card.addEventListener("mouseleave", () => {
                serviceCards.forEach(c => {
                    c.classList.remove("dimmed", "active");
                });
            });
        });

        AOS.init({
            duration: 1000,
            once: false, // 👈 animate every time
        });

        const form = document.getElementById("contactForm");
        const btn = document.getElementById("sendBtn");
        const btnText = document.getElementById("btnText");
        const btnLoader = document.getElementById("btnLoader");
        const popup = document.getElementById("successPopup");

        form.addEventListener("submit", async function(e) {
            e.preventDefault();
            btn.disabled = true;
            btnText.style.display = "none";
            btnLoader.style.display = "inline";

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
                    popup.style.display = "block";
                    setTimeout(() => popup.style.display = "none", 2000);
                } else {
                    alert("Message failed. Try again.");
                }
            } catch (err) {
                alert("An error occurred.");
                console.error(err);
            }

            btn.disabled = false;
            btnText.style.display = "inline";
            btnLoader.style.display = "none";
        });

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
// True carousel slider logic with dynamic slide width
const imagesCount = document.querySelectorAll('#customSliderTrack .custom-slide').length;
let slidesToShow = 3;
let current = 0;
const track = document.getElementById('customSliderTrack');
const container = document.querySelector('.custom-slider-container');
const dots = document.getElementById('customSliderDots');
function getSlidesToShow() {
    if (window.innerWidth <= 768) return 1;
    if (window.innerWidth <= 1200) return 2;
    return 3;
}
function updateSlider() {
    slidesToShow = getSlidesToShow();
    const gap = parseInt(getComputedStyle(track).gap || 0);
    const trackPadding = parseInt(getComputedStyle(track).paddingLeft || 0) + parseInt(getComputedStyle(track).paddingRight || 0);
    const containerPadding = parseInt(getComputedStyle(container).paddingLeft || 0) + parseInt(getComputedStyle(container).paddingRight || 0);
    const availableWidth = container.offsetWidth - containerPadding - trackPadding;
    const slideWidth = (availableWidth - gap * (slidesToShow - 1)) / slidesToShow;
    
    track.querySelectorAll('.custom-slide').forEach(slide => {
        slide.style.minWidth = slide.style.maxWidth = slide.style.width = slideWidth + 'px';
    });
    track.style.transform = `translateX(-${current * (slideWidth + gap)}px)`;
    renderDots();
}
function renderDots() {
    dots.innerHTML = '';
    for (let i = 0; i <= imagesCount - slidesToShow; i++) {
        const dot = document.createElement('span');
        dot.className = 'custom-dot' + (i === current ? ' active' : '');
        dot.onclick = () => { current = i; updateSlider(); };
        dots.appendChild(dot);
    }
}
function autoSlide() {
    slidesToShow = getSlidesToShow();
    current = (current + 1) % (imagesCount - slidesToShow + 1);
    updateSlider();
}
window.addEventListener('resize', updateSlider);
updateSlider();
setInterval(autoSlide, 2500);
</script>
</body>

</html>