<div class="content__container container">
    <main class="main">
        <div class="main__center-column">
            <div class="post">
                <?php if(get_the_post_thumbnail_url()) : ?>
                    <img class="image post__image" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                <?php endif; ?>
                <h3 class="h h_type_3 post__title"><?php the_title(); ?></h3>
                <p class="text post__date"><?php echo date('Y.m.d', strtotime($post->post_modified)); ?></p>
                <?php echo $post->post_content; ?>
                <div class="post__bottom">
                    <p class="post-tags">
                        <?php
                        $tags = wp_get_post_tags($post->ID);
                        if($tags && count($tags)) :
                            foreach ($tags as $tag) :
                        ?>
                                <span class="post-tags__tag"><span class="post-tags__text"><?php echo $tag->name; ?></span></span>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </p>
                    <div class="share">
                        <div class="share42init"></div>
<!--                        <ul class="share__list">-->
<!--                            <li class="share__item"><a-->
<!--                                        class="link link__control share__link fa fa_icon_facebook i-bem"-->
<!--                                        data-bem='{"link":{}}' role="link" href="#" title="facebook"></a></li>-->
<!--                            <li class="share__item"><a-->
<!--                                        class="link link__control share__link fa fa_icon_twitter i-bem"-->
<!--                                        data-bem='{"link":{}}' role="link" href="#" title="twitter"></a></li>-->
<!--                            <li class="share__item"><a-->
<!--                                        class="link link__control share__link fa fa_icon_pinterest i-bem"-->
<!--                                        data-bem='{"link":{}}' role="link" href="#" title="pinterest"></a></li>-->
<!--                            <li class="share__item"><a class="link link__control share__link fa fa_icon_rss i-bem"-->
<!--                                                       data-bem='{"link":{}}' role="link" href="#" title="rss"></a>-->
<!--                            </li>-->
<!--                            <li class="share__item"><a class="link link__control share__link fa fa_icon_heart i-bem"-->
<!--                                                       data-bem='{"link":{}}' role="link" href="#" title="like"></a>-->
<!--                            </li>-->
<!--                        </ul>-->
                    </div>
                </div>
                <?php comments_template(); ?>
            </div>
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
