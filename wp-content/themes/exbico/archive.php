<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package exbico
 */

get_header();
?>

	<?php if(get_theme_mod('exbico_blog_ac_breadcrumb', true)) : ?>
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<!-- Breadcrumbs-Content -->
					<div class="col-lg-7 col-md-7 col-12">
						<div class="breadcrumbs-content">
							<h1 class="bread-title"><?php esc_html_e('Blog Archive','exbico')?></h1>
						</div>
					</div>
					<!-- Breadcrumbs-Menu -->
					<div class="col-lg-5 col-md-5 col-12">
						<div class="breadcrumbs-menu">
							<?php if (function_exists('bcn_display')) bcn_display(); ?>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
	<?php endif; ?>
	
	<section id="blogs" class="blog-area archive">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-12">
					<div class="row">
						<?php
							if ( have_posts() ) :
								if ( is_home() && ! is_front_page() ) :
								?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
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

<?php
get_footer();
