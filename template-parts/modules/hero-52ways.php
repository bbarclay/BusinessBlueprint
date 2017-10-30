<?php 

   $title = get_sub_field('title');

   $media = get_sub_field('media_logo');
   $dale = get_sub_field('dale_image');
   $top_logo = get_sub_field('top_logo');
   $ways = get_sub_field('52_ways_logo');
   $style = get_sub_field( 'background_image' ) ? 'style="background-image: url(' . get_sub_field( 'background_image' ) . ');"' : ''; 


?>
<section id="promotions" class="module promotions">
	<div class="container">	
	      <div class="site-logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/bb-logo.svg" /> presents ... </div>
	 	<div class="content">
	 	    
	 		<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/52-logo.svg" class="logo animated" />

	 		<?php if( $title ) { ?>
	    		<div class="heading">
	 				<h3 class="animated headline"><?php echo $title; ?></h3>
	 			</div>
	    	<?php } ?>
		 	<?php

				// check if the repeater field has rows of data
				if( have_rows('button') ): ?>

 					<div class="animated alignleft">
 				      <?php // loop through the rows of data
					  while ( have_rows('button') ) : the_row(); ?>
			 			
			 			<a href="<?php echo get_sub_field('link') ?>" class="btn btn-default btn-lg btn--<?php echo get_sub_field('color') ?>"><?php echo get_sub_field('label') ?></a>
	
	 			      <?php 
	 			      endwhile; ?>
	 				</div>
	 		<?php endif; ?>	
	 			
	 			<div class="clearfix"></div>

	 		<?php if( $media ) { ?>
	 			<div class="media-logo animated">
	 				 <img src="<?php echo $media['url'] ?>" alt="<?php $media['alt'] ?>" />
	 			</div>

	    	<?php } ?>

	 	</div>	
	 	<?php if( $dale ) { ?>
 		  <img src="<?php echo $dale['url']; ?>" alt="<?php echo $dale['alt'] ?>" class="dale-image" />
 		<?php } ?>				
	</div>
</section>