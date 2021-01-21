<?php

//Adding /styles/main.css stylesheet 
function load_stylesheet()
{
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/style.css', false, '1.1', 'all');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');

//Removing jquery from default and adding it to the footer
function include_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/scripts/jquery.v.3.5.1.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

//Adding custom.js to our footer
function loadjs()
{
    wp_register_script('customjs', get_template_directory_uri() . '/scripts/custom.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');

//Adds a menu option on wordpress interface
add_theme_support('menus');

//Allow post thumbnails
add_theme_support('post-thumbnails');

//Register menus
register_nav_menus(
    array(
        'header-menu-left' => __('Header Menu Left', 'theme'),
        'header-menu-right' => __('Header Menu right', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);


//Add ACF options page(setting in wordpress)
if (function_exists('acf_add_options_page')) {

    acf_add_options_page();
    acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'    => 'theme-general-settings',
    ));
}

//Woocommerce support
function cheerycards_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'cheerycards_add_woocommerce_support');

//Reset all WooCommerce styles
// add_filter('woocommerce_enqueue_styles', '__return_false');
