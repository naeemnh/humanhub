<!-- Begin Footer Area -->
<div class="footer-area bg-smoke_color">
    <div class="footer-top_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row footer-widgets_wrap">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widgets_area">
                                <div class="logo">
                                    <?php mehan_23_the_custom_logo(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="footer-widgets_area">
                                <div class="footer-widgets">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer-menu-1',
                                        'container_class' => '',
                                        'container' => '',
                                        'menu_class' => '',
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widgets_area p-md-0">
                                <!-- <h3 class="widgets-heading mb-0" style="visibility:hidden">
                                    <?php if (get_language() == 'en') : ?>
                                        Explore
                                    <?php else : ?>
                                        يستكشف
                                    <?php endif; ?>
                                </h3> -->
                                <div class="footer-widgets">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer-menu-2',
                                        'container_class' => '',
                                        'container' => '',
                                        'menu_class' => '',
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- <div class="footer-widgets_area latest-tweets_widget p-md-0">
                                <div class="newsletter-area newsletter-form_wrap pb-5">
                                    <h3 class="sub-heading mb-0">
                                        <i class="ion-android-send"></i> Newsletter
                                    </h3>
                                    <form action="" class="newsletters-form validate" id="mc-embedded-subscribe-form">
                                        <div class="mc-form subscribe-form">
                                            <input id="mc-email" class="newsletter-input" type="email" autocomplete="off" placeholder="Email">
                                            <button class="newsletter-btn text-uppercase" id="mc-submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            <?php echo do_shortcode("[zcwp id = 1]"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom_area">
        <div class="container">
            <div class="footer-bottom_nav">
                <div class="row">
                    <div class="col-lg-7 col-sm-6">
                        <div class="copyright">
                            <span>
                                <?php
                                if (get_language() == 'en') : ?>
                                    Copyright 2023 &copy;
                                    <a href="<?php echo home_url() ?>">Mehan L.L.C.</a>
                                <?php else : ?>
                                    حقوق الطبع والنشر © جميع الحقوق محفوظة <a href="<?php echo home_url() ?>"> مهن ذ م م</a>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <div class="footer-right_area">
                            <ul class="social-link">
                                <?php if (get_theme_mod('mehan_23_facebook')) : ?>
                                    <li class="facebook">
                                        <a href="<?php echo get_theme_mod('mehan_23_facebook'); ?>" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                <?php endif;
                                if (get_theme_mod('mehan_23_twitter')) : ?>
                                    <li class="twitter">
                                        <a href="<?php echo get_theme_mod('mehan_23_twitter'); ?>" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                    </li>
                                <?php endif;
                                if (get_theme_mod('mehan_23_linkedin')) : ?>
                                    <li class="linkedin">
                                        <a href="<?php echo get_theme_mod('mehan_23_linkedin'); ?>" data-bs-toggle="tooltip" target="_blank" title="Linkedin">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                <?php endif;
                                if (get_theme_mod('mehan_23_snapchat')) : ?>
                                    <li class="snapchat">
                                        <a href="<?php echo get_theme_mod('mehan_23_snapchat'); ?>" data-bs-toggle="tooltip" target="_blank" title="Snapchat">
                                            <i class="fa-brands fa-snapchat"></i>
                                        </a>
                                    </li>
                                <?php endif;
                                if (get_theme_mod('mehan_23_instagram')) : ?>
                                    <li class="instagram">
                                        <a href="<?php echo get_theme_mod('mehan_23_instagram'); ?>" data-bs-toggle="tooltip" target="_blank" title="Instagram">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Area End Here -->

<!-- Scroll To Top Start -->
<a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>
<!-- Scroll To Top End -->
</div>

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/vendor/jquery-3.6.0.min.js"></script>
<!-- jQuery Migrate JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<!-- Modernizer JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/vendor/modernizr-3.11.2.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/vendor/bootstrap.bundle.min.js"></script>

<!-- Slick Slider JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/slick.min.js"></script>
<!-- Counterup JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/jquery.counterup.min.js"></script>
<!-- Nice Select JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/jquery.nice-select.min.js"></script>
<!-- Jquery-ui JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
<!-- Waypoints JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/waypoints.min.js"></script>
<!-- Wow JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/wow.min.js"></script>
<!-- Animated Headlines JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/animated-headlines.js"></script>
<!-- Magnific Popup JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/jquery.magnific-popup.min.js"></script>
<!-- datetimepicker JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/jquery.datetimepicker.full.min.js"></script>
<!-- Font Awesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Main JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2F4M70FXHV"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-2F4M70FXHV');
</script>
<?php wp_footer(); ?>
</body>

</html>