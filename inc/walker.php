<?php

/* Collection of Walker classes */

class Walker_Nav_Primary extends Walker_Nav_menu
{
    /**
     * Starts the list before the elements are added.
     *
     * Adds classes to the unordered list sub-menus. (<ul>)
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0 ? " ademy-dropdown" : "");
        $output .= $indent . "<ul class=\"" . $submenu . "\">\n";
    }

    /**
     * Start the element output.
     *
     * Adds main/sub-classes to the list items and links. (<li>, <a>, <span>)
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    // function start_el()
    // {
    // }
}
