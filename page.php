<?php while (have_posts()) : the_post(); ?>

<main class="main swrap" role="main">
    <div class="row">
        <div class="col-xs">
            <?php get_template_part('templates/page', 'header'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <?php get_template_part('templates/content', 'page'); ?>
        </div>
        <div class="col-xs-6">
            <?php get_template_part('templates/content', 'page'); ?>
        </div>
    </div>
</main>
<?php endwhile; ?>