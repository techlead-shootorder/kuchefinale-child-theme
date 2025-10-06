


<?php
/**
* kuchefinale-child functions and definitions
*
* Enqueue parent and child theme styles properly.
*
* If the parent theme enqueues styles with special handles or additional assets (block styles,
* fonts, or vendor CSS), you may need to enqueue those handles as dependencies for the child
* stylesheet. Check the parent theme's functions.php for the exact handle names.
*/


add_action( 'wp_enqueue_scripts', 'kuchefinale_child_enqueue_styles' );
function kuchefinale_child_enqueue_styles() {
// Enqueue parent theme stylesheet. Use get_template_directory_uri() for parent.
wp_enqueue_style( 'kuchefinale-parent-style', get_template_directory_uri() . '/style.css' );


// Enqueue child theme stylesheet and make it depend on parent so it loads after.
wp_enqueue_style( 'kuchefinale-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'kuchefinale-parent-style' ), '1.0.0' );


/*
If the parent theme uses a different handle for its main stylesheet (e.g., 'theme-style' or 'parent-style'),
you should replace 'kuchefinale-parent-style' above with that handle in the dependency array.


Example when parent uses 'theme-style':


wp_enqueue_style( 'kuchefinale-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'theme-style' ), '1.0.0' );
*/
}


/*
* Example: Add child theme support for additional features. Uncomment to use.
*/
// add_action( 'after_setup_theme', 'kuchefinale_child_setup' );
// function kuchefinale_child_setup() {
// // Make theme available for translation (update path if needed)
// load_child_theme_textdomain( 'kuchefinale-child', get_stylesheet_directory() . '/languages' );
//
// // Add support for custom logo (example)
// add_theme_support( 'custom-logo' );
// }


?>


