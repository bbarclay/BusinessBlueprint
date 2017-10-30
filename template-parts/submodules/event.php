<article class="event"> 
	<?php if ( get_sub_field( 'image' ) ) : ?>
		<div class="event__image">
		    <?php if ( get_sub_field( 'percentage_of_sales' )) : ?>
				<div class="event__soldout">
					<?php the_sub_field( 'percentage_of_sales' ); ?> 
				</div>  
    		<?php endif; ?>				
			<?php echo wp_get_attachment_image( get_sub_field( 'image' ), '52ways-event' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( get_sub_field( 'city' ) ) : ?>
		<h3 class="h1  event__city">
			<?php the_sub_field( 'city' ); ?>
		</h3>
	<?php endif; ?>

	<?php if ( get_sub_field( 'date' ) ) : ?>
		<div class="event__date">
			<?php echo date( 'D jS M Y', get_sub_field( 'date' ) ); ?>
		</div>
	<?php endif; ?>

	<?php if ( get_sub_field( 'date' ) ) : ?>
		<div class="event__description">
			<?php the_sub_field( 'description' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( get_sub_field( 'button_link' ) && get_sub_field( 'button_label' ) ) : ?>
		<a href="<?php the_sub_field( 'button_link' ); ?>" class="button  button--wide"><?php the_sub_field( 'button_label' ); ?></a>
	<?php endif; ?>
</article>