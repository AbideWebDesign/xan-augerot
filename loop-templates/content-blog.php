<?php
/**
 * Partial template for content in page.php
 *
 * @package electxan
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="post-wrapper bg-white mb-4 p-3 p-lg-5">
	
	<div class="row">
		
		<div class="col-sm-8 align-self-center order-1 order-lg-0">
			
			<div class="post-cat"><?php the_category( ' ' ); ?></div>
			
			<a href="<?php the_permalink(); ?>"><h2 class="mb-2 mb-xl-4"><?php the_title(); ?></h2></a>
			
			<div class="post-excerpt d-none d-xl-block">
				
				<?php the_field('short_excerpt'); ?>
				
			</div>
			
			<div class="mt-3 mt-xl-5 d-none d-lg-block">
				
				<a href="<?php the_permalink(); ?>" class="btn btn-secondary">Read More</a>
				
			</div>
			
		</div>
		
		<?php if ( has_post_thumbnail() ): ?>
		
			<div class="col-sm-4 order-0 order-lg-1 align-self-center">
			
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'post-thumbnail', array('class'=>'img-fluid') ); ?></a>
			
			</div>
			
		<?php endif; ?>
		
	</div>
	
</div>
