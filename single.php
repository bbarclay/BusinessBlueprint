<?php get_header(); ?>

	<div class="content-sidebar">

		<div class="container">
			<div class="grid">
				<div class="grid__column  grid__column--l-8  grid__column--content">
					<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
						<?php while ( have_posts() ) : the_post();  ?>
							<?php get_template_part( 'partials/content', get_post_type() ); ?>

                                 <?php comments_template(); ?>
						<?php endwhile; ?>
					</div>
				</div>

				<div class="grid__column  grid__column--l-4  grid__column--sidebar">
					<aside class="sidebar" role="complementary" itemscope itemprop="http://schema.org/WPSideBar">
                    
                    	<?php dynamic_sidebar( 'sidebar' ); ?>
       					
					</aside>
				</div>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>