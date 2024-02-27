<?php
$quote_bg = get_field('quote_bg');
$quote = get_field('quote');
$quote_attr = get_field('quote_attribution');
$image = get_field('image');
$image_tab = get_field('image_tab');
$image_mob = get_field('image_mob');
$image_caption = get_field('image_caption');
?>


<section class="quote-block layout--image left-quote <?php echo $layout . ' ';  echo $quote_bg; ?>">
    <div class="quote__inner">
        <div class="quote__copy">
            <?php echo $quote; ?>
        </div>
        <div class="quote__attribution">
            <p class="h4"><?php echo $quote_attr; ?></p>
        </div>
        
    </div>
            <div class="quote__image-group">
                <div class="quote__image quote__image--desk">
                    <?php _get_template_part('templates/components/_image-id', ['field' => $image, 'sizes' => 'full', 'alt' => $image_caption]); ?>
                </div>
                <div class="quote__image quote__image--tab">
                    <?php _get_template_part('templates/components/_image-id', ['field' => $image_tab, 'sizes' => 'full', 'alt' => $image_caption]); ?>
                </div>
                <div class="quote__image quote__image--mob">
                    <?php _get_template_part('templates/components/_image-id', ['field' => $image_mob, 'sizes' => 'full', 'alt' => $image_caption]); ?>
                </div>
                <div class="quote__image-caption">
                    <p><?php echo $image_caption; ?></p>
                </div>
            </div>
</section>