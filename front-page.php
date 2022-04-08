<?php

/**
 * Template Name: Home Page
 * Template Post Type: page
 */
get_header(); ?>

<!-- Begin Slider Area -->
<div class="slider-area">
    <div class="ademy-element-carousel home-slider arrow-style" data-slick-options='{
        "slidesToShow": 1,
        "slidesToScroll": 1,
        "infinite": true,
        "arrows": true,
        "dots": false,
        "autoplay" : true,
        "fade" : true,
        "autoplaySpeed" : 10000,
        "pauseOnHover" : false,
        "pauseOnFocus" : false
        }' data-slick-responsive='[
        {"breakpoint":768, "settings": {
        "slidesToShow": 1
        }},
        {"breakpoint":575, "settings": {
        "slidesToShow": 1
        }}
    ]'>
        <div class="slide-item bg-1 animation-style-01">
            <div class="slide-content">
                <!-- <span class="intro">Human Hub</span> -->
                <h1 class="heading intro pb-1 mb-0">Human Hub</h1>
                <h1 class="heading cd-headline letters type mb-0">
                    Enrich your human capital experience <br />
                    <span class="cd-words-wrapper waiting">
                        <b class="is-visible">Share</b>
                        <b>Network</b>
                        <b>Collaborate</b>
                        <b>Innovate</b>
                        <b>Learn</b>
                        <b>Transform</b>
                        <b>Do it again</b> </span>.
                </h1>
                <div class="button-wrap position-center">
                    <a class="ademy-btn btn-transparent white-border with-border_radius active" href="#welcome">Get started
                        <i class="ion-android-arrow-forward"></i>
                    </a>
                    <a class="ademy-btn btn-transparent white-border with-border_radius" href="#latestnews">Learn more
                        <i class="ion-android-arrow-forward"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End Here -->

<!-- Begin Introduction Area - Our Story-->
<div id="welcome" class="introduction-area">
    <div class="container">
        <div class="section-title pb-5">
            <h6 class="heading mb-0">Our Story</h6>
            <h2 class="sub-heading mb-0">
                Our <span>Story</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="ademy-element-carousel introduction-slider" data-slick-options='{
                    "slidesToShow": 1,
                    "slidesToScroll": 1,
                    "infinite": true,
                    "arrows": false,
                    "dots": false,
                    "autoplay" : false,
                    "fade" : false,
                    "autoplaySpeed" : 7000,
                    "pauseOnHover" : false,
                    "pauseOnFocus" : false
                    }' data-slick-responsive='[
                    {"breakpoint":768, "settings": {
                    "slidesToShow": 1
                    }},
                    {"breakpoint":575, "settings": {
                    "slidesToShow": 1
                    }}
                ]'>
                    <div class="intro-item">
                        <div class="intro-content">
                            <h3 class="heading mb-0">Our Story</h3>
                            <p class="short-desc">
                                Mehan was founded as a boutique talent acquisition agency in 2018, catering to private, semi government, and government sectors in the UAE.
                            </p>
                            <p class="short-desc">
                                Venturing into innovative human capital business ideas in a continuously changing world, was only a matter of time.
                            </p>
                            <p class="short-desc">
                                As we value and encourage continuous learning and transformation, we are in the business of influencing how human capital is practiced for the betterment of the human experience in the workplace.
                            </p>
                            <!-- <div class="intro-btn_wrap">
                                <a class="ademy-btn denim-color_btn fullwidth-btn" href="<?php echo get_home_url() ?>/humanhub">
                                    Learn more
                                    <i class="ion-android-arrow-forward"></i>
                                </a>
                            </div> -->
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="introduction-img_area">
                    <div class="inner-img">
                        <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/introduction/home-story-img1.png" alt="Introduction Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Introduction Area End Here -->

<!-- Begin Human Hub Introduction Area - Human Hub -->
<div id="welcome" class="introduction-area bg-smoke_color">
    <div class="container">
        <div class="section-title pb-5">
            <h6 class="heading mb-0">Human Hub</h6>
            <h2 class="sub-heading mb-0">
                <span>Human</span> Hub
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="introduction-img_area">
                    <div class="inner-img">
                        <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/introduction/group-1501.png" alt="Introduction Image" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ademy-element-carousel introduction-slider" data-slick-options='{
                    "slidesToShow": 1,
                    "slidesToScroll": 1,
                    "infinite": true,
                    "arrows": false,
                    "dots": false,
                    "autoplay" : false,
                    "fade" : false,
                    "autoplaySpeed" : 7000,
                    "pauseOnHover" : false,
                    "pauseOnFocus" : false
                    }' data-slick-responsive='[
                    {"breakpoint":768, "settings": {
                    "slidesToShow": 1
                    }},
                    {"breakpoint":575, "settings": {
                    "slidesToShow": 1
                    }}
                ]'>
                    <div class="intro-item">
                        <div class="intro-content">
                            <h3 class="heading mb-0">Human Hub</h3>
                            <p class="short-desc">
                                A Continuous Learning Human Capital Hub that allows human capital professionals and students to transform, grow, share knowledge, innovate and advance in their careers by collaborating with other Human Capital professionals through virtual, mixed reality and physical platforms.
                            </p>
                            <div class="intro-btn_wrap">
                                <a class="ademy-btn denim-color_btn fullwidth-btn" href="<?php echo get_home_url() ?>/humanhub">
                                    Learn more
                                    <i class="ion-android-arrow-forward"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Human Hub Introduction Area End Here -->

<!-- Begin Latest News Area -->
<div id="latestnews" class="latest-news_area">
    <div class="container">
        <div class="section-title pb-4">
            <h2 class="sub-heading text-capitalize mb-0">
                Our latest <span>news</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <!-- Tab Buttons -->
                    <div class="col-lg-12">
                        <div class="tab-section_area">
                            <div class="latest-news_tab">
                                <ul class="nav latest-news_menu">
                                    <li>
                                        <a class="active" data-bs-toggle="tab" href="#all">All</a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tab" href="#athletics-olympiad">Athletics Olympiad</a>
                                    </li>
                                    <li><a data-bs-toggle="tab" href="#blogs">Blogs</a></li>
                                    <li>
                                        <a data-bs-toggle="tab" href="#languages">Languages</a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tab" href="#school-life">School Life</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Tab Panels -->
                    <div class="col-lg-12">
                        <div class="tab-content latest-news_content">
                            <div id="all" class="tab-pane active show" role="tabpanel">
                                <div class="ademy-element-carousel latest-news_slider" data-slick-options='{
                                    "slidesToShow": 3,
                                    "slidesToScroll": 1,
                                    "infinite": false,
                                    "arrows": false,
                                    "dots": false,
                                    "spaceBetween": 30
                                    }' data-slick-responsive='[
                                    {"breakpoint": 1200, "settings": {
                                    "slidesToShow": 3
                                    }},
                                    {"breakpoint": 992, "settings": {
                                    "slidesToShow": 2
                                    }},
                                    {"breakpoint": 768, "settings": {
                                    "slidesToShow": 1
                                    }}
                                ]'>
                                    <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 10,
                                    );
                                    $loop = new WP_Query($args);
                                    while ($loop->have_posts()) : $loop->the_post();
                                    ?>
                                        <div class="slide-item">
                                            <div class="single-item img-zoom_effect">
                                                <div class="single-img">
                                                    <a href="<?php the_permalink() ?>">
                                                        <?php if (the_post_thumbnail_url()) : ?>
                                                            <img class="img-full" src="<?php the_post_thumbnail_url() ?>" alt="Latest News Image" />
                                                        <?php else : ?>
                                                            <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/1.jpg" alt="Latest News Image" />
                                                        <?php endif; ?>
                                                    </a>
                                                    <div class="inner-btn">
                                                        <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                    </div>
                                                </div>
                                                <div class="single-item_content">
                                                    <div class="inner-content">
                                                        <h4 class="heading mb-0">
                                                            <a href="<?php echo get_category_link(get_the_category()[0]->cat_ID); ?>"><?php echo get_the_category()[0]->name; ?></a>
                                                        </h4>
                                                        <h3 class="sub-heading mb-0">
                                                            <a href="<?php echo the_permalink() ?>"><?php the_title() ?></a>
                                                        </h3>
                                                        <?php the_content() ?>
                                                        <!-- <p class="short-desc mb-0">
                                                            When children join a new class, they may be
                                                            nervous and unsure about what to expect.
                                                            Families want to know if they will
                                                        </p> -->
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)">
                                                                    <i class="ion-ios-person"></i>
                                                                    <?php the_author() ?>
                                                                </a>
                                                            </li>
                                                            <!-- <li>
                                                                <a href="javascript:void(0)">
                                                                    <i class="ion-eye"></i>
                                                                    <span>342 views</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)">
                                                                    <i class="ion-android-favorite-outline"></i>
                                                                    <span>0 like</span>
                                                                </a>
                                                            </li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata(); ?>
                                </div>
                            </div>
                            <div id="athletics-olympiad" class="tab-pane" role="tabpanel">
                                <div class="ademy-element-carousel latest-news_slider" data-slick-options='{
                                    "slidesToShow": 3,
                                    "slidesToScroll": 1,
                                    "infinite": false,
                                    "arrows": false,
                                    "dots": false,
                                    "spaceBetween": 30
                                    }' data-slick-responsive='[
                                    {"breakpoint": 1200, "settings": {
                                    "slidesToShow": 3
                                    }},
                                    {"breakpoint": 992, "settings": {
                                        "slidesToShow": 2
                                    }},
                                    {"breakpoint": 768, "settings": {
                                        "slidesToShow": 1
                                    }}
                                ]'>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/1.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">Blogs</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">Our Class as a Family</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        When children join a new class, they may be
                                                        nervous and unsure about what to expect.
                                                        Families want to know if they will
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>342 views</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>0 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/2.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">Athletics Olympiad</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">The 15th Athletics Olympiad</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        The athletes of Elis maintained an unbroken
                                                        string of victories until the. 14th Olympiad
                                                        at which time the second race
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>0 like</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>2 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/3.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">Athletics Olympiad</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">3 Most Difficult Subjects</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        Although the learning process has been a hot
                                                        topic of various sciences, including
                                                        neuroscience, psychology, pedagogy and
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>308 views</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>1 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/4.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">School life</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">Study Skill Enhancement</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        From coaching and learning assessments to
                                                        videos and workshops, UBC offers a range of
                                                        services and supports to help
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>300 views</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>0 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="blogs" class="tab-pane" role="tabpanel">
                                <div class="ademy-element-carousel latest-news_slider" data-slick-options='{
                                    "slidesToShow": 3,
                                    "slidesToScroll": 1,
                                    "infinite": false,
                                    "arrows": false,
                                    "dots": false,
                                    "spaceBetween": 30
                                    }' data-slick-responsive='[
                                    {"breakpoint": 1200, "settings": {
                                    "slidesToShow": 3
                                    }},
                                    {"breakpoint": 992, "settings": {
                                        "slidesToShow": 2
                                    }},
                                    {"breakpoint": 768, "settings": {
                                        "slidesToShow": 1
                                    }}
                                ]'>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/5.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">School life</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">Learning Style Intro</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        What kind of learner are you? How do the
                                                        children in your group prefer to learn? How do
                                                        you incorporate different
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>300 views</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>0 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/6.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">School life</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">Overcoming Obstacles</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        Everyone experiences difficulties with
                                                        studying at one time or another, and
                                                        overcoming these challenges is all part of
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>269 views</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>0 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/7.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">Languages</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">Understand Your Students</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        There are many ingredients that go into making
                                                        a thriving learning environment. And whether
                                                        it's your first year in
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>249 views</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>0 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/8.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">School Life</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">Get Over Exam Obsession</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        In a world of social media, unofficial mark
                                                        schemes and seemingly endless opportunities to
                                                        talk about your exams it can
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>249 views</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>0 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="languages" class="tab-pane" role="tabpanel">
                                <div class="ademy-element-carousel latest-news_slider" data-slick-options='{
                                    "slidesToShow": 3,
                                    "slidesToScroll": 1,
                                    "infinite": false,
                                    "arrows": false,
                                    "dots": false,
                                    "spaceBetween": 30
                                    }' data-slick-responsive='[
                                    {"breakpoint": 1200, "settings": {
                                    "slidesToShow": 3
                                    }},
                                    {"breakpoint": 992, "settings": {
                                        "slidesToShow": 2
                                    }},
                                    {"breakpoint": 768, "settings": {
                                        "slidesToShow": 1
                                    }}
                                ]'>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/9.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">Languages</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">Exam Preparation Tips</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        Exams often form a big part of your academic
                                                        assessment. As well as studying your course
                                                        materials, there are many ways
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>235 views</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>0 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/10.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">Athletics Olympiad</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">New Learning Equipment</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        Materials and equipment that project
                                                        heterogeneous racial, sexual, and age
                                                        attributes are selected and used.
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>235 views</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>0 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/11.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">Athletics Olympiad</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">Get Help From Teachers</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        Asking for help can sometimes be a daunting
                                                        task. Half of students aren't in the habit of
                                                        asking questions to their
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>235 views</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>0 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/12.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">Blogs</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">Becoming No. 1 in Class</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        Do I think students should be obsessed about
                                                        grades? No. Do I think good grades are the key
                                                        to long-term success? No.
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>235 views</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>0 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="school-life" class="tab-pane" role="tabpanel">
                                <div class="ademy-element-carousel latest-news_slider" data-slick-options='{
                                    "slidesToShow": 3,
                                    "slidesToScroll": 1,
                                    "infinite": false,
                                    "arrows": false,
                                    "dots": false,
                                    "spaceBetween": 30
                                    }' data-slick-responsive='[
                                    {"breakpoint": 1200, "settings": {
                                    "slidesToShow": 3
                                    }},
                                    {"breakpoint": 992, "settings": {
                                        "slidesToShow": 2
                                    }},
                                    {"breakpoint": 768, "settings": {
                                        "slidesToShow": 1
                                    }}
                                ]'>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/6.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">School life</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">Overcoming Obstacles</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        Everyone experiences difficulties with
                                                        studying at one time or another, and
                                                        overcoming these challenges is all part of
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>269 views</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>0 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/7.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">Languages</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">Understand Your Students</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        There are many ingredients that go into making
                                                        a thriving learning environment. And whether
                                                        it's your first year in
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>249 views</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>0 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/8.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">School Life</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">Get Over Exam Obsession</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        In a world of social media, unofficial mark
                                                        schemes and seemingly endless opportunities to
                                                        talk about your exams it can
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>249 views</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>0 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-item img-zoom_effect">
                                            <div class="single-img">
                                                <a href="single-post.html">
                                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/9.jpg" alt="Latest News Image" />
                                                </a>
                                                <div class="inner-btn">
                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                            <div class="single-item_content">
                                                <div class="inner-content">
                                                    <h4 class="heading mb-0">
                                                        <a href="news-list.html">Languages</a>
                                                    </h4>
                                                    <h3 class="sub-heading mb-0">
                                                        <a href="single-post.html">Exam Preparation Tips</a>
                                                    </h3>
                                                    <p class="short-desc mb-0">
                                                        Exams often form a big part of your academic
                                                        assessment. As well as studying your course
                                                        materials, there are many ways
                                                    </p>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-ios-person"></i>
                                                                Ademy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-eye"></i>
                                                                <span>235 views</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ion-android-favorite-outline"></i>
                                                                <span>0 like</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap">
                                <a class="ademy-btn fullwidth-btn denim-color_btn with-border_radius" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Go to blog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Latest News Area End Here -->

<!-- Begin Event Area -->
<div class="event-area bg-smoke_color">
    <div class="container">
        <div class="section-title pb-4">
            <h6 class="heading text-capitalize mb-0">Explore our events</h6>
            <h2 class="sub-heading text-capitalize mb-0">
                Upcoming <span>Events</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ademy-element-carousel event-slider" data-slick-options='{
                    "slidesToShow": 2,
                    "slidesToScroll": 1,
                    "infinite": false,
                    "arrows": false,
                    "dots": false,
                    "spaceBetween": 30
                    }' data-slick-responsive='[
                    {"breakpoint": 992, "settings": {
                    "slidesToShow": 2
                    }},
                    {"breakpoint": 768, "settings": {
                    "slidesToShow": 1
                    }}
                ]'>
                    <div class="slide-item">
                        <div class="single-item">
                            <div class="single-img">
                                <a href="single-post.html">
                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/event/1.jpg" alt="Event Image" />
                                </a>
                                <div class="inner-content">
                                    <div class="inner-content_wrap position-relative">
                                        <div class="sticker-2">
                                            <span class="day">26</span>
                                            <span class="month text-uppercase">Feb</span>
                                        </div>
                                        <h3 class="heading mb-0">
                                            <a href="single-event.html">Youth Sports Conference</a>
                                        </h3>
                                        <div class="event-zone">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="ion-ios-location"></i>
                                                        30 Times Square
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="ion-android-time"></i>
                                                        6:00
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="short-desc mb-0">
                                            Young sports teams from all over the world have come
                                            together in this conference to meet and celebrate.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="single-item">
                            <div class="single-img">
                                <a href="single-post.html">
                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/event/2.jpg" alt="Event Image" />
                                </a>
                                <div class="inner-content">
                                    <div class="inner-content_wrap position-relative">
                                        <div class="sticker-2">
                                            <span class="day">26</span>
                                            <span class="month text-uppercase">Feb</span>
                                        </div>
                                        <h3 class="heading mb-0">
                                            <a href="single-event.html">Youth Sports Conference</a>
                                        </h3>
                                        <div class="event-zone">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="ion-ios-location"></i>
                                                        30 Times Square
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="ion-android-time"></i>
                                                        6:00
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="short-desc mb-0">
                                            Young sports teams from all over the world have come
                                            together in this conference to meet and celebrate.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Event Area End Here -->

<!-- Begin Testimonials Area -->
<div class="testimonials-area">
    <div class="container">
        <div class="section-title pb-4">
            <h6 class="heading text-uppercase mb-0">Satisfied parents</h6>
            <h2 class="sub-heading text-capitalize mb-0">
                Parents' <span>Testimonials</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ademy-element-carousel testimonial-slider" data-slick-options='{
                    "slidesToShow": 3,
                    "slidesToScroll": 1,
                    "infinite": false,
                    "arrows": false,
                    "dots": false,
                    "spaceBetween": 30
                    }' data-slick-responsive='[
                    {"breakpoint": 1200, "settings": {
                    "slidesToShow": 3
                    }},
                    {"breakpoint": 992, "settings": {
                    "slidesToShow": 2
                    }},
                    {"breakpoint": 768, "settings": {
                    "slidesToShow": 1
                    }}
                ]'>
                    <div class="slide-item">
                        <div class="single-item">
                            <div class="single-img">
                                <a href="javascript:void(0)">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/1.jpg" alt="Testimonial Image" />
                                </a>
                            </div>
                            <div class="single-item_content">
                                <p class="short-desc mb-0">
                                    I find it satisfactory with the results of our kids
                                    since they entered Ademy school. Good quality.
                                </p>
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star-outline"></i></li>
                                    </ul>
                                </div>
                                <div class="client-info">
                                    <h6 class="client-name mb-0">
                                        <a href="javascript:void(0)">John Smith</a>
                                    </h6>
                                    <span class="occupation">/CEO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="single-item">
                            <div class="single-img">
                                <a href="javascript:void(0)">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/2.jpg" alt="Testimonial Image" />
                                </a>
                            </div>
                            <div class="single-item_content">
                                <p class="short-desc mb-0">
                                    I find it satisfactory with the results of our kids
                                    since they entered Ademy school. Good quality.
                                </p>
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star-outline"></i></li>
                                    </ul>
                                </div>
                                <div class="client-info">
                                    <h6 class="client-name mb-0">
                                        <a href="javascript:void(0)">John Smith</a>
                                    </h6>
                                    <span class="occupation">/CEO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="single-item">
                            <div class="single-img">
                                <a href="javascript:void(0)">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/3.jpg" alt="Testimonial Image" />
                                </a>
                            </div>
                            <div class="single-item_content">
                                <p class="short-desc mb-0">
                                    I find it satisfactory with the results of our kids
                                    since they entered Ademy school. Good quality.
                                </p>
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star-outline"></i></li>
                                    </ul>
                                </div>
                                <div class="client-info">
                                    <h6 class="client-name mb-0">
                                        <a href="javascript:void(0)">John Smith</a>
                                    </h6>
                                    <span class="occupation">/CEO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Area End Here -->

<?php get_footer(); ?>