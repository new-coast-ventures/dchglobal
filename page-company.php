<?php
/**
 * Company page template
 * @package dchglobal
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>
      <img src="http://placehold.it/1400x600" class="img-fluid mt-1 hero-image" alt="Responsive image">
      <div class="container">
        <h1 class="entry-title display-4">Innovation and Research </h1>
  			<?php if(get_field('innovation_&_research')){
    		 echo '<p>' . get_field('innovation_&_research') . '</p>';
        } ?>
      </div>
      <img src="http://placehold.it/1400x600" class="img-fluid mt-1 hero-image" alt="Responsive image">
      <div class="container">
        <h1 class="entry-title display-4">Sustainability</h1>
        <?php if(get_field('sustainability')){
         echo '<p>' . get_field('sustainability') . '</p>';
        } ?>
      </div>
      <img src="http://placehold.it/1400x600" class="img-fluid mt-1 hero-image" alt="Responsive image">
      <div class="container">
        <h1 class="entry-title display-4">Award-Winning Architecture</h1>
        <?php if(get_field('award-winning_architecture')){
         echo '<p>' . get_field('award-winning_architecture') . '</p>';
        } ?>
      </div>
      <div class="container">
        <h1 class="entry-title display-4">David Hovey Jr., AIA</h1>
        <?php if(get_field('bio')){
         echo '<p>' . get_field('bio') . '</p>';
        } ?>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

</div>

<?php
get_footer();
