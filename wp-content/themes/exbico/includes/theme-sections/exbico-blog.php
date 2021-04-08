<?php if(get_theme_mod('exbico_blog_enable')) : ?>
	<!-- Blog-Area -->
	<section class="blog-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
					<div class="section-title">
						<?php
							$exbico_blog_top_title = get_theme_mod('exbico_blog_top_title');
							$exbico_blog_title = get_theme_mod('exbico_blog_title');
							$exbico_blog_content = get_theme_mod('exbico_blog_content');
						?>
						<?php if(! empty (get_theme_mod('exbico_blog_top_title'))) : ?>
						<h6><?php echo esc_html($exbico_blog_top_title); ?></h6>
						<?php endif ; ?>
						<?php if(! empty (get_theme_mod('exbico_blog_content'))) : ?>
						<h3><?php echo esc_html($exbico_blog_title); ?></h3>
						<div class="line-bot"></div>
						<p><?php echo esc_html($exbico_blog_content); ?></p>
						<?php endif;?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 wow fadeInUp" data-wow-duration="1s">
					<div class="blog-slider">
						<?php
							$exbico_blog_catId = esc_attr(get_theme_mod( 'exbico_blog_category_id'));
							$exbico_blog_catLink = get_category_link($exbico_blog_catId);
							$exbico_blog_CatName = get_category($exbico_blog_catId);
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => 3,
								'post_status' => 'publish',
								'cat' => $exbico_blog_catId,
							);
							$exbico_blogloop = new WP_Query($args);
							
							while ($exbico_blogloop->have_posts()) : 
							$exbico_blogloop->the_post(); 
						?>
						<!-- Single Blog -->
						<div class="single-blog">
							<div class="blog-img">
								<?php the_post_thumbnail('elite-blog-thumb'); ?>
								<span class="date"><?php the_time(get_option('date_format')); ?></span>
							</div>
							<div class="blog-body">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<div class="blog-meta">
									<div class="single-meta">
										<img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>">
										<p><?php exbico_posted_by(); ?></p>
									</div>
									<div class="single-meta">
										<p><i class="fa fa-comments"></i> <span><?php echo esc_html(get_comments_number());?> <?php esc_html_e('comments', 'exbico'); ?></span></p>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
						<?php endwhile;
							wp_reset_postdata();
						?>	
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End-Blog-Area -->
<?php endif;?>