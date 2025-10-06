


<?php


add_action( 'wp_enqueue_scripts', 'kuchefinale_child_enqueue_styles' );
function kuchefinale_child_enqueue_styles() {
// Enqueue parent theme stylesheet. Use get_template_directory_uri() for parent.
wp_enqueue_style( 'kuchefinale-parent-style', get_template_directory_uri() . '/style.css' );


// Enqueue child theme stylesheet and make it depend on parent so it loads after.
wp_enqueue_style( 'kuchefinale-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'kuchefinale-parent-style' ), '1.0.0' );



}


?>


