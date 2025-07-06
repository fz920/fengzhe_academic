<!-- Hero Section -->
<section id="hero" class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-indigo-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="space-y-8">
            <!-- Main heading -->
            <div class="space-y-4">
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold text-gray-900 font-crimson">
                    <?php echo get_theme_mod('hero_name', 'Fengzhe Zhang'); ?>
                </h1>
                <p class="text-xl sm:text-2xl text-gray-600 font-medium">
                    <?php echo get_theme_mod('hero_title', 'Machine Learning Researcher • Probabilistic Generative Models'); ?>
                </p>
            </div>

            <!-- Description -->
            <div class="max-w-3xl mx-auto">
                <p class="text-lg sm:text-xl text-gray-700 leading-relaxed">
                    <?php echo get_theme_mod('hero_description', 'I am a Machine Learning Researcher with a passion for developing probabilistic generative models. My work focuses on advancing diffusion models and developing novel sampling techniques for molecular energy functions, with applications in computational chemistry and drug discovery.'); ?>
                </p>
            </div>

            <!-- Current position -->
            <div class="bg-white/60 backdrop-blur-sm rounded-lg p-6 max-w-2xl mx-auto border border-gray-200">
                <p class="text-gray-800">
                    <span class="font-semibold">Currently:</span> <?php echo get_theme_mod('hero_current_position', 'Research Assistant at University of Cambridge'); ?>
                </p>
                <p class="text-gray-600 mt-2">
                    Supervisor: <?php echo get_theme_mod('hero_supervisor', 'Prof. José Miguel Hernández-Lobato'); ?>
                </p>
            </div>

            <!-- Contact info -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6 text-gray-600">
                <a href="mailto:<?php echo get_theme_mod('hero_email', 'fz287@cam.ac.uk'); ?>" 
                   class="flex items-center gap-2 hover:text-blue-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <?php echo get_theme_mod('hero_email', 'fz287@cam.ac.uk'); ?>
                </a>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <?php echo get_theme_mod('hero_phone', '+44 (0)7421 727 978'); ?>
                </div>
            </div>

            <!-- CTA buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#publications" class="btn btn-primary">
                    View Publications
                </a>
                <a href="#research" class="btn btn-secondary">
                    Research Experience
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="scroll-indicator">
            <div class="w-1 h-3 bg-gray-400 rounded-full mt-2"></div>
        </div>
    </div>
</section> 