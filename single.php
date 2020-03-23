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

<div class="wrapper-sm" id="single-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row">
			
			<div class="col-12 mb-3">
				
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>

			</div>
			
		</div>
		
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'loop-templates/content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer();
