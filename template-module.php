<?php 
/*
*
*  Template Name: Module
*
*/

get_header(); ?>
	<div class="content-sidebar">
		<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemprop="http://schema.org/CreativeWork">
					<?php get_template_part( 'template-parts/content', 'banner' ); ?>

                <section id="intro" class="module video-text">
					<div class="container">
						<?php while ( have_posts() ) : the_post(); ?>
                          	<p><?php the_content() ?></p>
						<?php endwhile; ?>
					</div>
				</section>

				<section id="form" class="module form">
					<div class="container">
						<div class="form platinum-form">
							<script type="text/javascript" src="//forms.ontraport.com/v2.4/include/formEditor/genbootstrap.php?method=script&uid=p2c1648f194&version=1"></script>
						</div>
					</div>
				</section>
				<section id="testimonials" class="module testimonials">
				    <div class="container">
				    	<div class="lists testimonials-wrap">
							     <?php
				                       $args = array(
				                          'post_type'      => 'testimonial',
				                          'post_status'    => 'publish',
				                          'order'          => 'DESC',
				                          'orderby'        => 'date',
				                          'post_status'    => 'publish',
				                          'posts_per_page' => 10,
				                        );
				                  $query = new WP_Query( $args );
				            ?>
				          <?php if ($query->have_posts()) : ?> 
				          	<?php while ($query->have_posts()) : $query->the_post(); ?>
									<div class="list list-1"> 
										   <div class="grid">
										       <div class="grid__column grid__column--m-4 grid__column--l-3"> 
										         <?php if(has_post_thumbnail()) {  

									 	 	  		      the_post_thumbnail('testimonial-thumb'); 

														} else {
															$img = get_field('default_testimonial_image', 'option');
					                                             echo '<img src="'. $img['url'] .'"  alt="' . $img['alt'] . '"/>';
													}
												?> 
										       </div>
										       <div class="grid__column grid__column--m-8 grid__column--l-9">
										          <div class="module-testimonial__quote">
										               <p><?php echo get_the_content(); ?></p>
										           </div>
										           <footer> 
										              <cite class="module-testimonial__attribution"> <span class="module-testimonial__name"><?php the_title(); ?>,</span>
										              <span class="module-testimonial__subtitle"><?php echo $subtitle = sanitize_text_field( get_post_meta( get_the_ID(), 'testimonial_subtitle', true ) ); ?></span> 
										              </cite>
										           </footer>
										       </div>
										    </div>

										</div>
								<?php endwhile; endif; wp_reset_postdata(); ?>
						</div>		
					</div>	
				</section>

			</article>
		</div>
	</div>

<?php get_footer(); ?>