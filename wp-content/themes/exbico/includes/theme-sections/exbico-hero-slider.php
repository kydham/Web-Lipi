<?php if(get_theme_mod('exbico_hero_slider')) : ?>
	<section  class="hero-area">
		<div class="hero-slider">
			<?php 
				$slide=1; 
				for($i=1;$i<11;$i++){
					$exbico_slider_page[$slide]=get_theme_mod('exbico_slider_page_'.$i);
					$exbico_slider_main_title[$slide]=get_theme_mod('exbico_slider_main_title_'.$i);
					$exbico_slider_button_title[$slide]=get_theme_mod('exbico_slider_button_title_'.$i);
					$exbico_slider_button_url[$slide]=get_theme_mod('exbico_slider_button_url_'.$i);
					$slide=$slide+1;
				}

				$args = array (
					'post_type' => 'page',
					'post_per_page' => $slide,
					'posts_per_page'=>10,
					'post__in'         => ($exbico_slider_page) ? ($exbico_slider_page) : '',
					'orderby'           =>'post__in',
				);

				$exbico_sliderloop = new WP_Query($args);
				$j=1;

				if ($exbico_sliderloop->have_posts()) :  while ($exbico_sliderloop->have_posts()) : $exbico_sliderloop->the_post();
				
			?>
		
			<?php $exbico_slider_img_url = get_the_post_thumbnail_url(get_the_ID($i),'full'); ?>
			<div class="single-slider" style="background-image:url('<?php echo esc_url($exbico_slider_img_url); ?>')">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-8 col-12">
							<div class="hero-content">
								<h1><?php echo esc_html($exbico_slider_main_title[$j]);?></h1>
								<?php the_excerpt(); ?>
								<!-- Slider Button -->
								<?php if($exbico_slider_button_title[$j]): ?>
								<div class="button">
									<a href="<?php esc_url($exbico_slider_button_url[$j]) ;?>" class="theme-btn"><?php echo esc_html($exbico_slider_button_title[$j]); ?></a>
								</div>
								<!-- End Slider Button -->
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $j=$j+1; endwhile;
				wp_reset_postdata();  
			endif; ?>
		</div>
	</section>
	<!-- End Hero Area -->
<?php endif;?>