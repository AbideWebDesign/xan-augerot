<?php
/**
 * Block Name: Endorsment Carousel
 *
 * This is the template that displays the endoresement carousel block.
 */

$counter = 0;
	
?>

<div class="wrapper wrapper-endorsements">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col">
				
				<?php if ( get_field('endorsements_heading') ): ?>
				
					<h2 class="heading heading-center text-white mb-4"><?php the_field('endorsements_heading'); ?></h2>
					
				<?php endif; ?>
				
				<div id="endorsement_slides" class="carousel slide" data-ride="carousel">

					<ol class="carousel-indicators">
						
						<?php while ( have_rows('endorsements') ) : the_row(); ?>
						
							<li data-target="#endorsement_slides" data-slide-to="<?php echo $counter; ?>" <?php echo ( $counter == 0 ? 'class="active"' : '' ); ?>></li>
							
							<?php $counter++; ?>
							
						<?php endwhile; ?>
						
					</ol>
  
					<div class="carousel-inner bg-white p-4">
				
						<?php $counter = 0; ?>
						
						<?php while ( have_rows('endorsements') ) : the_row(); ?>
							
							<div class="carousel-item <?php echo ( $counter == 0 ? 'active' : '' ); ?>">
								
								<div class="row">
									
									<div class="col-md-3 align-self-center">
										
										<?php echo wp_get_attachment_image( get_sub_field('endorsement_photo'), 'Square Medium', false, array('class'=>'img-fluid d-none d-sm-none d-md-block d-lg-block d-xl-block') ); ?>
										
									</div>
									
									<div class="col-md-9 align-self-center">
										
										<div class="lead mb-3 position-relative">
											
											<div class="quote-mark">"</div>
											
											<?php the_sub_field('endorsement_text'); ?>
											
										</div>
										
										<strong><?php the_sub_field('endorsement_name'); ?></strong>
										
									</div>
									
								</div>
								
							</div>
							
							<?php $counter ++; ?>
				
						<?php endwhile; ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>