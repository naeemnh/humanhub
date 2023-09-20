<!DOCTYPE html>
<html class="no-js" lang="<?php echo get_locale() ?>">

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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/rtl.css" />
    <?php wp_head(); ?>
</head>

<body class="template-color-1">
    <!-- Start Main Wrapper -->
    <div class="main-wrapper">
        <!-- Begin Main Header Area -->
        <header class="main-header_area">
            <!-- Start Menu -->
            <div class="main-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-header_nav row align-items-center">
                                <div class="col-xl-3 col-md-4 col-6">
                                    <div class="header-logo">
                                        <?php mehan_23_the_custom_logo(); ?>
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
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-8 d-none d-md-block position-relative">
                                    <div class="header-right_area with-radius">
                                        <ul class="social-link">
                                            <?php if (!is_single()) : ?>
                                                <li class="language d-inline-block d-lg-inline-block">
                                                    <a href="#" class="lang-btn">
                                                        <i class="ion-ios-world-outline"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (get_language() == 'en') : ?>
                                                <li class="search-bar d-none d-lg-inline-block">
                                                    <a class="search-btn" href="#">
                                                        <i class="ion-ios-search-strong"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn">
                                                    <i class="ion-navicon-round"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Start Langeuage Select -->
                                    <div class="lang-body">
                                        <?php wp_nav_menu(['menu' => 'language',]) ?>
                                    </div>
                                    <!-- End Langeuage Select -->
                                    <!-- Start Search Form -->
                                    <div class="search-body">
                                        <?php get_search_form(array('class' => 'inner-body')); ?>
                                    </div>
                                    <!-- End Search Form -->
                                </div>
                                <div class="col-6 d-block d-md-none position-relative">
                                    <div class="header-right_area with-radius justify-content-end">
                                        <ul>
                                            <li class="language d-inline-block d-lg-none">
                                                <a href="#" class="mobile-lang-btn">
                                                    <i class="ion-ios-world-outline"></i>
                                                </a>
                                            </li>
                                            <?php if (get_language() == 'en') : ?>
                                                <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                                    <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn">
                                                        <i class="ion-navicon-round"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <div class="mobile-lang-body">
                                        <?php wp_nav_menu(['menu' => 'language',]) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Menu -->
            <!-- Start Sticky Menu -->
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-header_nav row align-items-center">
                                <div class="col-xl-3 col-md-4 col-6">
                                    <div class="header-logo">
                                        <?php mehan_23_the_custom_logo() ?>
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
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-8 d-none d-md-block position-relative">
                                    <div class="header-right_area with-radius">
                                        <ul class="social-link">
                                            <li class="language d-none d-lg-inline-block">
                                                <a href="#" class="sticky-lang-btn">
                                                    <i class="ion-ios-world-outline"></i>
                                                </a>
                                            </li>
                                            <?php if (get_language() == 'en') : ?>
                                                <li class="search-bar d-none d-lg-inline-block">
                                                    <a class="sticky-search-btn" href="#">
                                                        <i class="ion-ios-search-strong"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn">
                                                    <i class="ion-navicon-round"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Start Langeuage Select -->
                                    <div class="sticky-lang-body">
                                        <?php wp_nav_menu(['menu' => 'language',]) ?>
                                    </div>
                                    <!-- End Langeuage Select -->
                                    <!-- Start Search Form -->
                                    <div class="sticky-search-body">
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
            <!-- End Sticky Menu -->
            <!-- Start Mobile Menu -->
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="offcanvas-inner_search">
                        <!-- Start Search Form -->
                        <?php get_search_form(array('class' => 'hm-searchbox')); ?>
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
                        <nav class="offcanvas-navigation-2">
                            <div class="ht-right inner-header_info">
                                <ul>
                                    <li class="contuct-number">
                                        <i class="ion-ios-telephone me-1"></i>
                                        <a href="tel:+971504568189">971504568189</a>
                                    </li>
                                    <li class="address">
                                        <i class="ion-ios-location me-1"></i>
                                        <span>Masdar Free Zone, Abu Dhabi, AE</span>
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
                                    <li class="linkedin">
                                        <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="LinkedIn">
                                            <i class="ion-social-linkedin"></i>
                                        </a>
                                    </li>
                                    <li class="snapchat">
                                        <a href="https://skype.com/" data-bs-toggle="tooltip" target="_blank" title="Snapchat">
                                            <i class="ion-social-snapchat"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
            <!-- End Mobile Menu -->
            <div class="global-overlay"></div>
        </header>