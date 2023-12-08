<?php

/**
 * Template Name: Job Seekers
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
          Careers <span>Opportunities</span> for Senior <span>Professionals</span>
          <?php else : ?>
          الفرص <span>التوظيفية</span> لكبار <span>المهنيين</span>
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
                  Every driven professional is seeking their next career upswing, whether you are an HR Officer,
                  aspiring to become an HR Manager or a Finance Director with aims of becoming a CFO.
                </p>
                <p class="short-desc">
                  If you identify with these situations, you have arrived at the right place. At Mehan we excel in the
                  art of headhunting exceptional professionals like you.
                </p>
                <p class="short-desc">
                  Share you application with us, and entrust us to steer you towards the most rewarding career
                  prospects. We hold your provacy in high regard, and maintain conditional database management and
                  recruitment procedures.
                </p>
                <?php else : ?>
                <p class="short-desc">
                  كل شخص مهني دائماً يبحث عن تحركه المهني القادم ، سواء كنت رئيس قسم تتطلع إلى أن تصبح مدير أن مدير مالي
                  تتطلع إلى أن تصبح مدير مالي تنفيذي.
                </p>
                <p class="short-desc">
                  إذا كنت ترى نفسك كالمهديين المذكورين أعلاه، فنك قد وصلت إلى المكان الصحيح لأننا في مهن متخصصون في
                  توظيفك !
                </p>
                <p class="short-desc">
                  سجل معنا ودعنا نساعدك في الوصول إلى أفضل فرص العمل. يمكنك أن تطمئن لأننا نهتم بخصوصيتك ، لذلك نحن
                  نحافظ على قاعدة بيانات مشروطة للغاية وعملية اكتساب المواهب.
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
                src="<?php echo get_template_directory_uri() ?>/assets/images/job-seekers/job-01.jpg"
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
          Career Opportunities for UAE Nationals
          <?php else : ?>
          الفرص الوظيفية للمواطنين الإماراتيين
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
                src="<?php echo get_template_directory_uri() ?>/assets/images/job-seekers/job-02.jpg"
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
                  As Emarati Nationals and founders of Mehan, we have a profound commitment to empowering skilled UAE
                  based professionals. We assist in your pursiut of rewarding career paths within the competitve UAE
                  labor market.
                </p>
                <p class="short-desc">
                  Whether you are a fresh graduate looking to kick start your professoinal journey, or an established
                  professional
                  seeking to elevate your career, we are dedicated to supporting your job search.
                </p>
                <p class="short-desc">
                  Apply with us and allow us to guide you towards the most promising career opportunities. Your privacy
                  matters to us, and we ensure strict confidentiality thorugh a highly comprehensive database management
                  and talent acquisition process.
                </p>
                <?php else : ?>
                <p class="short-desc">
                  كما أن مؤسسي ميهان هم مواطنون إماراتيون ، فإننا في ميهان نهتم بدعم المحترفين الإماراتيين الموهوبين
                  لإيجاد أفضل الفرص الوظيفية المناسبة في سوق العمل الإماراتي.
                </p>
                <p class="short-desc">
                  سواء كنت خريجًا جديدًا تبحث عن بدء حياتك المهنية ، أو محترفًا ذو خبرة تبحث عن التقدم في حياتك المهنية
                  ، يمكننا مساعدتك في البحث عن وظيفة.
                </p>
                <p class="short-desc">
                  سجل معنا ودعنا نساعدك في الوصول إلى أفضل فرص العمل. يمكنك أن تطمئن لأننا نهتم بخصوصيتك ، لذلك نحن
                  نحافظ على قاعدة بيانات مشروطة للغاية وعملية اكتساب المواهب.
                </p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Begin Ticket Area -->
  <div class="ticket-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ticket-item">
            <div class="heading-wrap">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/ticket/arrow.png" alt="Ticket Arrow" />
              <h2 class="heading mb-0 blue-color">
                <?php if (get_language() == 'en') : ?>
                Apply with us
                <?php else : ?>
                تقدم بطلب وظيفة
                <?php endif; ?>
              </h2>
            </div>
            <div class="group-btn_wrap d-flex">

              <a class="ademy-btn denim-color_btn with-border_radius"
                href="<?php echo get_site_url(); ?>/apply-with-us">
                <?php if (get_language() == 'en') : ?>
                Register
                <?php else : ?>
                سجل
                <?php endif; ?>
                <i class="ion-android-arrow-forward"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Ticket Area End Here -->
</main>
<!-- Main Content Area End Here -->
<?php
  endwhile;
endif;
get_footer();
?>