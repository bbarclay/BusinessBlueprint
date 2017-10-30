<?php get_header(); ?>

	<div class="container  content-sidebar">
		<div class="row">
			<div class="col-md-12 grid__column  grid__column--content">
				<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
					<header class="archive__header">
						<div class="blog">	
							<div class="form-wrap">
								<?php get_search_form(); ?>
							</div>
						</div>
						<h1 class="archive__title">
							<?php printf( __( 'Search results for “%1$s”', 'cascade' ), get_search_query() ); ?>
						</h1>
					</header>
					<div class="grid-view">
						<div class="gridbox">
							<div class="grid-sizer"></div>
							<div class="gutter-sizer"></div>

							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
										<?php get_template_part( 'template-parts/excerpt', get_post_type() ); ?>
							<?php endwhile; else: ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', 'cascade' ); ?></p>
							<?php endif; ?>	
						</div>
					</div>
					<?php
						 if( is_search() ) :	

						 	cascade_paginate_links(); 

						  endif;
					?>
				</div>
			</div>

		</div>

	</div>
	
<?php get_footer(); ?>