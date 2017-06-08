<div class="content__container container">
    <?php get_template_part('blocks/news-top/news-top'); ?>
    <main class="main">
        <div class="main__center-column">
            <?php get_template_part('blocks/popular-news/popular-news'); ?>
            <?php get_template_part('blocks/main/__news-list/main__news-list'); ?>
            <div class="banner banner_center">
                <a class="link link__control banner__link i-bem" data-bem='{"link":{}}' role="link" href="#" title="center banner"><img class="image banner__image" src="<?php echo get_template_directory_uri(); ?>/img/9AxGihQ_YNfq5UuVL1GUBVxej84.jpg" alt="center banner" title="center banner">
                </a>
            </div>
        </div>

        <?php get_template_part( 'right-column' ); ?>
    </main>
</div>
