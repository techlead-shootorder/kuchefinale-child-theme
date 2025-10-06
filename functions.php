<?php
/**
 * Kuchefinale Theme Functions
 */

// Include theme setup file
require_once get_stylesheet_directory() . '/inc/theme-setup.php';

// Include customizer options
require_once get_stylesheet_directory() . '/inc/customizer.php';

// Theme setup and enqueue scripts are handled in inc/theme-setup.php

/**
 * Add custom image sizes
 */
function kuchefinale_custom_image_sizes() {
    add_image_size( 'product-card', 400, 300, true );
    add_image_size( 'hero-image', 1200, 600, true );
    add_image_size( 'brand-feature', 800, 500, true );
}
add_action( 'after_setup_theme', 'kuchefinale_custom_image_sizes' );

/**
 * Customize excerpt length
 */
function kuchefinale_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'kuchefinale_excerpt_length', 999 );

/**
 * Add custom body classes
 */
function kuchefinale_body_classes( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'home-page';
    }
    
    if ( is_page_template( 'page-siemens.php' ) ) {
        $classes[] = 'brand-page-siemens';
    }
    
    if ( is_page_template( 'page-caesarstone.php' ) ) {
        $classes[] = 'brand-page-caesarstone';
    }
    
    if ( is_page_template( 'page-schock.php' ) ) {
        $classes[] = 'brand-page-schock';
    }
    
    return $classes;
}
add_filter( 'body_class', 'kuchefinale_body_classes' );
?>