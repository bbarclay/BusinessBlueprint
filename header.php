<?php
/**
 * The header for our theme.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="wrapper">
	<header role="banner" id="top-header">
		<div class="site-header" itemscope itemprop="http://schema.org/WPHeader">
			 <div class="container">
			 	  <div class="row">
			 	  	  <div class="col-custom col-xs-8 col-sm-4 col-md-4">
			 	  	    <div class="site-logo">
			 	  	  		<a href="<?php bloginfo('siteurl') ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/bb-logo.svg" alt="Logo" /></a>
			 	  	  	</div>
			 	  	  </div>
			 	  	  <div class="col-xs-4 visible-xs">
								<nav class="navbar navbar-default" role="navigation">
									    <!-- Brand and toggle get grouped for better mobile display -->
									    <div class="navbar-header">
									      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									        <span class="sr-only">Toggle navigation</span>
									        <span class="icon-bar"></span>
									        <span class="icon-bar"></span>
									        <span class="icon-bar"></span>
									      </button>
									    </div>
								</nav>
			 	  	  </div>
			 	  	  <div class="col-xs-12 col-sm-8 col-md-8">

			 	  	  	 <nav class="navbar navbar-default mobile-menu" role="navigation">
			 	  	  	 	<?php
								    wp_nav_menu( 
								    	array(
						                'menu'              => 'navbar',
						                'theme_location'    => 'navbar',
						                'depth'             => 2,
						                'container'         => 'div',
						                'container_class'   => 'collapse navbar-collapse',
						                'container_id'      => 'bs-example-navbar-collapse-1',
						                'menu_class'        => 'nav',
						                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						                'walker'            => new WP_Bootstrap_Navwalker())
								    );
					 	  	   ?>
					 	  	   
			 	  	  	 </nav>
						 
			 	  	  </div>
			 	  </div>
			 </div>
		</div>
	</header>
	<a class="screen-reader-text" href="#content"><?php _e( 'Skip to main content', 'cascade' ); ?></a>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7D8F9"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>