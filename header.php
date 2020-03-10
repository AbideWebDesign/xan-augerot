<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package electxan
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160227746-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		
		gtag('config', 'UA-160227746-1');
	</script>

</head>

<body <?php body_class(); ?>>
<div class="site" id="page">
	
	<div id="wrapper-top" class="bg-primary">
		
<!--
		<div class="container">
			
			<div class="row justify-content-center justify-content-md-end">
				
				<div class="col-auto">
					
					<ul class="list-inline mb-0">
						<li class="list-inline-item"><a href="<?php the_field('facebook', 'options'); ?>" target="_blank" class="text-white"><i class="fa fa-facebook-square"></i></a>
						<li class="list-inline-item"><a href="<?php the_field('twitter', 'options'); ?>" target="_blank" class="text-white"><i class="fa fa-twitter-square"></i></a>
						<li class="list-inline-item"><a href="<?php the_field('instagram', 'options'); ?>" target="_blank" class="text-white"><i class="fa fa-instagram"></i></a>
					</ul>
					
				</div>
			</div>
			
		</div>
-->
		
	</div>
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'electxan' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md navbar-light" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'electxan' ); ?>
			</h2>

		
			<div class="container">

				<a class="navbar-brand ml-3 ml-sm-0" href="<?php echo home_url(); ?>"><img src="<?php the_field('logo', 'options'); ?>" width="120px" alt="Elect Xan Augerot" class="img-fluid" /></a>
				
				<div class="d-md-none ml-auto mr-3">
					<a href="<?php echo home_url('/contribute'); ?>" class="btn btn-secondary">Contribute</a>
				</div>	
					
				<button class="navbar-toggler mr-3 mr-sm-0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'electxan' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 1,
						'walker'          => new electxan_WP_Bootstrap_Navwalker(),
					)
				); ?>
			
			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
