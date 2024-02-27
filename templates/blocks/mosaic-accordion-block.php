<?php
$title = get_field('title');
$title_mob = get_field('title_mobile');
$subtitle = get_field('subtitle');

$accordion_items = get_field('accordion_items'); //Repeater field




?>
<section class="large-accordion-block">
    <div class="container">
        <div class="large-accordion__title">
            <div class="title--mob">
                <?php echo $title_mob; ?>
            </div>
            <div class="title--desk">
                <?php echo $title; ?>
            </div>
        </div>
        <?php if($subtitle) { ?>
        <div class="large-accordion__subtitle">
            <?php echo $subtitle; ?>
        </div>
        <?php } ?>
        <div class="large-accordion__inner">

            <div class="accordion-col--1">

                <?php if (have_rows('accordion_items')) :
                    while (have_rows('accordion_items')) : the_row(); ?>
                   <div class="accordion-item__container">

                        <div class="accordion-item__heading js-accordion-item__heading">
                            <h3 class="h3"><?php the_sub_field('title'); ?></h3>
                            <div class="accordion-item__copy"><?php the_sub_field('copy'); ?></div> 
                        </div>

                        <?php
                         $count = count(get_sub_field('mosaic_copy'));

                        ?>

                        <div class="large-accordion__accordion-item accordion-item accordion-item__<?php the_sub_field('title'); ?> js-accordion-item <?php if (have_rows('mosaic_copy')) { echo 'mosaic__container'; } ?> <?php if (have_rows('mosaic_copy')) { echo 'mosaic__container'; } ?>--<?php if ($count) { echo $count; } ?>" aria-label="collapsed" aria-hidden="true" aria-labelledby="accordion-item__<?php the_sub_field('title'); ?>">
                            <?php if (have_rows('mosaic_copy')) : ?> 
                                <?php while (have_rows('mosaic_copy')) : the_row();  ?>
                                    <div class="accordion-item__content js-accordion-item__content <?php echo the_sub_field('block_color'); ?>">
                                        <div class="accordion-item__content-copy"><?php the_sub_field('block_content'); ?></div>
                                    </div>
                                <?php $row++;
                                endwhile; ?>

                            <?php endif; ?>
                        </div>
                        <div role="button" aria-expanded="false" aria-controls="accordion-item__<?php echo the_sub_field('title'); ?>" class="accordion-item__view-btn" tabindex="0">View Experiences</div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
</section>