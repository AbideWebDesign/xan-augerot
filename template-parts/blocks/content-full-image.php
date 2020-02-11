<?php
/**
 * Block Name: Full Screen Image
 *
 * This is the template that displays a full screen image block.
 */
?>
<div class="section-full-image bg-white">
	
	<?php echo wp_get_attachment_image(get_field('full_screen_image'), 'Full Screen', false, array('class'=>'img-fluid')); ?>
	
</div>