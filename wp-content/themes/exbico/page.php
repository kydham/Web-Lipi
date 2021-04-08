<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package exbico
 */

get_header();
?>
	
	<?php if(get_theme_mod('exbico_page_breadcrumb', true)) : ?>
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<!-- Breadcrumbs-Content -->
					<div class="col-lg-7 col-md-7 col-12">
						<div class="breadcrumbs-content">
							<h1 class="bread-title"><?php the_title() ?></h1>
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
	
	<section class="blog-section site-page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="page-top">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
