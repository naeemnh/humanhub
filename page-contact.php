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
                                    <li>
                                        <h4 class="heading text-uppercase mb-0">
                                            <?php echo get_language() == 'en' ? 'Get in Touch' : 'ابقى على تواصل' ?>
                                        </h4>
                                        <p class="short-desc">
                                            <?php echo get_language() == 'en' ?
                                                'With years of experience in providing HR services, we strive to deliver professional approach and exceptional execution to both employers and job seekers.' :
                                                'مع سنوات من الخبرة في تقديم خدمات الموارد البشرية ، تسعى جاهدين لتقديم نهج عالي المهنية وتنفيذ استثنائي لكل من أصحاب العمل والباحثين عن عمل.'
                                            ?>
                                            <br />
                                            <?php echo get_language() == 'en' ?
                                                'Should you have any questions, feel free to contact us.' :
                                                'إذا كان لديك أي أسئلة ، فلا تتردد في الاتصال بنا.'
                                            ?>
                                        </p>
                                    </li>
                                    <?php if (get_field('mobile_no_1') || get_field('mobile_no_2')) : ?>
                                        <li>
                                            <h4 class="heading text-uppercase mb-0">
                                                <i class="ti-mobile"></i>
                                                <?php echo get_language() == 'en' ? 'Phone' : 'رقم التليفون' ?>
                                            </h4>
                                            <!-- Mobile Number -->
                                            <span class="short-desc">Mobile: <?php the_field('mobile_no_1') ?></span>
                                            <!-- Hotline -->
                                            <!-- <span class="short-desc">Hotline: 1800 6886</span> -->
                                        </li>
                                    <?php endif;
                                    if (get_field('email_1') || get_field('email_2')) : ?>
                                        <li>
                                            <h4 class="heading text-uppercase mb-0">
                                                <i class="ti-comment-alt"></i>
                                                <?php echo (get_language() == 'en') ? 'Email' : 'بريد إلكتروني'; ?>
                                            </h4>
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
