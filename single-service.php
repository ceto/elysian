<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/hero'); ?>
<main id="main" class="main" role="main">

    <div class="swrap">
        <h1 class="nicetitle nicetitle--accent"><?php the_title(); ?></h1>
        <div class="lead">
            <?php the_content(); ?>
        </div>
    </div>

    <div class="swrap swrap--dark picandtext bordered patternized">
        <figure class="picandtext__foto">
            <img src="//source.unsplash.com/random/800x1200/?beuty,makeup" alt="<?php the_title(); ?>" />
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

    <section id="imageswipe" class="imageswipe imageswipe--tiny" itemscope itemtype="http://schema.org/ImageGallery">
        <figure class="imageswipe__item">
            <a href="#"><img src="//source.unsplash.com/random/800x600/?beuty,makeup" alt=""/></a>
        </figure>
        <figure class="imageswipe__item">
            <a href="#"><img src="//source.unsplash.com/random/600x800/?beuty,makeup" alt=""/></a>
        </figure>
        <figure class="imageswipe__item">
            <a href="#"><img src="//source.unsplash.com/random/800x500/?beuty,makeup" alt=""/></a>
        </figure>
        <figure class="imageswipe__item">
            <a href="#"><img src="//source.unsplash.com/random/800x1200/?beuty,makeup" alt=""/></a>
        </figure>
        <figure class="imageswipe__item">
            <a href="#"><img src="//source.unsplash.com/random/800x1600/?beuty,makeup" alt=""/></a>
        </figure>
        <figure class="imageswipe__item">
            <a href="#"><img src="//source.unsplash.com/random/600x1000/?beuty,makeup" alt=""/></a>
        </figure>
        <figure class="imageswipe__item">
            <a href="#"><img src="//source.unsplash.com/random/700x520/?beuty,makeup" alt=""/></a>
        </figure>
        <figure class="imageswipe__item">
            <a href="#"><img src="//source.unsplash.com/random/12800x700/?beuty,makeup" alt=""/></a>
        </figure>
        <figure class="imageswipe__item">
            <a href="#"><img src="//source.unsplash.com/random/700x1000/?beuty,makeup" alt=""/></a>
        </figure>
        <figure class="imageswipe__item">
            <a href="#"><img src="//source.unsplash.com/random/800x1200/?beuty,makeup" alt=""/></a>
        </figure>
        <figure class="imageswipe__item">
            <a href="#"><img src="//source.unsplash.com/random/600x470/?beuty,makeup" alt=""/></a>
        </figure>
        <figure class="imageswipe__item">
            <a href="#"><img src="//source.unsplash.com/random/800x1200/?beuty,makeup" alt=""/></a>
        </figure>
    </section>


    <?php get_template_part('templates/globalmsg'); ?>


</main>
<?php endwhile; ?>
