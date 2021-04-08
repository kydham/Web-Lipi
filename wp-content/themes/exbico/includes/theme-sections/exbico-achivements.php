<?php if(get_theme_mod('exbico_achivements_enable')) : ?>
	<!-- Fun Fact -->
	<div class="fun-fact">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="count-box">
						<div class="row">
							<?php for($i=1;$i<=4;$i++):?>
							<div class="col-lg-3 col-md-3 col-12">
								<?php if ( !empty (get_theme_mod( 'exbico_counter_'.$i ))) :?>
								<!-- Single count -->
								<div class="single-count">
									<i class="fa <?php echo esc_attr( get_theme_mod( 'exbico_counter_icon_'.$i ) )?>"></i>
									<div class="main-count">
										<h3><?php echo esc_html( get_theme_mod( 'exbico_counter_field_'.$i ) )?></h3>
										<h6><span class="counter"><?php echo esc_html( get_theme_mod( 'exbico_counter_'.$i ) )?></span><?php esc_html_e('+','exbico');?></h6>
									</div>
								</div>
								<!-- End Single count -->
								<?php endif; ?>
							</div>
							<?php endfor;?>
						</div>																							
					</div>																						
				</div>																									
			</div>																									
		</div>
	</div>
	<!-- End Fun Fact -->
<?php endif;?>