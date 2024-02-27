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
					<div id="mc_embed_shell">
						<link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">

						<div id="">
							<form action="https://urgentactionfund.us1.list-manage.com/subscribe/post?u=7d9c40875bb90f562e190d7fa&amp;id=e531c36ad8&amp;f_id=0009e4e5f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
								<div class="subscription-form__row">
									<div class="subscription-form__input-wrap">
										<label for="mce-EMAIL" class="screen-reader-text">Email Address</label>
										<input type="email" name="EMAIL" class="required email subscription-form__input" id="mce-EMAIL" required="" value="" placeholder="Enter your email address*" />
									</div>
									<div class="subscription-form__submit-wrap">
										<div class="subscription-form__submit-group">
											<input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button subscription-form__submit" value="Subscribe">
											<div id="mce-responses" class="clear">
												<div class="response" id="mce-error-response" style="display: none;"></div>
												<div class="response" id="mce-success-response" style="display: none;"></div>
											</div>
											<div aria-hidden="true" style="position: absolute; left: -5000px;"><input type="text" name="b_7d9c40875bb90f562e190d7fa_e531c36ad8" tabindex="-1" value=""></div>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
						<script type="text/javascript">
							(function($) {
								window.fnames = new Array();
								window.ftypes = new Array();
								fnames[0] = 'EMAIL';
								ftypes[0] = 'email';
								fnames[1] = 'FNAME';
								ftypes[1] = 'text';
								fnames[2] = 'MMERGE2';
								ftypes[2] = 'text';
								fnames[7] = 'MMERGE7';
								ftypes[7] = 'text';
								fnames[5] = 'MMERGE5';
								ftypes[5] = 'text';
								fnames[3] = 'MMERGE3';
								ftypes[3] = 'text';
								fnames[6] = 'MMERGE6';
								ftypes[6] = 'text';
								fnames[4] = 'MMERGE4';
								ftypes[4] = 'number';
								fnames[9] = 'LGL_SAL';
								ftypes[9] = 'text';
								fnames[10] = 'LGL_ID';
								ftypes[10] = 'text';
								fnames[11] = 'LGL_MM1940';
								ftypes[11] = 'text';
								fnames[8] = 'MMERGE8';
								ftypes[8] = 'address';
							}(jQuery));
							var $mcj = jQuery.noConflict(true);
						</script>
					</div>
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