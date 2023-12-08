<?php

/**
 * Template Name: Career Guidance
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
          Need a Career Advice?
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
                  Are you launching a new business and don't know how to build rapport with your colleagues?
                  <br>
                  Did you just get promoted and find it challenging to manage you team?
                  <br>
                  Are you implementing organizational changes and require guidance through the transition?
                  <br>
                  Are you a recent graduate embarking on your job serach journey, and want to know how to initiate the
                  process?
                </p>
                <p class="short-desc">
                  You are in the right place, where we stand prepared to offer expret guidance and assistance.
                </p>
                <?php else : ?>
                <p class="short-desc">
                  إذا كنت تبدأ مشروعا تجاريًا جديدًا أو لا تعرف كيف تتأقلم مع زملائك في العمل أو ترقيت مؤخرا وتواجه
                  صعوبة في إدارة فريقك أو تقوم حاليا بتغييرات في العمل ولا تعرف كيفية إدارة عملية التغيير أو خريج جديد
                  يتطلع إلى بدء رحلة البحث عن وظيفة ، فنحن هنا لمساعدتك وتوجيهك للوصول إلى هدفك.
                </p>
                <p class="short-desc">
                  كل شخص في مرحلة ما في حياتهم المهنية ، يتوقف ويفكر ماذا أفعل؟ لماذا انا هنا؟ أو كيف اتغلب على عائق
                  وظيفي؟ لذا فإننا في مهن نساعد عملاءنا في مواجهة تحدياتهم الوظيفية من خلال الإصغاء إليهم والعمل معا
                  لمساعدتهم في التغلب على تلك التحديات وتزويدهم بالإرشادات والدعم المعنوي المطلوبين.
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
                src="<?php echo get_template_directory_uri() ?>/assets/images/job-seekers/design-desk-display.jpg"
                alt="Introduction Image" />
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Begin Services Area -->
  <div class="services-area cg-works bg-smoke_color">
    <div class="container">
      <div class="section-title pb-5">
        <h2 class="sub-heading mb-0">
          <?php if (get_language() == 'en') : ?>
          How It Works
          <?php else : ?>
          كيف تبدأ عملية التوجيه الوظيفي
          <?php endif; ?>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-xs-12">
          <article class="service flex-column">
            <div class="service-img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/job-seekers/icon1.png" alt="img-full">
            </div>
            <div class="service-content">
              <?php if (get_language() == 'en') : ?>
              <p class="short-desc mb-0">
                Request to book an appointment through our website detailing what you need help with
              </p>
              <?php else : ?>
              <h3 class="title mb-0 white-color">المعرفة</h3>
              <p class="short-desc mb-0">
                اطلب حجز موعد من خلال موقعنا على الانترنت واعلمنا ما هو هدفك من الجلسة
              </p>
              <?php endif; ?>
            </div>
          </article>
          <article class="service flex-column">
            <div class="service-img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/job-seekers/icon3.png" alt="img-full">
            </div>
            <div class="service-content">
              <?php if (get_language() == 'en') : ?>
              <p class="short-desc mb-0">
                Pay the invoice to confirm your career guidance session
              </p>
              <?php else : ?>
              <h3 class="title mb-0 white-color">التنوير</h3>
              <p class="short-desc mb-0">
                كم بدفع الفاتورة التأكيد جلسة التوجيه الوظيفي
              </p>
              <?php endif; ?>
            </div>
          </article>
        </div>
        <div class="col-md-6 col-xs-12">
          <article class="service flex-column">
            <div class="service-img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/job-seekers/icon2.png" alt="img-full">
            </div>
            <div class="service-content">
              <?php if (get_language() == 'en') : ?>
              <p class="short-desc mb-0">
                We will give you a call to schedule a one hour long session and send you an invoice
              </p>
              <?php else : ?>
              <h3 class="title mb-0 white-color">التعرف</h3>
              <p class="short-desc mb-0">
                سوف لتواصل معك لتحديد موعد جلسة لمدة ساعة وإرسال فاتورة لك
              </p>
              <?php endif; ?>
            </div>
          </article>
          <article class="service flex-column">
            <div class="service-img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/job-seekers/icon4.png" alt="img-full">
            </div>
            <div class="service-content">
              <?php if (get_language() == 'en') : ?>
              <p class="short-desc mb-0">
                Attend the session to get the help you need
              </p>
              <?php else : ?>
              <h3 class="title mb-0 white-color">ريادة الأعمال</h3>
              <p class="short-desc mb-0">
                كم بحضور الجلسة على الموعد للحصول على المساعدة التي تحتاجها
              </p>
              <?php endif; ?>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
  <!-- Services Area End Here -->
  <div class="content-area">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="show-interest">
            <h3 class="sub-heading">
              <?php echo get_language() == 'en' ? 'Request to Book a Career Guidance Session:' : 'طلب حجز موعد جلسة توجيه وظيفي:'; ?>
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