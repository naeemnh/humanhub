<?php

/**
 * Template Name: Events Archive Pages
 */
get_header();
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
              <input name="start_date" id="datetimepicker" class="input-field" type="text" placeholder="Event Starting From - Date" value="<?php echo $_GET['start_date'] ?>">
              <input name="location" class="input-field" type="text" placeholder="Location" value="<?php echo $_GET['location'] ?>">
              <input name="title" class="input-field" type="text" placeholder="Search" value="<?php echo $_GET['title'] ?>">
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
  <?php if (have_posts()) : ?>
    <div class="event-area event-area-4">
      <div class="container">
        <div class="row">
          <!-- SIDEBAR START -->
          <?php get_sidebar("events"); ?>
          <!-- SIDEBAR END -->
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
              <?php while (have_posts()) : the_post(); ?>
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
                        <?php
                        $start_date = strtotime(get_field('start_date'));
                        ?>
                        <span class="day">
                          <?php echo date_i18n("d", $start_date); ?>
                        </span>
                        <span class="month text-uppercase">
                          <?php echo date_i18n("F", $start_date); ?>
                        </span>
                      </div>
                    </div>
                    <div class="single-item_content">
                      <div class="inner-content">
                        <h3 class="heading mb-0">
                          <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        </h3>
                        <div class="entry-meta">
                          <ul class="justify-content-start">
                            <?php if (get_field('location')) : ?>
                              <li>
                                <a href="<?php the_field('location_url') ?>" target="_blank">
                                  <i class="ion-ios-location"></i>
                                  <?php the_field('location') ?>
                                </a>
                              </li>
                            <?php endif;
                            if (get_field('time')) : ?>
                              <li>
                                <a href="javascript:void(0)">
                                  <i class="ion-android-time"></i>
                                  <?php the_field('time') ?>
                                </a>
                              </li>
                            <?php endif ?>
                          </ul>
                        </div>
                        <?php the_excerpt(); ?>
                        <?php echo the_field('start_date') ?>
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
  <?php else : ?>
    <div class="event-area event-area-4">
      <div class="container">
        <div class="row">
          <!-- SIDEBAR START -->
          <?php get_sidebar("events"); ?>
          <!-- SIDEBAR END -->
          <div class="col-lg-8 order-1">

          </div>
        </div>

      </div>
    </div>
  <?php endif; ?>
  <!-- Event Area Four End Here -->

  <!-- Begin Ticket Area -->
  <div class="ticket-area bg-denim_color">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ticket-item">
            <div class="heading-wrap">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/ticket/arrow.png" alt="Ticket Arrow">
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
<?php
wp_reset_postdata();
get_footer(); ?>