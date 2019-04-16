<section class="hero hero--notop">
    <div class="hero__content">
        <h2 class="hero__caption"><?php the_field('hero_caption'); ?></h2>
        <p class="hero__subcaption">
            <?php the_field('hero_subcaption'); ?>
        </p>
        <a href="<?php the_field('hero_btntarget'); ?>" class="fauxbtn"><?php the_field('hero_btntext'); ?></a>
    </div>
    <figure class="hero__fig">
        <img src="http://placehold.it/1200x1000/4e4e4e/" alt="" />
    </figure>
</section>