<?php

/**
 * Template Name: Contact Page
 * Template Post Type: page
 */

get_header();
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
                                    <h4 class="heading text-uppercase mb-0"><i class="ti-map-alt"></i>Address</h4>
                                    <span class="short-desc">2025 Johnpaul Springs Suite 366</span>
                                </li>
                                <li>
                                    <h4 class="heading text-uppercase mb-0"><i class="ti-mobile"></i>Phone</h4>
                                    <span class="short-desc">Mobile: (+88) 090 1900 - 6886</span>
                                    <span class="short-desc">Hotline: 1800 6886</span>
                                </li>
                                <li>
                                    <h4 class="heading text-uppercase mb-0"><i class="ti-comment-alt"></i>Email</h4>
                                    <span class="short-desc">support@hastech.company</span>
                                    <span class="short-desc">yourmail@domain.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="feedback-area contact-form_area">
                            <h2 class="heading mb-0">Get in Touch</h2>
                            <form id="contact-form" class="feedback-form" action="https://whizthemes.com/mail-php/mamunur/ademy/ademy.php">
                                <div class="feedback-post_box">
                                    <div class="form-group group-input mb-0">
                                        <input class="input-field me-4" type="text" name="con_name" id="con_name" placeholder="Your name*" required>
                                        <input class="input-field" type="email" name="con_email" id="con_email" placeholder="Your Email*" required>
                                    </div>
                                    <div class="form-group group-input mb-0">
                                        <input class="input-field me-4" type="text" name="con_subject" id="con_subject" placeholder="Subject" required>
                                        <input class="input-field" type="number" name="con_number" id="con_number" placeholder="Your Phone*" required>
                                    </div>
                                    <div class="form-group mb-0">
                                        <textarea class="textarea-field" name="con_message" id="con_message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <button type="submit" value="submit" id="submit" class="ademy-btn denim-color_btn with-border_radius" name="submit">Submit
                                            <i class="ion-android-arrow-forward"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                            </form>
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
get_footer();
