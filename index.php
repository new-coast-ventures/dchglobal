<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dchglobal
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="homepage-carousel" class="carousel slide" class="site-main" role="main" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#homepage-carousel" data-slide-to="0" class="active"></li>
		    <li data-target="#homepage-carousel" data-slide-to="1"></li>
		    <li data-target="#homepage-carousel" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
		    <div class="carousel-item active">
		      <img src="http://placehold.it/3840x2160" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img src="http://placehold.it/3840x2160" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img src="http://placehold.it/3840x2160" alt="Third slide">
		    </div>
		  </div>
		  <a class="left carousel-control" href="#homepage-carousel" role="button" data-slide="prev">
		    <span class="icon-prev" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#homepage-carousel" role="button" data-slide="next">
		    <span class="icon-next" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
