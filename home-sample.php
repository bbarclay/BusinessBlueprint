<?php 
/*
*  Temp
*/

get_header(); ?>

	<div class="content-sidebar custom-blog-page">
		<?php if ( ! is_front_page() ) : ?>
			<?php $posts_page = new WP_Query( array( 'post_type' => 'page', 'post__in'  => array( get_option( 'page_for_posts' ) ) ) ); ?>

			<?php if ( $posts_page->have_posts() ) : while ( $posts_page->have_posts() ) : $posts_page->the_post(); ?>
				<?php //get_template_part( 'partials/page-banner' ); ?>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		<?php endif; ?>
		<div class="pad-m">
			<div class="container">
				<div class="row">
				    <div class="col-md-4 hidden-sm hidden-xs">
				        <aside class="sidebar" role="complementary" itemscope itemprop="http://schema.org/WPSideBar">
				    	<?php dynamic_sidebar( 'sidebar' ); ?>
				    	</aside>
<!-- 				    	<div class="sbr-form form-wrap">

						 
						    	 <div class="textwidget"><div class="signup-form signup-form--vertical">
									<h1 class="signup-form__title">5 Tech Tools That Can <strong>Transform Your Business </strong></h1>
									<p>Claim your Free 5-Part Video Series Now</p>

							<script type="text/javascript" src="//forms.ontraport.com/v2.4/include/formEditor/genbootstrap.php?method=script&amp;uid=p2c1648f167&amp;version=1"></script> <span class="moon-ray-form-placeholder-73710"><link rel="stylesheet" href="//app.ontraport.com/js/formeditor/moonrayform/paymentplandisplay/production.css" type="text/css"><link rel="stylesheet" href="//forms.ontraport.com/formeditor/formeditor/css/form.default.css" type="text/css"><link rel="stylesheet" href="//forms.ontraport.com/formeditor/formeditor/css/form.publish.css" type="text/css"><link rel="stylesheet" href="//forms.ontraport.com/v2.4/include/minify/?g=moonrayCSS" type="text/css"><link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" type="text/css"><link rel="stylesheet" href="//forms.ontraport.com/v2.4/include/formEditor/gencss.php?uid=p2c1648f167" type="text/css"><div class="moonray-form-p2c1648f167 ussr"><div class="moonray-form moonray-form-label-pos-stacked">
									<form class="moonray-form-clearfix" action="https://forms.ontraport.com/v2.4/form_processor.php?" method="post" accept-charset="UTF-8" novalidate="novalidate">
									<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-text"><label for="mr-field-element-63042050460" class="moonray-form-label">First Name</label><input name="firstname" type="text" class="moonray-form-input" id="mr-field-element-63042050460" required="" value="" placeholder="First Name" data-required="true"></div>
									<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-email"><label for="mr-field-element-219917614012" class="moonray-form-label">Email</label><input name="email" type="email" class="moonray-form-input" id="mr-field-element-219917614012" required="" value="" placeholder="Email" data-required="true"></div>
									<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-select"><label for="mr-field-element-801972012595" class="moonray-form-label">State (AUS)</label><select name="StateAUS_131" class="moonray-form-input" id="mr-field-element-801972012595"><option value="">State (AUS)</option><option value="747">NSW</option><option value="748">VIC</option><option value="749">QLD</option><option value="750">WA</option><option value="751">SA</option><option value="752">TAS</option><option value="753">ACT</option><option value="754">NT</option><option value="763">Outside Australia</option></select></div>
									<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-select"><label for="mr-field-element-243610036093" class="moonray-form-label">#1 Business Problem</label><select name="1BusinessP_166" required="" class="moonray-form-input" id="mr-field-element-243610036093" value="" placeholder="" data-required="true"><option value="">#1 Business Problem</option><option value="804">Finding &amp; Retaining Staff</option><option value="807">Lack of Targeted Leads</option><option value="805">Working Too Many Hours</option><option value="806">Adapting to New Technology</option><option value="808">Low or Inconstant Revenue </option><option value="820">Issues with Website &amp; Traffic</option><option value="809">It's something not on this list...</option></select></div>
									<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-submit"><input type="submit" name="submit-button" value="JOIN NOW" class="moonray-form-input" id="mr-field-element-118023682152" src=""></div>
									<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="afft_" type="hidden" value=""></div>
									<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="aff_" type="hidden" value=""></div>
									<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="sess_" type="hidden" value=""></div>
									<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="ref_" type="hidden" value=""></div>
									<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="own_" type="hidden" value=""></div>
									<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="oprid" type="hidden" value=""></div>
									<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="contact_id" type="hidden" value=""></div>
									<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_source" type="hidden" value=""></div>
									<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_medium" type="hidden" value=""></div>
									<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_term" type="hidden" value=""></div>
									<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_content" type="hidden" value=""></div>
									<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_campaign" type="hidden" value=""></div>
									<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="referral_page" type="hidden" value=""></div>
									<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="uid" type="hidden" value="p2c1648f167"></div>

														</form>
													</div>
												</div></span>
									</div>

									</div>
						  
						</div> -->
				    </div>
					<div class="col-md-8">
						<div id="content" class="content featured-blogs" role="main" itemscope itemprop="mainContentOfPage">
								<div class="form-wrap">
						        	<?php get_search_form() ?>
						        </div>
						 		<div id="infinite-loop-post" class="row">
						 		    <?php
											$featured = new WP_Query( array(

											    'post_type'      	=> 'post',
											    'posts_per_page'	=>  10,
											    'order' 		    => 'DESC',
											    'orderby' 			=> 'date',

											) );

						 		     while ( $featured->have_posts() ) : $featured->the_post();

						 		      $count++;
						 		    ?>	
								 			<div class="col-md-6 single-blog">

								 			
								 				    <article class="entry" itemscope itemtype="http://schema.org/BlogPosting">
										 				<div class="blog">

															<div class="entry-image">
																	<?php if( has_post_thumbnail() ) : ?>

																		<div class="img_wrap">		
																			<?php the_post_thumbnail( 'post-thumbnail-2', array( 'class' => 'entry__image', 'itemprop' => 'image' ) ); ?>
																		</div>

																	<?php endif; ?>
			
															</div>
															<div class="entry-title">
																<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
																<div class="entry-excerpt">
																	<?php the_excerpt()  ?>


																</div>
															</div>
															<div class="entry-meta clearfix">
															 		<time datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished">
																		<span><?php the_time( get_option( 'date_format' ) ); ?></span>
																	</time>
								
																<span class="comments"><?php echo getSharedcount( get_permalink() ); ?> shares</span>
															</div>
														</div>
													</article>
												

								 			</div>
								 			<?php if($count % 2 == 0 ) :?>
								 				<div class="clearfix"></div>

								 			<?php endif; ?>	
							       			<?php endwhile; wp_reset_query();  ?>


							    </div> 
							    <div class="post-listing row">
							    </div>



						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>