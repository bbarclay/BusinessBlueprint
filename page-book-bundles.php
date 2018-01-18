<?php 

/**
* 
* Book Bundles Page
*/

get_header(); ?>

	<div id="content" class="entry__content" role="main" itemscope itemprop="mainContentOfPage">
		
		<div class="container">


			<ul class="products">

				<?php

				// Setup your custom query
				$args = array( 

					'post_type' => 'product',
					'tax_query' => array(
						array(
							'taxonomy' => 'product_type',
							'field'    => 'slug',
							'terms'    => 'grouped',
						),
					),

				);
				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); 

				  wc_get_template_part( 'content', 'product' );

				endwhile; wp_reset_query(); // Remember to reset ?>

			</ul><!--/.products-->


		</div>				

	</div>
<?php get_footer(); ?>