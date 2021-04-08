<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package exbico
 */
 $exbico_footer_copyright_text = get_theme_mod('exbico_footer_copyright_text');
?>
	</main>

	<footer class="site-footer footer-area">
		<!-- Footer Top -->
		<div class="footer-top">
			<div class="container">
				<div class="row">
				<?php if(is_active_sidebar('exbico_footer_1')) : ?>
					<div class="col-lg-3 col-md-6 col-12">
						<?php dynamic_sidebar('exbico_footer_1'); ?>
					</div>
				<?php endif; ?>
					
				<?php if(is_active_sidebar('exbico_footer_2')) : ?>
					<div class="col-lg-3 col-md-6 col-12">
						<?php dynamic_sidebar('exbico_footer_2'); ?>
					</div>
				<?php endif; ?>

				<?php if(is_active_sidebar('exbico_footer_3')) : ?>
					<div class="col-lg-3 col-md-6 col-12">
						<?php dynamic_sidebar('exbico_footer_3'); ?>
					</div>
				<?php endif; ?>

				<?php if(is_active_sidebar('exbico_footer_4')) : ?>
					<div class="col-lg-3 col-md-6 col-12">
						<?php dynamic_sidebar('exbico_footer_4'); ?>
					</div>
				<?php endif; ?>
					
				</div>
				<!-- End-Single-Widget -->
			</div>
		</div>
		<!-- End Footer Top -->
		<!-- Copyright -->
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="copyright-text">
							<?php if(!empty($exbico_footer_copyright_text)) : ?>
								<?php echo wp_kses_post($exbico_footer_copyright_text); ?>
								<?php
								/* translators: 1: Theme name, 2: Theme author. */
								printf( esc_html__( 'Theme %2$s  By  %1$s', 'exbico' ), '<a href="https://sitebland.com/product/exbico" >sitebland</a>' , '<a href="https://sitebland.com">Exbico</a>' );?>
							<?php else : ?>
								<?php esc_html_e('&copy; All Right Reserved ','exbico'); bloginfo('title');?> <?php echo  esc_html(date_i18n( __( 'Y' , 'exbico' ) ));?>
								<?php
								/* translators: 1: Theme name, 2: Theme author. */
								printf( esc_html__( 'Theme %2$s  By  %1$s', 'exbico' ), '<a href="https://sitebland.com/product/exbico"  >sitebland</a>' , '<a href="https://sitebland.com">Exbico</a>' );?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Copyright -->
	</footer>
	
</div><!-- End Page -->

<?php wp_footer(); ?>

</body>
</html>
