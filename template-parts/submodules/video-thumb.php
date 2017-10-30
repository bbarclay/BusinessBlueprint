<div class="video-thumb">
	<?php if ( get_sub_field( 'label' ) ) : ?>
		<h3 class="video-thumb__label">
			<?php the_sub_field( 'label' ); ?>
		</h3>
	<?php endif; ?>

	<?php if ( get_sub_field( 'oembed' ) ) : ?>
		<div class="video-thumb__video">
			<?php the_sub_field( 'oembed' ); ?>
		</div>
	<?php endif; ?>
</div>