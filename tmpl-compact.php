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
            <?php if ($sideill=get_field('sideill')) :?>
            <?php echo wp_get_attachment_image( $sideill['ID'], 'full' ); ?>
            <?php else: ?>
            <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/jonas-diana-sminktetovalo.jpg"
                alt="Jónás Diána, Sminktetováló művész" />
            <?php endif; ?>
        </figure>
        <div class="picandtext__content">
            <div class="copytext">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>
<?php endwhile; ?>