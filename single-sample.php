<?php get_header(); ?>
	<div class="container pad-m">
		<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
				
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</div>
	</div>
	
<?php get_footer(); ?>