<aside class="toprow">
    <a href="tel:+36702996999">Időpontfoglalás: +36 70 299 6999</a>
</aside>
<header class="siteheader siteheader--dark swrap swrap--full swrap--narrow">
    <a href="<?= esc_url(home_url('/')); ?>" class="siteheader__logo">
        <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/logorose.svg" alt="<?php bloginfo('name'); ?>" />
    </a>
    <nav class="siteheader__nav">
        <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--main']);
            endif;
        ?>
        <a href="#mobilepanel" class="menubutton">Menü</a>
    </nav>
</header>