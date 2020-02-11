<?php
/**
 * Block Name: Lead Text
 *
 * This is the template that displays the lead text block.
 */
 
// Get Group settings (array)
$group_settings = get_field('lead_text_settings');

// Get Group content (array)
$group_content = get_field('lead_text_content');

$image = wp_get_attachment_image_src( $group_content['image']['id'], 'Lead Block' );

$text_position = $group_settings['text_position'];
	
// Setup helper classes
if ( $text_position == 'Right' ) {
	
	$text_col_classes = 'col-lg-5 pl-5 order-1 align-self-center';
	$img_col_classes = 'col-lg-6';
	
} else {
	
	$text_col_classes = 'col-md-6 col-lg-6 col-xl-5 offset-xl-1 pr-xl-5 align-self-center';
	$img_col_classes = 'col-md-6 col-lg-6 mt-4 mt-lg-0 align-self-center';
	
}
	
?>

<div class="wrapper wrapper-lead">
	
	<div class="container">
		
		<div class="row">
			
			<div class="<?php echo $text_col_classes; ?>">
				
				<h2 class="heading"><?php echo $group_content['title']; ?></h2>
							
				<?php echo $group_content['content']; ?>
									
				<?php if ( $group_content['button'] ): ?>
				
					<a href="<?php echo $group_content['button_link']; ?>" class="btn btn-secondary mt-3"><?php echo $group_content['button_label']; ?></a>
				
				<?php endif; ?>
				
			</div>
			
			<div class="<?php echo $img_col_classes; ?>">
				
				<img src="<?php echo $image[0]; ?>" alt="<?php $image[1]; ?>" class="img-fluid" />
				
			</div>
			
		</div>
		
	</div>
	
</div>