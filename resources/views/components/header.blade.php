<header>
    <nav id="navbar" role="navigation">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('images/logo.svg') }}" alt="sd stroke design" />
            </a>
        </div>
        <button class="menu-toggle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navMenu" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <ul class="nav-menu" id="navMenu">
            <li><a href="/" onclick="navigateToSection(event, 'home')">HOME</a></li>
            <li><a href="/about" onclick="navigateToSection(event, 'about')">ABOUT US</a></li>
            <li><a href="/services" onclick="navigateToSection(event, 'services')">SERVICES</a></li>
            <li><a href="/projects" onclick="navigateToSection(event, 'projects')">PROJECT</a></li>
            <li><a href="/contact" onclick="navigateToSection(event, 'contact')">CONTACT</a></li>
        </ul>
    </nav>
    <div class="header-lines">
        <div class="header-line-dark"></div>
        <div class="header-line-light"></div>
    </div>
</header>
