<?php
/**
 * The main template file
 */

get_header(); ?>

<div class="min-h-screen">
    <main>
        <?php get_template_part('template-parts/hero'); ?>
        <?php get_template_part('template-parts/about'); ?>
        <?php get_template_part('template-parts/research'); ?>
        <?php get_template_part('template-parts/publications'); ?>
        <?php get_template_part('template-parts/education'); ?>
        <?php get_template_part('template-parts/teaching'); ?>
        <?php get_template_part('template-parts/contact'); ?>
    </main>
</div>

<?php get_footer(); ?> 