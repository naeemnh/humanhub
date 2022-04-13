<?php

/**
 * Template Name: Posts Page
 * Template Post Type: page
 */

get_header();
if (have_posts()) :
  get_template_part('template-parts/part', 'breadcrumb'); ?>
  <!-- Begin Main Content Area -->
  <main class="main-content">
    <!-- Begin News List Area -->
    <div class="news-area news-list_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 order-2">
            <?php get_sidebar('post'); ?>
          </div>
          <div class="col-lg-8 order-1">
            <div class="row">
              <?php
              while (have_posts()) : the_post();
              ?>
                <div class="col-lg-12">
                  <div class="news-topic">
                    <div class="inner-topic">
                      <h2 class="heading mb-0"><a href="<?php echo get_term_link(get_the_category()[0]->term_id) ?>"><?php echo get_the_category()[0]->name; ?></a></h2>
                      <h3 class="headline mb-0"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
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
                      <p class="short-desc mb-0">
                        <?php the_excerpt() ?>
                      </p>
                      <div class="btn-wrap">
                        <a class="ademy-btn denim-color_btn with-border_radius" href="<?php echo get_the_permalink() ?>">Read more <i class="ion-android-arrow-forward"></i></a>
                        <!-- <a class="share-post_btn" href="javascript:void(0)">
                            <i class="ion-android-share-alt"></i>
                          </a> -->
                      </div>
                    </div>
                  </div>
                </div>
              <?php
              endwhile; ?>
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
    <!-- News List Area End Here -->
  </main>
  <!-- Main Content Area End Here -->
<?php
endif;
get_footer();
