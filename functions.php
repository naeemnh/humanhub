<?php

function mehan_setup_post_types_menus()
{
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
            'footer-menu' => __('Footer Menu'),
        )
    );
}

add_action('init', mehan_setup_post_types_menus());

/*
    ============================
      Include Walker file
    ============================
*/

// require get_template_directory() . '/inc/walker.php';
