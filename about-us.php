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

    </main>
    <!-- Main Content Area End Here -->
<?php
endwhile;
get_footer();
