<?php
$posts = get_query_var( 'list' );

if($posts && count($posts)) :
?>
<ul class="news-list">
    <?php foreach ($posts as $post) : $post = (object)$post; setup_postdata((object)$post); ?>
    <li class="news-list__item">
        <a class="link link__control news__link i-bem" data-bem='{"link":{}}' role="link" tabindex="0" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <div class="news news_type_list">
                <div class="news__image">
                    <?php
                        if(get_the_post_thumbnail_url()) :
                    ?>
                        <img class="image" src="<?php the_post_thumbnail_url(); ?>" title="<?php echo $post->post_title; ?>">
                    <?php endif; ?>
                </div>
                <div class="news-description news__description">
                    <h4 class="news-description__title"><?php the_title(); ?></h4>
                    <p class="news-description__info"><span class="news-description__date"><?php echo date('Y.m.d', strtotime($post->post_modified)); ?></span><span class="news-description__comments fa fa_icon_comments-o"><?php echo $post->comment_count; ?></span>
                    </p>
                    <p class="news-description__text"><?php echo wp_trim_words( strip_tags(get_the_content()), 50, ' (...)' ); ?></p>
                </div>
            </div>
        </a>
    </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>