<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme
 */

$footer_logo = get_field('footer_logo', 'options');
$address = get_field('address', 'options');
$phone = get_field('phone', 'options');
$logos = get_field('logos', 'options');
?>

<footer id="colophon" class="site-footer">
	<div class="footer__grid">
		<div class="footer__col--sm">
			<div class="footer__logo">
				<?php _get_template_part('templates/components/_image-id', ['field' => $footer_logo, 'sizes' => 'full', 'alt' => 'footer logo']); ?>
				<div class="footer__tribute">
					<p>A campaign by</p>
					<div class="footer__uaf-logo"></div>
				</div>
			</div>


		</div>
		<div class="footer__col--lg">
			<div class="footer__logo--tablet">
				<?php _get_template_part('templates/components/_image-id', ['field' => $footer_logo, 'sizes' => 'full', 'alt' => 'footer logo']); ?>
				<div class="footer__tribute">
					<p>A campaign by</p>
					<div class="footer__uaf-logo"></div>
				</div>
			</div>
			<div class="footer__form">
				<h2 class="h4">Our work happens in real time. Sign up to receive our emails and stay up to date.</h2>
				<div class="cta__subscribe">
					<?php get_template_part('templates/components/_mailchimp-embed'); ?>
				</div>
			</div>
			<div class="footer__content">
				<div class="footer__nav footer__nav-col--1">
					<nav id="site-navigation" class="footer-navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-4',
							)
						);
						?>
					</nav>
				</div>

				<div class="footer__socials">
					<?php _get_template_part('../uaf-child/templates/components/_social-links'); ?>
					<?php if ($logos) { ?>
						<div class="footer__logos">
							<div class="footer__logos-inner">
								<?php foreach ($logos as $logo) {
									$image = $logo['logo'];
								?>
									<?php _get_template_part('templates/components/_image-id', ['field' => $image, 'sizes' => 'medium']); ?>
								<?php } ?>
							</div>

						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__legal">
		<div class="footer__legal--left">
			<div class="footer__copyright">
				© <?php echo date('Y'); ?> Urgent Action Fund for Feminist Activism.
			</div>
			<div class="legal__nav">
				<nav id="site-navigation" class="legal-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-3',
						)
					);
					?>
				</nav>
			</div>
		</div>
		<div class="footer__legal--right">
			<a href="https://yippa.com/" target="_blank noopener noreferrer" class="copyright--desk">Design by Yippa</a>
		</div>
	</div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>