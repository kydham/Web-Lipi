<?php if(get_theme_mod('exbico_team_enable')) : ?>
	<!-- Start Team -->
	<section class="team-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
					<div class="section-title">
						<?php
							$exbico_team_top_title = get_theme_mod('exbico_team_top_title');
							$exbico_team_title = get_theme_mod('exbico_team_title');
							$exbico_team_content = get_theme_mod('exbico_team_content');
						?>
						<?php if(! empty (get_theme_mod('exbico_team_top_title'))) : ?>
						<h6><?php echo esc_html($exbico_team_top_title); ?></h6>
						<?php endif ; ?>
						<?php if(! empty (get_theme_mod('exbico_team_content'))) : ?>
						<h3><?php echo esc_html($exbico_team_title); ?></h3>
						<div class="line-bot"></div>
						<p><?php echo esc_html($exbico_team_content); ?></p>
						<?php endif;?>
					</div>
				</div>
			</div>
			<div class="row">
				<?php 
					$k=1; 
						for($i=1;$i<=4;$i++){
							$exbico_team_page[$k]=get_theme_mod('exbico_team_page_'.$i);
							$exbico_team_position[$k]=get_theme_mod('exbico_team_position_'.$i);
							
							$exbico_ts_icon_1[$k]=get_theme_mod('exbico_ts_icon_1_'.$i);
							$exbico_ts_link_1[$k]=get_theme_mod('exbico_ts_link_1_'.$i);
							$exbico_ts_icon_2[$k]=get_theme_mod('exbico_ts_icon_2_'.$i);
							$exbico_ts_link_2[$k]=get_theme_mod('exbico_ts_link_2_'.$i);
							$exbico_ts_icon_3[$k]=get_theme_mod('exbico_ts_icon_3_'.$i);
							$exbico_ts_link_3[$k]=get_theme_mod('exbico_ts_link_3_'.$i);
							$exbico_ts_icon_4[$k]=get_theme_mod('exbico_ts_icon_4_'.$i);
							$exbico_ts_link_4[$k]=get_theme_mod('exbico_ts_link_4_'.$i);
							$k=$k+1;
						}
						
						$args = array (
							'post_type' => 'page',
							'post_per_page' => $i,
							'post__in'      => $exbico_team_page,
							'orderby'           =>'post__in',
						);
						
						$exbico_teamloop = new WP_Query($args);
						$j=1;

						if ($exbico_teamloop->have_posts()) :  while ($exbico_teamloop->have_posts()) : $exbico_teamloop->the_post();
							
				?>
				<div class="col-lg-3 col-md-6 col-12">
				
					<!-- Single Team -->
					<div class="single-team text-center">
						<?php if( has_post_thumbnail()) : ?>	
						<div class="team-img">
							<?php the_post_thumbnail('elite-team-thumb'); ?>
						</div>
						<?php endif; ?>
						<div class="team-bottom">
							<!-- Team content -->
							<div class="team-content">
								<h4><?php the_title(); ?></h4>
								<p><?php echo esc_html($exbico_team_position[$j]) ;?></p>
							</div>
							<!-- Team social -->
							<div class="team-social">
								<ul>
									<?php if (!empty ($exbico_ts_icon_1[$j])) :?>
									<li><a href="<?php echo esc_url($exbico_ts_link_1[$j]) ;?>" aria-label="<?php esc_attr_e('Social Icon', 'exbico'); ?>"><i class="fa <?php echo esc_attr($exbico_ts_icon_1[$j]) ;?>"></i></a></li>
									<?php endif; ?>
									<?php if (!empty ($exbico_ts_icon_2[$j])) :?>
									<li><a href="<?php echo esc_url($exbico_ts_link_2[$j]) ;?>" aria-label="<?php esc_attr_e('Social Icon', 'exbico'); ?>"><i class="fa <?php echo esc_attr($exbico_ts_icon_2[$j]) ;?>"></i></a></li>
									<?php endif; ?>
									<?php if (!empty ($exbico_ts_icon_3[$j])) :?>
									<li><a href="<?php echo esc_url($exbico_ts_link_3[$j]) ;?>" aria-label="<?php esc_attr_e('Social Icon', 'exbico'); ?>"><i class="fa <?php echo esc_attr($exbico_ts_icon_3[$j]) ;?>"></i></a></li>
									<?php endif; ?>
									<?php if (!empty ($exbico_ts_icon_4[$j])) :?>
									<li><a href="<?php echo esc_url($exbico_ts_link_4[$j]) ;?>" aria-label="<?php esc_attr_e('Social Icon', 'exbico'); ?>"><i class="fa <?php echo esc_attr($exbico_ts_icon_4[$j]) ;?>"></i></a></li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
					<!-- End Single Team -->
				</div>
				<?php $j=$j+1; 
					endwhile;
					wp_reset_postdata();  
				endif; ?>
			</div>
		</div>
	</section>
	<!--/ End Team -->
<?php endif;?>