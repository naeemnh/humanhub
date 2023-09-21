<?php

/**
 * Template Name: About Us
 * Template Post Type: page
 */
get_header();
if (have_posts()) :
    while (have_posts()) : the_post();
        get_template_part('template-parts/part', 'breadcrumb');
?>
        <!-- Begin Main Content Area -->
        <main class="main-content">
            <!-- Begin Introduction Area Three -->
            <div id="welcome" class="introduction-area introduction-area-3">
                <div class="container">
                    <div class="section-title pb-5">
                        <h2 class="sub-heading mb-0">
                            <?php if (get_language() == 'en') : ?>
                                <span>Mehan</span> Talent Acquisition Services
                            <?php else : ?>
                                لخدمات استقطاب المواهب <span>مهن</span>
                            <?php endif; ?>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 order-2">
                            <div class="section-wrap">
                                <!-- <h2 class="heading mb-0">
                                Welcome to
                                <span>Ademy</span>
                                a prestigious secondary school
                            </h2> -->
                                <p class="short-desc mb-0">
                                    <?php if (get_language() == 'en') : ?>
                                        We are the innovators. We are the dreamers. We are the professionals who deliver the consistent experience to extend your business.
                                    <?php else : ?>
                                        نحن المبتكرين، نحن الحالمون ، نحن المتخصصين الذين يقدمون تجربة متناسقة لتوسيع أعمالك.
                                    <?php endif; ?>
                                </p>
                                <p class="short-desc mb-0">
                                    <?php if (get_language() == 'en') : ?>
                                        We are the innovators. We are the dreamers. We are the professionals who deliver the consistent experience to extend your business.Building an agile, comprehensive and powerful business drives us to accomplish the most challenging recruiting goals. We are always ready to rethink and reinvent recruiting models to develop a new and unexpected approach for finding top-tier talents.
                                    <?php else : ?>
                                        يقودنا بناء شركة ناجحة إلى تحقيق أهداف التوظيف الأكثر تحديا ، نحن مستعدون دائما لإعادة التفكير في نماذج التوظيف وإعادة ابتكارها لتطوير نهج جديد وغير متوقع للعثور على مواهب من الدرجة الأولى.
                                    <?php endif; ?>
                                </p>
                                <p class="short-desc mb-0">
                                    <?php if (get_language() == 'en') : ?>
                                        At Mehan we help businesses headhunt the most suitable talented Emirati professionals for their Emiratization roles as well as the world’s talented professionals for their middle and senior management roles through extensive client communication, best executive search and constant networking.
                                    <?php else : ?>
                                        نحن في شركة مين تساعد الشركات على توظيف أفضل المهنيين الإماراتيين الموهوبين الشواعرهم المخصصة للامارتيين . بالإضافة إلى المهنيين الموهوبين في العالم الشواعرهم في الإدارة المتوسطة والعليا من خلال التواصل المكلف مع العملاء وشبكات التواصل وأفضل طرق البحث عن المواهب على المستوى التنفيذي.
                                    <?php endif; ?>
                                </p>
                                <p class="short-desc mb-0">
                                    <?php if (get_language() == 'en') : ?>
                                        We help businesses grow and succeed by finding the best match for their most sensitive and important roles. We justify the expectations of the most demanding clients from the most complicated industries.
                                    <?php else : ?>
                                        نحن نساعد الشركات على النمو والنجاح من خلال مطابقة اهتماماتها الأكثر حساسية وأهمية مع المواهب المناسبة، وتبرير توقعات العملاء الأكثر تطلبًا من خلال الممارسات الأكثر تعقيدًا.
                                    <?php endif; ?>
                                </p>
                                <p class="short-desc mb-0">
                                    <?php if (get_language() == 'en') : ?>
                                        Whether you are an employer looking for best talents for your business or a talented professional looking for a career change, it would be our pleasure to help you.
                                    <?php else : ?>
                                        سواء كنت صاحب عمل تبحث عن أفضل المواهب لعملك أو محترف موهوب يبحث عن تغيير مهني ، سيكون من دواعي سرورنا أن تساعدك.
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
                                    <?php if (get_field('intro_image')) : ?>
                                        <img class="img-full mx-auto" src="<?php the_field('intro_image') ?>" alt="Introduction Image" />
                                    <?php else : ?>
                                        <img class="img-full mx-auto" src="<?php echo get_template_directory_uri() ?>/assets/images/services/about-us.jpg" alt="Introduction Image" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Introduction Area Three End Here -->

            <!-- Begin Services Area -->
            <div class="services-area bg-smoke_color">
                <div class="container">
                    <div class="section-title pb-5">
                        <h2 class="sub-heading mb-0">
                            <?php if (get_language() == 'en') : ?>
                                What We Offer Our Clients
                            <?php else : ?>
                                ما تقدمه منصة الإنسان
                            <?php endif; ?>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <article class="service flex-column">
                                <div class="service-img">
                                    <?php if (get_field('experience_image')) : ?>
                                        <img src="<?php the_field('experience_image') ?>" alt="img-full">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/services/elements_human-hub-1-min.png" alt="img-full">
                                    <?php endif; ?>
                                </div>
                                <div class="service-content">
                                    <?php if (get_language() == 'en') : ?>
                                        <h3 class="title mb-0 white-color">Knowledge & Experience</h3>
                                        <p class="short-desc mb-0">
                                            We use our strong knowledge, skills, and experience to support you to make sound decisions in attracting the best talent
                                        </p>
                                    <?php else : ?>
                                        <h3 class="title mb-0 white-color">المعرفة</h3>
                                        <p class="short-desc mb-0">
                                            تسهيل تبادل المعرفة والخبرات بين محترفي رأس المال البشري من خلال التحدث عبر النقل المباشر بالفيديو عبر الإنترنت ، والكتابة عبر المقالات والنشر ، وتبادل الأفكار والتعاون.
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </article>
                            <article class="service flex-md-row flex-sm-column flex-column">
                                <div class="service-img">
                                    <?php if (get_field('headhunting_image')) : ?>
                                        <img src="<?php the_field('headhunting_image') ?>" alt="img-full">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/services/elements_human-hub-2-min.png" alt="img-full">
                                    <?php endif; ?>
                                </div>
                                <div class="service-content">
                                    <?php if (get_language() == 'en') : ?>
                                        <h3 class="title mb-0 white-color">Headhunting</h3>
                                        <p class="short-desc mb-0">
                                            We use creative search methods to headhunt elite talents.
                                        </p>
                                    <?php else : ?>
                                        <h3 class="title mb-0 white-color">التنوير</h3>
                                        <p class="short-desc mb-0">
                                            إلهام الجيل القادم من قادة رأس المال البشري من خلال الإرشاد والتوجيه والتدريب الوظيفي.
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <article class="service flex-md-row flex-sm-column flex-column">
                                <div class="service-img">
                                    <?php if (get_field('communcation_image')) : ?>
                                        <img src="<?php the_field('communcation_image') ?>" alt="img-full">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/services/elements_human-hub-4-min.png" alt="img-full">
                                    <?php endif; ?>
                                </div>
                                <div class="service-content">
                                    <?php if (get_language() == 'en') : ?>
                                        <h3 class="title mb-0 white-color">Communication & Professionalism</h3>
                                        <p class="short-desc mb-0">
                                            Leading the talent acquistion process from start to end and effectively communicate between employer and candidate
                                        </p>
                                    <?php else : ?>
                                        <h3 class="title mb-0 white-color">التعرف</h3>
                                        <p class="short-desc mb-0">
                                            توفير الفرص لمحترفي رأس المال البشري لتعزيز معارفهم من خلال المنصات الافتراضية والواقعية ، والتراسل المباشر والانضمام أو إنشاء المجموعات والمجتمعات.
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </article>
                            <article class="service flex-column">
                                <div class="service-img">
                                    <?php if (get_field('database_image')) : ?>
                                        <img src="<?php the_field('database_image') ?>" alt="img-full">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/services/elements_human-hub-3-min.png" alt="img-full">
                                    <?php endif; ?>
                                </div>
                                <div class="service-content">
                                    <?php if (get_language() == 'en') : ?>
                                        <h3 class="title mb-0 white-color">Internal Database</h3>
                                        <p class="short-desc mb-0">
                                            Maintain and update a strong database of the best talent in the market
                                        </p>
                                    <?php else : ?>
                                        <h3 class="title mb-0 white-color">ريادة الأعمال</h3>
                                        <p class="short-desc mb-0">
                                            تطوير ممارسات رأس المال البشري من خلال دعم رواد الأعمال واصحاب الأعمال الحرة.
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Area End Here -->

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
                                            Are you looking for Career Advice?
                                        <?php else : ?>
                                            سجل وانضم إلينا اليوم
                                        <?php endif; ?>
                                    </h2>
                                </div>
                                <div class="group-btn_wrap d-flex">

                                    <a class="ademy-btn denim-color_btn with-border_radius" href="<?php echo get_site_url() . get_language() == 'en' ? '/career-guidance' : '/ar/التوجيه-المهنى/' ?>">
                                        <?php echo (get_language() == 'en') ? 'Book a Session' : 'سجل الان' ?>
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
