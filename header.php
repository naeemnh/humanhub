<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php wp_title('', true, ''); ?></title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="<?php echo get_bloginfo('description') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon.png" />

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/ion-fonts.css" />
    <!-- Themify Icon -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/themify-icons.css" />
    <!-- Slick CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/slick.min.css" />
    <!-- Animation -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/animate.min.css" />
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/jquery-ui.min.css" />
    <!-- Nice Select -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/nice-select.min.css" />
    <!-- Animated Headlines -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/animated-headlines.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/magnific-popup.min.css" />
    <!-- datetimepicker -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/jquery.datetimepicker.min.css" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css" />
    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/custom.css" />
    <?php wp_head(); ?>
</head>

<body class="template-color-1">
    <div class="main-wrapper">
        <!-- Begin Main Header Area -->
        <header class="main-header_area">
            <div class="main-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-header_nav row align-items-center">
                                <div class="col-xl-3 col-md-4 col-6">
                                    <div class="header-logo">
                                        <?php humanhub_the_custom_logo(); ?>
                                        <!-- <a href="<?php home_url() ?>">
                                            <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/logo/mehan_270x163.svg" alt="Header Logo" />
                                        </a> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 position-static d-none d-xl-block">
                                    <div class="main-menu_area d-none d-lg-block">
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'primary-menu',
                                            'container_class' => 'main-nav d-flex justify-content-center',
                                            'container' => 'nav',
                                            'menu_class' => '',
                                            'walker' => new Walker_Nav_Primary(),
                                        ));
                                        ?>
                                        <!-- <nav class="main-nav d-flex justify-content-center">
                                            <ul>
                                                <li>
                                                    <a href="index.html">Home</a>
                                                    <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="index-2.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Home 02
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-3.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Home 03
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="about-us.html">About</a>
                                                    <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="about-us.html">
                                                                <i class="ion-chevron-right"></i>
                                                                About us
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="pricing-plans.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Pricing Plans
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="academics.html">Academics</a>
                                                    <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="our-classes.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Our Classes
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="our-classes-list.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Our Classes - List
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="single-class.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Single Class
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="news.html">News</a>
                                                    <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="news-list.html">
                                                                <i class="ion-chevron-right"></i>
                                                                News - List
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="single-post.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Single Post
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="event-page.html">Event</a>
                                                    <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="event-list.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Event - List
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="single-event.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Single Event
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Pages</a>
                                                    <ul class="ademy-dropdown">
                                                        <li class="submenu-holder">
                                                            <a href="faculty-and-staff.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Faculty and staff
                                                                <span class="submenu-indicate ion-chevron-right"></span>
                                                            </a>
                                                            <ul class="ademy-dropdown ademy-submenu">
                                                                <li>
                                                                    <a href="profile.html">
                                                                        <i class="ion-chevron-right"></i>
                                                                        Profile
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="faculty-and-staff-2.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Faculty and staff 02
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="coming-soon.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Coming Soon
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="error-404.html">
                                                                <i class="ion-chevron-right"></i>
                                                                404
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav> -->
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-8 d-none d-md-block">
                                    <div class="header-right_area with-radius">
                                        <ul class="social-link">
                                            <li class="facebook">
                                                <a href="https://www.facebook.com" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="ion-social-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="https://twitter.com" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="ion-social-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="ion-social-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="skype">
                                                <a href="https://skype.com/" data-bs-toggle="tooltip" target="_blank" title="Skype">
                                                    <i class="ion-social-skype"></i>
                                                </a>
                                            </li>
                                            <li class="search-bar d-none d-lg-inline-block">
                                                <a class="search-btn" href="#">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </li>
                                            <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn">
                                                    <i class="ion-navicon-round"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Start Search Form -->
                                    <div class="search-body">
                                        <?php get_search_form(array('class' => 'inner-body')); ?>
                                    </div>
                                    <!-- End Search Form -->
                                </div>
                                <div class="col-6 d-block d-md-none">
                                    <div class="header-right_area with-radius justify-content-end">
                                        <ul>
                                            <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn">
                                                    <i class="ion-navicon-round"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-header_nav row align-items-center">
                                <div class="col-xl-3 col-md-4 col-6">
                                    <div class="header-logo">
                                        <?php humanhub_the_custom_logo() ?>
                                        <!-- <a href="index.html">
                                            <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/logo/mehan_180x108.png" alt="Header Logo" />
                                        </a> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 position-static d-none d-xl-block">
                                    <div class="main-menu_area d-none d-lg-block">
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'primary-menu',
                                            'container_class' => 'main-nav d-flex justify-content-center',
                                            'container' => 'nav',
                                            'menu_class' => '',
                                            'walker' => new Walker_Nav_Primary(),
                                        ));
                                        ?>
                                        <!-- <nav class="main-nav d-flex justify-content-center">
                                            <ul>
                                                <li>
                                                    <a href="index.html">Home</a>
                                                    <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="index-2.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Home 02
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-3.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Home 03
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="about-us.html">About</a>
                                                    <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="about-us.html">
                                                                <i class="ion-chevron-right"></i>
                                                                About us
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="pricing-plans.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Pricing Plans
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="academics.html">Academics</a>
                                                    <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="our-classes.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Our Classes
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="our-classes-list.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Our Classes - List
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="single-class.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Single Class
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="news.html">News</a>
                                                    <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="news-list.html">
                                                                <i class="ion-chevron-right"></i>
                                                                News - List
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="single-post.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Single Post
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="event-page.html">Event</a>
                                                    <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="event-list.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Event - List
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="single-event.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Single Event
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Pages</a>
                                                    <ul class="ademy-dropdown">
                                                        <li class="submenu-holder">
                                                            <a href="faculty-and-staff.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Faculty and staff
                                                                <span class="submenu-indicate ion-chevron-right"></span>
                                                            </a>
                                                            <ul class="ademy-dropdown ademy-submenu">
                                                                <li>
                                                                    <a href="profile.html">
                                                                        <i class="ion-chevron-right"></i>
                                                                        Profile
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="faculty-and-staff-2.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Faculty and staff 02
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="coming-soon.html">
                                                                <i class="ion-chevron-right"></i>
                                                                Coming Soon
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="error-404.html">
                                                                <i class="ion-chevron-right"></i>
                                                                404
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav> -->
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-8 d-none d-md-block">
                                    <div class="header-right_area with-radius">
                                        <ul class="social-link">
                                            <li class="facebook">
                                                <a href="https://www.facebook.com" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="ion-social-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="https://twitter.com" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="ion-social-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="ion-social-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="skype">
                                                <a href="https://skype.com/" data-bs-toggle="tooltip" target="_blank" title="Skype">
                                                    <i class="ion-social-skype"></i>
                                                </a>
                                            </li>
                                            <li class="search-bar d-none d-lg-inline-block">
                                                <a class="search-btn" href="#">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </li>
                                            <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn">
                                                    <i class="ion-navicon-round"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Start Search Form -->
                                    <div class="search-body">
                                        <?php get_search_form(array('class' => 'inner-body')); ?>
                                    </div>
                                </div>
                                <div class="col-6 d-block d-md-none">
                                    <div class="header-right_area with-radius justify-content-end">
                                        <ul>
                                            <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn">
                                                    <i class="ion-navicon-round"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="offcanvas-inner_search">
                        <!-- Start Search Form -->
                        <div class="search-body">
                            <?php get_search_form(array('class' => 'hm-searchbox')); ?>
                        </div>
                        <!-- End Search Form -->
                    </div>
                    <a href="#" class="btn-close"><i class="ion-close-round"></i></a>
                    <div class="offcanvas-navigation_wrap">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'container_class' => 'offcanvas-navigation',
                            'container' => 'nav',
                            'menu_class' => 'mobile-menu',
                            'walker' => new Walker_Nav_Mobile(),
                        ));
                        ?>
                        <!-- <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active">
                                    <a href="#"><span class="mm-text">Home <i class="ion-ios-arrow-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.html">
                                                <span class="mm-text">Home 01</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">
                                                <span class="mm-text">Home 02</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-3.html">
                                                <span class="mm-text">Home 03</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">About <i class="ion-ios-arrow-down"></i></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="about-us.html">
                                                <span class="mm-text">About Us</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pricing-plans.html">
                                                <span class="mm-text">Pricing Plans</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Academics <i class="ion-ios-arrow-down"></i></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="academics.html">
                                                <span class="mm-text">Academics Default</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="our-classes.html">
                                                <span class="mm-text">Our Classes</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="our-classes-list.html">
                                                <span class="mm-text">Our Classes List</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-class.html">
                                                <span class="mm-text">Single Class</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">News <i class="ion-ios-arrow-down"></i></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="news.html">
                                                <span class="mm-text">News Default</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="news-list.html">
                                                <span class="mm-text">News List</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <span class="mm-text">Single Post</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Event <i class="ion-ios-arrow-down"></i></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="event-page.html">
                                                <span class="mm-text">Event Page</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="event-list.html">
                                                <span class="mm-text">Event List</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-event.html">
                                                <span class="mm-text">Single Event</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Pages <i class="ion-ios-arrow-down"></i></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="faculty-and-staff.html">
                                                <span class="mm-text">Faculty and Staff</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="faculty-and-staff-2.html">
                                                <span class="mm-text">Faculty and Staff 02</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="profile.html">
                                                <span class="mm-text">Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="coming-soon.html">
                                                <span class="mm-text">Coming Soon</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="error-404.html">
                                                <span class="mm-text">Error 404</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <span class="mm-text">Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </nav> -->
                        <nav class="offcanvas-navigation-2">
                            <div class="ht-right inner-header_info">
                                <ul>
                                    <li class="contuct-number">
                                        <i class="ion-ios-telephone me-1"></i>
                                        <a href="tel://+01228899900">01228899900</a>
                                    </li>
                                    <li class="address">
                                        <i class="ion-ios-location me-1"></i>
                                        <span>614 Destany Village Apt. 968</span>
                                    </li>
                                    <!-- <li class="donate">
                                        <a class="ademy-btn atlantis-color_btn" href="javascript:void(0)">Donate</a>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="header-right_area inner-social_link justify-content-start">
                                <ul class="social-link">
                                    <li class="facebook">
                                        <a href="https://www.facebook.com" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                            <i class="ion-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="https://twitter.com" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                            <i class="ion-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                            <i class="ion-social-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="skype">
                                        <a href="https://skype.com/" data-bs-toggle="tooltip" target="_blank" title="Skype">
                                            <i class="ion-social-skype"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>