<!DOCTYPE html>
<html class="ua_js_no">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <script>
        (function(e, c) {
            e[c] = e[c].replace(/(ua_js_)no/g, "$1yes");
        })(document.documentElement, "className");
    </script>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="/favicon.ico">
</head>

<body class="page page_theme_media reset normalize bootstrap">
<header class="header">
    <div class="container">
        <div class="banner banner_top">
            <a class="link link__control banner__link" role="link" href="#" title="top banner"><img class="image banner__image" src="<?php echo get_template_directory_uri(); ?>/img/9AxGihQ_YNfq5UuVL1GUBVxej84.jpg" alt="banner top">
            </a>
        </div>
        <div class="logo logo_top">
            <a href="<?php echo get_site_url(); ?>" class="logo__link">
                <span class="logo__name"><?php echo get_bloginfo('name'); ?></span>
                <span class="logo__slogan"><?php echo get_bloginfo('description'); ?></span>
            </a>
        </div>
    </div>
    <div class="mobile-menu">
        <div class="container mobile-menu__container">
            <div class="mobile-menu-header mobile-menu__header collapsed" data-toggle="collapse" data-target="#mobile-menu" aria-expanded="false">
                <div class="mobile-menu-header__name">Меню</div>
                <button class="mobile-menu-header__button fa fa_icon_times"></button>
            </div>
            <div class="mobile-menu-collapsed collapse" id="mobile-menu">
                <?php wp_nav_menu( array(
                        'theme_location' => 'main_menu',
                        'menu_class' => 'mobile-menu-nav mobile-menu__nav',
                        'container' => false,
                        'item_class' => 'mobile-menu-nav__item',
                        'link_class' => 'mobile-menu-nav__link link link__control',
                        'walker' => new description_walker()
                    ) ); ?>
                <?php echo get_search_form(); ?>
            </div>
        </div>
    </div>
</header>
<section class="content">
