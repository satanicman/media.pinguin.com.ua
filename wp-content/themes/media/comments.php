<div class="post__comments">
    <div class="comments">
        <?php if($comments && count($comments)) : ?>
        <h3 class="h h_type_3 comments__title">Комментариев: <?php echo count($comments); ?></h3>
        <ul class="comments__list">
            <?php wp_list_comments(array('avatar_size' => 100, 'walker' => new Walker_Comment_Override())); ?>
<!--            --><?php //foreach ($comments as $comment) : ?>
<!--            <li class="comments__item">-->
<!--                <div class="comment">-->
<!--                    <div class="comment__avatar">-->
<!--                        --><?php //echo get_avatar( $comment, 100, false, false, array('class'=> 'image comment__image img-responsive') ); ?>
<!--                    </div>-->
<!--                    <div class="comment__content">-->
<!--                        <div class="comment__header">-->
<!--                            <div class="comment__info">-->
<!--                                <div class="comment__date">--><?php //echo date('Y.m.d', strtotime($comment->post_date)); ?><!--</div>-->
<!--                                <div class="comment__name">--><?php //echo $comment->comment_author; ?><!--</div>-->
<!--                            </div>-->
<!--                            <div class="comment__button">-->
<!--                                <button class="button button__control i-bem"-->
<!--                                        data-bem='{"button":{}}' role="button" type="button"><span-->
<!--                                        class="button__text">ответить</span></button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="comment__description">--><?php //echo $comment->comment_content; ?><!--</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--            --><?php //endforeach; ?>
        </ul>
        <?php endif; ?>
        <div class="comments__form">
                <?php comment_form(array(
                    'fields' => array(
                        'author' => '<span class="input comments-form__input i-bem" data-bem=\'{"input":{}}\'><span class="input__box"><input class="input__control" id="author" name="author" placeholder="' . __( 'Name' ) . ( $req ? '*' : '' ) . '" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . '></span></span>',
                        'email' => '<span class="input comments-form__input i-bem" data-bem=\'{"input":{}}\'><span class="input__box"><input class="input__control" id="email" name="email" placeholder="' . __( 'Email' ) . ( $req ? '*' : '' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . '></span></span>'
                    ),
                    'comment_field' => '<span class="comments-form__textarea i-bem" data-bem=\'{"comments-form__textarea":{}}\'><textarea class="textarea textarea__control i-bem" data-bem=\'{"textarea":{}}\' id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' . _x( 'Comment', 'noun' ) . '"></textarea></span>',
                    'submit_button' => '<button class="button button__control comments-form__button i-bem" data-bem=\'{"button":{}}\' role="button" type="submit">Отправить</button>',
                    'title_reply' => '<h4 class="comments-form__title">Оставить комментарий</h4>',
                    'comment_notes_before' => '',
                    'class_form' => 'comments-form__form'
                )); ?>
<!--            <div class="comments-form"><h4 class="comments-form__title">Оставить комментарий</h4>-->
<!--                <form class="comments-form__form" method="POST" id="commentform" action="--><?php //echo get_site_url(); ?><!--/wp-comments-post.php">-->
<!--                    <span class="input comments-form__input i-bem" data-bem='{"input":{}}'><span class="input__box"><input class="input__control" name="name" placeholder="Имя"></span></span>-->
<!--                    <span class="input comments-form__input i-bem" data-bem='{"input":{}}'>-->
<!--                        <span class="input__box">-->
<!--                            <input class="input__control" name="email" placeholder="Email">-->
<!--                        </span>-->
<!--                    </span>-->
<!--                    <div class="comments-form__textarea i-bem" data-bem='{"comments-form__textarea":{}}'><textarea class="textarea textarea__control i-bem" data-bem='{"textarea":{}}' name="comment" placeholder="Сообщение"></textarea></div>-->
<!--                    <label class="comments-form__file-label" for="comments-form__file">Добавить фото к комментарию</label><input class="comments-form__file" type="file" name="file" id="comments-form__file">-->
<!--                    <button class="button button__control comments-form__button i-bem" data-bem='{"button":{}}' role="button" type="submit">Отправить</button>-->
<!--                </form>-->
<!--            </div>-->
        </div>
    </div>
</div>