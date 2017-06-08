<?php
$posts = get_query_var( 'list' );

if($posts && count($posts)) :
?>
<ul class="news-list">
    <?php for ($i = 0; $i < count($posts); $i++) : $posts[$i] = (array)$posts[$i];  setup_postdata((object)$posts[$i]); ?>
    <li class="news-list__item">
        <a class="link link__control news__link i-bem" data-bem='{"link":{}}' role="link" tabindex="0" href="<?php echo get_post_permalink($posts[$i]['ID']); ?>" title="<?php echo $posts[$id]['post_title']; ?>">
            <div class="news news_type_list">
                <div class="news__image">
                    <?php
                        $thumb = get_the_post_thumbnail_url((object)$posts[$i]);
                        if($thumb) :
                    ?>
                        <img class="image" src="<?php echo $thumb; ?>" title="<?php echo $posts[$i]['post_title']; ?>">
                    <?php endif; ?>
                </div>
                <div class="news-description news__description">
                    <h4 class="news-description__title"><?php echo $posts[$i]['post_title']; ?></h4>
                    <p class="news-description__info"><span class="news-description__date"><?php echo date('Y.m.d', strtotime($posts[$i]['post_modified'])); ?></span><span class="news-description__comments fa fa_icon_comments-o"><?php echo $posts[$i]['comment_count']; ?></span>
                    </p>
                    <p class="news-description__text"><?php echo get_the_excerpt(); ?></p>
                </div>
            </div>
        </a>
    </li>
    <?php endfor; ?>
</ul>
<?php endif; ?>