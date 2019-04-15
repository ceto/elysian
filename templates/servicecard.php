<div class="servicecard">
    <h3 class="servicecard__title">
        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?><em><?php the_field('subtitle'); ?></em></a>
    </h3>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="servicecard__action fauxbtn">Tudj meg többet</a>
</div>