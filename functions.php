
<?php
/**
 * HushSecurity Theme Functions


 */

// Theme Setup

if (function_exists(function: 'acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug'  => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ));
}

function hushsecurity_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'hushsecurity'),
        'footer-platform' => __('Footer Platform Menu', 'hushsecurity'),
        'footer-solutions' => __('Footer Solutions Menu', 'hushsecurity'),
    ));
    
    // Add theme support for HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'hushsecurity_setup');

// Enqueue Styles and Scripts
function hushsecurity_scripts() {
    // Google Fonts
    wp_enqueue_style('hushsecurity-fonts', 'https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap', array(), null);
    
    // Theme stylesheet
    wp_enqueue_style('hushsecurity-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Component styles - using filemtime() to bust cache on file changes
    wp_enqueue_style('hushsecurity-header', get_template_directory_uri() . '/assets/css/Header.css', array(), filemtime(get_template_directory() . '/assets/css/Header.css'));
    wp_enqueue_style('hushsecurity-hero', get_template_directory_uri() . '/assets/css/Hero.css', array(), filemtime(get_template_directory() . '/assets/css/Hero.css'));
    wp_enqueue_style('hushsecurity-challenge', get_template_directory_uri() . '/assets/css/Challenge.css', array(), filemtime(get_template_directory() . '/assets/css/Challenge.css'));
    wp_enqueue_style('hushsecurity-solution', get_template_directory_uri() . '/assets/css/Solution.css', array(), filemtime(get_template_directory() . '/assets/css/Solution.css'));
    wp_enqueue_style('hushsecurity-features', get_template_directory_uri() . '/assets/css/Features.css', array(), filemtime(get_template_directory() . '/assets/css/Features.css'));
    wp_enqueue_style('hushsecurity-journey', get_template_directory_uri() . '/assets/css/Journey.css', array(), filemtime(get_template_directory() . '/assets/css/Journey.css'));
    wp_enqueue_style('hushsecurity-value', get_template_directory_uri() . '/assets/css/Value.css', array(), filemtime(get_template_directory() . '/assets/css/Value.css'));
    wp_enqueue_style('hushsecurity-know', get_template_directory_uri() . '/assets/css/Know.css', array(), filemtime(get_template_directory() . '/assets/css/Know.css'));
    wp_enqueue_style('hushsecurity-whyruntime', get_template_directory_uri() . '/assets/css/WhyRuntime.css', array(), filemtime(get_template_directory() . '/assets/css/WhyRuntime.css'));
    wp_enqueue_style('hushsecurity-footer', get_template_directory_uri() . '/assets/css/Footer.css', array(), filemtime(get_template_directory() . '/assets/css/Footer.css'));
    wp_enqueue_style('hushsecurity-body-text', get_template_directory_uri() . '/assets/css/body-text.css', array(), filemtime(get_template_directory() . '/assets/css/body-text.css'));
    wp_enqueue_style('hushsecurity-heading-40', get_template_directory_uri() . '/assets/css/heading-40.css', array(), filemtime(get_template_directory() . '/assets/css/heading-40.css'));
    
    // Enqueue JavaScript
    wp_enqueue_script('hushsecurity-header-js', get_template_directory_uri() . '/assets/js/header.js', array(), filemtime(get_template_directory() . '/assets/js/header.js'), true);
}
add_action('wp_enqueue_scripts', 'hushsecurity_scripts');

// Custom Logo Support
function hushsecurity_custom_logo_setup() {
    $defaults = array(
        'height'      => 35,
        'width'       => 253,
        'flex-height' => true,
        'flex-width'  => true,
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'hushsecurity_custom_logo_setup');
?>
