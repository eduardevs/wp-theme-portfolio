<?php

function eduardevelops_theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // echo'coucou';
    wp_register_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');

    wp_register_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');

    wp_enqueue_style('bootstrap_css');
    wp_enqueue_script('bootstrap_js');
    wp_enqueue_style('custom_style', get_template_directory_uri() . '/assets/styles.css');

    add_theme_support('menus');
    add_theme_support('html5');

    register_nav_menu('header', 'en tête du menu');
    register_nav_menu('footer', 'pied de page');

    add_image_size('card-header', 352, 216, true);
}



add_action('after_setup_theme', 'eduardevelops_theme_supports');
