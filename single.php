<?php
/**
 * The template for displaying all single posts
 *
 * @package electxan
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>
<div id="single-wrapper">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'loop-templates/content', 'single' ); ?>

	<?php endwhile; // end of the loop. ?>

</div><!-- #single-wrapper -->

<?php get_footer();
