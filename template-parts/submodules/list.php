<section class="list">
	<div class="container">
		<?php if ( get_sub_field( 'title' ) ) : ?>
			<h3 class="list__title">
				<?php the_sub_field( 'title' ); ?>
			</h3>
		<?php endif; ?>

		<?php if ( get_sub_field( 'description' ) ) : ?>
			<p class="list__description">
				<?php the_sub_field( 'description' ); ?>
			</p>
		<?php endif; ?>

		<?php if ( have_rows( 'items' ) ) : ?>
			<ul class="list__list">
				<?php while ( have_rows( 'items' ) ) : the_row(); ?>
					<?php if ( get_sub_field( 'item' ) ) : ?>
						<li class="list__list-item">
							<?php the_sub_field( 'item' ); ?>
						</li>
					<?php endif; ?>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>