<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package exbico
 */

get_header();
?>

	<section id="blogs" class="blog-area archive">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-12">
					<div class="heading-top">
						<h1><?php echo esc_html_e('Latest Articles','exbico'); ?></h1>
					</div>
					<div class="row">
						<?php
							if ( have_posts() ) :
								if ( is_home() && ! is_front_page() ) :
								?>
								<header>
									<h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
								</header>
								<?php
								endif;
								/* Start the Loop */
								while ( have_posts() ) :
								the_post();

									/*
										* Include the Post-Type-specific template for the content.
										* If you want to override this in a child theme, then include a file
										* called content-___.php (where ___ is the Post Type name) and that will be used instead.
									*/
								get_template_part( 'template-parts/content', get_post_type() );
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
				<div class="col-lg-4 col-12">
					<!-- Blog Sidebar -->
					<div class="blog-sidebar">
						<?php get_sidebar(); ?>
					</div>
					<!-- End Blog Sidebar -->
				</div>
			</div>
		</div>
	</section>	
	<!-- End Blog Archive -->
<?php get_footer();