<?php

global $wp_query;
$total_results = $wp_query->found_posts;

get_header();

$s = get_search_query();
$args = array(
    's' => $s
);

$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
    get_template_part('template-parts/part', 'breadcrumb', array('results' => $total_results)); ?>
    <!-- Begin Main Content Area -->
    <main class="main-content">
        <!-- Begin News List Area -->
        <div class="news-area news-list_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 order-2">
                        <?php get_sidebar('post') ?>
                    </div>
                    <div class="col-lg-8 order-1">
                        <div class="row">
                            <?php
                            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <div class="col-lg-12">
                                    <div class="news-topic">
                                        <div class="inner-topic">
                                            <?php $cats = get_the_category();
                                            if (!empty($cats)) : ?>
                                                <h2 class="heading mb-0"><a href="news-list.html">
                                                        <?php echo $cats[0]->name ?></a>
                                                </h2>
                                            <?php endif; ?>
                                            <h3 class="headline mb-0"><a href="single-post.html"><?php the_title(); ?></a></h3>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ion-ios-person"></i>
                                                            <?php the_author(); ?>
                                                        </a>
                                                    </li>
                                                    <!-- Views and Likes -->
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
                                                <a class="ademy-btn denim-color_btn with-border_radius" href="<?php the_permalink() ?>">Read more <i class="ion-android-arrow-forward"></i></a>
                                                <!-- <a class="share-post_btn" href="javascript:void(0)">
                                                    <i class="ion-android-share-alt"></i>
                                                </a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
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
