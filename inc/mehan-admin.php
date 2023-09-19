<?php
/*
    ==========================================
    Custom login URL
    ==========================================
*/

function redirect_to_null_page()
{
  $new_login = 'login';
  if (strpos($_SERVER['REQUEST_URI'], $new_login) === false) {
    wp_safe_redirect(home_url('Not Found'), 302);
    exit();
  }
}
add_action('login_head', 'redirect_to_null_page');
function redirect_to_actual_login()
{
  $new_login = 'logmein';
  if (parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY) == $new_login && ($_GET['redirect'] !== false)) {
    wp_safe_redirect(home_url("wp-login.php?$new_login&redirect=false"));
    exit();
  }
}
add_action('init', 'redirect_to_actual_login');

/*
    ==========================================
    Custom login Logo
    ==========================================
*/

function wpb_login_logo()
{ ?>
  <style type="text/css">
    #login h1 a,
    .login h1 a {
      background-image: url('https://mehanhr.com/wp-content/themes/mehan%20old/assets/mt-content/uploads/2018/07/logo-original.svg');
      height: 100px;
      width: 300px;
      background-size: 300px 100px;
      background-repeat: no-repeat;
      padding-bottom: 10px;
    }
  </style>
<?php }
add_action('login_enqueue_scripts', 'wpb_login_logo');

/*
    ==========================================
    Custom login Background Image
    ==========================================
*/

function login_background_image()
{ ?>
  <style type="text/css">
    body.login {
      /* background-image:  url(“http://bgimage.png” ) !important; */
      background-color: #1a55a5;
    }

    #login {
      padding: 0 5% 0.1%;
      margin: 5% auto 2.5%;
      background: #fff;
      border-radius: 20px;
    }

    .login form {
      background: #0058a1;
      border-radius: 20px;
      color: #fff;
    }
  </style>;
<?php }
add_action('login_head', 'login_background_image');
