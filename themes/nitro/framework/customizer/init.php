<?php
/**
 * nitro Theme Customizer
 *
 * @package nitro
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function nitro_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';


}
add_action( 'customize_register', 'nitro_customize_register' );

//Load All Individual Settings Based on Sections/Panels.
require_once get_template_directory().'/framework/customizer/_customizer_controls.php';
require_once get_template_directory().'/framework/customizer/_sanitization.php';
require_once get_template_directory().'/framework/customizer/_googlefonts.php';
require_once get_template_directory().'/framework/customizer/_misc_scripts.php';
require_once get_template_directory().'/framework/customizer/_layouts.php';
require_once get_template_directory().'/framework/customizer/header.php';
require_once get_template_directory().'/framework/customizer/social_icons.php';
require_once get_template_directory().'/framework/customizer/featured_overlap_slider.php';
require_once get_template_directory().'/framework/customizer/featured_showcase.php';
require_once get_template_directory().'/framework/customizer/featured_post_areas.php';
require_once get_template_directory().'/framework/customizer/featured_product_areas.php';
require_once get_template_directory().'/framework/customizer/skin.php';

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function nitro_customize_preview_js() {
    wp_enqueue_script( 'nitro_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'nitro_customize_preview_js' );
