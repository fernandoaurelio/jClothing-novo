<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'storefront_before_site' ); ?>

	<div id="page" class="hfeed site">
		<?php do_action( 'storefront_before_header' ); ?>

		<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
			<nav class="navbar-top">
				<div class="faixa-topo">
					<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="Veja os Itens do Carrinho">
						<div class="carrinho-compras">
							<?php 		if ( storefront_is_woocommerce_activated() ) {
								if ( is_cart() ) {
									$class = 'current-menu-item';
								} else {
									$class = '';
								}
								?>
								<ul id="site-header-cart" class="site-header-cart menu">
									<li class="<?php echo esc_attr( $class ); ?>">
										<?php storefront_cart_link(); ?>
									</li>
									<li>
										<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
									</li>
								</ul>
								<?php
							} ?>
						</div>
					</a>
					<div class="menu-conta">
						<span class="item-menu">
							<?php echo do_shortcode('[naologado]'); ?>
						</div>
					</div>
				</nav>
				<section class="menu">
					<div class="menu-principal">
						<?php  
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'container'      => false,
								'menu_class'     => 'nav navbar-nav navbar-right',
							)
						);
						?>
					</div>
				</section>				
			</header><!-- #masthead -->

			<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">
