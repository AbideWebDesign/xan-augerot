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
				
	<header class="entry-header bg-primary py-4">
			
		<div class="container">		
		
			<div class="row justify-content-center">
	
				<div class="col-lg-9">
					
					<div class="entry-header-blog">
						
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						
						<div class="entry-header-meta justify-content-center flex-column flex-md-row">
							
							<div class="mr-3 mb-2 mb-md-0 text-white"><?php the_date(); ?></div>
		
						</div>
						
					</div>
				
				</div>
		
			</div>
			
		</div>
		
	</header><!-- .entry-header -->
	
	<div class="entry-content-meta bg-secondary py-3">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-lg-10 col-xl-7">
					
					<div class="row justify-content-between">
						
						<?php if ( function_exists('yoast_breadcrumb') ): ?>
								
								<?php yoast_breadcrumb( '<div class="col-md-auto" id="breadcrumbs">','</div>' ); ?>
							
						<?php endif; ?>
						
						<div class="col-md-auto text-center text-md-right addthis_inline_share_toolbox "></div>
						
					</div>
					
				</div>
			
			</div>
		
		</div>
		
	</div><!-- .entry-meta -->

	<div class="entry-content bg-white py-5">
		
		<div class="container">
			
			<div class="row justify-content-center">
	
				<div class="col-lg-10 col-xl-7">
					
					<?php if ( has_post_thumbnail() ): ?>
						
						<div class="entry-image mb-4">
							
							<?php the_post_thumbnail(); ?>
							
						</div>
						
					<?php endif; ?>
					
					<?php the_content(); ?>	
			
				</div>
				
			</div>
			
		</div>
	
	</div><!-- .entry-content -->

	<div class="entry-footer">

		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-lg-10 col-xl-7">
					
					<div class="entry-footer-content py-4">
						
						<div class="mb-1">
							
							<h3 class="text-center"><?php the_field('footer_blog_title', 'options'); ?></h3>
							
							<div class="text-center"><?php the_field('footer_blog_content', 'options'); ?></div>
							
						</div>
						
						<div class="row justify-content-center">
							
							<div class="col-12 col-md-auto mb-2 mb-md-0"><a href="/contribute" class="btn btn-primary btn-block">Contribute</a></div>
							
							<div class="col-12 col-md-auto mb-3 mb-md-0 "><a href="/get-involved" class="btn btn-secondary btn-block">Get Involved</a></div>
							
							<div class="col-12 col-md-auto addthis_inline_share_toolbox align-self-center text-center"></div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>

	</div><!-- .entry-footer -->

</article><!-- #post-## -->
