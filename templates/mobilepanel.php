<section class="mobilepanel">
    <div class="mobilepanel__inner">
        <?php
            // if (has_nav_menu('services_navigation')) :
            //     wp_nav_menu(['theme_location' => 'services_navigation', 'menu_class' => 'menu menu--mobile']);
            // endif;
        ?>
        <ul class="menu menu--mobile">
            <li class="is-active"><a href="/">Stúdió</a></li>
            <li><a href="prices.html">Árak</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="contact.html">Kapcsolat</a></li>
        </ul>
        <a href="#" class="mobilepanelclose"><img
                src="<?= get_stylesheet_directory_uri(); ?>/assets/images/icons/circle-with-cross.svg" alt="" />
        </a>
    </div>
</section>