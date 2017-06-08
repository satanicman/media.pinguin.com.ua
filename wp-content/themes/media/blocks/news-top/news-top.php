
<?php
// параметры по умолчанию
$args = array(
    'numberposts' => 4,
    'category'    => 4,
    'orderby'     => 'RAND()'
);

$posts = get_posts( $args );

if($posts) :
?>
<div class="news-top clearfix content__news-top">
    <ul class="news-top__list">
        <?php foreach($posts as $post) : setup_postdata($post) ?>
        <li class="news news_type_plate news-top__item">
            <a href="<?php echo get_post_permalink($post->ID); ?>" title="<?php echo $post->post_title ?>" class="news__link">
                <?php
                    $thumb = get_the_post_thumbnail_url($post);
                    if($thumb) :
                ?>
                    <img class="image news__image img-responsive" src="<?php echo $thumb; ?>" title="<?php echo $post->post_title; ?>">
                <?php endif; ?>
                <div class="news__content">
                    <?php
                        $tags = wp_get_post_tags($post->ID);
                        if($tags && count($tags) > 0) :
                    ?>
                        <p class="rubric-plate rubric-plate_color_green news__rubric"><?php echo $tags['0']->name; ?></p>
                    <?php endif; ?>
                    <p class="text news__description"><?php echo $post->post_title;  ?></p>
                </div>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>