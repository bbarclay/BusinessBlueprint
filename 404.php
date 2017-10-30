<?php get_header(); ?>
    <?php get_template_part( 'template-parts/content', 'banner' ); ?>
	<div class="content-sidebar">
	    <div class="container">
			<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
				<article class="entry">
					<header class="entry__header">
						<h1 class="entry__title"><?php _e( 'Nothing was found at this location.', 'dale_beaumont' ); ?></h1>
					</header>

					<div class="entry__content">
						<p><?php _e( 'This page either doesn\'t exist or has moved. Use the menu above or try a search to find what you\'re looking for.', 'cascade' ); ?></p>
						
						<?php get_search_form(); ?>
					</div>
				</article>
			</div>
		</div>
	</div>

<?php get_footer(); ?>