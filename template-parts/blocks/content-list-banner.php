<?php
/**
 * Block Name: List Banner
 *
 * This is the template that displays the list banner block.
 */
?>

<div class="wrapper-list-banner bg-secondary d-md-flex">
		
	<div class="hero-banner-text">
		
		<div class="hero-banner-text-inner">
						
			<h2 class="mb-3"><?php the_field('list_banner_heading'); ?></h2>
			
			<p class="mb-4"><?php the_field('list_banner_text'); ?></p>
				
				<?php while ( have_rows('list_items') ) : the_row(); ?>
					<div class="d-flex wrapper-list-item">
						<div class="col-1 col-xl-auto"><i class="fa fa-<?php the_sub_field('list_banner_icon_code'); ?>"></i></div>
						<div class="col-11 col-xl-auto"><?php the_sub_field('list_banner_item_text'); ?></div>
					</div>
				<?php endwhile; ?>
				
		</div>
		
	</div>
	
	<div class="hero-banner-image">
		
		<div class="hero-banner-image-inner">
		
			<div class="hero-banner-slide">
				
				<?php echo wp_get_attachment_image( get_field('list_banner_image'), 'Hero Banner', false ); ?>
			
			</div>
		
		</div>
	
	</div>
	
</div>
