<?php 

   $title = get_sub_field('title');
   $subtitle = get_sub_field('subtitle');

   $form = get_sub_field('form');

?>
<section id="signup-form" class="module signup-form cpad--sm">
	<div class="container">
	    <div class="heading text-center">

	        <?php if( $title ) { ?>
	    		<h2><?php echo $title; ?></h2>
	    	<?php } ?>
	    	<?php if( $subtitle ) { ?>
	    		<p><?php echo $subtitle; ?></p>
	    	<?php } ?>

	    </div>
	    <?php if( $form ) { ?>
	 	    <div class="form-wrap">
	           <?php echo $form; ?>
			</div>
		<?php } ?>

 	</div>
	</div>
</section>