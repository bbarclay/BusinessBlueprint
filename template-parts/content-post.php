
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemprop="http://schema.org/BlogPosting">
    <div class="banner banner-top"><a href="https://52ways.com/?utm_campaign=52W+Free.BB&utm_source=Website" target="_blank"><img src="http://businessblueprint.com.au/wp-content/uploads/2018/01/52-WAYS-Banner-720x100px-GRAPH-2.jpg" alt="52 ways" width="100%" height="auto"/></a></div>

	<header class="entry__header">
		<h1 class="entry__title" itemprop="headline">
			<?php the_title(); ?>
		</h1>
		
		<?php get_template_part( 'template-parts/post-meta' ); ?>
	</header>

	<div class="entry__content" itemprop="articleBody">
		<?php the_content(); ?>
		
		<?php cascade_link_pages(); ?>
	</div>

	<?php get_template_part( 'template-parts/post-footer' ); ?>

</article>