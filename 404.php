<?php get_header(); ?>
<!-- Begin Main Content Area -->
<main class="main-content">
  <!-- Begin Error 404 Area -->
  <div class="error-404_area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="error-404_item">
            <div class="error-img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/error-404/1.png" alt="Error Image">
            </div>
            <h1 class="heading mb-0">
              <?php if (get_language() == 'ar') : ?>
                أُووبس! الصفحة غير موجودة!.
              <?php else : ?>
                Oops! Page not found!
              <?php endif; ?>
            </h1>
            <div class="button-wrap position-center">
              <a class="ademy-btn btn-transparent whisper-border btn-lg_size with-border_radius" href="<?php echo home_url() ?>">
                <?php if (get_language() == 'ar') : ?>
                  الى الصفحة الرئيسية
                <?php else : ?>
                  Go back to homepage
                <?php endif; ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Error 404 Area End Here -->
</main>
<!-- Main Content Area End Here -->
<?php get_footer(); ?>