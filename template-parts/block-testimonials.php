<!-- Begin Testimonials Area -->
<div class="testimonials-area">
    <div class="container">
        <div class="section-title pb-4">
            <h6 class="heading text-uppercase mb-0">Satisfied parents</h6>
            <h2 class="sub-heading text-capitalize mb-0">
                Parents' <span>Testimonials</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ademy-element-carousel testimonial-slider" data-slick-options='{
                        "slidesToShow": 3,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": false,
                        "dots": false,
                        "spaceBetween": 30
                        }' data-slick-responsive='[
                        {"breakpoint": 1200, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint": 992, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint": 768, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 10,
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                    ?>
                        <div class="slide-item">
                            <div class="single-item">
                                <div class="single-img">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/testimonials/1.jpg" alt="Testimonial Image" />
                                    </a>
                                </div>
                                <div class="single-item_content">
                                    <p class="short-desc mb-0">
                                        I find it satisfactory with the results of our kids
                                        since they entered Ademy school. Good quality.
                                    </p>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star-outline"></i></li>
                                        </ul>
                                    </div>
                                    <div class="client-info">
                                        <h6 class="client-name mb-0">
                                            <a href="javascript:void(0)">John Smith</a>
                                        </h6>
                                        <span class="occupation">/CEO</span>
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
<!-- Testimonials Area End Here -->