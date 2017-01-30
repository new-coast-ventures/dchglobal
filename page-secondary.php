<?php
/**
 * Template Name: Secondary Page
 */
?>

<?php
// Secondary Page - Custom Fields
// Section 1
$section_1_title          = get_field('section_1_title');
$section_1_content  			= get_field('section_1_content');
$section_1_button 				= get_field('section_1_button');
$section_1_button_link    = get_field('section_1_button_link');
$section_1_image    			= get_field('section_1_image');
// Section 2
$section_2_title          = get_field('section_2_title');
$section_2_content  			= get_field('section_2_content');
$section_2_button 				= get_field('section_2_button');
$section_2_button_link    = get_field('section_2_button_link');
$section_2_image    			= get_field('section_2_image');
// Section 3
$section_3_title          = get_field('section_3_title');
$section_3_content  			= get_field('section_3_content');
$section_3_button 				= get_field('section_3_button');
$section_3_button_link    = get_field('section_3_button_link');
$section_3_image    			= get_field('section_3_image');
// Section 4
$section_4_title          = get_field('section_4_title');
$section_4_content  			= get_field('section_4_content');
$section_4_button 				= get_field('section_4_button');
$section_4_button_link    = get_field('section_4_button_link');
$section_4_image    			= get_field('section_4_image');
// Section 5
$section_5_title          = get_field('section_5_title');
$section_5_content  			= get_field('section_5_content');
$section_5_button 				= get_field('section_5_button');
$section_5_button_link    = get_field('section_5_button_link');
$section_5_image    			= get_field('section_5_image');
// Section 6
$section_6_title          = get_field('section_6_title');
$section_6_content  			= get_field('section_6_content');
$section_6_button 				= get_field('section_6_button');
$section_6_button_link    = get_field('section_6_button_link');
$section_6_image    			= get_field('section_6_image');
// Section 7
$section_7_title          = get_field('section_7_title');
$section_7_content  			= get_field('section_7_content');
$section_7_button 				= get_field('section_7_button');
$section_7_button_link    = get_field('section_7_button_link');
$section_7_image    			= get_field('section_7_image');
// Section 8
$section_8_title          = get_field('section_8_title');
$section_8_content  			= get_field('section_8_content');
$section_8_button 				= get_field('section_8_button');
$section_8_button_link    = get_field('section_8_button_link');
$section_8_image    			= get_field('section_8_image');
// Section 9
$section_9_title          = get_field('section_9_title');
$section_9_content  			= get_field('section_9_content');
$section_9_button 				= get_field('section_9_button');
$section_9_button_link    = get_field('section_9_button_link');
$section_9_image    			= get_field('section_9_image');
// Section 10
$section_10_title         = get_field('section_10_title');
$section_10_content  			= get_field('section_10_content');
$section_10_button 				= get_field('section_10_button');
$section_10_button_link   = get_field('section_10_button_link');
$section_10_image    			= get_field('section_10_image');
?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-1">
						<?php if( get_field('section_1_title') ) { ?>
							<section class="section-secondary first">
								<h4>
									<span><?php echo $section_1_title; ?></span>
									<a id="desktop-inline" href="<?php echo $section_1_button_link; ?>" class="button"><?php echo $section_1_button; ?></a>
								</h4>
								<p><?php echo $section_1_content; ?></p>
								<a id="mobile" href="<?php echo $section_1_button_link; ?>" class="button"><?php echo $section_1_button; ?></a>
							</section>
						<?php } ?>

						<?php if( get_field('section_2_title') ) { ?>
							<section class="section-secondary second">
								<h4>
									<span><?php echo $section_2_title; ?></span>
									<a id="desktop-inline" href="<?php echo $section_2_button_link; ?>" class="button"><?php echo $section_2_button; ?></a>
								</h4>
								<p><?php echo $section_2_content; ?></p>
								<a id="mobile" href="<?php echo $section_2_button_link; ?>" class="button"><?php echo $section_2_button; ?></a>
							</section>
						<?php } ?>

						<?php if( get_field('section_3_title') ) { ?>
							<section class="section-secondary second">
								<h4>
									<span><?php echo $section_3_title; ?></span>
									<a id="desktop-inline" href="<?php echo $section_3_button_link; ?>" class="button"><?php echo $section_3_button; ?></a>
								</h4>
								<p><?php echo $section_3_content; ?></p>
								<a id="mobile" href="<?php echo $section_3_button_link; ?>" class="button"><?php echo $section_3_button; ?></a>
							</section>
						<?php } ?>

						<?php if( get_field('section_4_title') ) { ?>
							<section class="section-secondary second">
								<h4>
									<span><?php echo $section_4_title; ?></span>
									<a id="desktop-inline" href="<?php echo $section_4_button_link; ?>" class="button"><?php echo $section_4_button; ?></a>
								</h4>
								<p><?php echo $section_4_content; ?></p>
								<a id="mobile" href="<?php echo $section_4_button_link; ?>" class="button"><?php echo $section_4_button; ?></a>
							</section>
						<?php } ?>

						<?php if( get_field('section_5_title') ) { ?>
							<section class="section-secondary second">
								<h4>
									<span><?php echo $section_5_title; ?></span>
									<a id="desktop-inline" href="<?php echo $section_5_button_link; ?>" class="button"><?php echo $section_5_button; ?></a>
								</h4>
								<p><?php echo $section_5_content; ?></p>
								<a id="mobile" href="<?php echo $section_5_button_link; ?>" class="button"><?php echo $section_5_button; ?></a>
							</section>
						<?php } ?>

						<?php if( get_field('section_6_title') ) { ?>
							<section class="section-secondary second">
								<h4>
									<span><?php echo $section_6_title; ?></span>
									<a id="desktop-inline" href="<?php echo $section_6_button_link; ?>" class="button"><?php echo $section_6_button; ?></a>
								</h4>
								<p><?php echo $section_6_content; ?></p>
								<a id="mobile" href="<?php echo $section_6_button_link; ?>" class="button"><?php echo $section_6_button; ?></a>
							</section>
						<?php } ?>

						<?php if( get_field('section_7_title') ) { ?>
							<section class="section-secondary second">
								<h4>
									<span><?php echo $section_7_title; ?></span>
									<a id="desktop-inline" href="<?php echo $section_7_button_link; ?>" class="button"><?php echo $section_7_button; ?></a>
								</h4>
								<p><?php echo $section_7_content; ?></p>
								<a id="mobile" href="<?php echo $section_7_button_link; ?>" class="button"><?php echo $section_7_button; ?></a>
							</section>
						<?php } ?>

						<?php if( get_field('section_8_title') ) { ?>
							<section class="section-secondary second">
								<h4>
									<span><?php echo $section_8_title; ?></span>
									<a id="desktop-inline" href="<?php echo $section_8_button_link; ?>" class="button"><?php echo $section_8_button; ?></a>
								</h4>
								<p><?php echo $section_8_content; ?></p>
								<a id="mobile" href="<?php echo $section_8_button_link; ?>" class="button"><?php echo $section_8_button; ?></a>
							</section>
						<?php } ?>

						<?php if( get_field('section_9_title') ) { ?>
							<section class="section-secondary second">
								<h4>
									<span><?php echo $section_9_title; ?></span>
									<a id="desktop-inline" href="<?php echo $section_9_button_link; ?>" class="button"><?php echo $section_9_button; ?></a>
								</h4>
								<p><?php echo $section_9_content; ?></p>
								<a id="mobile" href="<?php echo $section_9_button_link; ?>" class="button"><?php echo $section_9_button; ?></a>
							</section>
						<?php } ?>

						<?php if( get_field('section_10_title') ) { ?>
							<section class="section-secondary second">
								<h4>
									<span><?php echo $section_10_title; ?></span>
									<a id="desktop-inline" href="<?php echo $section_10_button_link; ?>" class="button"><?php echo $section_10_button; ?></a>
								</h4>
								<p><?php echo $section_10_content; ?></p>
								<a id="mobile" href="<?php echo $section_10_button_link; ?>" class="button"><?php echo $section_1_button; ?></a>
							</section>
						<?php } ?>
					</div>
					<div class="col-md-2 image-spacing-42">
						<?php
							the_content();
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dchglobal' ),
								'after'  => '</div>',
							) );
						?>
					</div>
				</div>
			</div>
		</main>
	</div>

<?php get_footer(); ?>
