<!-- Publications Section -->
<section id="publications" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 font-crimson mb-4">
                Publications
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Research contributions to the field of machine learning and probabilistic models
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <?php
            // Query publications posts
            $publications_args = array(
                'post_type' => 'publications',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            
            $publications_query = new WP_Query($publications_args);
            
            if ($publications_query->have_posts()) :
                while ($publications_query->have_posts()) : $publications_query->the_post();
                    $authors = get_post_meta(get_the_ID(), '_publication_authors', true);
                    $journal = get_post_meta(get_the_ID(), '_publication_journal', true);
                    $year = get_post_meta(get_the_ID(), '_publication_year', true);
                    $status = get_post_meta(get_the_ID(), '_publication_status', true);
                    $keywords = get_post_meta(get_the_ID(), '_publication_keywords', true);
                    $keywords_array = $keywords ? explode(',', $keywords) : array();
                    
                    // Determine status color
                    $status_color = 'bg-gray-100 text-gray-800';
                    if ($status == 'published') $status_color = 'bg-green-100 text-green-800';
                    elseif ($status == 'submitted') $status_color = 'bg-blue-100 text-blue-800';
                    elseif ($status == 'in-review') $status_color = 'bg-yellow-100 text-yellow-800';
            ?>
                <div class="bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-8">
                        <!-- Status Badge -->
                        <div class="flex items-center justify-between mb-4">
                            <span class="<?php echo $status_color; ?> px-3 py-1 rounded-full text-sm font-medium capitalize">
                                <?php echo esc_html($status ?: 'published'); ?>
                            </span>
                            <div class="text-gray-500 font-medium">
                                <?php echo esc_html($year ?: get_the_date('Y')); ?>
                            </div>
                        </div>
                        
                        <!-- Title -->
                        <h3 class="text-xl font-bold text-gray-900 mb-4 font-crimson">
                            <?php the_title(); ?>
                        </h3>
                        
                        <!-- Authors -->
                        <div class="mb-4">
                            <p class="text-gray-700">
                                <span class="font-medium">Authors:</span>
                                <?php echo esc_html($authors ?: 'Fengzhe Zhang'); ?>
                            </p>
                        </div>
                        
                        <!-- Journal/Conference -->
                        <?php if ($journal) : ?>
                            <div class="mb-4">
                                <p class="text-blue-600 font-medium">
                                    <?php echo esc_html($journal); ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Abstract -->
                        <div class="mb-6">
                            <div class="text-gray-700 leading-relaxed">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        
                        <!-- Keywords -->
                        <?php if (!empty($keywords_array)) : ?>
                            <div class="mb-4">
                                <p class="text-sm text-gray-600 mb-2">Keywords:</p>
                                <div class="flex flex-wrap gap-2">
                                    <?php foreach ($keywords_array as $keyword) : ?>
                                        <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">
                                            <?php echo esc_html(trim($keyword)); ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default content if no publications exist
            ?>
                <div class="bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-8">
                        <!-- Status Badge -->
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                                Submitted
                            </span>
                            <div class="text-gray-500 font-medium">
                                2024
                            </div>
                        </div>
                        
                        <!-- Title -->
                        <h3 class="text-xl font-bold text-gray-900 mb-4 font-crimson">
                            Efficient Sampling for Molecular Energy Functions using Diffusion Models
                        </h3>
                        
                        <!-- Authors -->
                        <div class="mb-4">
                            <p class="text-gray-700">
                                <span class="font-medium">Authors:</span>
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Fengzhe Zhang</span>, 
                                José Miguel Hernández-Lobato
                            </p>
                        </div>
                        
                        <!-- Journal/Conference -->
                        <div class="mb-4">
                            <p class="text-blue-600 font-medium">
                                Submitted to NeurIPS 2024
                            </p>
                        </div>
                        
                        <!-- Abstract -->
                        <div class="mb-6">
                            <div class="text-gray-700 leading-relaxed">
                                <p>
                                    This paper presents a novel approach to molecular sampling using diffusion models, 
                                    significantly reducing computational costs while maintaining accuracy. We develop 
                                    theoretical frameworks for unbiased sampling and demonstrate superior performance 
                                    on complex molecular systems compared to traditional methods.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Keywords -->
                        <div class="mb-4">
                            <p class="text-sm text-gray-600 mb-2">Keywords:</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Diffusion Models</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Molecular Sampling</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Variational Inference</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Machine Learning</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Computational Chemistry</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-8">
                        <!-- Status Badge -->
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">
                                Published
                            </span>
                            <div class="text-gray-500 font-medium">
                                2023
                            </div>
                        </div>
                        
                        <!-- Title -->
                        <h3 class="text-xl font-bold text-gray-900 mb-4 font-crimson">
                            Theoretical Foundations of Consistency Models in Generative Learning
                        </h3>
                        
                        <!-- Authors -->
                        <div class="mb-4">
                            <p class="text-gray-700">
                                <span class="font-medium">Authors:</span>
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Fengzhe Zhang</span>
                            </p>
                        </div>
                        
                        <!-- Journal/Conference -->
                        <div class="mb-4">
                            <p class="text-blue-600 font-medium">
                                MPhil Dissertation - University of Cambridge
                            </p>
                        </div>
                        
                        <!-- Abstract -->
                        <div class="mb-6">
                            <div class="text-gray-700 leading-relaxed">
                                <p>
                                    This dissertation explores the theoretical foundations of consistency models, 
                                    providing new insights into their convergence properties and practical applications. 
                                    Achieved Distinction grade (79.87%) for contributions to understanding generative 
                                    model theory and developing efficient sampling algorithms.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Keywords -->
                        <div class="mb-4">
                            <p class="text-sm text-gray-600 mb-2">Keywords:</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Consistency Models</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Generative Models</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Theoretical Analysis</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Convergence Theory</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Deep Learning</span>
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
                    Stay Updated
                </h3>
                <p class="text-gray-700 leading-relaxed mb-6 max-w-2xl mx-auto">
                    I regularly publish research on probabilistic generative models and machine learning theory. 
                    Follow my work for the latest developments in the field.
                </p>
                <a href="#contact" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition-colors">
                    Subscribe to Updates
                </a>
            </div>
        </div>
    </div>
</section> 