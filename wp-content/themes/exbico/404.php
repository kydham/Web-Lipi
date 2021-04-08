<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package exbico
 */

get_header();
?>

	<!-- Eror Area -->	
	<section class="error-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
					<div class="error-inner">
						<div class="error-top">
							<h1><?php esc_html_e( '404!', 'exbico' ); ?></h1>
							<i class="fa fa-frown-o"></i>
						</div>
						<h2><?php esc_html_e( 'Sorry! The Page Not Found ', 'exbico' ); ?></h2>
						<p><?php esc_html_e( 'Oops! The page you are looking for does not exit. it might been moved or deleted.', 'exbico' ); ?></p>
						<div class="eror-button">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="theme-btn"><?php esc_html_e( 'Go to home ', 'exbico' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Eror Area -->

<?php
get_footer();
