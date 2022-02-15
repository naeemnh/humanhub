<?php

function mehan_setup_post_types_menus()
{
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));

    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
            'footer-menu' => __('Footer Menu'),
        )
    );
}

add_action('init', 'mehan_setup_post_types_menus');

/*
    ============================
      Sidebar function
    ============================
*/

function mehan_widget_setup()
{
    register_sidebar(array(
        'name'          => 'Siderbar',
        'id'            => 'sidebar-1',
        'class'         => 'sidebar-area',
        'desctiption'   => 'Standard Sidebar',
        'before_widget' => '<aside id="%1s" class="widget %2s">',
        'after_widget'  => '</aside>',
    ));
}

add_action('widgets_init', 'mehan_widget_setup');

/*
    ============================
      Include Walker file
    ============================
*/

require get_template_directory() . '/inc/walker.php';
