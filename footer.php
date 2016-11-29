<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dchglobal
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer nav nav-inline" role="contentinfo">
		<div class="site-info">
    <ul>
      <li class="nav-item">
      	&copy; 2016 DCH Global Optima
      </li>
	     <?php wp_nav_menu( array(
         'container' => false,
         'theme_location' => 'footer',
         'items_wrap' => '%3$s'
       ) );
       ?>
    </ul>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
