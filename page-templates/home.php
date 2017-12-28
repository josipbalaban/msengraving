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

<h1 class="homeh1">ms engraving</h1>
<h2>help!</h2>

<!-- END PAGE CONTENT  -->

<?php get_footer(); ?>
