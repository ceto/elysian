<section class="mobilepanel">
    <div class="mobilepanel__inner">
        <a href="<?= esc_url(home_url('/')); ?>" class="mobilepanel__logo">
            <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/logorose.svg"
                alt="<?php bloginfo('name'); ?>" />
        </a>
        <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--mobile']);
            endif;
        ?>
        <?php
            if (has_nav_menu('services_navigation')) :
                wp_nav_menu(['theme_location' => 'services_navigation', 'menu_class' => 'menu menu--mobile menu--mobile--services']);
            endif;
        ?>
        <a href="#" class="mobilepanelclose"><img
                src="<?= get_stylesheet_directory_uri(); ?>/assets/images/icons/circle-with-cross.svg" alt="" />
        </a>
    </div>
</section>