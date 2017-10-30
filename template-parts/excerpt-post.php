
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemprop="http://schema.org/BlogPosting">
		<?php if( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" rel="bookmark">
				<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'aligncenter', 'itemprop' => 'image' ) ); ?>
			</a>
		<?php endif; ?>

		<header class="entry__header">
			<h1 class="entry__title  h2 dd" itemprop="headline">
				<a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url">
					<?php the_title(); ?>
				</a>
			</h1>

			
			
			<?php get_template_part( 'template-parts/post-meta' ); ?>
		</header>
		<?php
			if( is_home() || is_search() ) : ?>
					<div class="entry__summary" itemprop="description">
						<?php the_excerpt(); ?>
					</div>
					<div class="entry__share clearfix">
					 		<time datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished">
								<span><?php the_time( get_option( 'date_format' ) ); ?></span>
							</time>

						<?php if(!is_search()) : ?>		
						  <span class="comments"><?php echo getSharedcount( get_permalink() ); ?> shares</span>
					    <?php endif; ?>
					</div>
		<?php
		    endif; ?>

	</article>
