<?php setPostViews(get_the_ID()); ?>
<div class="content__container container">
    <main class="main">
        <div class="main__center-column">
            <div class="post">
<!--                --><?php //if(get_the_post_thumbnail_url()) : ?>
<!--                    <img class="image post__image" src="--><?php //the_post_thumbnail_url(); ?><!--" alt="--><?php //the_title(); ?><!--" title="--><?php //the_title(); ?><!--">-->
<!--                --><?php //endif; ?>
                <h3 class="h h_type_3 post__title"><?php the_title(); ?></h3>
<!--                <p class="text post__date">--><?php //echo date('Y.m.d', strtotime($post->post_date)); ?><!--</p>-->
                <?php echo $post->post_content; ?>
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
