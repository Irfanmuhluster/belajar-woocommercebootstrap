<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package belajar-wordpressbootstrap
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<div class="announcement-bar pt-md-2 pb-md-2  d-none d-sm-block">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
				<ul class="announcement-bar__list">
					<li>
						<a href="#" class="list">Tentang Kami</a>
						<a href="#" class="list">Tentang Kami</a>
					</li>
				</ul> 
				</div>
				<div class="col-md-6 col-sm-12 d-flex justify-content-end">
				<ul class="announcement-bar__list">
					<li>
						<i class="bi bi-telephone rounded-circle"></i>
						<a href="tel: 087743124442">087743124442</a>
					</li>
					<li>
						<i class="bi bi-envelope rounded-circle"></i>
						<a href="mailto: hello@gmail.com">muhirfan234@gmail.com</a>
					</li>
					<li>
						<i class="bi bi-whatsapp  rounded-circle"></i>
						<a href="wa: 087734511221">087734511221</a>
					</li>
					
				</ul> 
				</div>
			</div>
		</div>
	</div>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'belajar-wordpressbootstrap' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="container pt-md-2 pb-md-2  d-none d-sm-block">
			<div class="row align-items-center">
				<div class="col site-header__logo d-flex justify-content-center justify-content-md-start">
				<?php the_custom_logo(); ?>
				</div>

				<div class="col-sm-12 col-md-5">
				<?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
				</div>

				<div class="col cart d-flex justify-content-center justify-content-md-end align-items-center pt-2">
					<a href="<?php echo wc_get_cart_url(); ?>">
						<i class="bi bi-bag-dash p-2"></i>
					</a>
					<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
				</div>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation bg-primary">
			<div class="container  d-flex justify-content-center">
				<div class="row align-items-center">
					<div class="col d-flex justify-content-start">
						<div class="col-sm-4 d-flex justify-content-center">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<i class="bi bi-list"></i>
							
							</button>
						</div>
						<div class="col-sm-4 d-flex justify-content-start d-block d-sm-none d-md-none">
							<?php the_custom_logo(); ?>
						</div>
						<div class="col d-flex justify-content-end d-block d-sm-none d-md-none">
						<div id="myOverlay" class="overlay">
						<span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
						<div class="overlay-content">
							<?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
						</div>
						</div>

							<button class="openBtn bg-primary border-0 text-white" onclick="openSearch()">	<i class="bi bi-search p-2"></i></button>
							<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
				
						</div>
					</div>
					
					<div class="col-12 text-center">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</div>
				</div>
			</div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
