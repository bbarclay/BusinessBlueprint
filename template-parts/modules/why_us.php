<?php


 if( get_row_layout() == 'why_us' ) :
?>

<section class="why-us">
   	<div class="container">
	 	<div class="slides slick-slides">
	 	      <?php 
	 	      	if( have_rows('items') ) {


	 	      		while( have_rows('items') ) : the_row(); 
	 	      ?>
			 	      <div class="topic">
			 			<h3 class="topic__title"><?php echo get_sub_field('title') ?></h3>
			 			<div class="topic__description">
							<?php echo get_sub_field('text') ?>
			 			</div>
			 		  </div>		
	 	      <?php 
	 	      		endwhile;
	 	      	}
	 	      ?>
	 	</div>
	 </div>	
</section>

<?php
  endif;

?>