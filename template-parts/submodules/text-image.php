<section <?php echo get_sub_field( 'anchor' ) ? 'id="' . get_sub_field( 'anchor' ) . '"' : ''; ?> class="module  module--text-image">
	<div class="container  container--wide">
		<?php if ( get_sub_field( 'image' ) ) : ?>
			<div class="module--text-image__image" style="background-image: url(<?php echo wp_get_attachment_image_src( get_sub_field('image'), 'full' )[0]; ?>);"></div>
		<?php endif; ?>

		<?php if ( get_sub_field( 'title' ) ) : ?>
			<header class="module__header">
				<?php if ( get_sub_field( 'title' ) ) : ?>
					<h2 class="module__title"><?php the_sub_field( 'title' ); ?></h2>
				<?php endif; ?>
			</header>
		<?php endif; ?>

		<?php if ( get_sub_field( 'content' ) ) : ?>
			<div class="module__content">
				<?php the_sub_field( 'content' ); ?>
			</div>
		<?php endif; ?>
	</div>
</section>