<?php
/**
 * Template Name: Contact Page
 */
?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php /*
			<div class="hero-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
			*/ ?>
			<div class="page-content">
				<div class="container">
					<div class="row">
						<div class="col-md-7 offset-md-1">
							<?php while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content', 'contact' );
							endwhile; ?>
						</div>
						<div class="col-md-4">
							<div class="contact-info">
								<h4>Our Office</h4>
								<p>Optima DCHGlobal, Inc.<br/>
									7157 East Rancho Vista Drive<br/>
									Suite 109<br/>
									Scottsdale, AZ 85251</p>
								<p>(480) 425-7177<br/>
									<a href="mailto:contact@optimadchglobal.com" target="_blank">contact@optimadchglobal.com</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

<?php get_footer(); ?>
