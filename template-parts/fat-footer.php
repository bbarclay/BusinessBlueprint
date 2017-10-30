<?php
/**
 * Template part for displaying content in footer.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dale_beaumont
 */
?>

<aside class="fat-footer">
	<div class="row">
		<div class="col-md-5">
		    <div class="pad-right">
				<div class="footer-logo">	
				   <?php  
				        $image = get_field( 'footer_logo', 'option' );

				      if( !empty($image) ) { ?>			
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php } ?>			
				</div>
	            <div class="description">
	            	<?php 
	            	  $about = get_field( 'about_us', 'option' );

                          if(!empty($about)) {
                          	  echo $about;
                          }
	            	?>
	            </div>
			</div>
		</div>

		<div class="col-md-3">
			<?php wp_nav_menu( array(
				'theme_location' => 'footer',
				'menu_class'     => 'menu  menu--footer'
			) ); ?>
		</div>
		<div class="col-md-4">
			<?php wp_nav_menu( array(
				'theme_location' => 'social',
				'depth'          => 1,
				'fallback_cb'    => false,
				'link_before'    => '<span class="screen-reader-text">',
				'link_after'     => '</span>',
				'menu_class'     => 'menu  menu--social'
			) ); ?>

			<div class="facebook-feed">
			    <?php if(get_field('facebook_feed', 'option')) { ?>
			    <div class="feed-header">
			    	<?php 
	            	  $heading = get_field( 'facebook_heading', 'option' );

                          if(!empty($heading)) {
                          	  echo $heading;
                          }
	            	?>
			    </div>
				<?php echo get_field('facebook_feed', 'option') ?>
				<?php } ?>
			</div>
		</div>
	</div>
	
	<div class="tagline"></div>

	<div class="copyright">
	 <span>Copyright © <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.</span>

		<?php wp_nav_menu( array(
			'theme_location' => 'fine',
			'container'      => false,
			'depth'          => 1,
			'fallback_cb'    => false,
			'menu_class'     => 'menu  menu--fine'
		) ); ?>
	</div>
</aside>