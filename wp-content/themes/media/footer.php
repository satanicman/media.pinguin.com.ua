
</section>
<footer class="footer">
    <div class="footer__container container">
        <div class="socials footer__socials col-lg-12">
            <?php
            if ( function_exists('dynamic_sidebar') )
                dynamic_sidebar('socials');
            ?>
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
<div class="banner banner__main banner-main" id="banner-main"></div>
<?php wp_footer(); ?>
</body>
</html>