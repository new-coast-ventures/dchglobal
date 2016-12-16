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

		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
	    <ul class="nav nav-inline">
	      <li class="nav-item">&copy; 2016 DCH Global Optima</li>
		     <?php wp_nav_menu( array(
	         'container' 				=> false,
	         'theme_location'		=> 'footer',
	         'items_wrap' 			=> '%3$s',
					 'depth'           => 1,
					 'fallback_cb'     => '',
					 'walker'          => new bs4navwalker(),
	       ) );
	       ?>
	    </ul>
		</footer>
	</div>

	<?php wp_footer(); ?>

</body>
</html>
