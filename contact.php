<?php

/**
 * Template Name: Contact Page
 * Template Post Type: page
 */

get_header();
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/part', 'breadcrumb'); ?>

        <!-- Begin Main Content Area -->
        <main class="main-content">
            <!-- Begin Contact Area -->
            <div class="contact-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact-info">
                                <ul>
                                    <?php if (get_field('address')) : ?>
                                        <li>
                                            <h4 class="heading text-uppercase mb-0"><i class="ti-map-alt"></i>Address</h4>
                                            <span class="short-desc"><?php get_field('address') ?></span>
                                        </li>
                                    <?php endif;
                                    if (get_field('mobile_no_1') || get_field('mobile_no_2')) : ?>
                                        <li>
                                            <h4 class="heading text-uppercase mb-0"><i class="ti-mobile"></i>Phone</h4>
                                            <!-- Mobile Number -->
                                            <span class="short-desc">Mobile: <?php the_field('mobile_no_1') ?></span>
                                            <!-- Hotline -->
                                            <!-- <span class="short-desc">Hotline: 1800 6886</span> -->
                                        </li>
                                    <?php endif;
                                    if (get_field('email_1') || get_field('email_2')) : ?>
                                        <li>
                                            <h4 class="heading text-uppercase mb-0"><i class="ti-comment-alt"></i>Email</h4>
                                            <?php if (get_field('email_1')) : ?>
                                                <span class="short-desc"><?php the_field('email_1') ?></span>
                                            <?php endif;
                                            if (get_field('email_2')) : ?>
                                                <span class="short-desc"><?php the_field('email_2') ?></span>
                                            <?php endif; ?>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="feedback-area contact-form_area">
                                <h2 class="heading mb-0">Get in Touch</h2>
                                <?php the_content() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Area End Here -->
        </main>
        <!-- Main Content Area End Here -->

<?php
    endwhile;
endif;
get_footer();
