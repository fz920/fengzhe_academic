<!-- Research Section -->
<section id="research" class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 font-crimson mb-4">
                Research Experience
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                My journey in advancing machine learning through innovative research and collaboration
            </p>
        </div>

        <div class="space-y-8">
            <?php
            // Query research posts
            $research_args = array(
                'post_type' => 'research',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            
            $research_query = new WP_Query($research_args);
            
            if ($research_query->have_posts()) :
                while ($research_query->have_posts()) : $research_query->the_post();
                    $position = get_post_meta(get_the_ID(), '_research_position', true);
                    $institution = get_post_meta(get_the_ID(), '_research_institution', true);
                    $duration = get_post_meta(get_the_ID(), '_research_duration', true);
                    $technologies = get_post_meta(get_the_ID(), '_research_technologies', true);
                    $technologies_array = $technologies ? explode(',', $technologies) : array();
            ?>
                <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden">
                    <div class="p-8">
                        <div class="flex flex-col lg:flex-row gap-8">
                            <!-- Timeline dot -->
                            <div class="flex-shrink-0 relative">
                                <div class="w-4 h-4 bg-blue-600 rounded-full"></div>
                                <div class="absolute top-4 left-1/2 transform -translate-x-1/2 w-0.5 h-24 bg-gray-300"></div>
                            </div>
                            
                            <!-- Content -->
                            <div class="flex-1">
                                <!-- Header -->
                                <div class="mb-6">
                                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                        <div>
                                            <h3 class="text-2xl font-bold text-gray-900 font-crimson">
                                                <?php echo esc_html($position ?: get_the_title()); ?>
                                            </h3>
                                            <p class="text-lg text-blue-600 font-medium">
                                                <?php echo esc_html($institution); ?>
                                            </p>
                                        </div>
                                        <div class="text-gray-500 font-medium">
                                            <?php echo esc_html($duration); ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Description -->
                                <div class="mb-6">
                                    <div class="text-gray-700 leading-relaxed">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                
                                <!-- Technologies -->
                                <?php if (!empty($technologies_array)) : ?>
                                    <div class="mb-6">
                                        <h4 class="text-lg font-semibold text-gray-900 mb-3">
                                            Technologies & Skills
                                        </h4>
                                        <div class="flex flex-wrap gap-2">
                                            <?php foreach ($technologies_array as $tech) : ?>
                                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                                                    <?php echo esc_html(trim($tech)); ?>
                                                </span>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default content if no research posts exist
            ?>
                <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden">
                    <div class="p-8">
                        <div class="flex flex-col lg:flex-row gap-8">
                            <!-- Timeline dot -->
                            <div class="flex-shrink-0 relative">
                                <div class="w-4 h-4 bg-blue-600 rounded-full"></div>
                                <div class="absolute top-4 left-1/2 transform -translate-x-1/2 w-0.5 h-24 bg-gray-300"></div>
                            </div>
                            
                            <!-- Content -->
                            <div class="flex-1">
                                <!-- Header -->
                                <div class="mb-6">
                                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                        <div>
                                            <h3 class="text-2xl font-bold text-gray-900 font-crimson">
                                                Research Assistant
                                            </h3>
                                            <p class="text-lg text-blue-600 font-medium">
                                                University of Cambridge
                                            </p>
                                        </div>
                                        <div class="text-gray-500 font-medium">
                                            2023 - Present
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Description -->
                                <div class="mb-6">
                                    <div class="text-gray-700 leading-relaxed space-y-4">
                                        <p>
                                            Currently working on advancing probabilistic generative models under the supervision of 
                                            Prof. José Miguel Hernández-Lobato. My research focuses on developing efficient sampling 
                                            techniques for complex molecular systems using diffusion models and consistency models.
                                        </p>
                                        <p>
                                            Key achievements include developing novel unbiased sampling methods that significantly 
                                            reduce computational cost while maintaining accuracy, and contributing to fundamental 
                                            theoretical understanding of diffusion-based generative models.
                                        </p>
                                    </div>
                                </div>
                                
                                <!-- Technologies -->
                                <div class="mb-6">
                                    <h4 class="text-lg font-semibold text-gray-900 mb-3">
                                        Technologies & Skills
                                    </h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Python</span>
                                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">PyTorch</span>
                                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Diffusion Models</span>
                                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Molecular Sampling</span>
                                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">JAX</span>
                                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Variational Inference</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden">
                    <div class="p-8">
                        <div class="flex flex-col lg:flex-row gap-8">
                            <!-- Timeline dot -->
                            <div class="flex-shrink-0 relative">
                                <div class="w-4 h-4 bg-green-600 rounded-full"></div>
                                <div class="absolute top-4 left-1/2 transform -translate-x-1/2 w-0.5 h-24 bg-gray-300"></div>
                            </div>
                            
                            <!-- Content -->
                            <div class="flex-1">
                                <!-- Header -->
                                <div class="mb-6">
                                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                        <div>
                                            <h3 class="text-2xl font-bold text-gray-900 font-crimson">
                                                MPhil Student
                                            </h3>
                                            <p class="text-lg text-green-600 font-medium">
                                                University of Cambridge
                                            </p>
                                        </div>
                                        <div class="text-gray-500 font-medium">
                                            2022 - 2023
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Description -->
                                <div class="mb-6">
                                    <div class="text-gray-700 leading-relaxed space-y-4">
                                        <p>
                                            Completed MPhil in Machine Learning and Machine Intelligence with Distinction (79.87%, top 10%). 
                                            Specialized in probabilistic generative models with focus on diffusion models and their applications 
                                            in molecular sampling.
                                        </p>
                                        <p>
                                            Dissertation: "Efficient Sampling for Molecular Energy Functions using Diffusion Models" - 
                                            Developed novel theoretical frameworks and practical algorithms for accelerating molecular 
                                            simulations through advanced machine learning techniques.
                                        </p>
                                    </div>
                                </div>
                                
                                <!-- Technologies -->
                                <div class="mb-6">
                                    <h4 class="text-lg font-semibold text-gray-900 mb-3">
                                        Technologies & Skills
                                    </h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Machine Learning</span>
                                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Deep Learning</span>
                                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Probabilistic Models</span>
                                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">TensorFlow</span>
                                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Research</span>
                                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Academic Writing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Call to Action -->
        <div class="mt-16 text-center">
            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-8 rounded-lg border border-blue-200">
                <h3 class="text-2xl font-bold text-gray-900 font-crimson mb-4">
                    Interested in Collaboration?
                </h3>
                <p class="text-gray-700 leading-relaxed mb-6 max-w-2xl mx-auto">
                    I'm always open to discussing new research opportunities, collaborations, 
                    and innovative approaches to advancing machine learning research.
                </p>
                <a href="#contact" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition-colors">
                    Get in Touch
                </a>
            </div>
        </div>
    </div>
</section> 