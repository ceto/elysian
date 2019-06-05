<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/hero'); ?>
<main class="main">
    <section id="service" class="swrap apatternized aswrap--light atext-center aswrap--nobtm afeles">
        <div class="">
            <h2 class="nicetitle nicetitle--accent">
                Természetes hatású smink&shy;tetoválás
                <em>Tökéletesség, boldogság, harmónia</em>
            </h2>
            <div class="lead alead--accent alead--narrow">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </section>

    <section id="slister" class="slister">
        <div id="servicelist" class="servicelist swrap">
            <?php
                $args = array(
                    'post_type' => array('service'),
                    'order'               => 'ASC',
                    'orderby'             => 'menu_order',
                    'posts_per_page'         => -1
                );
                $the_services = new WP_Query( $args );
            ?>
            <?php while ($the_services->have_posts()) : $the_services->the_post(); ?>
            <?php setup_postdata( $post ); ?>
            <?php get_template_part('templates/servicecard'); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>

    <section id="bio" class="picandtext swrap patternized">
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
    </section>
    <?php get_template_part('templates/globalmsg'); ?>

    <?php if ( have_rows('testimonials') ) :  ?>
    <section id="testimonials" class="testimonials swrap aswrap--light apatternized abordered">
        <h2 class="nicetitle nicetitle--accent">
            Vendégeink mondták rólunk
            <em>Köszönjük, hogy minket választottak</em>
        </h2>
        <div class="glide" style="width:100%; max-width: 1200px; margin:0 auto">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <?php while ( have_rows('testimonials') ): the_row();  ?>
                    <li class="glide__slide">
                        <blockquote class="testicard">
                            <?php the_sub_field('text'); ?>
                            <cite>
                                <!-- <img src="//source.unsplash.com/random/200x200/?portraiture"
                                    alt="<?php the_sub_field('name'); ?>" /> -->
                                <?php the_sub_field('name'); ?>
                                <span> <?php the_sub_field('role'); ?></span></cite>
                        </blockquote>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </section>
    <?php endif; ?>


    <?php if ( $gallery = get_field('gallery') ) : ?>
    <section id="imageswipe" class="imageswipe psgallery" itemscope itemtype="http://schema.org/ImageGallery">
        <?php foreach( $gallery as $image ): ?>
        <?php $ratiotext=$image['width'].'x'.$image['height']; ?>
        <figure class="imageswipe__item" itemscope="" itemtype="http://schema.org/ImageObject">
            <a href="<?php echo $image['url']; ?>" data-size="<?= $ratiotext ?>">
                <?php echo wp_get_attachment_image( $image['ID'], 'medium_large' ); ?>
            </a>
            <?php if ($image['caption'] !==''): ?>
            <figcaption><?php echo $image['caption']; ?></figcaption>
            <?php endif; ?>
        </figure>
        <?php endforeach; ?>
    </section>
    <?php get_template_part('templates/pswp'); ?>
    <?php endif; ?>


</main>
<?php endwhile; ?>