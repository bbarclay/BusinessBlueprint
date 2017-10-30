<?php
/*
Template Name: Full Width Page (52 New)
*/
get_header(); ?>
	<div class="content">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<section class="entry__content  clearfix" itemprop="text">
						<?php
							the_content();
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bb' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->

					<?php if ( get_edit_post_link() ) : ?>
						<footer class="entry-footer">
							<div class="container">
								<?php
									edit_post_link(
										sprintf(
											/* translators: %s: Name of current post */
											esc_html__( 'Edit %s', 'dale_beaumont' ),
											the_title( '<span class="screen-reader-text">"', '"</span>', false )
										),
										'<span class="edit-link">',
										'</span>'
									);
								?>
							</div>
						</footer><!-- .entry-footer -->
					<?php endif; ?>
				</article><!-- #post-## -->
				
				<?php //comments_template(); ?>
			<?php endwhile; ?>		

	</div>
<div class="footer  clearfix" itemscope itemprop="http://schema.org/WPFooter">
			<?php get_template_part( 'partials/fat-footer' ); ?>
		</div>
		
		<?php wp_footer(); ?>
	</div> <!-- /.helper -->
</body>
</html>