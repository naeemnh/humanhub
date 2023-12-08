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
          <?php if (get_language() == 'en') : ?>
          Need Senior <span>Professionals</span>?
          <?php else : ?>
          هل تحتاج إلى </span>شخص مهني<span> على مستوى عالي من الخبرة؟
            <?php endif; ?>
        </h2>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="ademy-element-carousel introduction-slider">
            <div class="intro-item">
              <div class="intro-content">
                <!-- <h3 class="heading mb-0">Our Story</h3> -->
                <?php if (get_language() == 'en') : ?>
                <p class="short-desc">
                  Mehan's experts are here to find knowledgeable and experiences senior professionals for you.
                </p>
                <p class="short-desc">
                  We understand that high growth companies mainly rely on their executive professionals to excel.
                  Onboarding upper management, may it be you next CEO or CFO, determines the entire fate of your
                  company.
                </p>
                <p class="short-desc">
                  Mehan's imaccable team of headhunters will help you build your dream team!
                </p>
                <?php else : ?>
                <p class="short-desc">
                  خبراء مهن هم حلقة الوصل بينك وبين العثور على كبار المواهب من ذوي الخبرة والمعرفة لشركتك.
                </p>
                <p class="short-desc">
                  نحن ندرك أن كل شركة راسخة وناجحة تعتمد على كبار المتخصصين الموهوبين لدعم نمو أعمالها، لذلك اختيار كبار
                  المهنيين سواء كنت تبحث عن المدير العام للشؤون المالية القادم أو المدير التنفيذي ، يجب أن تدرس اختيارك
                  بعداية لأنه الاختيار الذي يمكن ان يجعل شركتك ناجحة أو يقودها الى الفشل.
                </p>
                <p class="short-desc">
                  لذلك ، يمكن لخبراء البحث في مهن مساعدتك في العثور على أفضل المواهب في العالم ، وكما هو الحال مع كل
                  عميل فنحن تخصص طرق البحث الخاصة بنا بشكل خاص وفقا لمتطلبات عملائنا الخاصة لتستكشف بذكاء المواهب الأكثر
                  ملاءمة في السوق.
                </p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="introduction-img_area">
            <div class="inner-img">
              <?php if (get_field('intro_image')) : ?>
              <img class="img-full" src="<?php the_field('intro_image') ?>" alt="Introduction Image" />
              <?php else : ?>
              <img class="img-full"
                src="<?php echo get_template_directory_uri() ?>/assets/images/services/middle-east-job-fairs.jpg"
                alt="Introduction Image" />
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="welcome" class="introduction-area bg-smoke_color">
    <div class="container">
      <div class="section-title pb-5">
        <h2 class="sub-heading mb-0">
          <?php if (get_language() == 'en') : ?>
          Looking For Talented UAE Nationals?
          <?php else : ?>
          اكتساب <span>موهبة</span>
          <?php endif; ?>
        </h2>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="introduction-img_area bg-white_color">
            <div class="inner-img">
              <?php if (get_field('uae_nationals_image')) : ?>
              <img class="img-full" src="<?php the_field('uae_nationals_image') ?>" alt="Introduction Image" />
              <?php else : ?>
              <img class="img-full"
                src="<?php echo get_template_directory_uri() ?>/assets/images/services/employers-1.jpg"
                alt="Introduction Image" />
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ademy-element-carousel introduction-slider">
            <div class="intro-item">
              <div class="intro-content">
                <?php if (get_language() == 'en') : ?>
                <p class="short-desc">
                  Emiratization is UAE's top priority as UAE government effectively manages work force issues in the
                  country.
                </p>
                <p class="short-desc">
                  At Mehan, we understand the importance of Emiratization, and the complexities of the job market making
                  it almost impossible to attract talented UAE Nationals.
                </p>
                <p class="short-desc">
                  UAE Nationals trust us with their job search and let us help you with your Emiratization targets. We
                  would go above and beyond to headhunt quality candidates for you. At Mehan, we ensure compliance with
                  your technical needs alogn with finding the Emarati who fits your work culture smoothly.
                </p>
                <?php else : ?>
                <p class="short-desc">
                  هي منصة رأس المال البشري للتعلم المستمر التي يسمح لمحترفي رأس المال البشري والطلاب بالتحول، والنمو،
                  وتبادل المعرفة، والابتكار والتقدم في حياتهم المهنية من خلال التعاون مع غيرهم من المتخصصين في رأس المال
                  البشري عن طريق منصات افتراضية وواقعية.
                </p>
                <div class="intro-btn_wrap">
                  <a class="ademy-btn denim-color_btn fullwidth-btn" href="<?php echo get_home_url() ?>/ar/هيومن-هب/">
                    تعرف على المزيد
                    <i class="ion-android-arrow-forward"></i>
                  </a>
                </div>
                <?php endif; ?>
              </div>
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
          <div class="show-interest">
            <h3 class="sub-heading">
              <?php if (get_language() == 'en') : ?>
              Show us your interest:
              <?php else : ?>
              أظهر لنا اهتمامك:
              <?php endif; ?>
            </h3>
            <?php the_content() ?>
          </div>
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