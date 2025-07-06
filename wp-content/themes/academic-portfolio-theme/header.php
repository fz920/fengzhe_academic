<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Fengzhe Zhang - Machine Learning Researcher specializing in Probabilistic Generative Models. Research experience at University of Cambridge.">
    <meta name="keywords" content="Machine Learning, Probabilistic Generative Models, Diffusion Models, Academic Research, Cambridge">
    <meta name="author" content="Fengzhe Zhang">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Fengzhe Zhang - Academic Portfolio">
    <meta property="og:description" content="Machine Learning Researcher specializing in Probabilistic Generative Models">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Fengzhe Zhang - Academic Portfolio">
    <meta name="twitter:description" content="Machine Learning Researcher specializing in Probabilistic Generative Models">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header Navigation -->
<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white/80 backdrop-blur-md border-b border-gray-200">
    <div class="container-custom">
        <div class="flex items-center justify-between py-4">
            <!-- Logo/Name -->
            <div class="flex items-center">
                <a href="<?php echo home_url(); ?>" class="text-2xl font-bold text-gray-900 font-crimson">
                    <?php echo get_theme_mod('hero_name', 'Fengzhe Zhang'); ?>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#about" class="nav-link">About</a>
                <a href="#research" class="nav-link">Research</a>
                <a href="#publications" class="nav-link">Publications</a>
                <a href="#education" class="nav-link">Education</a>
                <a href="#teaching" class="nav-link">Teaching</a>
                <a href="#contact" class="nav-link">Contact</a>
                
                <?php
                // Display WordPress menu if one exists
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'flex items-center space-x-8',
                        'container' => false,
                        'walker' => new Academic_Portfolio_Walker_Nav_Menu(),
                    ));
                }
                ?>
            </nav>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-gray-700 hover:text-blue-600 transition-colors" id="mobile-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div class="md:hidden bg-white border-t border-gray-200 hidden" id="mobile-menu">
            <nav class="py-4 space-y-2">
                <a href="#about" class="block py-2 nav-link">About</a>
                <a href="#research" class="block py-2 nav-link">Research</a>
                <a href="#publications" class="block py-2 nav-link">Publications</a>
                <a href="#education" class="block py-2 nav-link">Education</a>
                <a href="#teaching" class="block py-2 nav-link">Teaching</a>
                <a href="#contact" class="block py-2 nav-link">Contact</a>
            </nav>
        </div>
    </div>
</header>

<script>
// Mobile menu toggle
document.getElementById('mobile-menu-button').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
});

// Close mobile menu when clicking on a link
document.querySelectorAll('#mobile-menu a').forEach(function(link) {
    link.addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.add('hidden');
    });
});

// Header background on scroll
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    if (window.scrollY > 100) {
        header.classList.add('bg-white/95');
        header.classList.remove('bg-white/80');
    } else {
        header.classList.add('bg-white/80');
        header.classList.remove('bg-white/95');
    }
});
</script> 