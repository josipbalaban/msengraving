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
			<p>we do pretty much everything</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<p>1</p>
		</div>
		<div class="col-md-4">
			<p>2</p>
		</div>
		<div class="col-md-4">
			<p>3</p>
		</div>

	</div>

</div>

<!-- END PAGE CONTENT  -->

<?php get_footer(); ?>
