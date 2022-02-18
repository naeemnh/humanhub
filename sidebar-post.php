<aside class="sidebar-area">
    <?php get_search_form(array('class' => 'search-box')); ?>
    <div class="widgets-area categories-area">
        <div class="inner-area">
            <h2 class="heading mb-0"><span>/</span> Categories</h2>
            <div class="widgets-item">
                <ul class="list-item_wrap">
                    <?php $cats = get_categories();
                    foreach ($cats as $cat) : ?>
                        <li>
                            <ul class="list-item">
                                <li>
                                    <a href="<?php echo get_category_link($cat) ?>"><?php echo $cat->name ?>
                                        <span><?php echo $cat->count ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="widgets-area tag-area">
        <div class="inner-area">
            <h2 class="heading mb-0"><span>/</span> Popular Tags</h2>
            <div class="widgets-item">
                <ul>
                    <?php $tags = get_tags();
                    foreach ($tags as $tag) : ?>
                        <li>
                            <a href="<?php echo get_tag_link() ?>"><?php echo $tag->name ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</aside>