<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ns-starter-theme
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

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nstheme' ); ?></a>

	<header id="masthead" class="site__header header">
		<div class="header__grid grid">
			<div class="header__branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</h1>
					<?php
				else :
					?>
					<p class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</p>
					<?php
				endif;
	
				$nstheme_description = get_bloginfo( 'description', 'display' );
				if ( $nstheme_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $nstheme_description; ?></p>
					<?php 
				endif; 
				?>
			</div>
	
			<nav id="site-navigation" class="header__nav">
				<?php
				wp_nav_menu( [
					'menu_class'     => 'header__menu menu',
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				 ] );
				?>
			</nav>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site__content">
