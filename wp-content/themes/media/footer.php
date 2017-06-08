
</section>
<footer class="footer">
    <div class="footer__container container">
        <div class="socials footer__socials col-lg-12">
            <ul class="socials__list">
                <li class="socials__item">
                    <a class="link link__control socials__link i-bem" data-bem='{"link":{}}' role="link" href="#" title="Facebook">
                        <span class="link__icon"><i class="fa fa_icon_facebook socials__icon"></i>
                        </span>
                        <p class="text socials__text">Facebook</p>
                    </a>
                </li>
                <li class="socials__item">
                    <a class="link link__control socials__link i-bem" data-bem='{"link":{}}' role="link" href="#" title="Twitter">
                        <span class="link__icon"><i class="fa fa_icon_twitter socials__icon"></i>
                        </span>
                        <p class="text socials__text">Twitter</p>
                    </a>
                </li>
                <li class="socials__item">
                    <a class="link link__control socials__link i-bem" data-bem='{"link":{}}' role="link" href="#" title="Google +">
                        <span class="link__icon"><i class="fa fa_icon_google-plus socials__icon"></i>
                        </span>
                        <p class="text socials__text">Google +</p>
                    </a>
                </li>
                <li class="socials__item">
                    <a class="link link__control socials__link i-bem" data-bem='{"link":{}}' role="link" href="#" title="Linkedin">
                        <span class="link__icon"><i class="fa fa_icon_linkedin socials__icon"></i>
                        </span>
                        <p class="text socials__text">Linkedin</p>
                    </a>
                </li>
                <li class="socials__item">
                    <a class="link link__control socials__link i-bem" data-bem='{"link":{}}' role="link" href="#" title="Instagram">
                        <span class="link__icon"><i class="fa fa_icon_instagram socials__icon"></i>
                        </span>
                        <p class="text socials__text">Instagram</p>
                    </a>
                </li>
                <li class="socials__item">
                    <a class="link link__control socials__link i-bem" data-bem='{"link":{}}' role="link" href="#" title="Vimeo">
                        <span class="link__icon"><i class="fa fa_icon_vimeo socials__icon"></i>
                        </span>
                        <p class="text socials__text">Vimeo</p>
                    </a>
                </li>
                <li class="socials__item">
                    <a class="link link__control socials__link i-bem" data-bem='{"link":{}}' role="link" href="#" title="Youtube">
                        <span class="link__icon"><i class="fa fa_icon_youtube-play socials__icon"></i>
                        </span>
                        <p class="text socials__text">Youtube</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-xs-12">
            <div class="row">
                <div class="footer-col footer__col col-lg-4">
                    <a href="<?php echo get_site_url(); ?>" title="<?php echo get_bloginfo('name'); ?>" class="footer__logo"><img class="image footer__logo-image img-responsive" src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/06/0X9Bl8HYeoXBOPoY5uhNFHQLy9M.png" alt="footer logo" title="<?php echo get_bloginfo('name'); ?>"></a>
                    <p class="text footer__slogan">При использовании материалов сайта обязательным условием является наличие гиперссылки в пределах первого абзаца на страницу расположения исходной статьи с указанием бренда издания Buying press Материалы с пометками "Новости компаний"
                        и PR публикуются на правах рекламы.</p>
                </div>
                <div class="footer-col footer-col_space_top footer__col col-lg-4 col-sm-6">
                    <h4 class="h h_type_4 footer-header">Меню</h4>
                    <div class="footer-menu">
                        <ul class="footer-menu__list clearfix">
                            <?php wp_nav_menu( array(
                                    'theme_location' => 'footer_menu',
                                    'menu_class' => 'footer_menu_list clearfix',
                                    'container' =>false,
                                    'item_class' => 'footer-menu__item',
                                    'link_class' => 'footer-menu__link link link__control',
                                    'walker' => new description_walker()
                            ) ); ?>
                        </ul>
                    </div>
                </div>
                <div class="footer-col footer-col_space_top footer__col col-lg-4 col-sm-6">
                    <h4 class="h h_type_4 footer-header">Подписаться на рассылку:</h4>
                    <?php
                    if ( function_exists('dynamic_sidebar') )
                        dynamic_sidebar('footer_subscribe');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright footer__copyright">
        <div class="container">
            <p class="text copyright__text">BuyingPress @ 2017 ВСЕ ПРАВА ЗАЩИЩЕНЫ</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>