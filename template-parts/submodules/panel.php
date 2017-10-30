<div class="panel" <?php echo get_sub_field( 'background' ) ? 'style="background-image: url('.wp_get_attachment_image_src(get_sub_field('background'),'medium')[0].')"' : ''; ?>>
	<img src="<?php echo get_template_directory_uri(); ?>/images/icon--<?php the_sub_field( 'icon' ); ?>.svg" class="panel__icon" role="presentation" alt="">

	<?php if ( get_sub_field( 'label' ) ) : ?>
		<div class="panel__label">
			<?php the_sub_field( 'label' ); ?>
		</div>
	<?php endif; ?>
</div>