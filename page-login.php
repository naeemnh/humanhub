<?php

/**
 * Template Name: Login Page
 * Template Post Type: page
 */
get_header();
global $user_ID;
if (have_posts()) :
  while (have_posts()) : the_post();
    if (!$user_ID) :
      // user in logged out state 
?>
      <form>
        <p>
          <label for="username">Username or Email Address</label>
          <input type="text" id="username" name="username" placeholder="Enter Username/Email Address" />
          <label for="password">Password</label>
          <input type="password" name="password" id="password">
        </p>
      </form>
    <?php else :
      // user is logged in 
    ?>

<?php
    endif;
  endwhile;
endif;
get_footer();
