<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/hero'); ?>
<main id="main" class="main" role="main">

    <div class="swrap">
        <h1 class="nicetitle nicetitle--accent">
            <?php the_title(); ?>
            <em><?php the_field('subtitle'); ?></em>
        </h1>
        <div class="lead">
            <?php the_content(); ?>
        </div>
    </div>

    <div class="swrap swrap--dark picandtext bordered patternized">
        <figure class="picandtext__foto">
            <?php if ($sideill=get_field('sideill')) :?>
            <?php echo wp_get_attachment_image( $sideill['ID'], 'full' ); ?>
            <?php endif; ?>
        </figure>
        <div class="picandtext__content copytext">
            <?php the_field('content_one'); ?>
        </div>
    </div>


    <div class="swrap patternized bordered">
        <div class="twocolumns copytext">
            <?php the_field('content_two'); ?>
        </div>
    </div>

    <?php if ( $gallery = get_field('gallery') ) : ?>
    <?php $gallery = get_field('gallery');  ?>
    <?php else: ?>
    <?php $gallery = get_field('gallery',6); ?>
    <?php endif; ?>
    <section id="imageswipe" class="imageswipe imageswipe--tiny psgallery" itemscope
        itemtype="http://schema.org/ImageGallery">
        <?php foreach( $gallery as $image ): ?>
        <?php $ratiotext=$image['width'].'x'.$image['height']; ?>
        <figure class="imageswipe__item" itemscope="" itemtype="http://schema.org/ImageObject">
            <a href="<?php echo $image['url']; ?>" data-size="<?= $ratiotext ?>">
                <?php echo wp_get_attachment_image( $image['ID'], 'medium' ); ?>
            </a>
            <?php if ($image['caption'] !==''): ?>
            <figcaption><?php echo $image['caption']; ?></figcaption>
            <?php endif; ?>
        </figure>
        <?php endforeach; ?>
    </section>
    <?php get_template_part('templates/pswp'); ?>



    <?php get_template_part('templates/globalmsg'); ?>


</main>
<?php endwhile; ?>