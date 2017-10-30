<?php
/*
Template Name: Full Width
*/
get_header(); ?>
    <?php get_template_part( 'template-parts/content', 'banner' ); ?>
			
	<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				
				<?php comments_template(); ?>
			<?php endwhile; ?>
	</div>
			
		
<?php

get_footer(); 

?>