<?php
get_header();
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
        <!-- Begin Main Content Area -->
        <main class="main-content">
            <!-- Begin Single Post Area -->
            <div class="news-area single-post_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 order-2">
                            <?php get_sidebar('post'); ?>
                        </div>
                        <div class="col-lg-8 order-1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single-post_item">
                                        <?php if (get_the_post_thumbnail_url()) : ?>
                                            <div class="single-post_img">
                                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="Post Image">
                                            </div>
                                        <?php endif; ?>
                                        <div class="entry-meta">
                                            <ul class="justify-content-start">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ion-android-time"></i>
                                                        <span><?php the_time('F j, Y'); ?></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ion-ios-person"></i>
                                                        <?php echo get_the_author() ?>
                                                    </a>
                                                </li>
                                                <!-- View and likes -->
                                                <!-- <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ion-eye"></i>
                                                        <span>342 views</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ion-android-favorite-outline"></i>
                                                        <span>0 like</span>
                                                    </a>
                                                </li> -->
                                            </ul>
                                        </div>
                                        <?php the_content(); ?>
                                        <!-- <p class="short-desc mb-0">A group of Duquesne faculty participating in a CTE online book study developed these tips to give to students to help them succeed in online learning. Faculty teaching online might want to include a list like this on their blackboard site or in their syllabus.</p>
                                        <div class="post-blockquote">
                                            <blockquote>
                                                <p>Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do.</p>
                                            </blockquote>
                                        </div>
                                        <p class="short-desc mb-0">If a student is new to the on-line format, take only one course the first semester. Read and understand the course Syllabus – know the student assessment measures for each on-line course to determine whether to take one or more on-line courses in a given semester. Engage the support of family members to help you succeed. Let them know what you’re dealing with before the semester begins. Most likely they really don’t know how hard you are working. They will be there when you need them most. </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <div class="paginatoin-area position-center pb-0">
                                <ul class="pagination-box">
                                    <li class="active"><a href="javascript:void(0)">1</a></li>
                                    <li><a href="javascript:void(0)">2</a></li>
                                    <li><a href="javascript:void(0)">3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- Single Post Area End Here -->
        </main>
        <!-- Main Content Area End Here -->
<?php
    endwhile;
endif;
get_footer();
