<?php
/**
 * The template for displaying the footer.
 */
  $form = get_field('remove_footer_form');

  if($form != true) {
?>
	 <section id="signup-form" class="module signup-form cpad--sm footer-form">
	 	<div class="container">
		    <div class="heading text-center">

		    	<?php if ( get_theme_mod( 'signup_form_footer_title' ) ) : ?>
		    		<h2 class="animated"><?php echo get_theme_mod( 'signup_form_footer_title' ); ?></h2>
				<?php endif; ?>
				<?php if ( get_theme_mod( 'signup_form_footer_description' ) ) : ?>
					<p><?php echo get_theme_mod( 'signup_form_footer_description' ); ?></p>
				<?php endif; ?>
		    </div>
		 	<div class="form-wrap">

				<?php echo get_theme_mod( 'signup_form_footer' ); ?>
		
		 	</div>
	 	</div>
	 </section>
	<?php } ?> 
	<footer class="site-footer  clearfix" itemscope itemprop="http://schema.org/WPFooter">
		<div class="container">
			<?php get_template_part( 'template-parts/fat-footer' ); ?>
		</div>	
	</footer>	

    <?php wp_footer(); ?>

</body>
</html>