<?php

/**
 * Template Name: Human Hub
 * Template Post Type: page
 */
get_header();
if (have_posts()) :
    while (have_posts()) : the_post();
        $basic = get_field('basic');
        $monthly_premium = get_field('monthly_premium');
        $monthly_premium_plus = get_field('monthly_premium_plus');
        $yearly_premium = get_field('yearly_premium');
        $yearly_premium_plus = get_field('yearly_premium_plus');
        // get_template_part('template-parts/part', 'breadcrumb'); 
?>

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
                <div class="slide-item bg-2 animation-style-01" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/slider/humanhub-slide-1.png)">
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
                <div class="slide-item bg-2 animation-style-01" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/slider/humanhub-slide-2.png)">
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
                <div class="slide-item bg-2 animation-style-01" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/slider/humanhub-slide-3.png)">
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
                                    <img class="img-full mx-auto w-75" src="<?php echo get_template_directory_uri() ?>/assets/images/introduction/elements_human-hub-min.png" alt="Introduction Image" />
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
                        <!-- <div class="col-lg-6 col-sm-12">
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
                        </div> -->
                        <div class="col-md-6 col-xs-12">
                            <article class="service flex-column">
                                <div class="service-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/services/elements_human-hub-1-min.png" alt="img-full">
                                </div>
                                <div class="service-content">
                                    <h3 class="title mb-0 white-color">Knowledge</h3>
                                    <p class="short-desc mb-0">
                                        Facilitating Knowledge and Experience Sharing among Human Capital professionals through speaking via podcasts & webinars, writing articles, and posting, brainstroming & collaborating.
                                    </p>
                                </div>
                            </article>
                            <article class="service flex-md-row flex-sm-column flex-column">
                                <div class="service-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/services/elements_human-hub-4-min.png" alt="img-full">
                                </div>
                                <div class="service-content">
                                    <h3 class="title mb-0 white-color">Enlightment</h3>
                                    <p class="short-desc mb-0">
                                        Inspiring the next generation of Human Capital leaders through shadowing, mentorship, coaching, and internships.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <article class="service flex-md-row flex-sm-column flex-column">
                                <div class="service-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/services/elements_human-hub-1-min.png" alt="img-full">
                                </div>
                                <div class="service-content">
                                    <h3 class="title mb-0 white-color">Networking</h3>
                                    <p class="short-desc mb-0">
                                        Providing opportunities for Human Capital professionals to strengthen their network via physical and virtual events, access to direct messaging and joining or creating groups and communities.
                                    </p>
                                </div>
                            </article>
                            <article class="service flex-column">
                                <div class="service-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/services/elements_human-hub-4-min.png" alt="img-full">
                                </div>
                                <div class="service-content">
                                    <h3 class="title mb-0 white-color">Entrepreneurship</h3>
                                    <p class="short-desc mb-0">
                                        To influence human capital practices by supporting entrepreneurs and freelancers.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Area End Here -->

            <!-- Begin Pricing Plans Area -->
            <div class="pricing-plans_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title pb-5">
                                <h2 class="sub-heading text-capitalize mb-0"><span>Our Price</span> & Information</h2>
                                <p class="short-desc mb-0">Check out the prices for each study package at our Ademy Secondary School to find what is suitable for your children. Adjustments can be negotiated.</p>
                            </div>
                            <div class="tab-section_area">
                                <div class="pricing-plans_tab">
                                    <ul class="nav pricing-plans_menu justify-content-center">
                                        <li><a class="active" data-bs-toggle="tab" href="#monthly"><i class="ion-android-arrow-back"></i> Monthly</a></li>
                                        <li><a data-bs-toggle="tab" href="#yearly"><i class="ion-android-arrow-forward"></i> Yearly</a></li>
                                    </ul>
                                </div>
                            </div>
                            <span class="offer-btn denim-color_btn with-border_radius">SAVE 10%</span>
                            <h6 class="offer-info">When you pay upfront for the year</h6>
                            <div class="tab-content">
                                <div id="monthly" class="tab-pane active show" role="tabpanel">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-md-4">
                                            <div class="pricing-plans_item bg-snow_color">
                                                <h5 class="plan-method text-uppercase mb-0">Basic plan</h5>
                                                <?php if ($basic['price_type'] == 'free') : ?>
                                                    <span class="price"><strong>FREE</strong></span>
                                                <?php elseif ($basic['price_type'] == 'priced') : ?>
                                                    <span class="price">$ <strong><?php echo $basic['price'] ?></strong>/month</span>
                                                <?php else : ?>
                                                    <span class="price"><strong>STAY TUNED</strong></span>
                                                <?php endif; ?>
                                                <ul class="feature-list">
                                                    <?php $features = explode('; ', $basic['features']);
                                                    foreach ($features as $feature) : ?>
                                                        <li><?php echo $feature ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <div class="button-wrap position-center">
                                                    <a class="ademy-btn btn-transparent whisper-border with-border_radius" href="javascript:void(0)">Get started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="pricing-plans_item large-item bg-white_color">
                                                <h5 class="plan-method text-uppercase mb-0">Premium plan</h5>
                                                <?php if ($monthly_premium['price_type'] == 'free') : ?>
                                                    <span class="price"><strong>FREE</strong></span>
                                                <?php elseif ($monthly_premium['price_type'] == 'priced') : ?>
                                                    <span class="price">$ <strong><?php echo $monthly_premium['price'] ?></strong>/month</span>
                                                <?php else : ?>
                                                    <span class="price"><strong>STAY TUNED</strong></span>
                                                <?php endif; ?>
                                                <ul class="feature-list">
                                                    <?php $features = explode('; ', $monthly_premium['features']);
                                                    foreach ($features as $feature) : ?>
                                                        <li><?php echo $feature ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <div class="button-wrap position-center">
                                                    <a class="ademy-btn btn-transparent whisper-border with-border_radius" href="javascript:void(0)">Get started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="pricing-plans_item bg-snow_color">
                                                <h5 class="plan-method text-uppercase mb-0">Premium Plus plan</h5>
                                                <?php if ($monthly_premium_plus['price_type'] == 'free') : ?>
                                                    <span class="price"><strong>FREE</strong></span>
                                                <?php elseif ($monthly_premium_plus['price_type'] == 'priced') : ?>
                                                    <span class="price">$ <strong><?php echo $monthly_premium_plus['price'] ?></strong>/month</span>
                                                <?php else : ?>
                                                    <span class="price"><strong>STAY TUNED</strong></span>
                                                <?php endif; ?>
                                                <ul class="feature-list">
                                                    <?php $features = explode('; ', $monthly_premium_plus['features']);
                                                    foreach ($features as $feature) : ?>
                                                        <li><?php echo $feature ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <div class="button-wrap position-center">
                                                    <a class="ademy-btn btn-transparent whisper-border with-border_radius" href="javascript:void(0)">Get started</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="yearly" class="tab-pane" role="tabpanel">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-md-4">
                                            <div class="pricing-plans_item bg-snow_color">
                                                <h5 class="plan-method text-uppercase mb-0">Basic plan</h5>
                                                <?php if ($basic['price_type'] == 'free') : ?>
                                                    <span class="price"><strong>FREE</strong></span>
                                                <?php elseif ($basic['price_type'] == 'priced') : ?>
                                                    <span class="price">$ <strong><?php echo $basic['price'] ?></strong>/month</span>
                                                <?php else : ?>
                                                    <span class="price"><strong>STAY TUNED</strong></span>
                                                <?php endif; ?>
                                                <ul class="feature-list">
                                                    <?php $features = explode('; ', $basic['features']);
                                                    foreach ($features as $feature) : ?>
                                                        <li><?php echo $feature ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <div class="button-wrap position-center">
                                                    <a class="ademy-btn btn-transparent whisper-border with-border_radius" href="javascript:void(0)">Get started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="pricing-plans_item large-item bg-white_color">
                                                <h5 class="plan-method text-uppercase mb-0">Premium plan</h5>
                                                <?php if ($yearly_premium['price_type'] == 'free') : ?>
                                                    <span class="price"><strong>FREE</strong></span>
                                                <?php elseif ($yearly_premium['price_type'] == 'priced') : ?>
                                                    <span class="price">$ <strong><?php echo $yearly_premium['price'] ?></strong>/month</span>
                                                <?php else : ?>
                                                    <span class="price"><strong>STAY TUNED</strong></span>
                                                <?php endif; ?>
                                                <ul class="feature-list">
                                                    <?php $features = explode('; ', $yearly_premium['features']);
                                                    foreach ($features as $feature) : ?>
                                                        <li><?php echo $feature ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <div class="button-wrap position-center">
                                                    <a class="ademy-btn btn-transparent whisper-border with-border_radius" href="javascript:void(0)">Get started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="pricing-plans_item bg-snow_color">
                                                <h5 class="plan-method text-uppercase mb-0">Premium Plus plan</h5>
                                                <?php if ($yearly_premium_plus['price_type'] == 'free') : ?>
                                                    <span class="price"><strong>FREE</strong></span>
                                                <?php elseif ($yearly_premium_plus['price_type'] == 'priced') : ?>
                                                    <span class="price">$ <strong><?php echo $yearly_premium_plus['price'] ?></strong>/month</span>
                                                <?php else : ?>
                                                    <span class="price"><strong>STAY TUNED</strong></span>
                                                <?php endif; ?>
                                                <ul class="feature-list">
                                                    <?php $features = explode('; ', $yearly_premium_plus['features']);
                                                    foreach ($features as $feature) : ?>
                                                        <li><?php echo $feature ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <div class="button-wrap position-center">
                                                    <a class="ademy-btn btn-transparent whisper-border with-border_radius" href="javascript:void(0)">Get started</a>
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
            <!-- Pricing Plans Area End Here -->

            <!-- Begin Event Area -->
            <?php
            $today = date('Ymd');
            // query events
            $events = get_posts([
                'posts_per_page' => 2,
                'post_type' => 'event',
                'meta_query' => [
                    [
                        'key'       => 'start_date',
                        'compare'   => '>=',
                        'value'     => $today,
                        'type'      => 'DATETIME'
                    ]
                ],
                'order'     => 'ASC',
                'orderby'   => 'meta_value',
                'meta_key'  => 'start_date',
                'meta_type' => 'DATE'
            ]);
            if ($events) : ?>
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
                                    <?php foreach ($events as $event) : ?>
                                        <div class="slide-item">
                                            <div class="single-item">
                                                <div class="single-img">
                                                    <a href="<?php the_permalink($event->ID) ?>">
                                                        <?php if (get_the_post_thumbnail($event->ID)) : ?>
                                                            <img class="img-full" src="<?php echo get_the_post_thumbnail_url($event->ID) ?>" alt="Event Image" />
                                                        <?php else : ?>
                                                            <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/event/1.jpg" alt="Event Image" />
                                                        <?php endif; ?>
                                                    </a>
                                                    <div class="inner-content">
                                                        <div class="inner-content_wrap position-relative">
                                                            <div class="sticker-2">
                                                                <?php
                                                                $start_date = strtotime(get_field('start_date', $event->ID));
                                                                ?>
                                                                <span class="day"><?php echo date_i18n("d", $start_date); ?></span>
                                                                <span class="month text-uppercase"><?php echo substr(date_i18n("F", $start_date), 0, 3); ?></span>
                                                            </div>
                                                            <h3 class="heading mb-0">
                                                                <a href="<?php the_permalink($event->ID) ?>"><?php echo $event->post_title ?></a>
                                                            </h3>
                                                            <div class="event-zone">
                                                                <ul>
                                                                    <?php if (get_field('location', $event->ID)) : ?>
                                                                        <li>
                                                                            <span>
                                                                                <i class="ion-ios-location"></i>
                                                                                <?php the_field('location', $event->ID); ?>
                                                                            </span>
                                                                        </li>
                                                                    <?php endif;
                                                                    if (get_field('time', $event->ID)) : ?>
                                                                        <li>
                                                                            <span>
                                                                                <i class="ion-android-time"></i>
                                                                                <?php the_field('time', $event->ID) ?>
                                                                            </span>
                                                                        </li>
                                                                    <?php endif; ?>
                                                                </ul>
                                                            </div>
                                                            <p class="short-desc mb-0">
                                                                <?php echo get_the_excerpt($event->ID) ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- Event Area End Here -->

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
endif;
get_footer();
