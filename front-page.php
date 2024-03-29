<?php

get_header(); ?>

	<main id="main" class="main" itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage"  tabindex="-1">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php while ( have_rows( 'flex_content' ) ) : the_row(); ?>
				<?php get_template_part( 'template-parts/modules/' . get_row_layout() ); ?>
			<?php endwhile; ?>
		<?php endwhile; ?>
	</main>

<?php get_footer(); ?>