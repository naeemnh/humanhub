<?php

/**
 * Template Name: Employers
 * Template Post Type: page
 */
get_header();
if (have_posts()) :
  while (have_posts()) : the_post();
    get_template_part('template-parts/part', 'breadcrumb'); ?>
    <!-- Begin Main Content Area -->
    <main class="main-content">
      <div id="welcome" class="introduction-area">
        <div class="container">
          <div class="section-title pb-5">
            <!-- <h6 class="heading mb-0">Our Story</h6> -->
            <h2 class="sub-heading mb-0">
              <?php if ($language == 'en') : ?>
                Need Senior <span>Professionals</span>?
              <?php else : ?>
                هل تحتاج إلى </span>شخص مهني<span> على مستوى عالي من الخبرة؟
                <?php endif; ?>
            </h2>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="ademy-element-carousel introduction-slider" data-slick-options='{
                      "slidesToShow": 1,
                      "slidesToScroll": 1,
                      "infinite": true,
                      "arrows": false,
                      "dots": false,
                      "autoplay" : false,
                      "fade" : false,
                      "autoplaySpeed" : 7000,
                      "pauseOnHover" : false,
                      "pauseOnFocus" : false
                      }' data-slick-responsive='[
                      {"breakpoint":768, "settings": {
                      "slidesToShow": 1
                      }},
                      {"breakpoint":575, "settings": {
                      "slidesToShow": 1
                      }}
                  ]'>
                <div class="intro-item">
                  <div class="intro-content">
                    <!-- <h3 class="heading mb-0">Our Story</h3> -->
                    <?php if ($language == 'en') : ?>
                      <p class="short-desc">
                        Mehan Experts are your link find knowledgeable and experienced senior talents for your business.
                      </p>
                      <p class="short-desc">
                        We understand that every well-established and successful company depends on their senior talented professionals to help its business grow. Choosing your senior professionals, whether your next CFO or CEO, must be carefully studied as they can make or break your company.
                      </p>
                      <p class="short-desc">
                        Therefore, Mehan expert headhunters can help you find the world's best talents as with every client, we specially customize our search methods according to our client’s specific requirements to smartly headhunt the most suited talent in the market.
                      </p>
                    <?php else : ?>
                      <p class="short-desc">
                        خبراء مهن هم حلقة الوصل بينك وبين العثور على كبار المواهب من ذوي الخبرة والمعرفة لشركتك.
                      </p>
                      <p class="short-desc">
                        نحن ندرك أن كل شركة راسخة وناجحة تعتمد على كبار المتخصصين الموهوبين لدعم نمو أعمالها، لذلك اختيار كبار المهنيين سواء كنت تبحث عن المدير العام للشؤون المالية القادم أو المدير التنفيذي ، يجب أن تدرس اختيارك بعداية لأنه الاختيار الذي يمكن ان يجعل شركتك ناجحة أو يقودها الى الفشل.
                      </p>
                      <p class="short-desc">
                        لذلك ، يمكن لخبراء البحث في مهن مساعدتك في العثور على أفضل المواهب في العالم ، وكما هو الحال مع كل عميل فنحن تخصص طرق البحث الخاصة بنا بشكل خاص وفقا لمتطلبات عملائنا الخاصة لتستكشف بذكاء المواهب الأكثر ملاءمة في السوق.
                      </p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="introduction-img_area">
                <div class="inner-img">
                  <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/services/middle-east-job-fairs.jpg" alt="Introduction Image" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="welcome" class="introduction-area introduction-area-3">
        <div class="container">
          <div class="section-title pb-5">
            <h2 class="sub-heading mb-0">
              <?php if ($language == 'en') : ?>
                Welcome to <span>Mehan's</span> HumanHub
              <?php else : ?>
                مرحبا بكم في منصة الإنسان التابعة <span>لمهن</span>
              <?php endif; ?>
            </h2>
          </div>
          <div class="row">
            <div class="col-lg-5 order-2">
              <div class="section-wrap">
                <p class="short-desc mb-0">
                  <?php if ($language == 'en') : ?>
                    Mehan's Human Hub is a continuous learning Human Capital Hub that allows human capital professionals and students to transform, grow, share knowledge, innovate and advance in their careers by collaborating with other HC professionals through virtual and physical platforms.
                  <?php else : ?>
                    منصة الإنسان التابعة لمهن هي منصة التعلم المستمر لرأس المال البشري التي تتيح للعاملين وطلاب رأس المال البشري التحول والنمو بمشاركتهم المعرفة والابتكار للتطور في حياتهم المهنية من خلال التعاون مع متخصصي رأس المال البشري الآخرين على منصات افتراضية وواقعية.
                  <?php endif; ?>
                </p>
                <!-- <div class="btn-wrap">
                                <a class="ademy-btn denim-color_btn with-border_radius" href="academics.html">Learn more</a>
                            </div> -->
              </div>
            </div>
            <div class="col-lg-6 order-1">
              <div class="introduction-img_area">
                <div class="inner-img">
                  <img class="img-full mx-auto w-75" src="<?php echo get_template_directory_uri() ?>/assets/images/introduction/elements_human-hub-min.png" alt="Introduction Image" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-area">
        <div class="container">
          <div class="row">
            <div class="col">
              <?php the_content() ?>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Main Content Area End Here -->
<?php
  endwhile;
endif;
get_footer();
?>