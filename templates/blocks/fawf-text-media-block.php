<?php

use Civi\Api4\Action\AfformBehavior\Get;

$layout = get_field('layout');
$media_type = get_field('media_type');
$title = get_field('title');
$copy = get_field('copy');
$primary_btn = get_field('primary_button');
$secondary_btn = get_field('secondary_button');
$image = get_field('image');
$image_size = get_field('image_size');
$media_caption = get_field('media_caption');
$video_source = get_field('video_source');
$video_cover = get_field('video_cover');
$video = get_field('video');
$has_accordion = get_field('has_accordion');
$accordion = get_field('accordion');
$quote = get_field('quote');
$offwhite = get_field('off-white');
$add_block = get_field('add_block');
$color_blocks = get_field('color_blocks');
if (!$image_size) {
    $image_size = 'medium';
}
?>

<section class="text-media-block <?php if (!($layout == 'media-quote')) {
                                        echo 'extended';
                                    } ?> 
<?php echo $layout;
if ($offwhite) {
    echo ' offwhite-bg';
} ?>">
    <div class="container">
        <div class="text-media__inner  image-<?php echo $image_size; ?> <?php echo $layout; ?> <?php
                                                                                                if ($has_accordion && $accordion) {
                                                                                                ?> text-media__inner--accordion <?php } ?><?php if ($layout === 'media-quote') : ?>media-left <?php endif; ?>">
            <?php if ($title) { ?>
                <div class="text-media__title text-media__title--mob">
                    <h2 class="h2"><?php echo esc_html($title); ?></h2>
                </div>
            <?php } ?>
            <div class="text-media__col text-media__col-content">
                <div class="text-media__content">
                    <?php if ($title) { ?>
                        <div class="text-media__title  text-media__title--desk">
                            <h2 class="h2"><?php echo esc_html($title); ?></h2>
                        </div>
                    <?php } ?>
                    <div class="text-media__copy">
                        <?php echo $copy; ?>
                    </div>
                    <?php
                    if ($has_accordion && $accordion) {
                    ?>
                        <div class="text-media__accordion">
                            <?php foreach ($accordion as $accordion_item) {
                                $title = $accordion_item['title'];
                                $copy =  $accordion_item['copy'];
                                $cta =  $accordion_item['cta'];
                            ?>
                                <div class="text-media__accordion-item accordion-item js-accordion-item" aria-label="collapsed">
                                    <div class="accordion-item__heading js-accordion-item__heading">
                                        <h4 class="h4"><?php echo esc_html($title); ?></h4>
                                        <div class="accordion-item__icon js-accordion-item__icon">
                                            <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.30592 15.2175C4.49742 15.3375 4.66503 15.3976 4.80875 15.3977C4.9405 15.3979 5.12023 15.3202 5.34797 15.1648C5.58767 15.0093 5.8454 14.806 6.12114 14.5548C6.39688 14.3036 6.67865 14.0164 6.96645 13.6934C7.26622 13.3823 7.54801 13.0712 7.81184 12.7601C8.08765 12.449 8.33949 12.1499 8.56737 11.8627C8.79523 11.5875 8.97513 11.3601 9.10708 11.1806C9.28691 11.0131 9.40088 10.8456 9.44897 10.6779C9.50902 10.5223 9.53913 10.3666 9.53931 10.2109C9.53945 10.0792 9.50367 9.94142 9.43197 9.79762C9.36025 9.6658 9.27057 9.53396 9.16292 9.40209C9.05526 9.28221 8.9416 9.18028 8.82192 9.09631C8.70223 9.02432 8.59448 8.98827 8.49866 8.98816C8.48669 8.98815 8.4747 8.99412 8.46271 9.00609C8.39079 9.06589 8.28885 9.19154 8.15689 9.38302C8.0369 9.5865 7.89293 9.8139 7.72498 10.0652C7.55701 10.3285 7.37706 10.5978 7.18513 10.8731C6.99319 11.1603 6.79528 11.4236 6.59141 11.6629C6.50944 11.7651 6.42747 11.8597 6.34552 11.9467L6.34552 11.9406L6.34552 8.84577L6.34552 7.63802L6.34552 6.04027L6.34552 4.34187L6.34552 2.80703C6.54086 2.70638 6.67759 2.61831 6.75573 2.54283C6.81433 2.45896 6.84363 2.39186 6.84363 2.34154C6.76549 2.04799 6.68736 1.79218 6.60922 1.57412C6.53109 1.34766 6.42365 1.16315 6.28692 1.02056C6.13065 0.869596 5.92554 0.760564 5.67161 0.693466C5.41767 0.626369 5.07583 0.597014 4.64609 0.605402C4.54842 1.03315 4.47029 1.55315 4.41168 2.16541C4.35308 2.76928 4.31402 3.41929 4.29448 4.11542C4.25541 4.81155 4.22611 5.52865 4.20658 6.26672C4.18705 7.00479 4.17728 7.72189 4.17728 8.41802L4.17728 10.368L4.17728 11.7801C4.07263 11.6867 3.96717 11.5868 3.86089 11.4802C3.57375 11.2045 3.28065 10.8987 2.9816 10.563C2.69451 10.2394 2.4074 9.93364 2.12028 9.64588C1.84511 9.37011 1.57589 9.13626 1.31261 8.94435C1.04933 8.75243 0.803911 8.65634 0.576351 8.65609C0.456583 8.65596 0.360728 8.69179 0.288787 8.76357C0.216849 8.83535 0.162847 8.93111 0.126785 9.05084C0.078734 9.18253 0.0486341 9.32622 0.0364853 9.4819C0.0123478 9.64955 0.000188425 9.81721 4.35832e-06 9.98489C-0.000324672 10.2843 0.0173259 10.5718 0.0529542 10.8473C0.0766053 11.1228 0.100348 11.3144 0.124183 11.4222C0.626723 11.8659 1.08137 12.2976 1.48812 12.7172C1.90685 13.1369 2.30766 13.5146 2.69055 13.8504C2.83414 13.9703 2.99566 14.1202 3.17512 14.3C3.36655 14.4799 3.558 14.6478 3.74945 14.8037C3.9409 14.9716 4.12639 15.1095 4.30592 15.2175Z" fill="black" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="accordion-item__content js-accordion-item__content">
                                        <?php echo $copy; ?>
                                        <?php if ($cta) { ?>
                                            <div class="accordion-item__cta">
                                                <?php
                                                _get_template_part(
                                                    'templates/components/_btn',
                                                    [
                                                        'field' => $cta,
                                                        'class' => 'btn--primary btn--primary-black',
                                                    ]
                                                ); ?>
                                            </div>
                                        <?php } ?>
                                    </div>

                                </div>
                            <?php } ?>
                        </div>
                    <?php }
                    if ($add_block) {
                        get_template_part('templates/blocks/single-color-block', null, array('color_blocks' => $color_blocks));
                    }
                    if ($primary_btn || $secondary_btn) { ?>
                        <div class="text-media__btns btns-row">
                            <?php if ($primary_btn) { ?>
                                <div class="text-media__btn--primary">
                                    <?php
                                    _get_template_part(
                                        'templates/components/_btn',
                                        [
                                            'field' => $primary_btn,
                                            'class' => 'button button--dark',
                                        ]
                                    ); ?>
                                </div>
                            <?php } ?>
                            <?php if ($secondary_btn) { ?>
                                <div class="text-media__btn--secondary">
                                    <?php
                                    _get_template_part(
                                        'templates/components/_btn',
                                        [
                                            'field' => $secondary_btn,
                                            'class' => 'button button--dark',
                                        ]
                                    ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>

                </div>
            </div>
            <div class="text-media__col text-media__col-media">
                <div class="text-media__media">
                    <?php if ($media_type === 'image' && $image) {
                    ?>

                        <div class="text-media__image" style="background-image: url('<?php echo $image; ?>;')">
                        </div>
                        <?php if ($media_caption) { ?>
                            <div class="text-media__media-caption">
                                <p><?php echo $media_caption; ?></p>
                            </div>
                        <?php } ?>
                    <?php
                    } ?>
                    <?php if ($media_type === 'video') {
                    ?>
                        <div class="text-media__video">
                            <?php if ($video_source === 'youtube' && $video) {
                                _get_template_part('templates/components/_yt-video', ['url' => $video, 'cover' => $video_cover]);
                            }
                            if ($video_source === 'vimeo' && $video) {
                                _get_template_part('templates/components/_vimeo-video', ['url' => $video, 'cover' => $video_cover]);
                            } ?>
                            <?php if ($media_caption) { ?>
                                <div class="text-media__media-caption">
                                    <p><?php echo $media_caption; ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    <?php
                    } ?>
                    <?php if ($quote) { ?>
                        <div class="text-media__quote">
                            <div class="quote-copy"><?php echo $quote; ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>