<?php

function o_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'o_theme_support');


function my_menus()
{
    $locations = array(
        'primary' => 'top menue'
    );

    register_nav_menus($locations);
}

add_action('init', 'my_menus');


function o_register_styles()
{

    wp_enqueue_style('o-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.css", array(), '1.0', 'all');
    wp_enqueue_style('o-font-awesome', get_template_directory_uri() . "/assets/css/font-awesome.css", array(), '1.0', 'all');
    wp_enqueue_style('o-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'o_register_styles');


function o_register_scripts()
{

    wp_enqueue_script('o-jquery', get_template_directory_uri() . "/assets/js/jquery.js", array(), '1.0');
    wp_enqueue_script('o-script', get_template_directory_uri() . "/assets/js/script.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'o_register_scripts');
