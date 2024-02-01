<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package shibaura
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="error-404 not-found">
			<div class="container-c">
				<header class="page-header">
					<h1 class="page-title">404</h1>
					<p class="text"><?php esc_html_e( 'SORRY! PAGE YOU ARE LOOKING CAN’T BE FOUND.', 'shibaura' ); ?></p>
					<div class="desc">Go back to the <a href="<?php echo esc_url(home_url('/')); ?>">homepage</a></div>
				</header><!-- .page-header -->
			</div>
		</section><!-- .error-404 -->
	</main><!-- #main -->

<?php
get_footer();
