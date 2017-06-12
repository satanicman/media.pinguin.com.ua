<?php

    $populars = get_populars();

    if($populars && count($populars) > 0) :
?>
<div class="title title_color_blue main__title">
    <h2 class="h h_type_2">Популярные новости</h2>
</div>
<div class="popular-news main__popular-news">
    <div class="popular-news__main col-lg-6">
        <a href="<?php echo get_post_permalink($populars[0]->ID); ?>" title="<?php echo $populars[0]->post_title ?>" class="link link__control news__link">
            <div class="news news_type_popular">
                <?php
                    setup_postdata($populars[0]);
                    $thumb = get_the_post_thumbnail_url($populars[0]);
                    if($thumb) :
                ?>
                    <div class="news__image">
                        <img class="image img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $post->post_title; ?>">
                        <?php
                            $tags = wp_get_post_tags($populars[0]->ID);
                            if($tags && count($tags) > 0) :
                        ?>
                            <p class="rubric-plate rubric-plate_color_orange"><?php echo $tags['0']->name; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="news-description news__description">
                    <h4 class="news-description__title"><?php echo $populars[0]->post_title ?></h4>
                    <p class="news-description__info"><span class="news-description__date"><?php echo date('Y.m.d', strtotime($populars[0]->post_date)); ?></span><span class="news-description__comments fa fa_icon_comments-o"><?php echo $populars[0]->comment_count; ?></span>
                    </p>
                    <p class="news-description__text"><?php echo wp_trim_words( strip_tags(get_the_content()), 50, ' (...)' ); ?></p>
                </div>
            </div>
        </a>
    </div>
    <?php if (count($populars) > 1) : ?>
    <div class="popular-news__sub col-lg-6">
        <ul class="popular-news__list">
            <?php for($i = 1; $i < count($populars); $i++) : setup_postdata($populars[$i]); ?>
            <li class="popular-news__item">
                <a class="link link__control news__link i-bem" data-bem='{"link":{}}' role="link" tabindex="0" href="<?php echo get_post_permalink($populars[$i]->ID); ?>" title="<?php echo $populars[$i]->post_title; ?>">
                    <div class="news news_type_popular news_small">
                        <div class="news__image">
                            <?php
                                $thumb = get_the_post_thumbnail_url($populars[$i]);
                                if($thumb) :
                            ?>
                                <img class="image img-responsive" src="<?php echo $thumb; ?>" title="<?php echo $populars[$i]->post_title; ?>">
                            <?php endif; ?>
                        </div>
                        <div class="news-description news-description_size_small news__description">
                            <h4 class="news-description__title"><?php echo $populars[$i]->post_title; ?></h4>
                            <p class="news-description__info"><span class="news-description__date"><?php echo date('Y.m.d', strtotime($populars[$i]->post_date)); ?></span><span class="news-description__comments fa fa_icon_comments-o"><?php echo $populars[$i]->comment_count; ?></span>
                            </p>
                        </div>
                    </div>
                </a>
            </li>
            <?php endfor; ?>
        </ul>
    </div>
    <?php endif; ?>
</div>
<?php endif; ?>