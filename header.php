<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dchglobal
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<div id="page" class="site">
		<nav id="site-navigation" class="navbar navbar-full navbar-light" role="navigation">
  		<div class="container">
    		<a class="navbar-brand" href="<?php echo get_site_url(); ?>">
  				<img src="<?php bloginfo('template_url'); ?>/images/logo-dch-global-black.png" alt="DCH Global">
				</a>
				<button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation"></button>
				<ul class="nav nav-inline primary-left hidden-sm-down">
					<?php wp_nav_menu( array(
						'menu'            	=> 'primary',
						'theme_location'  	=> 'primary',
						'container'					=> false,
						'items_wrap' 				=> '%3$s',
						'depth'           	=> 2,
						'fallback_cb'     	=> '',
						'walker'          	=> new bs4navwalker(),
					) ); ?>
				</ul>
				<ul class="nav nav-inline contact-right hidden-sm-down">
					<?php wp_nav_menu( array(
						'menu'            	=> 'contact',
						'theme_location'  	=> 'contact',
						'container'					=> false,
						'items_wrap' 				=> '%3$s',
						'depth'           	=> 1,
						'fallback_cb'     	=> '',
						'walker'          	=> new bs4navwalker(),
					) ); ?>
				</ul>
      </div>
			<?php wp_nav_menu(
				array(
					'menu'            => 'mobile',
					'theme_location'  => 'mobile',
					'container'       => 'div',
					'container_id'    => 'exCollapsingNavbar',
					'container_class' => 'collapse navbar-toggleable-sm hidden-md-up',
					'menu_id'         => false,
					'menu_class'      => 'nav navbar-nav',
					'depth'           => 2,
					'fallback_cb'     => '',
					'walker'          => new bs4navwalker(),
				)
			); ?>
		</nav>

		<div id="content" class="site-content">
