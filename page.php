<?php get_header(); ?>

	<div id="content" class="entry__content" role="main" itemscope itemprop="mainContentOfPage">
		<?php get_template_part( 'template-parts/content', 'banner' ); ?>
		<div class="container">
			<div class="pad-m">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					
					<?php comments_template(); ?>
				<?php endwhile; ?>
			</div>
		</div>				

	</div>
<?php get_footer(); ?>