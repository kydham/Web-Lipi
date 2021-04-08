<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elite
 */
?>
	
	<div class="single-head">
		<?php the_post_thumbnail('elite-blog-single-thumb'); ?>
		<div class="blog-title-meta">
			<!-- Blog Meta -->
			<div class="blog-meta">
				<span><i class="fa fa-user"></i><?php exbico_posted_by(); ?></span>
				<span><i class="fa fa-calendar"></i><?php exbico_posted_on(); ?></span>
				<span><i class="fa fa-comments"></i><?php echo esc_html(get_comments_number());?> <?php esc_html_e('comments', 'exbico'); ?></span>
			</div>
			<h2><?php the_title(); ?></h2>
		</div>
	</div>
	<div class="single-content">
		<?php the_content(); ?>
	</div>
	