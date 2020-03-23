<?php
/**
 * Single post partial template
 *
 * @package electxan
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


				
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header entry-header-blog">
				
		<div class="row justify-content-center">

			<div class="col-12">
		
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				
				<div class="entry-header-meta justify-content-center flex-column flex-md-row">
					
					<div class="mr-3 mb-2 mb-md-0"><?php the_date(); ?></div>
					
					<div class="addthis_inline_share_toolbox"></div>

				</div>
			
			</div>
	
		</div>
		
	</header><!-- .entry-header -->
	
	<div class="entry-content">
		
		<div class="row justify-content-center">

			<div class="col-xl-7">
		
				<?php the_content(); ?>
		
		
			</div><!-- .entry-content -->
			
		</div>
	
	</div>

	<div class="entry-footer">

		<div class="row justify-content-center">
			
			<div class="col-xl-7">
				
				<div class="entry-footer-content">
					
					<div class="mb-1">
						
						<?php the_field('footer_blog_content', 'options'); ?>
						
					</div>
					
					<div class="row justify-content-center">
						
						<div class="col-12 col-md-auto mb-2 mb-md-0"><a href="/contribute" class="btn btn-primary btn-block">Contribute</a></div>
						
						<div class="col-12 col-md-auto mb-3 mb-md-0 "><a href="/get-involved" class="btn btn-secondary btn-block">Get Involed</a></div>
						
						<div class="col-12 col-md-auto addthis_inline_share_toolbox align-self-center text-center"></div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>

	</div><!-- .entry-footer -->

</article><!-- #post-## -->
