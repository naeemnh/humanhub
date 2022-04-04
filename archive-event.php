<?php

/**
 * Template Name: Events Archive Pages
 */
global $wp_query;
get_header();
if (have_posts()) :
  get_template_part('template-parts/part', 'breadcrumb'); ?>
  <!-- Begin Main Content Area -->
  <main class="main-content">

    <!-- Begin Event Form Area -->
    <div class="event-form_area bg-charcoal_color">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="event-form_wrap">
              <form class="event-form" action="" method="GET">
                <input name="date" id="datetimepicker" class="input-field" type="text" placeholder="Event date">
                <input name="location" class="input-field" type="text" placeholder="Location">
                <input name="title" class="input-field" type="text" placeholder="Search">
                <input type="submit" class="ademy-btn with-border_radius denim-color_btn specific-btn_width" value="Find Event">
                <!-- <a class="ademy-btn with-border_radius denim-color_btn specific-btn_width" href="javascript:void(0)">Find event</a> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Event Form Area End Here -->

    <!-- Begin Event Area Four -->
    <div class="event-area event-area-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 order-2">
            <!-- Events Sidebar Start -->
            <div class="sidebar-area event-sidebar_area">
              <div class="widgets-area event-widgets_area">
                <div class="inner-area">
                  <h2 class="heading mb-0"><span>/</span> Popular Events</h2>
                  <div class="widgets-item">
                    <ul class="list-item_wrap">
                      <li>
                        <ul class="list-item event-list_item">
                          <li class="list-item_img">
                            <img src="assets/images/sidebar/small-size/event/1.jpg" alt="Event Image">
                          </li>
                          <li class="list-item_content">
                            <a class="entry-title" href="single-event.html">Winter Sports Camp</a>
                            <span class="entry-view">
                              <i class="ion-eye"></i> 662 views
                            </span>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <ul class="list-item event-list_item">
                          <li class="list-item_img">
                            <img src="assets/images/sidebar/small-size/event/2.jpg" alt="Event Image">
                          </li>
                          <li class="list-item_content">
                            <a class="entry-title" href="single-event.html">High School Exchange 2020</a>
                            <span class="entry-view">
                              <i class="ion-eye"></i> 406 views
                            </span>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <ul class="list-item event-list_item">
                          <li class="list-item_img">
                            <img src="assets/images/sidebar/small-size/event/3.jpg" alt="Event Image">
                          </li>
                          <li class="list-item_content">
                            <a class="entry-title" href="single-event.html">15th Worldwide Athletic Olympiad</a>
                            <span class="entry-view">
                              <i class="ion-eye"></i> 487 views
                            </span>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <ul class="list-item event-list_item">
                          <li class="list-item_img">
                            <img src="assets/images/sidebar/small-size/event/4.jpg" alt="Event Image">
                          </li>
                          <li class="list-item_content">
                            <a class="entry-title" href="single-event.html">15th Commencement Ceremony</a>
                            <span class="entry-view">
                              <i class="ion-eye"></i> 406 views
                            </span>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="widgets-area categories-area">
                <div class="inner-area">
                  <h2 class="heading mb-0"><span>/</span> Event Categories</h2>
                  <div class="widgets-item">
                    <ul class="list-item_wrap">
                      <li>
                        <ul class="list-item">
                          <li>
                            <a href="javascript:void(0)">Athletics Olympiad
                              <span>5</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <ul class="list-item">
                          <li>
                            <a href="javascript:void(0)">Languages
                              <span>3</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <ul class="list-item">
                          <li>
                            <a href="javascript:void(0)">School Life
                              <span>5</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <ul class="list-item">
                          <li>
                            <a href="javascript:void(0)">Sports
                              <span>2</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Events Sidebar End -->
          </div>
          <div class="col-lg-8 order-1">
            <div class="ademy-element-carousel event-list_slider" data-slick-options='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "infinite": false,
                "arrows": false,
                "dots": false,
                "spaceBetween": 30,
                "rows": 6
                }' data-slick-responsive='[
                {"breakpoint": 1200, "settings": {
                "slidesToShow": 1
                }},
                {"breakpoint": 992, "settings": {
                "slidesToShow": 1
                }},
                {"breakpoint": 576, "settings": {
                "slidesToShow": 1
                }}
              ]'>
              <?php
              $args = array(
                'post_type' => 'event',
                'post_status' => 'publish',
                'posts_per_page' => 10,
              );
              $loop = new WP_Query($args);
              while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="slide-list_item">
                  <div class="single-item border-bottom-0 p-0">
                    <div class="single-img position-relative">
                      <a href="<?php the_permalink() ?>">
                        <?php if (the_post_thumbnail_url()) : ?>
                          <img class="img-full" src="<?php the_post_tumbnail_url() ?>" alt="Event Image">
                        <?php else : ?>
                          <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/event/1.jpg" alt="Event Image">
                        <?php endif; ?>
                      </a>
                      <div class="sticker-2 middle-left_side sm-size">
                        <span class="day">26</span>
                        <span class="month text-uppercase">Feb</span>
                      </div>
                    </div>
                    <div class="single-item_content">
                      <div class="inner-content">
                        <h3 class="heading mb-0">
                          <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        </h3>
                        <div class="entry-meta">
                          <ul class="justify-content-start">
                            <li>
                              <a href="javascript:void(0)">
                                <i class="ion-ios-location"></i>
                                30 Times Square
                              </a>
                            </li>
                            <li>
                              <a href="javascript:void(0)">
                                <i class="ion-android-time"></i>
                                06:00
                              </a>
                            </li>
                          </ul>
                        </div>
                        <?php the_excerpt() ?>
                        <!-- <p class="short-desc mb-0">
                        Young sports teams from all over the world have come together in this conference to meet and celebrate.
                      </p> -->
                      </div>
                    </div>
                  </div>
                </div>

              <?php endwhile; ?>
            </div>
          </div>
        </div>
        <!-- Pagination -->
        <div class="row">
          <div class="col-lg-12">
            <div class="paginatoin-area position-center pb-0">
              <?php humanhub_pagination() ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Event Area Four End Here -->

    <!-- Begin Ticket Area -->
    <div class="ticket-area bg-denim_color">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ticket-item">
              <div class="heading-wrap">
                <img src="assets/images/ticket/arrow.png" alt="Ticket Arrow">
                <h2 class="heading mb-0">Buy early bird ticket now!</h2>
              </div>
              <div class="group-btn_wrap d-flex">
                <a class="ademy-btn btn-transparent white-border with-border_radius hover-white_btn me-2" href="javascript:void(0)">Learn more
                  <i class="ion-android-arrow-forward"></i>
                </a>
                <a class="ademy-btn btn-transparent hover-white_border with-border_radius" href="javascript:void(0)">Register Now
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
<?php endif;
get_footer(); ?>