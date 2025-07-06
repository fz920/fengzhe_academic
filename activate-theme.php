<?php
/**
 * Script to activate Academic Portfolio Theme
 */

// Load WordPress
require_once('./wp-load.php');

// Check if WordPress is installed
if (!is_blog_installed()) {
    echo "WordPress is not installed yet. Please complete the installation first.\n";
    exit;
}

// Activate the Academic Portfolio Theme
$theme = 'academic-portfolio-theme';

if (file_exists(get_theme_root() . '/' . $theme . '/style.css')) {
    switch_theme($theme);
    echo "✅ Academic Portfolio Theme activated successfully!\n";
    echo "🎉 Visit your site at: http://localhost:8000\n";
} else {
    echo "❌ Academic Portfolio Theme not found in themes directory.\n";
    echo "Available themes:\n";
    $themes = wp_get_themes();
    foreach ($themes as $theme_slug => $theme_data) {
        echo "- " . $theme_data->get('Name') . " ($theme_slug)\n";
    }
}
?> 