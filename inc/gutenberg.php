<?php

/**
 * Custom Gutenberg functions
 */

function mehan_gutenberg_default_colors()
{
    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name' => 'White',
                'slug' => 'white',
                'color' => '#ffffff',
            ),
            array(
                'name' => 'Mehan Blue',
                'slug' => 'mehan-blue',
                'color' => '#1a55a5',
            ),
        )
    );

    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name' => 'Normal',
                'slug' => 'normal',
                'size' => 16
            ),
            array(
                'name' => 'Large',
                'slug' => 'large',
                'size' => 24
            ),
        )
    );
}

add_action('init', 'mehan_gutenberg_default_colors');

function mehan_gutenberg_block()
{
    wp_enqueue_script(
        'mehan-testimonial-js',
        get_template_directory_uri() . '/build/index.js',
        array('wp-blocks')
    );
    register_block_type('mehan/mehan-testimonial', array(
        'editor_script' => 'mehan-testimonial-js',
    ));
}

add_action('init', 'mehan_gutenberg_block');
