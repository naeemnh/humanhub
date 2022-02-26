<?php

/**
 * Custom Gutenberg functions
 */

function mehan_gutenberg_default_colors()
{
    add_theme_support("editor-styles");
    add_editor_style("style-editor.css");
    add_theme_support("responsive-embeds");
    add_theme_support("align-wide");

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
