<?php
    $latest = wp_get_recent_posts(array('numberposts' => 4));

    if($latest && count($latest)) :
        set_query_var( 'list', $latest );
?>
<div class="title title_color_green main__title">
    <h2 class="h h_type_2">Последние новости</h2>
</div>
<div class="main__news-list">
    <?php get_template_part('blocks/news-list/news-list'); ?>
</div>
<?php endif; ?>