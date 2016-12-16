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
		<div class="col-md-4">
	    <a href="<?php the_permalink(); ?>" class="post-item">
				<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
				<div class="pi-image" style="background-image: url('<?php echo $image[0]; ?>')"></div>
	      <div class="pi-info">
	        <div class="pi-title"><?php the_title(); ?></div>
					<div class="pi-date"><?php echo get_the_date(); ?></div>
	        <div class="pi-excerpt"><?php echo substr(get_the_excerpt(), 0,124); ?>&hellip;</div>
	      </div>
	    </a>
	  </div>
	<?php endif; ?>
</article>
