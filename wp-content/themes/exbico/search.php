<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package exbico
 */

get_header();

?>
	
	<?php if(get_theme_mod('exbico_search_breadcrumb', true)) : ?>
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<!-- Breadcrumbs-Content -->
					<div class="col-lg-7 col-md-7 col-12">
						<div class="breadcrumbs-content">
							<h1 class="bread-title">
							<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results: %s', 'exbico' ), '<span>' . get_search_query() . '</span>' );
							?>
							</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
	<?php endif; ?>
	
	
	<section class="blog-area archive search-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-12">
					<div class="row">
						<?php if ( have_posts() ) : ?>

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
					<div class="row">
						<div class="col-12">
							<?php the_posts_navigation(); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="exbico-pagination-main">
								<?php the_posts_pagination(); ?>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="blog-sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();