<?php
/**
 * Template part for displaying single posts.
 *
 * @package dchglobal
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( 'post' === get_post_type() ) : ?>
    <div class="blog-content">
  		<div class="container">
  		  <div class="row">
  		    <div class="col-md-8 offset-md-2">
  		      <div class="post post-content">
              <div class="p-header">
                <h1><?php the_title(); ?></h1>
                <p><?php echo get_the_date(); ?> by <?php the_author(); ?></p>
              </div>
              <?php the_post_thumbnail('full', array('class' => 'post-feature-image')); ?>
  		        <?php the_content(); ?>
  		      </div>
  		    </div>
  		  </div>
  		</div>
    </div>
	<?php endif; ?>
</article>
