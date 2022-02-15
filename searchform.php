<?php $class = $args ? ($args['class'] ? $args['class'] : '') : 'searchbox'; ?>
<form role='search' method="get" action="<?php echo home_url('/') ?>" class="<?php echo $class ?>">
    <input class="input-field" type="text" placeholder="Keyword search..." name='s' <?php echo get_search_query() ?> />
    <button class="inner-btn" value="Search" type="submit">
        <i class="ion-ios-search-strong"></i>
    </button>
</form>