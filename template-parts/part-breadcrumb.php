<?php
$cur_title = (is_page() || is_single()) ? get_the_title() : ((is_archive()) ? get_the_archive_title() : get_search_query());
$results = (is_search()) ? $args['results'] : null;
?>
<!-- Begin Ademy's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container-fluid h-100">
        <div class="breadcrumb-content h-100">
            <h1 class="text-capitalize mb-0">

                <?php echo (is_search()) ? '' . $results . ' Results Found' : $cur_title ?>
            </h1>
            <ul>
                <?php if (is_search()) : ?>
                    <li class="text-capitalize"><?php echo 'Search Results for ' . $cur_title ?></li>
                <?php else : ?>
                    <li><a class="text-capitalize" href="<?php echo home_url() ?>">Home</a></li>
                    <li class="active text-capitalize"><?php echo $cur_title ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<!-- Ademy's Breadcrumb Area End Here -->