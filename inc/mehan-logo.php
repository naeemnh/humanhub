<?php
/*
    ==========================================
    Custom Logo
    ==========================================
*/

function mehan_23_custom_logo_setup()
{
  $defaults = array(
    'height'        => 170,
    'width'         => 270,
    'flex-height'   => true,
    'flex-width'    => true
  );
  add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'mehan_23_custom_logo_setup');

function mehan_23_the_custom_logo()
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
