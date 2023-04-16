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
        'primary' => 'top menue',
        'secondary' => 'side menue',
        'third' => 'widget menu',
        'fourth' => 'widget menu2',
        'fith' => 'widget menu3'
    );

    register_nav_menus($locations);
}

add_action('init', 'my_menus');


function o_register_styles()
{
    wp_enqueue_style('o-font-awesome', get_template_directory_uri() . "/assets/css/font-awesome.css", array(), '1.0', 'all');
    wp_enqueue_style('o-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.css", array(), '1.0', 'all');
    wp_enqueue_style('o-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'o_register_styles');


function o_register_scripts()
{

    wp_enqueue_script('o-jquery', get_template_directory_uri() . "/assets/js/jquery.js", array(), '1.0', true);
    wp_enqueue_script('o-script', get_template_directory_uri() . "/assets/js/script.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'o_register_scripts');

function o_widget_area()
{
    // widgets för footer
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'footer area1',
            'id' => 'footer-1',
            'description' => 'footer widget area'
        )
    );
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'footer area2',
            'id' => 'footer-2',
            'description' => 'footer widget area'
        )
    );
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'footer area3',
            'id' => 'footer-3',
            'description' => 'footer widget area'
        )
    );
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'footer area4',
            'id' => 'footer-4',
            'description' => 'footer widget area'
        )
    );
    // widgets för aside
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'aside area1',
            'id' => 'aside-1',
            'description' => 'aside widget area'
        )
    );
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'aside area2',
            'id' => 'aside-2',
            'description' => 'aside widget area'
        )
    );
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'aside area3',
            'id' => 'aside-3',
            'description' => 'aside widget area'
        )
    );
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'kontakt form',
            'id' => 'kontakt',
            'description' => 'kontakt widget area'
        )
    );
}

add_action('widgets_init', 'o_widget_area');
