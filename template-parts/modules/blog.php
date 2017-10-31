 <?php 

    $title = get_sub_field('title');


	$featured = new WP_Query( array(

	    'post_type'      	=> 'post',
	    'posts_per_page'	=>  4,
	    'order' 		    => 'DESC',
	    'orderby' 			=> 'date',

	) );


	?>


	 <section id="featured-blogs" class="module featured-blogs">
		<div class="container">

	 		<?php if( $title ) { ?>
		 		<h3 class="animated"><?php echo $title; ?></h3>
		 	<?php } 
		 	$count = 0;
		 	?>	

	 		<div class="row">
	 		    <?php while ( $featured->have_posts() ) : $featured->the_post();

	 		      $count++;
	 		    ?>
			 			<div class="col-md-6 col-sm-6 col-xs-6 custom-xs">

			 				<a href="<?php the_permalink(); ?>">
			 				    <article class="entry" itemscope itemtype="http://schema.org/BlogPosting">
					 				<div class="blog blog-1 animated firstcol">

										<div class="entry-image">
												<?php if( has_post_thumbnail() ) : ?>

													<div class="img_wrap">		
														<?php the_post_thumbnail( 'featured-image', array( 'class' => 'entry__image', 'itemprop' => 'image' ) ); ?>
													</div>

												<?php endif; 
                                                      if( ! has_post_thumbnail() ) : ?>

													<div class="img_wrap">		

														<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/post-img.jpg" class="post-img">

													</div>

												<?php endif; ?>
										</div>
										<div class="entry-title">
											<h4><?php the_title(); ?></h4>
										</div>
										<div class="entry-meta clearfix">
										 		<time datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished">
													<span><?php the_time( get_option( 'date_format' ) ); ?></span>
												</time>
			
											<span class="comments"><?php echo getSharedcount( get_permalink() ); ?> shares</span>
										</div>
									</div>
								</article>
							</a>	

			 			</div>
			 			<?php
			 			  if($count % 2 == 0) {
			 			?>
			 			  <div class="clearfix"></div>
			 			<?php } ?>
		        <?php endwhile; wp_reset_query(); ?>
		    </div>    

		</div>    
	</section>
