<?php
/**
 * Template part for displaying hero section
 */
?>

<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title"><?php echo esc_html( get_theme_mod( 'kuchefinale_hero_title', 'Complete Your Dream Kitchen' ) ); ?></h1>
            <p class="hero-subtitle"><?php echo esc_html( get_theme_mod( 'kuchefinale_hero_subtitle', 'Discover world-class appliances and surfaces that transform your kitchen into the heart of your home.' ) ); ?></p>
            <a href="#products" class="cta-button"><?php echo esc_html( get_theme_mod( 'kuchefinale_hero_button_text', 'Explore Our Products' ) ); ?></a>
        </div>
    </div>
</section>