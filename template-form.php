<?php 

/**
* Template Name: Dinner Form
*/


get_header(); ?>
    <?php get_template_part( 'template-parts/content', 'banner' ); ?>

	<div class="content-sidebar">
	    <div class="container">
			<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
				<article class="entry">
					<header class="entry__header">
						<h1 class="entry__title"><?php the_title() ?></h1>
					</header>

					<div class="entry__content">
						<?php
				   				$query = get_query_var( 'email', '' ); 
			    		?>

						<?php the_content(); ?>
					</div>
				</article>
			</div>
		</div>
	</div>

<script>
	var email = "<?php echo get_query_var( 'email', '' ) ?>";


	(function($){

		$(window).load(function(){

			$('.entry__content').find('input[type="email"]').val(email);

		});

	})(jQuery);

</script>
<?php get_footer(); ?>