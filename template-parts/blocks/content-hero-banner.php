<?php
/**
 * Block Name: Hero Banner
 *
 * This is the template that displays the hero banner.
 */

?>

<?php if ( get_field('hero_banner_type') == 'Default' ): ?>
	
	<?php $hero_banner_image = wp_get_attachment_image_src(get_field('hero_banner_image'), 'Hero Banner', false); ?>

	<div id="section-hero-banner" class="hero-banner-default-wrap" style="background-image: url( <?php echo $hero_banner_image[0]; ?>)">
		
		<div class="hero-banner-default-content">
			
			<div class="overlay"></div>
			
			<div class="hero-banner-default-text">
					
					<h1 class="m-0 text-white"><?php the_field('hero_banner_title'); ?></h1>
					
			</div>
			
		</div>	
		
	</div>

<?php else: ?>
	
	<div id="section-hero-banner" class="bg-primary d-md-flex">
		
		<div class="hero-banner-image">
			
			<div class="hero-banner-image-inner">
			
				<div class="hero-banner-slide">
					
					<?php echo wp_get_attachment_image(get_field('hero_banner_image'), 'Hero Banner', false); ?>
				
				</div>
			
			</div>
		
		</div>
		
		<div class="hero-banner-text">
			
			<div class="hero-banner-text-inner">
				
				<p class="text-accent-lg text-white mb-1"><?php the_field('hero_banner_sub_title'); ?></p>
				
				<h1 class="text-white mb-1 mb-md-2"><?php the_field('hero_banner_title'); ?></h1>
				
				<?php echo do_shortcode('[gravityform id="' . get_field('hero_banner_form') . '" title="false" description="false" ajax="true" tabindex="49"]'); ?>
				
			</div>
			
		</div>
		
	</div>

<?php endif; ?>
