<div class="content__container container">
    <?php get_template_part( 'breadcrumbs' ); ?>
    <main class="main">
        <div class="main__center-column">
            <?php
                if(is_search()) {
                    set_query_var( 'list',  $posts);
                } elseif(is_category()) {
                    set_query_var( 'list',  $posts);
                }

            ?>
            <?php get_template_part( 'blocks/news-list/news-list' ); ?>
            <?php the_posts_pagination(array(
                    'prev_next' => true,
                    'type' => 'list',
                    'prev_text' => 'Пред.',
                    'next_text' => 'След.'
                )); ?>
        </div>
        <?php get_template_part( 'right-column' ); ?>
    </main>
</div>