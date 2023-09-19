<?php
function mehan_23_theme_setup()
{
  // Theme Support
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form'));
  add_theme_support('custom-fields');


  // Custom Post Types
  $testimonial_labels = array(
    'name'              => _x('Testimonials', 'post type general name'),
    'singular_name'     => _x('Testimonial', 'post type singular name'),
    'add_new'           => _x('Add New', 'testimonial'),
    'add_new_item'      => __('Add New Testomonial'),
    'edit_item'         => __('Edit Testimonial'),
    'new_item'          => __('New Testimonial'),
    'view_item'         => __('View Testimonial'),
    'search_items'      => __('Search Testimonials'),
    'not_found'         => __('No testimonials found'),
    'not_found_in_trash' => __('No testimonials found in Trash'),
    'parent_item_colon' => '',
    'menu_name'         => 'Testimonials',
  );
  $testimonial_args = array(
    'labels'            => $testimonial_labels,
    'public'            => true,
    'publicly_queryable' => true,
    'show_ui'           => true,
    'show_in_menu'      => true,
    'query_var'         => true,
    'rewrite'           => true,
    'capability_type'   => 'post',
    'has_archive'       => true,
    'hierarchical'      => true,
    'menu_position'     => null,
    'menu_icon'         => 'dashicons-testimonial',
    'supports'          => array('title', 'thumbnail'),
  );
  register_post_type('testimonial', $testimonial_args);

  // Navigation Menus
  register_nav_menus(
    array(
      'primary-menu'  => __('Primary Menu'),
      'footer-menu-1' => __('Footer Menu-1'),
      'footer-menu-2' => __('Footer Menu-2'),
    ),
  );
}

add_action('init', 'mehan_23_theme_setup');

function new_excerpt_more($more)
{
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function title_like_posts_where($where, $wp_query)
{
  global $wpdb;
  if ($post_title_like = $wp_query->get('post_title_like')) {
    $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql($wpdb->esc_like($post_title_like)) . '%\'';
  }
  return $where;
}

function get_language()
{
  $english = ['en', 'en_US', 'en-US', 'en_GB'];
  $arabic = ['ar'];
  if (in_array(get_locale(), $english)) {
    return 'en';
  } else {
    return 'ar';
  }
}
