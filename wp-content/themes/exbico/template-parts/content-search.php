<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elite
 */

?>

<div class="col-lg-6 col-md-6 col-12">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- Single Blog -->
		<div class="single-blog">
			<?php if(has_post_thumbnail()) : ?>
			<div class="blog-img">
				<?php the_post_thumbnail('elite-blog-thumb'); ?>
				<span class="date"><?php the_time(get_option('date_format')); ?></span>
			</div>
			<?php endif;?>
			<?php if(has_post_thumbnail()) : ?>
			<div class="blog-body">
			<?php else : ?>
			<div class="blog-body no-img">
			<?php endif; ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="blog-meta">
					<div class="single-meta">
						<p><?php exbico_posted_by(); ?></p>
					</div>
					<div class="single-meta">
						<p><i class="fa fa-comments"></i> <span><?php echo esc_html(get_comments_number());?> <?php esc_html_e('comments', 'exbico'); ?></span></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End Single Blog -->
	</article> <!-- #post-<?php the_ID(); ?> -->
</div>