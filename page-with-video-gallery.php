<?php
/**
* Template Name: Page with Video Gallery
*/

get_header(); ?>

    <?php get_template_part( 'template-parts/content', 'banner' ); ?>
		<div id="content" class="content pad-m" role="main" itemscope itemprop="mainContentOfPage">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemprop="http://schema.org/CreativeWork">
	

					<div class="container">
						<div class="entry__content  clearfix" itemprop="text">
							<?php the_content(); ?>

							<?php if ( have_rows( 'videos') ) : ?>
								<div class="video-filters">
										<div class="mix-filter" data-filter="all">All</div>
										<div class="mix-filter" data-filter=".mix-female">Female</div>
										<div class="mix-filter" data-filter=".mix-male">Male</div>
										<div class="mix-filter" data-filter=".mix-product">Product</div>
										<div class="mix-filter" data-filter=".mix-service">Service</div>
										<div class="mix-filter" data-filter=".mix-money"><span class="screen-reader-text">Money</span><span role="presentation">$$</span></div>
										<div class="mix-filter" data-filter=".mix-love">Love</div>
								</div>

								<div class="video-gallery">
									<?php while ( have_rows( 'videos' ) ) : the_row();
										$classes = get_sub_field( 'tags' ) ? implode( ' ', get_sub_field( 'tags' ) ) : ''; ?>

										<?php if( get_sub_field( 'embed_code' ) ) : ?>
											<div class="video-gallery__item  video-gallery__item--thumbnail  <?php echo $classes; ?>">
												<?php the_sub_field( 'embed_code' ); ?>
												<?php echo ( get_sub_field('name') ) ? '<h4>' . get_sub_field('name') . '</h4>': ''; ?>
												<?php echo ( get_sub_field('title') ) ? '<p>' . get_sub_field('title') . '</p>': ''; ?>
											</div>
										<?php else : ?>
											<div class="video-gallery__item  <?php echo $classes; ?>">
												<div class="u-video-wrap">
													<?php echo wp_oembed_get( get_sub_field( 'url' ) ); ?>
												</div>
											</div>
										<?php endif; ?>
									<?php endwhile; ?>
								</div>

								<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
								<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js" async></script>
							<?php endif; ?>
		                    <?php if( get_field('text') ) {
		                    	
		                    			echo get_field('text');

		                    	} ?>

							<?php cascade_link_pages(); ?>
						</div>
					</div>
				</article>

				<?php comments_template(); ?>
			<?php endwhile; ?>
		</div>


<?php get_footer(); ?>