<?php
/**
 * Template Name: Home Page
 */
?>

<?php
// Home Slider - Custom Fields
// Section 1
$slider_image_1         = get_field('slider_image_1');
$slider_image_2  				= get_field('slider_image_2');
$slider_image_3 				= get_field('slider_image_3');
$slider_image_4 				= get_field('slider_image_4');
$slider_image_5 				= get_field('slider_image_5');
?>

<?php get_header(); ?>

<div id="primary" class="content-area index">
	<main id="homepage-carousel" class="carousel slide" class="site-main" role="main" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#homepage-carousel" data-slide-to="0" class="active"></li>
		    <li data-target="#homepage-carousel" data-slide-to="1"></li>
		    <li data-target="#homepage-carousel" data-slide-to="2"></li>
				<li data-target="#homepage-carousel" data-slide-to="3"></li>
				<li data-target="#homepage-carousel" data-slide-to="4"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
		    <div class="carousel-item active" style="background-image: url(<?php echo $slider_image_1 ?>);"></div>
		    <div class="carousel-item" style="background-image: url(<?php echo $slider_image_2 ?>);"></div>
		    <div class="carousel-item" style="background-image: url(<?php echo $slider_image_3 ?>);"></div>
				<div class="carousel-item" style="background-image: url(<?php echo $slider_image_4 ?>);"></div>
				<div class="carousel-item" style="background-image: url(<?php echo $slider_image_5 ?>);"></div>
		  </div>
		  <a class="left carousel-control" href="#homepage-carousel" role="button" data-slide="prev">
		    <span class="icon-prev" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#homepage-carousel" role="button" data-slide="next">
		    <span class="icon-next" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
	</main>
</div>

<?php get_footer(); ?>
