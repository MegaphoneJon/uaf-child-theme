<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=GTM-T9FDHN9T"></script>
	
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'GTM-T9FDHN9T');
	</script>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open();

	$header_logo = get_field('header_logo', 'options');
	$header_logo_mob = get_field('header_logo_mobile', 'options');
	$header_btn = get_field('header_button', 'options');

	?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'theme'); ?></a>
		<?php _get_template_part('../uaf-child/templates/components/_mobile-menu'); ?>
		<header id="masthead" class="site-header is--visible">
			<div class="container">
				<div class="top-line">
					<div class="top-line--left">
						<a class="header__logo" href="<?php echo esc_url(get_home_url()); ?>" aria-label="Navigate to Homepage">
							<?php if ($header_logo) {
							?>
								<div class="logo--desk" style="background: url('<?php echo $header_logo; ?>') no-repeat center center; background-size: contain;">

								</div>
							<?php

							}
							if ($header_logo_mob) {
							?>
								<div class="logo--mob">
									<?php
									_get_template_part(
										'templates/components/_image-id',
										['field' => $header_logo_mob, 'sizes' => 'full', 'alt' => 'Header logo', 'class' => '']
									); ?>
								</div>
							<?php
							}
							?>
						</a>
						<div class="header__nav">
							<nav id="site-navigation" class="header-navigation" role="navigation" aria-label="<?php _e('Main Menu','textdomain'); ?>">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'walker' => new ARIA_Walker_Nav_Menu(),
										'items_wrap' => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>'
									)
								);
								?>
							</nav>
						</div>
					</div>
					<div class="top-line--right">
						<div class="btn--hamburger js-menu--open">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>

				</div>
			</div>

		</header><!-- #masthead -->
		<!-- test -->