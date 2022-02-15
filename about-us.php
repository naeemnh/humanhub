<?php

/**
 * Template Name: About Us
 * Template Post Type: page
 */
get_header();
while (have_posts()) : the_post(); ?>

    <?php get_template_part('template-parts/part', 'breadcrumb'); ?>

    <!-- Begin Main Content Area -->
    <main class="main-content">
        <!-- Begin Introduction Area Three -->
        <div id="welcome" class="introduction-area introduction-area-3 pb-0">
            <div class="container">
                <div class="section-title pb-5">
                    <h6 class="heading mb-0">We are the best school</h6>
                    <h2 class="sub-heading mb-0">
                        Welcome to <span>Ademy</span> school
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 order-1">
                        <div class="introduction-img_area">
                            <div class="inner-img">
                                <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/introduction/1.jpg" alt="Introduction Image" />
                                <div class="popup-btn">
                                    <a class="popup-vimeo" href="https://player.vimeo.com/video/172601404?autoplay=1">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/video-play-btn.png" alt="Play Button" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-2">
                        <div class="section-wrap">
                            <h2 class="heading mb-0">
                                Welcome to
                                <span>Ademy</span>
                                a prestigious secondary school
                            </h2>
                            <p class="short-desc mb-0">
                                We understand that each of our students is a uniquely
                                talented individual. Within our supportive community,
                                students are facilitated to develop positive relationships
                                and grab the opportunity to realize their individual
                                potential to the full.
                            </p>
                            <div class="btn-wrap">
                                <a class="ademy-btn denim-color_btn with-border_radius" href="academics.html">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Introduction Area Three End Here -->

        <!-- Begin Services Area -->
        <div class="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <i class="ion-ios-nutrition"></i>
                            </div>
                            <div class="services-content">
                                <h3 class="title mb-0">Nutritious food</h3>
                                <p class="short-desc mb-0">
                                    We have the most scientific and suitable nutrition modes
                                    for our students.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <i class="ion-android-bus"></i>
                            </div>
                            <div class="services-content">
                                <h3 class="title mb-0">Bus services</h3>
                                <p class="short-desc mb-0">
                                    Bus fares are completely free for both Ademy's students
                                    and teachers.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <i class="ion-music-note"></i>
                            </div>
                            <div class="services-content">
                                <h3 class="title mb-0">Music lessons</h3>
                                <p class="short-desc mb-0">
                                    Students are encouraged to take music lessons for
                                    developing artistic talents.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <i class="ion-ios-football"></i>
                            </div>
                            <div class="services-content">
                                <h3 class="title mb-0">Team sports</h3>
                                <p class="short-desc mb-0">
                                    Team sports are for teenagers of all ages to enhance team
                                    spirit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <i class="ion-videocamera"></i>
                            </div>
                            <div class="services-content">
                                <h3 class="title mb-0">Drama clubs</h3>
                                <p class="short-desc mb-0">
                                    Drama clubs are the most reputable and highly regarded
                                    groups in our school.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <i class="ion-flag"></i>
                            </div>
                            <div class="services-content">
                                <h3 class="title mb-0">Summer camps</h3>
                                <p class="short-desc mb-0">
                                    We organized camps for students from all over the country
                                    every summer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End Here -->

        <!-- Begin Banner Area -->
        <div class="banner-area banner-bg-01">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="inner-content">
                            <div class="popup-btn">
                                <a class="popup-vimeo" href="https://player.vimeo.com/video/172601404?autoplay=1">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/video-play-btn.png" alt="Play Button" />
                                </a>
                            </div>
                            <h1 class="heading cd-headline letters type mb-0">
                                Today a reader. Tomorrow a
                                <span class="cd-words-wrapper waiting">
                                    <b class="is-visible">founderl</b>
                                    <b>ceo</b>
                                    <b>leader</b>
                                </span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End Here -->

        <!-- Begin Our Teacher Area -->
        <div class="our-teacher_area bg-smoke_color">
            <div class="container">
                <div class="section-title">
                    <h2 class="sub-heading text-capitalize mb-0">
                        Meet our <span>teachers</span>
                    </h2>
                    <p class="short-desc mb-0">
                        Meet our brilliant team of dedicated, friendly, and creative
                        teachers from all kinds of teaching fields.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-item">
                            <div class="single-inner_item">
                                <div class="single-img with-radius">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/our-teacher/1.png" alt="Our Teacher Image" />
                                </div>
                                <div class="single-content">
                                    <h3 class="teacher-name mb-0">Cory Campbell</h3>
                                    <span class="teacher-position">/ Technology</span>
                                    <ul class="social-link nobel-color">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-item">
                            <div class="single-inner_item">
                                <div class="single-img with-radius">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/our-teacher/2.png" alt="Our Teacher Image" />
                                </div>
                                <div class="single-content">
                                    <h3 class="teacher-name mb-0">Della Morgan</h3>
                                    <span class="teacher-position">/ Language</span>
                                    <ul class="social-link nobel-color">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-item">
                            <div class="single-inner_item">
                                <div class="single-img with-radius">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/our-teacher/3.png" alt="Our Teacher Image" />
                                </div>
                                <div class="single-content">
                                    <h3 class="teacher-name mb-0">Joel Mills</h3>
                                    <span class="teacher-position">/ Language</span>
                                    <ul class="social-link nobel-color">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-item">
                            <div class="single-inner_item">
                                <div class="single-img with-radius">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/our-teacher/4.png" alt="Our Teacher Image" />
                                </div>
                                <div class="single-content">
                                    <h3 class="teacher-name mb-0">Joseph Perkins</h3>
                                    <span class="teacher-position">/ Mathematics</span>
                                    <ul class="social-link nobel-color">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-item">
                            <div class="single-inner_item">
                                <div class="single-img with-radius">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/our-teacher/5.png" alt="Our Teacher Image" />
                                </div>
                                <div class="single-content">
                                    <h3 class="teacher-name mb-0">Matthew Morrison</h3>
                                    <span class="teacher-position">/ Language</span>
                                    <ul class="social-link nobel-color">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-item">
                            <div class="single-inner_item">
                                <div class="single-img with-radius">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/our-teacher/6.png" alt="Our Teacher Image" />
                                </div>
                                <div class="single-content">
                                    <h3 class="teacher-name mb-0">Maurice Becker</h3>
                                    <span class="teacher-position">/ CEO</span>
                                    <ul class="social-link nobel-color">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-item">
                            <div class="single-inner_item">
                                <div class="single-img with-radius">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/our-teacher/7.png" alt="Our Teacher Image" />
                                </div>
                                <div class="single-content">
                                    <h3 class="teacher-name mb-0">Mayme Edwards</h3>
                                    <span class="teacher-position">/ Mathematics</span>
                                    <ul class="social-link nobel-color">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-item">
                            <div class="single-inner_item">
                                <div class="single-img with-radius">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/our-teacher/8.png" alt="Our Teacher Image" />
                                </div>
                                <div class="single-content">
                                    <h3 class="teacher-name mb-0">Rodney Mathis</h3>
                                    <span class="teacher-position">/ Athletics</span>
                                    <ul class="social-link nobel-color">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="btn-wrap d-flex justify-content-center">
                            <a class="ademy-btn fullwidth-btn denim-color_btn" href="javascript:void(0)">View all
                                <i class="ion-android-arrow-forward"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Teacher Area End Here -->

        <!-- Begin Brand Area -->
        <div class="brand-area">
            <div class="container">
                <div class="section-title pb-5">
                    <h6 class="heading text-uppercase mb-0">Because we care</h6>
                    <h2 class="sub-heading text-capitalize mb-0">
                        Our valuable <span>donors</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ademy-element-carousel brand-slider" data-slick-options='{
                            "slidesToShow": 6,
                            "slidesToScroll": 1,
                            "infinite": true,
                            "arrows": false,
                            "dots": false,
                            "spaceBetween": 30
                            }' data-slick-responsive='[
                            {"breakpoint":992, "settings": {
                            "slidesToShow": 3
                            }},
                            {"breakpoint":768, "settings": {
                            "slidesToShow": 3
                            }},
                            {"breakpoint":575, "settings": {
                            "slidesToShow": 2
                            }}
                        ]'>
                            <div class="brand-item">
                                <a href="javascript:void(0)">
                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/brand/1.png" alt="Ademy's Brand" />
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="javascript:void(0)">
                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/brand/2.png" alt="Ademy's Brand" />
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="javascript:void(0)">
                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/brand/3.png" alt="Ademy's Brand" />
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="javascript:void(0)">
                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/brand/4.png" alt="Ademy's Brand" />
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="javascript:void(0)">
                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/brand/5.png" alt="Ademy's Brand" />
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="javascript:void(0)">
                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/brand/6.png" alt="Ademy's Brand" />
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="javascript:void(0)">
                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/brand/1.png" alt="Ademy's Brand" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End Here -->
    </main>
    <!-- Main Content Area End Here -->
<?php
endwhile;
get_footer();
