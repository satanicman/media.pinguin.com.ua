<form role="search" method="get" action="<?php echo get_site_url(); ?>" id="searchform" class="mobile-menu-form mobile-menu__form">
    <span class="input mobile-menu-form__input i-bem" data-bem='{"input":{}}'>
        <span class="input__box"><input class="input__control" name="s" id="s" placeholder="Поиск по сайту" value="<?php echo get_search_query(); ?>"></span>
    </span>
    <button type="submit" class="button button__control mobile-menu-form__button fa fa_icon_search i-bem" data-bem='{"button":{}}' role="button"></button>
</form>
