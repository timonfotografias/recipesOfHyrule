<?php
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );




$args = array(
    'default-color' => 'ffffff',
);
add_theme_support( 'custom-background', $args );

register_nav_menus(array('Main' => 'Menu_es'));

add_theme_support('post-thumbnails');

add_theme_support( 'custom-logo', array(
    'height'               => 150,
    'width'                => auto,
    'flex-height'          => true,
    'flex-width'           => true,
    'header-text'          => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true,
) );
