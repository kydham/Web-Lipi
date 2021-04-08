<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package exbico
 */

get_header();
?>

	
	<?php if(get_theme_mod('exbico_blog_single_breadcrumb', true)) : ?>
		<!-- Breadcrumbs -->
		<div class="breadcrumbs single">
			<div class="container">
				<div class="row">
					<!-- Breadcrumbs-Content -->
					<div class="col-lg-10 offset-md-1 col-md-10 offset-md-1 col-12">
						<div class="breadcrumbs-content">
							<h1 class="bread-title"><?php the_title() ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
	<?php endif; ?>

	<!-- Blog Sinlge -->
	<section class="blog-single-post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-12">
					<div class="single-area">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'single' );

						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle"> <i class="fa fa-angle-double-left"></i> '. esc_html__( 'Prev', 'exbico' ) . '</span> ',
								'next_text' => '<span class="nav-subtitle">'. esc_html__( 'Next', 'exbico' ) .'</span> <i class="fa fa-angle-double-right"></i>',
							)
						);

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="blog-sidebar">
						<?php get_sidebar();?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Single -->
<?php
get_footer();
