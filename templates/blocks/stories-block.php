<?php

$layout = get_field('layout');
$title = get_field('title');
$description = get_field('description');
$primary_btn = get_field('primary_btn');
$order_by = get_field('order_stories_by');

?>
<section class="stories-block stories <?php echo $layout; ?>">
    <div class="container">

        <?php if ($layout === 'overview') { ?>
            <div class="text-media__title text-media__title--desk">
                <h2 class="h2"><?php echo $title; ?></h2>
            </div>
            <div class="text-media__copy"><?php echo $description; ?></div>
            <a href="<?php echo $primary_btn['url']; ?>" class="btn button button--dark"><?php echo $primary_btn['title']; ?></a>

        <?php } ?>




        <?php

        $layout = get_field('layout');
        $title = get_field('title');
        $description = get_field('description');
        $primary_btn = get_field('primary_btn');
        $order_by = get_field('order_stories_by');

        $args = array(
            'post_type' => 'story',
            'orderby' => $order_by,
            'posts_per_page' => -1
        );

        $stories_query = new WP_Query($args);

        if ($stories_query->have_posts()) { ?>
            <div class="stories__story-grid">
                <?php while ($stories_query->have_posts()) {
                    $stories_query->the_post();
                    $title = get_the_title();
                    $excerpt = get_the_excerpt();
                    $featured_image = get_the_post_thumbnail_url();
                ?>
                    <div class="story">
                        <a href="<?php the_permalink(); ?>" class="story__link" aria-label="Read <?php echo $title; ?>'s Story" <?php if ($layout === 'expanded'){ echo 'tabindex="-1"';}?>>
                            <div class="story__image" style="background-image: url('<?php echo $featured_image; ?>');"></div>
                            <h2 class="story__link-title"><?php echo $title; ?></h2>
                        </a>
                        
                            <div class="story__content">
                                <div class="story__title">
                                    <h2><?php echo $title; ?></h2>
                                </div>
                                <?php if ($layout === 'expanded') { ?>
                                <div class="story__excerpt"><?php echo $excerpt; ?></div>
                                <a href="<?php the_permalink(); ?>" class="story__read-link">Read <?php echo $title; ?>'s Story</a>
                                <?php } ?>
                            </div>
                        
                    </div>
            <?php
                }
                wp_reset_postdata();
            }

            ?>
            </div> <!-- .stories__story-grid -->
    </div> <!-- .container -->

</section>