<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dchglobal
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( 'post' === get_post_type() ) : ?>
		<section class="section-secondary second">
			<div class="container">
				<div class="row">
					<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
					<div id="mobile" class="col-md-2">
						<img src="<?php echo $image[0]; ?>"/>
					</div>
					<div class="col-md-8 offset-md-1">
						<h4>
							<span><?php echo get_the_date(); ?> - <?php the_title(); ?></span>
							<a id="desktop-inline" href="<?php the_permalink(); ?>" class="button">View Post</a>
						</h4>
						<!-- <p class="blog-date"></p> -->
						<p><?php echo substr(get_the_excerpt(), 0,360); ?>&hellip;</p>
						<a id="mobile" href="<?php the_permalink(); ?>" class="button">View Post</a>
					</div>
					<div id="desktop" class="col-md-2 image-spacing">
						<img src="<?php echo $image[0]; ?>"/>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
</article>
