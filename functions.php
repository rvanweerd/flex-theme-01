<?php
/**
 * Various functions
 *
 * @package flexbox
 */

$version = '0.0.1';

/**
*  Load our scripts and styles
*
* @return void
*/ 
function rvw_flexbox_code() {
    
    // load the main font
    wp_register_style('googleFonts-Open-Sans', '//fonts.googleapis.com/css?family=Open+Sans:300,300italic');
    wp_enqueue_style( 'googleFonts-Open-Sans');
    
    // css that defines the structure of the site
    wp_register_style( 'rvw_flexbox_structure', get_stylesheet_directory_uri().'/css/structure.css', array(), $version, 'screen, handheld' );
    wp_enqueue_style( 'rvw_flexbox_structure' );

    // css for smaller screensizes
    wp_register_style( 'rvw_flexbox_responsive', get_stylesheet_directory_uri().'/css/responsive.css', null, $version, 'screen and (max-width: 600px)' );
    wp_enqueue_style( 'rvw_flexbox_responsive' );
    
} 
add_action('wp_enqueue_scripts', 'rvw_flexbox_code');