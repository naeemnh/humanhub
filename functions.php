<?php
/*
    ==========================================
	 Activate menus
	==========================================
*/

function mehan_theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));

    $labels = array(
        'name' => _x('Testimonials', 'post type general name'),
        'singular_name' => _x('Testimonial', 'post type singular name'),
        'add_new' => _x('Add New', 'testimonial'),
        'add_new_item' => __('Add New Testomonial'),
        'edit_item' => __('Edit Testimonial'),
        'new_item' => __('New Testimonial'),
        'view_item' => __('View Testimonial'),
        'search_items' => __('Search Testimonials'),
        'not_found' => __('No testimonials found'),
        'not_found_in_trash' => __('No testimonials found in Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Testimonials',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-testimonials',
        'taxonomies' => array('post-tag', 'category', 'brand'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    );
    register_post_type('testimonial', $args);

    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
            'footer-menu-1' => __('Footer Menu-1'),
            'footer-menu-2' => __('Footer Menu-2'),
        ),
    );
}

add_action('init', 'mehan_theme_setup');

/*
	==========================================
	 Sidebar function
	==========================================
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
    ==========================================
    Include Walker file
    ==========================================
*/

require get_template_directory() . '/inc/walker.php';
