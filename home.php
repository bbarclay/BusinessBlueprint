<?php get_header(); ?>

	<div class="content-sidebar custom-blog-page">
		<?php if ( ! is_front_page() ) : ?>
			<?php $posts_page = new WP_Query( array( 'post_type' => 'page', 'post__in'  => array( get_option( 'page_for_posts' ) ) ) ); ?>

			<?php if ( $posts_page->have_posts() ) : while ( $posts_page->have_posts() ) : $posts_page->the_post(); ?>
				<?php get_template_part( 'template-parts/page-banner' ); ?>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		<?php endif; ?>
		<div class="pad-m">	
			<div class="container">
				<div class="row">

					<div class="col-md-4 hidden-sm hidden-xs">
						<aside class="sidebar" role="complementary" itemscope itemprop="http://schema.org/WPSideBar">
							<?php dynamic_sidebar( 'sidebar' ); ?>
							<div class="form" style="height: 400px;background: #fff;">test</div>
						</aside>
					</div>
					<div class="col-md-8">
						<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
							<div class="form-wrap">
						    <?php get_search_form() ?>
						    </div>
						    <div class="gridbox">
						    	<div class="grid-sizer"></div>
						    	<div class="gutter-sizer"></div>	
								<?php get_template_part( 'template-parts/loop' ); ?>
							</div>
								<?php
									if( is_home() ) :	

									 	cascade_paginate_links(); 

									endif;
								?>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	
<?php get_footer(); ?>