<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dale_beaumont
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( !has_post_thumbnail() ) : ?>
    <header class="entry__header">
      <h1 class="entry__title" itemprop="headline">
        <?php the_title(); ?>
      </h1>
    </header>
    <?php endif; ?>
	<section class="entry__content  clearfix" itemprop="text">
		<?php

			the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'themex' ),
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
						esc_html__( 'Edit %s', 'themex' ),
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