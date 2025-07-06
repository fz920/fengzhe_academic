<?php
/**
 * WordPress Router for PHP Built-in Server
 * This handles URL routing for WordPress when using php -S
 */

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve static files directly
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

// Handle WordPress admin URLs
if (strpos($uri, '/wp-admin/') === 0) {
    $file = __DIR__ . $uri;
    if (file_exists($file) && is_file($file)) {
        require_once $file;
        return true;
    }
}

// Handle wp-includes URLs
if (strpos($uri, '/wp-includes/') === 0) {
    $file = __DIR__ . $uri;
    if (file_exists($file) && is_file($file)) {
        return false; // Let PHP serve static files
    }
}

// Handle wp-content URLs
if (strpos($uri, '/wp-content/') === 0) {
    $file = __DIR__ . $uri;
    if (file_exists($file) && is_file($file)) {
        return false; // Let PHP serve static files
    }
}

// Default to index.php for all other requests
require_once __DIR__ . '/index.php';
?> 