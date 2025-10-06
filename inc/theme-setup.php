<?php
/**
 * Kuchefinale Theme Setup
 */

if ( ! function_exists( 'kuchefinale_setup' ) ) {
    function kuchefinale_setup() {
        // Add theme support for various features
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Register navigation menus
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'kuchefinale' ),
            'footer'  => esc_html__( 'Footer Menu', 'kuchefinale' ),
        ) );

        // Add support for custom background
        add_theme_support( 'custom-background', array(
            'default-color' => 'ffffff',
        ) );

        // Add support for wide and full width blocks
        add_theme_support( 'align-wide' );
        
        // Add support for responsive embeds
        add_theme_support( 'responsive-embeds' );
    }
}
add_action( 'after_setup_theme', 'kuchefinale_setup' );

/**
 * Enqueue scripts and styles
 */
function kuchefinale_scripts() {
    // Enqueue parent theme styles
    wp_enqueue_style( 'kuchefinale-parent-style', get_template_directory_uri() . '/style.css' );
    
    // Enqueue child theme styles
    wp_enqueue_style( 'kuchefinale-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array( 'kuchefinale-parent-style' ), '1.0.0' );
    
    // Enqueue custom JavaScript
    wp_enqueue_script( 'kuchefinale-scripts', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'kuchefinale_scripts' );