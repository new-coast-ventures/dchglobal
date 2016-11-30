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
	<nav id="site-navigation" class="navbar navbar-full navbar-dark bg-inverse" role="navigation">
  <div class="container">
    <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
  <img src="http://placehold.it/200x100" alt="DCH Global">
</a>
		<?php wp_nav_menu( array(
      'theme_location' => 'primary',
      'container' => false,
      'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
      'link_before' => '<span class="nav-link">',
      'link_after' => '</span>'
    ) ); ?>
      </div>
	</nav>

  <!-- #site-navigation -->
	<div id="content" class="site-content">
