/*
Theme Name: Fashion Foresight Services
Author: Wali ur Rehman
Author URI: http://wordpress.org/
Description:Convert Bootstrap theme to Wordpress
Version: 1.0
*/

<?php

function fashion_theme_style()
{
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'fashion_theme_style' );

function fashion_theme_scripts()
{
    wp_enqueue_script( 'jquery_js', get_template_directory_uri().'/js/jquery.js', array('jquery'), '', true );
    wp_enqueue_script( 'bootstrap_bundle_js', get_template_directory_uri().'/js/bootstrap.bundle.js', array('jquery'), '', true  );
    wp_enqueue_script( 'main_js', get_template_directory_uri().'/js/main.js', array('jquery'), '', true  );

}

add_action( 'wp_enqueue_scripts', 'fashion_theme_scripts' );



?>
