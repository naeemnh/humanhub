<?php
get_header();
if (have_posts()) :
  while (have_posts()) : the_post();
    get_template_part('template-parts/part', 'breadcrumb'); ?>
    <!-- Begin Main Content Area -->
    <main class="main-content">

      <!-- Begin Banner With Countdown -->
      <div class="banner-with_coundown bg-denim_color">
        <div class="container-fluid">
          <div class="banner-nav">
            <div class="inner-nav">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="banner-img">
                    <?php if (get_the_post_thumbnail()) : ?>
                      <img class="img-full" src="<?php the_post_thumbnail_url() ?>" alt="Banner Image">
                    <?php else : ?>
                      <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/banner/2.jpg" alt="Banner Image">
                    <?php endif; ?>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="banner-content">
                    <ul class="list-item">
                      <li>
                        <h5 class="title mb-0">price</h5>
                        <span class="atlantis-color">$29</span>
                      </li>
                      <li>
                        <h5 class="title mb-0">price</h5>
                        <span>30 Mar, 2020</span>
                      </li>
                      <li>
                        <h5 class="title mb-0">time</h5>
                        <span>9:00 - 16:00</span>
                      </li>
                      <li>
                        <h5 class="title mb-0">category</h5>
                        <span>Languages</span>
                      </li>
                      <li>
                        <h5 class="title mb-0">location</h5>
                        <span>86 Bailey Harbor Apt</span>
                      </li>
                    </ul>
                    <div class="btn-wrap">
                      <a class="ademy-btn btn-md_size with-border_radius denim-color_btn" href="javascript:void(0)">Expired
                        <i class="ion-android-arrow-forward"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Count Down Div -->
          </div>
        </div>
      </div>
      <!-- Banner With Countdown End Here -->

      <!-- Begin Single Event Area -->
      <div class="single-event_area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 order-2">
              <?php get_sidebar('event'); ?>
            </div>
            <div class="col-lg-8 order-1">
              <div class="event-section_title">
                <h3 class="heading mb-0">Our Speakers <span>(3)</span></h3>
                <p class="short-desc mb-0">As honorable educational experts and educators, our guests would hold many profound talks and conferences about teaching methods and materials. Participants will be able to enjoy a variety of interesting activities and interact with guests through Q&A sessions.</p>
              </div>
              <div class="our-teacher_area our-teacher_area-2 row">
                <div class="col-md-4 col-sm-6">
                  <div class="single-item">
                    <div class="single-inner_item">
                      <div class="single-img with-radius">
                        <img src="assets/images/our-teacher/1.png" alt="Our Teacher Image">
                      </div>
                      <div class="single-content">
                        <h3 class="teacher-name mb-0">Della Morgan</h3>
                        <span class="teacher-position">/ Languages</span>
                        <ul class="social-link nobel-color">
                          <li class="facebook">
                            <a href="https://www.facebook.com" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                              <i class="ion-social-facebook"></i>
                            </a>
                          </li>
                          <li class="twitter">
                            <a href="https://twitter.com" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                              <i class="ion-social-twitter"></i>
                            </a>
                          </li>
                          <li class="youtube">
                            <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                              <i class="ion-social-youtube"></i>
                            </a>
                          </li>
                          <li class="skype">
                            <a href="https://skype.com/" data-bs-toggle="tooltip" target="_blank" title="Skype">
                              <i class="ion-social-skype"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="single-item">
                    <div class="single-inner_item">
                      <div class="single-img with-radius">
                        <img src="assets/images/our-teacher/2.png" alt="Our Teacher Image">
                      </div>
                      <div class="single-content">
                        <h3 class="teacher-name mb-0">Joel Mills</h3>
                        <span class="teacher-position">/ Languages</span>
                        <ul class="social-link nobel-color">
                          <li class="facebook">
                            <a href="https://www.facebook.com" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                              <i class="ion-social-facebook"></i>
                            </a>
                          </li>
                          <li class="twitter">
                            <a href="https://twitter.com" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                              <i class="ion-social-twitter"></i>
                            </a>
                          </li>
                          <li class="youtube">
                            <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                              <i class="ion-social-youtube"></i>
                            </a>
                          </li>
                          <li class="skype">
                            <a href="https://skype.com/" data-bs-toggle="tooltip" target="_blank" title="Skype">
                              <i class="ion-social-skype"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="single-item">
                    <div class="single-inner_item">
                      <div class="single-img with-radius">
                        <img src="assets/images/our-teacher/3.png" alt="Our Teacher Image">
                      </div>
                      <div class="single-content">
                        <h3 class="teacher-name mb-0">Joseph Perkins</h3>
                        <span class="teacher-position">/ Mathematics</span>
                        <ul class="social-link nobel-color">
                          <li class="facebook">
                            <a href="https://www.facebook.com" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                              <i class="ion-social-facebook"></i>
                            </a>
                          </li>
                          <li class="twitter">
                            <a href="https://twitter.com" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                              <i class="ion-social-twitter"></i>
                            </a>
                          </li>
                          <li class="youtube">
                            <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                              <i class="ion-social-youtube"></i>
                            </a>
                          </li>
                          <li class="skype">
                            <a href="https://skype.com/" data-bs-toggle="tooltip" target="_blank" title="Skype">
                              <i class="ion-social-skype"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="single-class_item single-event_item">
                <div class="single-class_content single-event_content">
                  <p class="short-desc mb-0 pb-5">Ever wondered about some of the benefits of high school art classes? In addition to a different type of thinking and opening a flood of creativity, art classes provide additional advantages for growing teens. There are numerous lessons that art classes provide to students that other classics, like typical mathematics and science courses, cannot.</p>
                  <div class="list-item_area row">
                    <div class="col-lg-6">
                      <div class="list-item">
                        <h6 class="heading text-uppercase mb-0">Dedicated Teachers</h6>
                        <p class="short-desc mb-0">Our classes are lead by experienced and dedicated teachers, whose major is contemporary arts.</p>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="list-item">
                        <h6 class="heading text-uppercase mb-0">Good Study Materials</h6>
                        <p class="short-desc mb-0">Our students are provided with the best study materials from national as well as local donors.</p>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="list-item">
                        <h6 class="heading text-uppercase mb-0">Great Study Place</h6>
                        <p class="short-desc mb-0">The study environment is very quiet, clean, peaceful, supportive and suitable for high school students.</p>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="list-item">
                        <h6 class="heading text-uppercase mb-0">Study Equipment</h6>
                        <p class="short-desc mb-0">All of our study equipment is updated and advanced to the latest technology on a regular basis.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="google-map"></div>
                <div class="additional-content">
                  <p class="description mb-0">
                    All parts of high school education are crucial for overall learning. If a teen misses a math class, they will miss out on learning numerous computational skills. The same is true of art. The skills learned in art classes cannot be picked up as easily in other courses and are essential for long-term skill advancement.
                  </p>
                  <div class="btn-with-social_link">
                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="javascript:(0)">Expired
                      <i class="ion-android-arrow-forward"></i>
                    </a>
                    <ul class="social-link with-border-radius sm-size">
                      <li class="facebook">
                        <a href="https://www.facebook.com" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                          <i class="ion-social-facebook"></i>
                        </a>
                      </li>
                      <li class="twitter">
                        <a href="https://twitter.com" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                          <i class="ion-social-twitter"></i>
                        </a>
                      </li>
                      <li class="youtube">
                        <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                          <i class="ion-social-youtube"></i>
                        </a>
                      </li>
                      <li class="skype">
                        <a href="https://skype.com/" data-bs-toggle="tooltip" target="_blank" title="Skype">
                          <i class="ion-social-skype"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="review-area">
                <div class="review-title">
                  <h3 class="heading mb-0">Reviews <span>(4)</span></h3>
                  <p class="short-desc mb-0">
                    <span>4.67</span> based on <strong>3</strong> rating
                  </p>
                </div>
                <div class="user-info">
                  <div class="user-img">
                    <img src="assets/images/single-class/small-size/1.jpg" alt="User Image">
                  </div>
                  <div class="user-content">
                    <p class="user-comment font-italic mb-0">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consecte tur adip iscing elit psum</p>
                    <h5 class="user-name mb-0">
                      <a href="javascript:void">Georgie Lloyd</a>
                      <span class="occupation">/Student</span>
                    </h5>
                    <a href="javascript:void(0)" class="reply-btn">Reply</a>
                  </div>
                </div>
                <div class="user-info">
                  <div class="user-img">
                    <img src="assets/images/single-class/small-size/2.jpg" alt="User Image">
                  </div>
                  <div class="user-content">
                    <div class="rating-box">
                      <ul>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                      </ul>
                    </div>
                    <p class="user-comment font-italic mb-0">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consecte tur adip iscing elit psum</p>
                    <h5 class="user-name mb-0">
                      <a href="javascript:void">Howard Lane </a>
                      <span class="occupation">/Student</span>
                    </h5>
                    <a href="javascript:void(0)" class="reply-btn">Reply</a>
                  </div>
                </div>
                <div class="user-info">
                  <div class="user-img">
                    <img src="assets/images/single-class/small-size/3.jpg" alt="User Image">
                  </div>
                  <div class="user-content">
                    <div class="rating-box">
                      <ul>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li class="silver-color"><i class="ion-android-star-outline"></i></li>
                      </ul>
                    </div>
                    <p class="user-comment font-italic mb-0">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consecte tur adip iscing elit psum</p>
                    <h5 class="user-name mb-0">
                      <a href="javascript:void">Wesley Rhodes</a>
                      <span class="occupation">/Student</span>
                    </h5>
                    <a href="javascript:void(0)" class="reply-btn">Reply</a>
                  </div>
                </div>
                <div class="user-info">
                  <div class="user-img">
                    <img src="assets/images/single-class/small-size/4.jpg" alt="User Image">
                  </div>
                  <div class="user-content">
                    <div class="rating-box">
                      <ul>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                      </ul>
                    </div>
                    <p class="user-comment font-italic mb-0">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consecte tur adip iscing elit psum</p>
                    <h5 class="user-name mb-0">
                      <a href="javascript:void">Della Pope</a>
                      <span class="occupation">/Student</span>
                    </h5>
                    <a href="javascript:void(0)" class="reply-btn">Reply</a>
                  </div>
                </div>
              </div>
              <div class="feedback-area">
                <div class="feedback-title">
                  <h3 class="heading mb-0">Add Your <span>Reviews</span></h3>
                  <p class="short-desc mb-0">
                    Your email address will not be published. Required fields are marked
                    <span class="required">*</span>
                  </p>
                  <div class="rating-box add-rating">
                    <span>Your rating</span>
                    <ul>
                      <li class="silver-color very-poor" title="Very poor">
                        <i class="ion-android-star-outline"></i>
                      </li>
                      <li class="silver-color not-that_bad" title="Not that bad">
                        <i class="ion-android-star-outline"></i>
                        <i class="ion-android-star-outline"></i>
                      </li>
                      <li class="silver-color average" title="Average">
                        <i class="ion-android-star-outline"></i>
                        <i class="ion-android-star-outline"></i>
                        <i class="ion-android-star-outline"></i>
                      </li>
                      <li class="silver-color good" title="Good">
                        <i class="ion-android-star-outline"></i>
                        <i class="ion-android-star-outline"></i>
                        <i class="ion-android-star-outline"></i>
                        <i class="ion-android-star-outline"></i>
                      </li>
                      <li class="silver-color perfect" title="Perfect">
                        <i class="ion-android-star-outline"></i>
                        <i class="ion-android-star-outline"></i>
                        <i class="ion-android-star-outline"></i>
                        <i class="ion-android-star-outline"></i>
                        <i class="ion-android-star-outline"></i>
                      </li>
                    </ul>
                  </div>
                  <form class="feedback-form" action="javascript:void(0)">
                    <div class="feedback-post_box">
                      <div class="group-input">
                        <input type="text" class="input-field me-4" placeholder="Your Name*">
                        <input type="email" class="input-field" placeholder="Your Email*">
                      </div>
                      <textarea class="textarea-field" name="commnet" placeholder="Your comment"></textarea>
                    </div>
                  </form>
                  <div class="btn-wrap">
                    <a class="ademy-btn denim-color_btn with-border_radius" href="javascript:void(0)">Submit
                      <i class="ion-android-arrow-forward"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Single Event Area End Here -->
    </main>
    <!-- Main Content Area End Here -->
    <?php
  endwhile;
endif;
get_footer(); ?>s