<?php
/**
 * Kuchefinale Theme Customizer
 */

function kuchefinale_customize_register( $wp_customize ) {
    // Add theme options section
    $wp_customize->add_section( 'kuchefinale_theme_options', array(
        'title'    => __( 'Theme Options', 'kuchefinale' ),
        'priority' => 30,
    ) );

    // Contact Information
    $wp_customize->add_setting( 'kuchefinale_contact_email', array(
        'default'           => 'info@kuchefinale.com',
        'sanitize_callback' => 'sanitize_email',
    ) );

    $wp_customize->add_control( 'kuchefinale_contact_email', array(
        'label'   => __( 'Contact Email', 'kuchefinale' ),
        'section' => 'kuchefinale_theme_options',
        'type'    => 'email',
    ) );

    $wp_customize->add_setting( 'kuchefinale_contact_phone', array(
        'default'           => '+1 (555) 123-4567',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'kuchefinale_contact_phone', array(
        'label'   => __( 'Contact Phone', 'kuchefinale' ),
        'section' => 'kuchefinale_theme_options',
        'type'    => 'text',
    ) );

    // Social Media Links
    $wp_customize->add_setting( 'kuchefinale_facebook_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'kuchefinale_facebook_url', array(
        'label'   => __( 'Facebook URL', 'kuchefinale' ),
        'section' => 'kuchefinale_theme_options',
        'type'    => 'url',
    ) );

    $wp_customize->add_setting( 'kuchefinale_instagram_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'kuchefinale_instagram_url', array(
        'label'   => __( 'Instagram URL', 'kuchefinale' ),
        'section' => 'kuchefinale_theme_options',
        'type'    => 'url',
    ) );

    $wp_customize->add_setting( 'kuchefinale_linkedin_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'kuchefinale_linkedin_url', array(
        'label'   => __( 'LinkedIn URL', 'kuchefinale' ),
        'section' => 'kuchefinale_theme_options',
        'type'    => 'url',
    ) );
}
add_action( 'customize_register', 'kuchefinale_customize_register' );