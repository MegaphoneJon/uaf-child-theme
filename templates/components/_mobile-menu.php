<?php
$logo_mob = get_field('header_logo_mobile', 'options');
$btn = get_field('header_button', 'options');
$address = get_field('address', 'options');
$phone = get_field('phone', 'options');
?>
<div class="mobile-menu">
    <div class="mobile-menu__inner">
        <div class="mobile-menu__top-line">
            <a class="mobile-menu__logo" href="<?php echo esc_url(get_home_url()); ?>" aria-label="Navigate to Homepage" tabindex="-1">
                <?php
                if ($logo_mob) {
                    _get_template_part(
                        'templates/components/_image-id',
                        ['field' => $logo_mob, 'sizes' => 'full', 'alt' => 'Header logo']
                    );
                }
                ?>
            </a>
            <div class="wrapper">
                <div class="mobile-menu__button">
                    <?php
                    _get_template_part(
                        'templates/components/_btn',
                        [
                            'field' => $btn,
                            'class' => 'btn--primary btn--primary-purple',
                        ]
                    ); ?>

                </div>
                <div class="btn--cross js-menu--close">
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="0.14209" width="20" height="3" transform="rotate(45 3 0.14209)" fill="black" />
                        <rect x="1" y="14.1421" width="20" height="3" transform="rotate(-45 1 14.1421)" fill="black" />
                    </svg>

                </div>
            </div>
        </div>
        <div class="mobile-menu__content">
            <div class="wrapper">
                <div class="mobile-menu__search">
                    <?php _get_template_part('../uaf-child/templates/components/_search-form'); ?>
                </div>
                <div class="mobile-menu__nav">
                    <nav id="site-navigation" class="mobile-navigation">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                            )
                        );
                        ?>
                    </nav>
                </div>
            </div>
            <div class="mobile-menu__footer">
                <div class="mobile-menu__socials">
                    <?php _get_template_part('../uaf-child/templates/components/_social-links'); ?>
                </div>
                <div class="mobile-menu__contacts">
                    <div class="mobile-menu__address">
                        <span class="circle-sm--purple"></span><?php echo $address; ?>
                    </div>
                    <div class="mobile-menu__phone">
                        <span class="circle-sm--purple"></span><?php echo $phone; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>