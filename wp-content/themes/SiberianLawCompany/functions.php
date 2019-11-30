<?php
/**
 * SiberianLawCompany  functions and definitions
 *
 * @package SiberianLawCompany
 */
function SiberianLawCompany_scripts() {
    wp_enqueue_style( 'SiberianLawCompany-style', get_stylesheet_uri() );

    wp_enqueue_style( 'SiberianLawCompany-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');

    wp_enqueue_script( 'SiberianLawCompany-scripts', get_template_directory_uri() . '/assets/js/bundle.js', array(), '1.0', true );

    wp_localize_script( 'ajax-script', 'AJAX',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'SiberianLawCompany_scripts' );

add_theme_support( 'post-thumbnails' );

add_action('after_setup_theme', function(){
    register_nav_menus( array(
        'header_menu' => 'Меню в шапке'
    ) );
});
add_filter( 'get_the_archive_title', function( $title ){
    return preg_replace('~^[^:]+: ~', '', $title );
});
get_template_part('functions/helpers');