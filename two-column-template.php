<?php
/*
Template Name: Two Column Template
*/

get_header(); 


?>

	<div class="content-sidebar">
		<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
			<?php while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemprop="http://schema.org/CreativeWork">
					<?php get_template_part( 'template-parts/page-banner' ); ?>

					<div class="container pad-m">
						<div class="row">
							<div class="col-md-8 col-sm-12">							
								<section class="entry__content  clearfix" itemprop="text">
									<?php the_content(); ?>
									
	
								</section>
								
								<?php comments_template(); ?>
							</div>

							<div class="col-md-4 col-sm-12">
								<aside class="sidebar" role="complementary" itemscope itemprop="http://schema.org/WPSideBar">
									<?php dynamic_sidebar( 'sidebar' ); ?>
								</aside>
							</div>
						</div>
					</div>
				</article>
			<?php endwhile; ?>
		</div>
	</div>
	
<?php get_footer(); ?>