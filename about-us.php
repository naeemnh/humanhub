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
        <div id="welcome" class="introduction-area introduction-area-3">
            <div class="container">
                <div class="section-title pb-5">
                    <h2 class="sub-heading mb-0">
                        Welcome to <span>Mehan's</span> HumanHub
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-5 order-2">
                        <div class="section-wrap">
                            <!-- <h2 class="heading mb-0">
                                Welcome to
                                <span>Ademy</span>
                                a prestigious secondary school
                            </h2> -->
                            <p class="short-desc mb-0">
                                Mehan's Human Hub is a continuous learning Human Capital Hub that allows human capital professionals and students to transform, grow, share knowledge, innovate and advance in their careers by collaborating with other HC professionals through virtual and physical platforms.
                            </p>
                            <!-- <div class="btn-wrap">
                                <a class="ademy-btn denim-color_btn with-border_radius" href="academics.html">Learn more</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 order-1">
                        <div class="introduction-img_area">
                            <div class="inner-img">
                                <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/introduction/elements_human-hub-min.png" alt="Introduction Image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Introduction Area Three End Here -->

        <!-- Begin Services Area -->
        <div class="services-area bg-smoke_color">
            <div class="container">
                <div class="section-title pb-5">
                    <h2 class="sub-heading mb-0">What HumanHub Offers</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="services-item">
                            <div class="services-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/services/elements_human-hub-1-min.png" alt="" class="img-full">
                            </div>
                            <div class="services-content">
                                <h3 class="title mb-0 white-color">Knowledge</h3>
                                <p class="short-desc mb-0">
                                    Facilitating Knowledge and Experience Sharing among Human Capital professionals through speaking via podcasts & webinars, writing articles, and posting, brainstroming & collaborating.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="services-item">
                            <div class="services-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/services/elements_human-hub-2-min.png" alt="" class="img-full">
                            </div>
                            <div class="services-content">
                                <h3 class="title mb-0 white-color">Enlightment</h3>
                                <p class="short-desc mb-0">
                                    Inspiring the next generation of Human Capital leaders through shadowing, mentorship, coaching, and internships.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="services-item">
                            <div class="services-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/services/elements_human-hub-4-min.png" alt="" class="img-full">
                            </div>
                            <div class="services-content">
                                <h3 class="title mb-0 white-color">Networking</h3>
                                <p class="short-desc mb-0">
                                    Providing opportunities for Human Capital professionals to strengthen their network via physical and virtual events, access to direct messaging and joining or creating groups and communities.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="services-item">
                            <div class="services-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/services/elements_human-hub-3-min.png" alt="" class="img-full">
                            </div>
                            <div class="services-content">
                                <h3 class="title mb-0 white-color">Entrepreneurship</h3>
                                <p class="short-desc mb-0">
                                    To influence human capital practices by supporting entrepreneurs and freelancers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End Here -->

        <!-- Begin Banner Area -->
        <!-- <div class="banner-area banner-bg-01">
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
        </div> -->
        <!-- Banner Area End Here -->

        <!-- Begin Ticket Area -->
        <div class="ticket-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ticket-item">
                            <div class="heading-wrap">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/ticket/arrow.png" alt="Ticket Arrow" />
                                <h2 class="heading mb-0 blue-color">Sign up and Join us today!</h2>
                            </div>
                            <div class="group-btn_wrap d-flex">
                                <a class="ademy-btn btn-transparent blue-border grey-color with-border_radius me-2" href="<?php echo home_url() ?>/pricing-plan/">Learn more
                                    <i class="ion-android-arrow-forward"></i>
                                </a>
                                <a class="ademy-btn denim-color_btn with-border_radius" href="https://master-7rqtwti-wdrjk567vptqw.eu-4.platformsh.site/user/register">Register Now
                                    <i class="ion-android-arrow-forward"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ticket Area End Here -->

    </main>
    <!-- Main Content Area End Here -->
<?php
endwhile;
get_footer();
