<?php
/**
 * Template Name: Compact Page Template with Hero
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/hero'); ?>
<main id="main" class="main" role="main">
    <div class="swrap patternized picandtext">
        <figure class="picandtext__foto">
            <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/jonas-diana-sminktetovalo.jpg"
                alt="Jónás Diána, Sminktetováló művész" />
        </figure>
        <div class="picandtext__content">
            <div class="copytext">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>
<?php endwhile; ?>