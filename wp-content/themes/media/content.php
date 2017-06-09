<div class="content__container container">
    <?php get_template_part('blocks/news-top/news-top'); ?>
    <main class="main">
        <div class="main__center-column">
            <?php get_template_part('blocks/popular-news/popular-news'); ?>
            <?php get_template_part('blocks/main/__news-list/main__news-list'); ?>
            <div class="banner banner_center">
                <?php
                if ( function_exists('dynamic_sidebar') )
                    dynamic_sidebar('b4');
                ?>
            </div>
        </div>

        <?php get_template_part( 'right-column' ); ?>
    </main>
</div>
