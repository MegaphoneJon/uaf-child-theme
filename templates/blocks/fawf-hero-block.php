<?php
$hero_type = get_field('hero_type');
$circle_color = get_field('circle_color');
$main_hero_title = get_field('main_hero_title');
$title = get_field('title');
$subtitle = get_field('subtitle');
$copy = get_field('copy');
$primary_btn = get_field('primary_button');
$secondary_btn = get_field('secondary_button');
$image = get_field('image');
$bg_color = get_field('bg_color');
$paragraph_1 = get_field('paragraph_1');
$paragraph_2 = get_field('paragraph_2');
$featured_image_url = get_the_post_thumbnail_url();
$image_position = get_field('image_position');
$image_size = get_field('image_size');
$title_graphic = get_field('title_graphic');

?>
<section class="hero hero-block <?php echo $hero_type; ?> <?php echo $bg_color; ?>-bg <?php echo $block['className']; ?>">
    <div class="hero__inner">
        <div class="hero__content">
            <?php if ($hero_type === 'main-hero') : ?>
                <div class="hero__title--main hero__title--main-gen hero__title--main-hero">
                    <img src="<?php echo $title_graphic['url']; ?>" alt="<?php echo $title_graphic['alt']; ?>">
                </div>
                <p class="hero__subtitle"><?php echo $subtitle; ?></p>
                <?php if ($primary_btn) : ?>
                    <div class="hero__buttons">
                        <a href="<?php echo $primary_btn['url']; ?>" class="btn button button--dark"><?php echo $primary_btn['title']; ?></a>
                        <?php if ($secondary_btn) : ?>
                            <a href="<?php echo $secondary_btn['url']; ?>" class="btn btn--secondary"><?php echo $secondary_btn['title']; ?></a>
                        <?php endif; ?> <!-- end secondary btn if -->
                    </div>
                <?php endif; ?> <!--- end primary btn if -->
            <?php elseif ($hero_type === 'page-banner') : ?>
                <div class="hero__title--main hero__title--main-gen">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="hero__copy"><?php echo $copy; ?></div>
                <?php if ($primary_btn) : ?>
                    <div class="hero__buttons">
                        <a href="<?php echo $primary_btn['url']; ?>" class="btn button button--dark"><?php echo $primary_btn['title']; ?></a>
                        <?php if ($secondary_btn) : ?>
                            <a href="<?php echo $secondary_btn['url']; ?>" class="btn btn--secondary"><?php echo $secondary_btn['title']; ?></a>
                        <?php endif; ?> <!-- end secondary btn if -->
                    </div>
                <?php endif; ?> <!--- end primary btn if -->
            <?php else : ?>
                <?php if ($paragraph_1) : ?>
                    <div class="hero__paragraph"><?php echo $paragraph_1; ?></div>
                <?php endif; ?>
                <?php if ($paragraph_2) : ?>
                    <div class="hero__paragraph"><?php echo $paragraph_2; ?></div>
                <?php endif; ?>
            <?php endif; ?>
        </div>


      <div class="hero__img">
            <div class="img" style="background-image:url('<?php echo (($hero_type === 'main-hero') || ($hero_type === 'page-banner')) ? $featured_image_url : $image; ?>'); background-position:<?php echo $image_position; ?>; background-size:cover;" ;></div>
            <div class="hero__accent-circle <?php echo $circle_color; ?>"></div>
         
            </div>
 


    </div> <!-- End hero__inner -->
</section> <!-- End hero -->