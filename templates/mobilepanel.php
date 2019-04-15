<section class="mobilepanel">
    <div class="mobilepanel__inner">
        <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--mobile']);
            endif;
        ?>
        <a href="#" class="mobilepanelclose"><img
                src="<?= get_stylesheet_directory_uri(); ?>/assets/images/icons/circle-with-cross.svg" alt="" />
        </a>
    </div>
</section>
