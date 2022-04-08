<?php $class = $args ? ($args['class'] ? $args['class'] : '') : 'search-box';
if ($class == 'search-box') : ?>
    <form role='search' method="get" action="<?php echo home_url('/') ?>" class="<?php echo $class ?>">
        <input class="search-box_input" type="text" name="s" placeholder="Keyword search..." title="Please fill out this field." />
        <button class="search-box_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
    </form>
<?php elseif ($class == 'hm-searchbox') : ?>
    <form role='search' method="get" action="<?php echo home_url('/') ?>" class="<?php echo $class ?>">
        <input type="text" placeholder="Search for item..." name='s' <?php echo get_search_query() ?> />
        <button class="search_btn" value="Search" type="submit">
            <i class="ion-ios-search-strong"></i>
        </button>
    </form>
<?php else : ?>
    <form role='search' method="get" action="<?php echo home_url('/') ?>" class="<?php echo $class ?>">
        <input class="input-field" type="text" placeholder="Keyword search..." name='s' <?php echo get_search_query() ?> />
        <button class="inner-btn" value="Search" type="submit">
            <i class="ion-ios-search-strong"></i>
        </button>
    </form>
<?php endif ?>