<?php
/**
 * Template Name: home
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;

?>

<!-- START PAGE CONTENT -->


<div class="container">

	<div class="row">
		<div class="col-md-12 slider">
			<h1>Mary Star Engraving</h1>
			<p>Trying to add own text</p>
		</div>
	</div>

</div>

<div class="container-fluid">

		<div class="row">
			<div class="col-md-4">
				<a href="/contact/">				<img src="/wp-content/uploads/2017/12/logowithtext.png" alt="">
</a>

			</div>
			<div class="col-md-4">
				<p>this is the second coloumn</p>
			</div>
			<div class="col-md-4">
				<a href="/contact/">contact us</a>
			</div>

		</div>
</div>

<!-- END PAGE CONTENT  -->

<?php get_footer(); ?>
