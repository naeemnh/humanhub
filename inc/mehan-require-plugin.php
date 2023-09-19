<?php
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
add_action('tgmpa_register', 'mehan_23_register_required_plugins');

function mehan_23_register_required_plugins()
{
  $plugins = [
    // require advanced custom fields
    [
      'name' => 'Advanced Custom Fields',
      'slug' => 'advanced-custom-fields',
      'required' => true
    ],
    // require polylang
    [
      'name' => 'Polylang',
      'slug' => 'polylang',
      'required' => true
    ],
    // require contact form 7
    [
      'name' => 'Contact Form 7',
      'slug' => 'contact-form-7',
      'required' => true
    ],
    // require multilingual contact form 7 with polylang
    [
      'name' => 'Multilingual Contact Form 7 with Polylang',
      'slug' => 'multilingual-contact-form-7-with-polylang',
      'required' => true
    ],
  ];

  $config = [
    'id'           => 'mehan-plugins',         // Unique ID for hashing notices for multiple instances of TGMPA.
    'default_path' => '',                      // Default absolute path to bundled plugins.
    'menu'         => 'tgmpa-install-plugins', // Menu slug.
    'parent_slug'  => 'themes.php',            // Parent menu slug.
    'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
    'has_notices'  => true,                    // Show admin notices or not.
    'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
    'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
    'is_automatic' => false,                   // Automatically activate plugins after installation or not.
    'message'      => '',                      // Message to output right before the plugins table.
  ];

  tgmpa($plugins, $config);
}
