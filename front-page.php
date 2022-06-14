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
        <?php for ($i = 0; $i < 3; $i++) : ?>
            <div class="slide-item bg-1 animation-style-01" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/slider/home-slide-<?php echo $i + 1 ?>.jpg)">
                <div class="slide-content">
                    <!-- <span class="intro">Human Hub</span> -->
                    <h1 class="heading intro pb-1 mb-0">
                        <?php if ($language == 'en') : ?>
                            Mehan
                        <?php else : ?>
                            مهن
                        <?php endif; ?>
                    </h1>
                    <h1 class="heading cd-headline letters type mb-0">
                        <?php if ($language == 'en') : ?>
                            Success through people
                        <?php else : ?>
                            النجاح من خلال الناس
                        <?php endif; ?>
                    </h1>
                    <h1 class="sub-heading cd-headline letters type white-color pb-5 mb-0">
                        <?php if ($language == 'en') : ?>
                            We stand for innovation and continuous transformation
                        <?php else : ?>
                            ندعم الابتكار والتحول المستمر
                        <?php endif; ?>
                    </h1>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
<!-- Slider Area End Here -->

<!-- Begin Introduction Area - Our Story-->
<div id="welcome" class="introduction-area">
    <div class="container">
        <div class="section-title pb-5">
            <!-- <h6 class="heading mb-0">Our Story</h6> -->
            <h2 class="sub-heading mb-0">
                <?php if ($language == 'en') : ?>
                    Our <span>Story</span>
                <?php else : ?>
                    <span>قصتنا</span>
                <?php endif; ?>
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
                            <!-- <h3 class="heading mb-0">Our Story</h3> -->
                            <?php if ($language == 'en') : ?>
                                <p class="short-desc">
                                    Mehan was founded as a boutique talent acquisition agency in 2018, catering to private, semi government, and government sectors in the UAE.
                                </p>
                                <p class="short-desc">
                                    Venturing into innovative human capital business ideas in a continuously changing world, was only a matter of time.
                                </p>
                                <p class="short-desc">
                                    As we value and encourage continuous learning and transformation, we are in the business of influencing how human capital is practiced for the betterment of the human experience in the workplace.
                                </p>
                            <?php else : ?>
                                <p class="short-desc">
                                    تأسست شركة مهن كوكالة متخصصة في استقطاب المواهب في عام 2018 لتقدم خدماتها للقطاعات الخاصة وشبه الحكومية والحكومية في الإمارات العربية المتحدة.
                                </p>
                                <p class="short-desc">
                                    وكانت المغامرة في ممارسات رأس المال البشري المبتكرة في عالم مستمر التغير مسألة وقت لأننا نقدر ونشجع التعلم والتحول المستمر، فتخصصنا في مجال التأثير على ممارسات رأس المال البشري لتحسين تجربة الإنسان في مكان العمل.
                                </p>
                            <?php endif; ?>
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
            <!-- <h6 class="heading mb-0">Human Hub</h6> -->
            <h2 class="sub-heading mb-0">
                <?php if ($language == 'en') : ?>
                    <span>Human</span> Hub
                <?php else : ?>
                    منصة <span>الإنسان</span>
                <?php endif; ?>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="introduction-img_area">
                    <div class="inner-img">
                        <img class="img-full mx-auto" style="width: 80%" src="<?php echo get_template_directory_uri() ?>/assets/images/introduction/group-1501.png" alt="Introduction Image" />
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
                            <!-- <h3 class="heading mb-0">Human Hub</h3> -->
                            <?php if ($language == 'en') : ?>
                                <p class="short-desc">
                                    A Continuous Learning Human Capital Hub that allows human capital professionals and students to transform, grow, share knowledge, innovate and advance in their careers by collaborating with other Human Capital professionals through virtual, mixed reality and physical platforms.
                                </p>
                                <div class="intro-btn_wrap">
                                    <a class="ademy-btn denim-color_btn fullwidth-btn" href="<?php echo get_home_url() ?>/humanhub">
                                        Learn more
                                        <i class="ion-android-arrow-forward"></i>
                                    </a>
                                </div>
                            <?php else : ?>
                                <p class="short-desc">
                                    هي منصة رأس المال البشري للتعلم المستمر التي يسمح لمحترفي رأس المال البشري والطلاب بالتحول، والنمو، وتبادل المعرفة، والابتكار والتقدم في حياتهم المهنية من خلال التعاون مع غيرهم من المتخصصين في رأس المال البشري عن طريق منصات افتراضية وواقعية.
                                </p>
                                <div class="intro-btn_wrap">
                                    <a class="ademy-btn denim-color_btn fullwidth-btn" href="<?php echo get_home_url() ?>/humanhub">
                                        تعرف على المزيد
                                        <i class="ion-android-arrow-forward"></i>
                                    </a>
                                </div>
                            <?php endif; ?>
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
                Our latest <span>blogs</span>
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
                                        <a data-bs-toggle="tab" href="#hr-guides">HR Guides</a>
                                    </li>
                                    <li><a data-bs-toggle="tab" href="#development">Development</a></li>
                                    <li>
                                        <a data-bs-toggle="tab" href="#career">Career</a>
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
                                    $args = [
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 10,
                                        'lang' => ['en', 'ar'],
                                    ];
                                    $loop = new WP_Query($args);
                                    while ($loop->have_posts()) : $loop->the_post();
                                    ?>
                                        <div class="slide-item">
                                            <div class="single-item img-zoom_effect">
                                                <div class="single-img">
                                                    <a href="<?php the_permalink() ?>">
                                                        <?php if (get_the_post_thumbnail_url()) : ?>
                                                            <img class="img-full" src="<?php the_post_thumbnail_url('medium') ?>" alt="Latest News Image" />
                                                        <?php else : ?>
                                                            <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/1.jpg" alt="Latest News Image" />
                                                        <?php endif; ?>
                                                    </a>
                                                    <div class="inner-btn">
                                                        <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="<?php the_permalink() ?>">Read more</a>
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
                                                        <p class="short-desc mb-0">
                                                            <?php echo get_the_excerpt() ?>
                                                        </p>
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
                            <div id="hr-guides" class="tab-pane" role="tabpanel">
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
                                    $args = [
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 10,
                                        'cat' => get_category_by_slug('hr-guides')->term_id,
                                        'lang' => ['en', 'ar'],
                                    ];
                                    $loop = new WP_Query($args);
                                    while ($loop->have_posts()) : $loop->the_post();
                                    ?>
                                        <div class="slide-item">
                                            <div class="single-item img-zoom_effect">
                                                <div class="single-img">
                                                    <a href="<?php the_permalink() ?>">
                                                        <?php if (get_the_post_thumbnail_url()) : ?>
                                                            <img class="img-full" src="<?php the_post_thumbnail_url() ?>" alt="Latest News Image" />
                                                        <?php else : ?>
                                                            <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/1.jpg" alt="Latest News Image" />
                                                        <?php endif; ?>
                                                    </a>
                                                    <div class="inner-btn">
                                                        <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="<?php the_permalink() ?>">Read more</a>
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
                                                        <p class="short-desc mb-0">
                                                            <?php echo get_the_excerpt() ?>
                                                        </p>
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
                                    wp_reset_postdata() ?>
                                </div>
                            </div>
                            <div id="development" class="tab-pane" role="tabpanel">
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
                                    $args = [
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 10,
                                        'cat' => get_category_by_slug('development')->term_id,
                                        'lang' => ['en', 'ar'],
                                    ];
                                    $loop = new WP_Query($args);
                                    while ($loop->have_posts()) : $loop->the_post();
                                    ?>
                                        <div class="slide-item">
                                            <div class="single-item img-zoom_effect">
                                                <div class="single-img">
                                                    <a href="<?php the_permalink() ?>">
                                                        <?php if (get_the_post_thumbnail_url()) : ?>
                                                            <img class="img-full" src="<?php the_post_thumbnail_url() ?>" alt="Latest News Image" />
                                                        <?php else : ?>
                                                            <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/1.jpg" alt="Latest News Image" />
                                                        <?php endif; ?>
                                                    </a>
                                                    <div class="inner-btn">
                                                        <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="<?php the_permalink() ?>">Read more</a>
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
                                                        <p class="short-desc mb-0">
                                                            <?php echo get_the_excerpt() ?>
                                                        </p>
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
                                    wp_reset_postdata() ?>
                                </div>
                            </div>
                            <div id="career" class="tab-pane" role="tabpanel">
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
                                    $args = [
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 10,
                                        'cat' => get_category_by_slug('career')->term_id,
                                        'lang' => ['en', 'ar'],
                                    ];
                                    $loop = new WP_Query($args);
                                    while ($loop->have_posts()) : $loop->the_post();
                                    ?>
                                        <div class="slide-item">
                                            <div class="single-item img-zoom_effect">
                                                <div class="single-img">
                                                    <a href="<?php the_permalink() ?>">
                                                        <?php if (get_the_post_thumbnail_url()) : ?>
                                                            <img class="img-full" src="<?php the_post_thumbnail_url() ?>" alt="Latest News Image" />
                                                        <?php else : ?>
                                                            <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/1.jpg" alt="Latest News Image" />
                                                        <?php endif; ?>
                                                    </a>
                                                    <div class="inner-btn">
                                                        <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="<?php the_permalink() ?>">Read more</a>
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
                                                        <p class="short-desc mb-0">
                                                            <?php echo get_the_excerpt() ?>
                                                        </p>
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
                                    wp_reset_postdata() ?>
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

<!-- Begin Testimonials Area -->
<div class="testimonials-area">
    <div class="container">
        <div class="section-title pb-4">
            <!-- <h6 class="heading text-uppercase mb-0">Satisfied clients</h6> -->
            <h2 class="sub-heading text-capitalize mb-0">
                <?php if ($language == 'en') : ?>
                    What our <span>clients</span> say about us
                <?php else : ?>
                    ما يقوله <span>عملاؤنا</span> عنا
                <?php endif; ?>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ademy-element-carousel testimonial-slider" data-slick-options='{
                    "slidesToShow": 1,
                    "slidesToScroll": 1,
                    "infinite": true,
                    "arrows": false,
                    "dots": false,
                    "spaceBetween": 30
                    }' data-slick-responsive='[
                    {"breakpoint": 1200, "settings": {
                    "slidesToShow": 1
                    }},
                    {"breakpoint": 992, "settings": {
                    "slidesToShow": 1
                    }},
                    {"breakpoint": 768, "settings": {
                    "slidesToShow": 1
                    }}
                ]'>
                    <div class="slide-item">
                        <div class="single-item">
                            <div class="single-img">
                                <a href="javascript:void(0)">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/profile-picture.png" alt="Testimonial Image" />
                                </a>
                            </div>
                            <?php if ($language == 'en') : ?>
                                <div class="single-item_content">
                                    <p class="short-desc mb-0">
                                        Mehan has been very helpful and professional in handling the relationship between myself and my latest employer. They took me through the process step by step with ultimate clarity of the process and what is needed. The best part was the consistent and day to day feedback as this is the hardest part for any job seeker when he or she finishes all the interviews, tests and fills all the paperwork and then it's time to wait for the final decision.
                                    </p>
                                    <p class="short-desc mb-0">
                                        Personally I am so happy with the professionalism Mehan team showed and illustrated before, during and after getting my latest job and the best part is, they don't end the relationship with winning or losing the potential job, they keep the communication.
                                    </p>
                                    <div class="client-info">
                                        <h6 class="client-name mb-0">
                                            <a href="javascript:void(0)">Mr. Faisal Al Nuaimi</a>
                                        </h6>
                                        <span class="occupation">/General Manager - Qasr Al Watan</span>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="single-item_content">
                                    <p class="short-desc mb-0">
                                        لقد كانوا مهن مفيدين جدا ومهنيين في ادارة العلاقة بيني وبين صاحب العمل الأخير ، لقد أخذوني خلال العملية خطوة بخطوة مع الوضوح النهائي للعملية وما هو مطلوب ، وكان أفضل جزء من العملية هو ردود الفعل اليومية والمتسقة لأن هذا هو أصعب جزء لأي باحث عن عمل عندما ينتهي من جميع المقابلات والاختبارات ويملأ جميع الأوراق ومن ثم حان الوقت لانتظار القرار النهائي.
                                    </p>
                                    <p class="short-desc mb-0">
                                        شخصيا أنا سعيد جدا بالمهنية التي أظهرها فريق مهن قبل وأثناء وبعد الحصول على وظيفتي الأخيرة وأفضل جزء هو أنه لا تنهي العلاقة مع الفوز أو فقدان الوظيفة المحتملة وأنهم يبقون على تواصل.
                                    </p>
                                    <div class="client-info">
                                        <h6 class="client-name mb-0">
                                            <a href="javascript:void(0)">السيد فيصل النعيمي</a>
                                        </h6>
                                        <span class="occupation">/المدير العام - قصر الوطن</span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="single-item">
                            <div class="single-img">
                                <a href="javascript:void(0)">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/profile-picture.png" alt="Testimonial Image" />
                                </a>
                            </div><?php if ($language == 'en') : ?>
                                <div class="single-item_content">
                                    <p class="short-desc mb-0">
                                        Mehan is one of the helpful recruitment agency that supports us to source for qualified candidates.
                                    </p>
                                    <p class="short-desc mb-0">
                                        Your team is very helpful and professional
                                    </p>
                                    <p class="short-desc mb-0">
                                        Appreciate all your cooperation and support.
                                    </p>
                                    <div class="client-info">
                                        <h6 class="client-name mb-0">
                                            <a href="javascript:void(0)">Recruitment Team</a>
                                        </h6>
                                        <span class="occupation">/Dolphin Energy Limited</span>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="single-item_content">
                                    <p class="short-desc mb-0">
                                        مهن هي واحدة من وكالات التوظيف المفيدة التي تدعمنا للحصول على مرشحين مؤهلينز.
                                    </p>
                                    <p class="short-desc mb-0">
                                        فريقكم مفيد جدا ومحترفين
                                    </p>
                                    <p class="short-desc mb-0">
                                        نقدر كل ما تبذلونه من التعاون والدعم.
                                    </p>
                                    <div class="client-info">
                                        <h6 class="client-name mb-0">
                                            <a href="javascript:void(0)">فريق التوظيف</a>
                                        </h6>
                                        <span class="occupation">/دولفين للطاقة المحدودة</span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Area End Here -->

<?php get_footer(); ?>