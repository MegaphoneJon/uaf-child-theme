<?php
$title = get_field('title');
$copy_left_column = get_field('copy_left_column');
$copy_right_column = get_field('copy_right_column');
$primary_button = get_field('primary_button');
$secondary_button = get_field('secondary_button');
$logos = get_field('logos');

?>
<section class="text-block <?php if ($logos) { ?> text--has-logos  <?php } ?> <?php echo $block['className']; ?>">
    <div class="container">
        <?php if ($title) { ?>
            <div class="text__title">
                <h2 class="h2"><?php echo $title; ?></h2>
            </div>
        <?php } ?>
        <div class="text__inner">
            <div class="text__col">
                <div class="text__copy--left">
                    <?php echo $copy_left_column; ?>
                </div>

                <?php
                echo ($primary_button || $secondary_button) ? '<div class="text__buttons text__buttons--desk">' : ''; ?>
                    <?php
                    if ($primary_button) { ?>
                        <div class="text__primary-btn">
                            <?php
                            _get_template_part(
                                'templates/components/_btn',
                                [
                                    'field' => $primary_button,
                                    'class' => 'btn--primary btn--primary-black',
                                ]
                            ); ?>
                        </div>
                    <?php } ?>

                    <?php
                    if ($secondary_button) { ?>
                        <div class="text__secondary-btn">
                            <?php
                            _get_template_part(
                                'templates/components/_btn',
                                [
                                    'field' => $secondary_button,
                                    'class' => 'btn--secondary',
                                ]
                            ); ?>
                        </div>
                    <?php } ?>
                <?php
                echo ($primary_button || $secondary_button) ? '</div>' : ''; ?>
            </div>
            <div class="text__col">
                <div class="text__copy--right">
                    <?php echo $copy_right_column; ?>
                </div>
                <?php if ($logos) { ?> 
                <div class="text__logos">
                    <?php foreach ($logos as $logo) {
                        $image = $logo['logo'];
                        ?>
                        <div class="text__logo">
                        <?php _get_template_part('templates/components/_image-id', ['field' => $image, 'sizes' => 'full']); ?>

                    </div>
                        <?php
                    } ?>
                </div>
                <?php } ?>

                <?php
                echo ($primary_button || $secondary_button) ? '<div class="text__buttons text__buttons--mob">' : ''; ?>
                    <?php
                    if ($primary_button) { ?>
                    <div class="text__primary-btn">
                        <?php
                        _get_template_part(
                            'templates/components/_btn',
                            [
                                'field' => $primary_button,
                                'class' => 'btn--primary btn--primary-black',
                            ]
                        ); ?>
                    </div>
                    <?php } ?>

                    <?php
                    if ($secondary_button) { ?>
                    <div class="text__secondary-btn">
                        <?php
                        _get_template_part(
                            'templates/components/_btn',
                            [
                                'field' => $secondary_button,
                                'class' => 'btn--secondary',
                            ]
                        ); ?>
                    </div>
                    <?php } ?>

                <?php
                echo ($primary_button || $secondary_button) ? '</div>' : ''; ?>
            </div>
        </div>
    </div>
</section>

                