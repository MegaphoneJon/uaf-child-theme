<?php
/**
 * The template for displaying story pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme
 */

get_header();
?>

	<main id="primary" class="site-main">
	<?php if (!is_front_page() && !is_search() && !is_404()) { 
			_get_template_part('../uaf-child/templates/components/_stories-breadcrumbs');
		 } ?>
		<?php
		while ( have_posts() ) :
			the_post();

			the_content();

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
