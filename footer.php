<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package electxan
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<div class="wrapper wrapper-footer">

	<div class="container">

		<div class="row justify-content-center">

			<div class="col-md-10 col-lg-6">
					
				<div class="mb-5">
					
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'm-auto list-inline text-center',
							'fallback_cb'     => '',
							'menu_id'         => 'footer-menu',
							'depth'           => 1,
							'walker'          => new electxan_WP_Bootstrap_Navwalker(),
						)
					); ?>
					
				</div>
			
				
				<div class="mb-5 text-center">
					
					<a href="<?php echo home_url(); ?>"><img src="<?php the_field('logo', 'options'); ?>" width="120px" alt="Elect Xan Augerot" class="img-fluid" /></a>
					
				</div>
				
<!--
				<div id="footer-social" class="mb-5 text-center">
					
					<ul class="list-inline mb-0">
						<li class="list-inline-item mr-5"><a href="<?php the_field('facebook', 'options'); ?>" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
						<li class="list-inline-item mr-5"><a href="<?php the_field('twitter', 'options'); ?>" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
						<li class="list-inline-item"><a href="<?php the_field('instagram', 'options'); ?>" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
					</ul>
					
				</div>
-->
				
				<div id="footer-text" class="mb-3 text-center">
					
					<?php the_field('footer_text', 'options'); ?>
					
				</div>
				
				<div id="footer-bottom" class="text-center">
					
					<p class="mb-0">&copy;<?php echo date('Y'); ?> Xan Augerot. All Rights Reserved. <a href="https://abidewebdesign.com" target="_blank">Website Design and Maintenance by Abide Web Design</a>.</p>
					
				</div>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

