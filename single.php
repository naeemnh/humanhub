<?php
get_header();
while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
    <!-- Begin Main Content Area -->
    <main class="main-content">
        <!-- Begin Single Post Area -->
        <div class="news-area single-post_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 order-2">
                        <?php get_sidebar() ?>
                        <!-- <div class="sidebar-area">
                            <div class="search-box">
                                <input class="search-box_input" type="text" placeholder="Keyword search..." title="Please fill out this field." />
                                <button class="search-box_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                            </div>
                            <div class="widgets-area categories-area">
                                <div class="inner-area">
                                    <h2 class="heading mb-0"><span>/</span> Categories</h2>
                                    <div class="widgets-item">
                                        <ul class="list-item_wrap">
                                            <li>
                                                <ul class="list-item">
                                                    <li>
                                                        <a href="javascript:void(0)">Athletics Olympiad
                                                            <span>5</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="list-item">
                                                    <li>
                                                        <a href="javascript:void(0)">Best Essay Writer of 2020 for students
                                                            <span>5</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="list-item">
                                                    <li>
                                                        <a href="javascript:void(0)">Blog
                                                            <span>2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="list-item">
                                                    <li>
                                                        <a href="javascript:void(0)">Blogs
                                                            <span>5</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="list-item">
                                                    <li>
                                                        <a href="javascript:void(0)">Languages
                                                            <span>4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="list-item">
                                                    <li>
                                                        <a href="javascript:void(0)">School life
                                                            <span>6</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="list-item">
                                                    <li>
                                                        <a href="javascript:void(0)">Uncategorized
                                                            <span>396</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="widgets-area tag-area">
                                <div class="inner-area">
                                    <h2 class="heading mb-0"><span>/</span> Popular Tags</h2>
                                    <div class="widgets-item">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">ademy</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">athletics olympiad</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">blogs</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">design</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">high school</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">languages</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">school life</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">students</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-8 order-1">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-post_item">
                                    <div class="single-post_img">
                                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="Post Image">
                                    </div>
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
                                                    Ademy
                                                </a>
                                            </li>
                                            <li>
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
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="short-desc mb-0">A group of Duquesne faculty participating in a CTE online book study developed these tips to give to students to help them succeed in online learning. Faculty teaching online might want to include a list like this on their blackboard site or in their syllabus.</p>
                                    <div class="post-blockquote">
                                        <blockquote>
                                            <p>Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do.</p>
                                        </blockquote>
                                    </div>
                                    <p class="short-desc mb-0">If a student is new to the on-line format, take only one course the first semester. Read and understand the course Syllabus – know the student assessment measures for each on-line course to determine whether to take one or more on-line courses in a given semester. Engage the support of family members to help you succeed. Let them know what you’re dealing with before the semester begins. Most likely they really don’t know how hard you are working. They will be there when you need them most. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="paginatoin-area position-center pb-0">
                            <ul class="pagination-box">
                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Post Area End Here -->
    </main>
    <!-- Main Content Area End Here -->
<?php
endwhile;
get_footer();
?>