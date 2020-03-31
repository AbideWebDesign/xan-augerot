<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package electxan
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="bg-primary py-2">
	
	<div class="container">
		
		<h2 class="mb-0 text-white">
			
			<?php
			
				the_archive_title( '<h3 class="mb-0 text-white">', '</h3>' );
			
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			
			?>
			
		</h2>
		
	</div>
	
</div>

<div class="wrapper-sm bg-light" id="index-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<div class="col-xl-12">


				<?php if ( have_posts() ) : ?>
					
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'blog' ); ?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</div>

			<!-- The pagination component -->
			<?php electxan_pagination(); ?>

		</div> <!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php get_footer();
