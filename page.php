<?php
get_header();
if (have_posts()) :
    while (have_posts()) : the_post();
        get_template_part('template-parts/part', 'breadcrumb'); ?>
        <!-- Begin Main Content Area -->
        <main class="main-content">
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