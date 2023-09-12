<aside class="sidebar-area">
    <?php get_search_form(array('class' => 'search-box')); ?>
    <div class="widgets-area event-widgets_area">
        <div class="inner-area">
            <h2 class="heading mb-0"><span>/</span> Latest Activity</h2>
            <div class="widgets-item">
                <ul class="list-item_wrap">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 5,
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <li>
                            <ul class="list-item event-list_item">
                                <li class="list-item_img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="Image">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/no-image.png" alt="Image">
                                    <?php endif; ?>
                                </li>
                                <li class="list-item_content">
                                    <a class="entry-title" href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a>
                                    <!-- <span class="entry-view">
                                        <i class="ion-eye"></i> 662 views
                                    </span> -->
                                </li>
                            </ul>
                        </li>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="widgets-area categories-area">
        <div class="inner-area">
            <h2 class="heading mb-0"><span>/</span> Categories</h2>
            <div class="widgets-item">
                <ul class="list-item_wrap">
                    <?php $cats = get_categories();
                    foreach ($cats as $cat) : ?>
                        <li>
                            <ul class="list-item">
                                <li>
                                    <a href="<?php echo get_category_link($cat) ?>"><?php echo $cat->name ?>
                                        <span><?php echo $cat->count ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="widgets-area tag-area">
        <div class="inner-area">
            <h2 class="heading mb-0"><span>/</span> Popular Tags</h2>
            <div class="widgets-item">
                <ul>
                    <?php $tags = get_tags();
                    foreach ($tags as $tag) : ?>
                        <li>
                            <a href="<?php echo get_tag_link($tag); ?>"><?php echo $tag->name ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</aside>