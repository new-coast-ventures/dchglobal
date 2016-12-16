<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dchglobal
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hero-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
  <div class="container">
		<div class="page-content">
			<?php
				the_content();
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dchglobal' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div>
</article>
