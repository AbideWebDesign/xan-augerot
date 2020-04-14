<?php
/**
 * Block Name: List
 *
 * This is the template that displays the list block.
 */
?>

<?php if ( have_rows('list_block') ): ?>
	
	<div class="wrapper wrapper-list bg-white">
		
		<div class="container">
			
			<div class="row justify-content-center">
					
				<?php if ( get_field('list_heading') ): ?>
				
					<div class="col-12"> 
						
						<h3 class="text-center mb-5"><?php the_field('list_heading'); ?></h3>
						
					</div>
					
				<?php endif; ?>
				
				<div class="col-xl-10">
						
					<div class="row">
							
						<?php while ( have_rows('list_block') ): the_row(); ?>
				
							<div class="col-auto col-md-4 col-lg-3 mb-3"><i class="fa fa-check-square"></i> <?php the_sub_field('list_item'); ?></div>
						
						<?php endwhile; ?>
						
					</div>
				
				</div>
						
			</div>
			
		</div>
		
	</div>
	
<?php endif; ?>