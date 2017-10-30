<blockquote class="module-testimonial">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="grid">
			<div class="grid__column  grid__column--m-4  grid__column--l-3">
				<?php the_post_thumbnail( '52ways-testimonial', array( 'class' => 'module-testimonial__image' ) ); ?>
			</div>

			<div class="grid__column  grid__column--m-8  grid__column--l-9">
	<?php endif; ?>

				<div class="module-testimonial__quote">
					<?php the_content(); ?>
				</div>

				<footer>
					<cite class="module-testimonial__attribution">
						<span class="module-testimonial__name"><?php the_title(); ?></span>

						<?php if ( $subtitle = get_post_meta( get_the_ID(), 'testimonial_subtitle', true ) ) : ?>
							<span class="module-testimonial__subtitle"><?php echo $subtitle; ?></span>
						<?php endif; ?>
					</cite>
				</footer>

	<?php if ( has_post_thumbnail() ) : ?>
			</div>
		</div>
	<?php endif; ?>
</blockquote>