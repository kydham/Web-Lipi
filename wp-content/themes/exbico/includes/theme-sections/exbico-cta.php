<?php if(get_theme_mod('exbico_cta_enable')) : ?>
	<?php $exbico_cta_image = get_theme_mod('exbico_cta_image');	?>
	<!-- CTA Section -->
	<section class="cta-section" style="background-image:url(<?php echo esc_url($exbico_cta_image); ?>)">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-12">
					<div class="cta-content">
						<?php
							$exbico_cta_title = get_theme_mod('exbico_cta_title');
							$exbico_cta_content = get_theme_mod('exbico_cta_content');
							$exbico_cta_button_text = get_theme_mod('exbico_cta_button_text');
							$exbico_cta_button_link = get_theme_mod('exbico_cta_button_link');
						?>
						<h3><?php echo esc_html($exbico_cta_title);?></h3>
						<p><?php echo esc_html($exbico_cta_content);?></p>
						<?php if(! empty (get_theme_mod('exbico_cta_button_text'))) : ?>
						<div class="cta-button">
							<a href="<?php echo esc_url($exbico_cta_button_link);?>" class="theme-btn"><?php echo esc_html($exbico_cta_button_text);?></a>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA Section -->
<?php endif;?>