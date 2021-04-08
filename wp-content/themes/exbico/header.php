<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package exbico
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Start Page -->
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'exbico' ); ?></a>

		<?php if(get_theme_mod('exbico_topbar_enable', false)) : ?>
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<div class="topbar-address">
							<ul>
								<?php for($i=1;$i<=3;$i++):?>
								<li><i class="fa <?php echo esc_attr( get_theme_mod( 'exbico_topbar_icon_'.$i ) )?>"></i> <?php echo esc_html(get_theme_mod('exbico_topbar_contact_'.$i)) ?></li>
								<?php endfor;?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<?php endif;?>

		<!-- Header-Start -->
		<header id="masthead" class="header site-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="header-inner-top">
							<div class="header-inner">
								<?php if ( get_header_image() ) : ?>
								<div class="header-image">
									<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
								</div>
								<?php endif; ?>
								<div class="row">
									<div class="col-lg-3 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<?php if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
												the_custom_logo();
											}?>
											<div class="normal-text">
												<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html(get_bloginfo('name'));?></a>
												<?php $exbico_title_description = get_bloginfo( 'description', 'display' ); ?>
												<p class="site-description"><?php echo $exbico_title_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
											</div>
										</div>
										<!-- End-Logo -->
										<!-- exbico Mobile Menu -->
										<div class="exbico-mobile-menu">
											<div class="menu-click"><button class="ex-btn-toggle"><i class="fa fa-bars"></i><span><?php esc_html_e('Menu','exbico');?></button></a></div>
											<div class="menu-inner">
												<?php
													wp_nav_menu( array(
														'theme_location' => 'menu-1',
														'menu_id'        => 'side-menu',
														'menu_class'        => 'side-nav',
													) );
												?>
												<div class="close-menu"><button class="ex-close-menu"><i class="fa fa-remove"></i><?php esc_html_e('Close Menu','exbico');?></button></div>
											</div>
										</div>
										<!-- End exbico Mobile Menu -->
									</div>
									<div class="col-lg-9 col-md-9 col-12">
										<div class="main-menu-top">
											<div class="main-menu">
												<div class="navbar">
													<div class="nav-item">
														<nav role="navigation" aria-label="<?php esc_attr_e( 'Primary', 'exbico' ); ?>" class="navigation-main">
														<?php
														wp_nav_menu( array(
															'theme_location' => 'menu-1',
															'menu_id'        => 'primary-menu',
															'menu_class'        => 'nav-menu mobile-menu navigation',
														) );
														?>
														</nav>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>	
						</div>	
					</div>	
				</div>	
			</div>
		</header>
		<!-- End-Header -->

		<main role="main" id="primary" class="exbico-section-main">