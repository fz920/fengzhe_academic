<?php
/**
 * Academic Portfolio Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup
 */
function academic_portfolio_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('customize-selective-refresh-widgets');
    
    // Register nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'academic-portfolio'),
    ));
}
add_action('after_setup_theme', 'academic_portfolio_setup');

/**
 * Enqueue scripts and styles
 */
function academic_portfolio_scripts() {
    // Enqueue theme stylesheet with compiled styles
    wp_enqueue_style('academic-portfolio-style', get_stylesheet_uri(), array(), '1.0.1');
    
    // Enqueue custom JavaScript
    wp_enqueue_script('academic-portfolio-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'academic_portfolio_scripts');

/**
 * Add Customizer Settings
 */
function academic_portfolio_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'academic-portfolio'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_name', array(
        'default' => 'Fengzhe Zhang',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_name', array(
        'label' => __('Name', 'academic-portfolio'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default' => 'Machine Learning Researcher • Probabilistic Generative Models',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label' => __('Title', 'academic-portfolio'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_description', array(
        'default' => 'I am a Machine Learning Researcher with a passion for developing probabilistic generative models. My work focuses on advancing diffusion models and developing novel sampling techniques for molecular energy functions, with applications in computational chemistry and drug discovery.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_description', array(
        'label' => __('Description', 'academic-portfolio'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('hero_current_position', array(
        'default' => 'Research Assistant at University of Cambridge',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_current_position', array(
        'label' => __('Current Position', 'academic-portfolio'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_supervisor', array(
        'default' => 'Prof. José Miguel Hernández-Lobato',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_supervisor', array(
        'label' => __('Supervisor', 'academic-portfolio'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_email', array(
        'default' => 'fz287@cam.ac.uk',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('hero_email', array(
        'label' => __('Email', 'academic-portfolio'),
        'section' => 'hero_section',
        'type' => 'email',
    ));
    
    $wp_customize->add_setting('hero_phone', array(
        'default' => '+44 (0)7421 727 978',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_phone', array(
        'label' => __('Phone', 'academic-portfolio'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    // About Section
    $wp_customize->add_section('about_section', array(
        'title' => __('About Section', 'academic-portfolio'),
        'priority' => 40,
    ));
    
    $wp_customize->add_setting('about_content', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('about_content', array(
        'label' => __('About Content', 'academic-portfolio'),
        'section' => 'about_section',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'academic_portfolio_customize_register');

/**
 * Custom post types for portfolio content
 */
function academic_portfolio_custom_post_types() {
    // Research Experience
    register_post_type('research', array(
        'labels' => array(
            'name' => __('Research Experience', 'academic-portfolio'),
            'singular_name' => __('Research', 'academic-portfolio'),
        ),
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-chart-line',
    ));
    
    // Publications
    register_post_type('publications', array(
        'labels' => array(
            'name' => __('Publications', 'academic-portfolio'),
            'singular_name' => __('Publication', 'academic-portfolio'),
        ),
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-book-alt',
    ));
    
    // Education
    register_post_type('education', array(
        'labels' => array(
            'name' => __('Education', 'academic-portfolio'),
            'singular_name' => __('Education', 'academic-portfolio'),
        ),
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-welcome-learn-more',
    ));
    
    // Teaching Experience
    register_post_type('teaching', array(
        'labels' => array(
            'name' => __('Teaching Experience', 'academic-portfolio'),
            'singular_name' => __('Teaching', 'academic-portfolio'),
        ),
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-welcome-learn-more',
    ));
}
add_action('init', 'academic_portfolio_custom_post_types');

/**
 * Add custom meta boxes
 */
function academic_portfolio_add_meta_boxes() {
    add_meta_box(
        'research-details',
        __('Research Details', 'academic-portfolio'),
        'academic_portfolio_research_meta_box',
        'research',
        'normal',
        'high'
    );
    
    add_meta_box(
        'publication-details',
        __('Publication Details', 'academic-portfolio'),
        'academic_portfolio_publication_meta_box',
        'publications',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'academic_portfolio_add_meta_boxes');

/**
 * Research meta box callback
 */
function academic_portfolio_research_meta_box($post) {
    wp_nonce_field(basename(__FILE__), 'research_nonce');
    $position = get_post_meta($post->ID, '_research_position', true);
    $institution = get_post_meta($post->ID, '_research_institution', true);
    $duration = get_post_meta($post->ID, '_research_duration', true);
    $technologies = get_post_meta($post->ID, '_research_technologies', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="research_position">Position</label></th>';
    echo '<td><input type="text" id="research_position" name="research_position" value="' . esc_attr($position) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="research_institution">Institution</label></th>';
    echo '<td><input type="text" id="research_institution" name="research_institution" value="' . esc_attr($institution) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="research_duration">Duration</label></th>';
    echo '<td><input type="text" id="research_duration" name="research_duration" value="' . esc_attr($duration) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="research_technologies">Technologies</label></th>';
    echo '<td><input type="text" id="research_technologies" name="research_technologies" value="' . esc_attr($technologies) . '" class="regular-text" /></td></tr>';
    echo '</table>';
}

/**
 * Publication meta box callback
 */
function academic_portfolio_publication_meta_box($post) {
    wp_nonce_field(basename(__FILE__), 'publication_nonce');
    $authors = get_post_meta($post->ID, '_publication_authors', true);
    $journal = get_post_meta($post->ID, '_publication_journal', true);
    $year = get_post_meta($post->ID, '_publication_year', true);
    $status = get_post_meta($post->ID, '_publication_status', true);
    $keywords = get_post_meta($post->ID, '_publication_keywords', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="publication_authors">Authors</label></th>';
    echo '<td><input type="text" id="publication_authors" name="publication_authors" value="' . esc_attr($authors) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="publication_journal">Journal/Conference</label></th>';
    echo '<td><input type="text" id="publication_journal" name="publication_journal" value="' . esc_attr($journal) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="publication_year">Year</label></th>';
    echo '<td><input type="text" id="publication_year" name="publication_year" value="' . esc_attr($year) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="publication_status">Status</label></th>';
    echo '<td><select id="publication_status" name="publication_status">';
    echo '<option value="published"' . selected($status, 'published', false) . '>Published</option>';
    echo '<option value="submitted"' . selected($status, 'submitted', false) . '>Submitted</option>';
    echo '<option value="in-review"' . selected($status, 'in-review', false) . '>In Review</option>';
    echo '</select></td></tr>';
    echo '<tr><th><label for="publication_keywords">Keywords</label></th>';
    echo '<td><input type="text" id="publication_keywords" name="publication_keywords" value="' . esc_attr($keywords) . '" class="regular-text" /></td></tr>';
    echo '</table>';
}

/**
 * Save custom meta box data
 */
function academic_portfolio_save_meta_boxes($post_id) {
    if (!isset($_POST['research_nonce']) && !isset($_POST['publication_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['research_nonce'] ?? '', basename(__FILE__)) && 
        !wp_verify_nonce($_POST['publication_nonce'] ?? '', basename(__FILE__))) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Save research meta
    if (isset($_POST['research_position'])) {
        update_post_meta($post_id, '_research_position', sanitize_text_field($_POST['research_position']));
    }
    if (isset($_POST['research_institution'])) {
        update_post_meta($post_id, '_research_institution', sanitize_text_field($_POST['research_institution']));
    }
    if (isset($_POST['research_duration'])) {
        update_post_meta($post_id, '_research_duration', sanitize_text_field($_POST['research_duration']));
    }
    if (isset($_POST['research_technologies'])) {
        update_post_meta($post_id, '_research_technologies', sanitize_text_field($_POST['research_technologies']));
    }
    
    // Save publication meta
    if (isset($_POST['publication_authors'])) {
        update_post_meta($post_id, '_publication_authors', sanitize_text_field($_POST['publication_authors']));
    }
    if (isset($_POST['publication_journal'])) {
        update_post_meta($post_id, '_publication_journal', sanitize_text_field($_POST['publication_journal']));
    }
    if (isset($_POST['publication_year'])) {
        update_post_meta($post_id, '_publication_year', sanitize_text_field($_POST['publication_year']));
    }
    if (isset($_POST['publication_status'])) {
        update_post_meta($post_id, '_publication_status', sanitize_text_field($_POST['publication_status']));
    }
    if (isset($_POST['publication_keywords'])) {
        update_post_meta($post_id, '_publication_keywords', sanitize_text_field($_POST['publication_keywords']));
    }
}
add_action('save_post', 'academic_portfolio_save_meta_boxes');

/**
 * Custom walker for navigation menu
 */
class Academic_Portfolio_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        $output .= '<li' . $class_names .'>';
        
        $attributes = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
        $attributes .= ! empty($item->target) ? ' target="' . esc_attr($item->target) .'"' : '';
        $attributes .= ! empty($item->xfn) ? ' rel="'    . esc_attr($item->xfn) .'"' : '';
        $attributes .= ! empty($item->url) ? ' href="'   . esc_attr($item->url) .'"' : '';
        
        $item_output = $args->before ?? '';
        $item_output .= '<a class="text-gray-700 hover:text-blue-600 transition-colors font-medium"' . $attributes .'>';
        $item_output .= ($args->link_before ?? '') . apply_filters('the_title', $item->title, $item->ID) . ($args->link_after ?? '');
        $item_output .= '</a>';
        $item_output .= $args->after ?? '';
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
?> 