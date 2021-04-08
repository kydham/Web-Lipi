<?php if(get_theme_mod('exbico_service_enable')) : ?>
	<!-- Services -->
	<section class="service-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
					<div class="section-title">
						<?php
							$exbico_service_top_title = get_theme_mod('exbico_service_top_title');
							$exbico_service_title = get_theme_mod('exbico_service_title');
							$exbico_service_content = get_theme_mod('exbico_service_content');
						?>
						<?php if(! empty (get_theme_mod('exbico_service_top_title'))) : ?>
						<h6><?php echo esc_html($exbico_service_top_title); ?></h6>
						<?php endif ; ?>
						<?php if(! empty (get_theme_mod('exbico_service_content'))) : ?>
						<h3><?php echo esc_html($exbico_service_title); ?></h3>
						<div class="line-bot"></div>
						<p><?php echo esc_html($exbico_service_content); ?></p>
						<?php endif;?>
					</div>
				</div>
			</div>
		
			<div class="row">
				<?php 
					$i=1; 
					for($j=1;$j<=6;$j++){
						$exbico_service_page[$j]=get_theme_mod('exbico_service_page_'.$j);
						$exbico_service_icon[$j]=get_theme_mod('exbico_service_icon_'.$j);
					}
					$args = array (
						'post_type' => 'page',
						'post_per_page' => 6,
						'post__in'         => $exbico_service_page,
						'orderby'           =>'post__in',
					);
					$exbico_serviceloop = new WP_Query($args);
					if ($exbico_serviceloop->have_posts()) :  while ($exbico_serviceloop->have_posts()) : $exbico_serviceloop->the_post();
							
				?>
				<div class="col-lg-4 col-md-4 col-12">
					<!-- Single Service -->
					<div class="single-service">
						<div class="service-head">
							<div class="service-img">
								<?php the_post_thumbnail('elite-service-thumb'); ?>
								<i class="fa <?php echo esc_attr($exbico_service_icon[$i]); ?>"></i>
							</div>
						</div>
						<div class="service-content">
							<h4><?php the_title(); ?></h4>
							<?php the_excerpt(); ?>
						</div>
						<div class="service-bottom">
							<a href="<?php the_permalink(); ?>"><i class="fa fa-chevron-right"></i></a>
						</div>	
					</div>
					<!-- End Single Service -->
				</div>
				<?php $i=$i+1;?> 
				  <?php  endwhile; 
					wp_reset_postdata();
				endif; ?>
			</div>
		</div>
	</section>
	<!--/ End Services -->
<?php endif;?>