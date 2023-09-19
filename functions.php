<?php

error_reporting(E_ERROR | E_PARSE);

// Theme Support
require get_template_directory() . '/inc/mehan-theme-setup.php';

// Logo
require get_template_directory() . '/inc/mehan-logo.php';

// Pagination
require get_template_directory() . '/inc/mehan-pagination.php';

// Sidebar
require get_template_directory() . '/inc/mehan-widgets.php';

// Walker File
require get_template_directory() . '/inc/walker.php';

// Plugin Checks
require get_template_directory() . '/inc/mehan-require-plugin.php';

// Admin
require get_template_directory() . '/inc/mehan-admin.php';

// ACF
require get_template_directory() . '/inc/acf.php';
