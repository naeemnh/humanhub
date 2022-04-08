<?php
/*
    ==========================================
	 Activate menus
	==========================================
*/
error_reporting(E_ERROR | E_PARSE);
function mehan_theme_setup()
{
    // Theme Support
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));


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
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );
    register_post_type('testimonial', $testimonial_args);

    $event_labels = array(
        'name'              => _x('Events', 'post type general name'),
        'singular_name'     => _x('Event', 'post type singular name'),
        'add_new'           => _x('Add New', 'event'),
        'add_new_item'      => __('Add New Event'),
        'edit_item'         => __('Edit Events'),
        'new_item'          => __('New Event'),
        'view_item'         => __('View Event'),
        'search_items'      => __('Search Events'),
        'not_found'         => __('No events found'),
        'not_found_in_trash' => __('No events found in Trash'),
        'parent_item_colon' => '',
        'menu_name'         => 'Events',
    );
    $event_args = array(
        'labels'            => $event_labels,
        'public'            => true,
        'publicly_queryable' => true,
        'show_ui'           => true,
        'show_in_rest'         => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'taxonomies'        => ['category', 'post_tag'],
        'rewrite'           => true,
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => true,
        'menu_position'     => null,
        'menu_icon'         => 'dashicons-calendar-alt',
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );
    register_post_type('event', $event_args);

    // Navigation Menus
    register_nav_menus(
        array(
            'primary-menu'  => __('Primary Menu'),
            'footer-menu-1' => __('Footer Menu-1'),
            'footer-menu-2' => __('Footer Menu-2'),
        ),
    );
}

add_action('init', 'mehan_theme_setup');

/*
    ==========================================
    Custom Logo
    ==========================================
*/

function humanhub_custom_logo_setup()
{
    $defaults = array(
        'height'        => 170,
        'width'         => 270,
        'flex-height'   => true,
        'flex-width'    => true
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'humanhub_custom_logo_setup');

function humanhub_the_custom_logo()
{
    if (function_exists('the_custom_logo')) {
        the_custom_logo();
    }
}

function change_logo_class($html)
{
    $html = str_replace('class="custom-logo"', 'img-full', $html);
    return $html;
}

add_filter('get_custom_logo', 'change_logo_class');

/*
    ==========================================
    Pagination
    ==========================================
*/

function humanhub_pagination()
{
    global $wp_query;

    /** Stops execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    /** Adds current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }


    if (($paged + 2 <= $max)) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<ul class="pagination-box">' . "\n";

    /** Previous Post Link Function */
    if (get_previous_posts_link())
        printf('<li>%s</li>' . "\n", get_previous_posts_link(__('&laquo;')));

    /** Links to the first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li>…</li>';
    }
    /** Links to current page, plus 2 pages in either direction if necessary */
    sort(
        $links
    );
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Links to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** Next Post Link function */
    if (get_next_posts_link())
        printf('<li>%s</li>' . "\n", get_next_posts_link(__('&raquo;')));

    echo '</ul>' . "\n";
}

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

/*
    ==========================================
    Filter Posts
    ==========================================
*/

add_filter('posts_where', 'title_like_posts_where', 10, 2);
function title_like_posts_where($where, $wp_query)
{
    global $wpdb;
    if ($post_title_like = $wp_query->get('post_title_like')) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql($wpdb->esc_like($post_title_like)) . '%\'';
    }
    return $where;
}

$GLOBALS['event_query_filters'] = [
    'field_1' => 'start_date',
    'field_2' => 'location',
];

function event_posts($query)
{
    if (!is_admin() && $query->is_main_query()) {
        if (is_post_type_archive('event')) {

            // loop over filters
            foreach ($GLOBALS['event_query_filters'] as $key => $name) {
                // continue if not found in url
                if (empty($_GET[$name])) continue;

                // get the value for this filter
                // eg: http://www.website.com/events?city=melbourne,sydney
                if ($name == 'start_date') {
                    $datetime = explode(' ', $_GET['start_date']);
                    $value = date_i18n("Ymd", strtotime($datetime[0]));
                    // append meta query
                    $meta_query[] = [
                        'key'        => $name,
                        'value'        => $value,
                        'compare'    => '=',
                    ];
                } else {
                    $value = $_GET[$name];
                    // append meta query
                    $meta_query[] = [
                        'key'        => $name,
                        'value'        => $value,
                        'compare'    => 'LIKE',
                    ];
                }
            }
            $query->set('meta_query', $meta_query);
        }
        $query->set('post_title_like', $_GET['title']);
        if (is_category() || is_tag() && empty($query->query_vars['suppress_filters'])) {
            $query->set('post_type', ['post', 'event']);
        }
    }
}

add_action('pre_get_posts', 'event_posts');


add_action( 'admin_notices', 'mehan_dependencies' );

/*
    ==========================================
    Plugin Checks
    ==========================================
*/

function mehan_dependencies() {
    if( ! function_exists('acf_add_local_field_group') ) { ?>
        <div class="error">
            <p>Warning: The theme needs Advanced Custom Fields to function</p>
            <a href="/wp-admin/plugins.php?s=Advanced%20Custom%20Fields">Activate/Install Plugin</a>
        </div>
    <?php }
    if( ! function_exists('wpcf7_init') ) { ?>
        <div class="error">
            <p>Warning: The theme needs Contact Form 7 for Contact forms to function</p>
            <a href="/wp-admin/plugins.php?s=contact%20form%207">Activate/Install Plugin</a>
        </div>
    <?php }
}

/*
    ==========================================
    Include Gutenberg Blocks
    ==========================================
*/

// require get_template_directory() . '/inc/gutenberg.php';
