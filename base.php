<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('templates/head'); ?>

<body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="document" role="document">
        <?php include Wrapper\template_path(); ?>
    </div><!-- /.document -->
    <?php do_action('get_footer'); ?>
    <?php
      get_template_part('templates/footer');
      get_template_part('templates/mobilepanel');
    ?>
    <?php  wp_footer(); ?>
</body>

</html>