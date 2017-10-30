<?php 
  $style = get_sub_field( 'background_image' ) ? 'style="background-image: url(' . get_sub_field( 'background_image' ) . ');"' : ''; 

   $title = get_sub_field('title');
   $subtitle = get_sub_field('subtitle');

 ?>
<section id="hero" class="module hero" <?php echo $style; ?>>
	 	<div class="container">
	 		<div class="row">
		 		<div class="col-md-offset-6 col-md-6">
		 			<div class="hero__heading">
		 				<div class="hero__heading--primary">
		 					<?php if( $title ) { ?>
		 					<h1 class="animated fadeInRight"><?php echo $title ?></h1> 
		 					<?php } ?>
		 				</div>
		 				<?php

						// check if the repeater field has rows of data
						if( have_rows('button') ): ?>

		 					<div class="margin--medium-top">
		 				<?php // loop through the rows of data
    						  while ( have_rows('button') ) : the_row(); ?>

				 				<a href="<?php echo get_sub_field('link') ?>" class="btn btn-default btn-lg btn--<?php echo get_sub_field('color') ?>"><?php echo get_sub_field('label') ?></a>

			 			<?php endwhile; ?>
			 				</div>
			 			<?php endif; ?>	
		 			    
		 				<div class="hero__heading--secondary">
		 				    <?php if( $title ) { ?>
		 					   <h2 class="animated fadeInLeft"><?php echo $subtitle ?></h2>
		 					<?php } ?>
		 				</div>
		 			</div><!-- Slide Heading -->
		 			
		 		</div>
		 	</div>	
	 	</div>
 </section>