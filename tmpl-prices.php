<?php
/**
 * Template Name: Prices Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<main id="main" class="main" role="main">
    <div class="swrap swrap--notop patternized">
        <div class="row center-xs">
            <div class="col-lg-6 show-for-desktop">
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/jonas-diana-sminktetovalo.jpg"
                    alt="Jónás Diána, Sminktetováló művész" />
            </div>
            <div class="col-lg-6">
                <div class="pricetable">
                    <header class="pricetable__head">
                        <h1>
                            <?php if ( $prtbl_subtitle=get_field('prtbl_subtitle') ) :?>
                            <small><?= $prtbl_subtitle ?></small>
                            <?php endif; ?>
                            <?php the_field('prtbl_title'); ?>
                        </h1>
                    </header>
                    <dl class="pricelist">
                        <?php while( have_rows('prices') ) : the_row(); ?>
                        <dt <?= !get_sub_field('price')?'class="selector"':''; ?>>
                            <?php
                            $pritem=get_sub_field('title')."\n";
                            if ( $description=get_sub_field('description')) {
                                $pritem.= '<small>'.$description.'</small>'."\n";
                            }

                        ?>
                            <?php if ( $link=get_sub_field('link') ): ?>
                            <a href="<?= $link['url']; ?>"><?= $pritem;?></a>
                            <?php else: ?><?= $pritem;?><?php endif; ?>
                        </dt>
                        <?php if ($price=get_sub_field('price')) : ?>
                        <dd>
                            <?php
                            if ( $label=get_sub_field('label')) {
                                echo "\n".'<span>'.$label.'</span>'."\n";
                            }
                        ?>
                            <?php the_sub_field('price'); ?>
                        </dd>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </dl>
                    <?php if ( $prtbl_footer=get_field('prtbl_footer') ) :?>
                    <footer class="pricetable__foot">
                        <?= $prtbl_footer ?>
                    </footer>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php endwhile; ?>