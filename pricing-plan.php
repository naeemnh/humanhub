<?php

/**
 * Template Name: Pricing Plan
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
        get_template_part('template-parts/part', 'breadcrumb'); ?>

        <!-- Begin Main Content Area -->
        <main class="main-content">
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
        </main>
        <!-- Main Content Area End Here -->

<?php
    endwhile;
endif;
get_footer();
