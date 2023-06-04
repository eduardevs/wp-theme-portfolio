<?php

function eduardevelops_theme()
{
    add_theme_support('title-tag');
    // echo'coucou';
    wp_register_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');

    wp_register_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js');

    wp_enqueue_style('bootstrap_css');
    wp_enqueue_script('bootstrap_js');
}

add_action('after_setup_theme', 'eduardevelops_theme');
