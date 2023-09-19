<?php
/*
	==========================================
	 Sidebar function
	==========================================
*/

function mehan_23_widget_setup()
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

add_action('widgets_init', 'mehan_23_widget_setup');
