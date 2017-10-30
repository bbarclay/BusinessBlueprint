<!-- <section id="search-2" class="widget widget_search">
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<span class="screen-reader-text">Search</span>
	<input type="search" class="u-wide  search-form__search" placeholder="Search..." value="" name="s">
	<button class="search-form__submit  genericon  genericon-search" title="Search"><span class="screen-reader-text">Search</span></button>
</form>
</section>
 -->


<p><?php get_field('custom_box'); ?></p>

<?php
$default_lead = get_field('add_single_blog_lead');
// check if default lead is checked
if( $default_lead >= 1 ) {
?>
	<section class="widget widget_text">			
		<div class="textwidget">
				<a href="<?php the_field('side_default_lead_link'); ?>" target="_blank">
	  				<img src="<?php the_field('sidebar_default_lead_image'); ?>" width="100%" height="auto">
				</a>
		</div>
	</section>
<?php 
}
?>

<?php
// check if the repeater field has rows of data
if( have_rows('sidebar_boxes') ):
?>
<?php
		// loop through the rows of data
		while ( have_rows('sidebar_boxes') ) : the_row();
	?>
	
<section id="text-24" class="widget widget_text">
			
<div class="textwidget">
	
<a href="<?php the_sub_field('box_url'); ?>">
 <div class="ad" style="background-image: url('<?php the_sub_field('box_image'); ?>');">
 
	<h1 class="ad__title">
		<span style="<?php $field = get_field_object('color_scheme2'); $value = the_sub_field('color_scheme2'); $label = $field['choices'][ $value ]; ?>"><?php the_sub_field('box_header'); ?></span>
	</h1>
    
<p class="ad__description">
	<?php the_sub_field('box_text'); ?>
</p>

<div class="ad__button" style="<?php $field = get_field_object('color_scheme2'); $value = the_sub_field('color_scheme2'); $label = $field['choices'][ $value ]; ?>">
	<span ><?php the_sub_field('button_label'); ?></span>
</div>

</div>
</a>


</div>
</section>
<?php endwhile; ?> 
<?php endif; ?>























<div class="textwidget">
<!-- Start Repeater -->
<?php if( have_rows('blog_testimonials')): // check for repeater fields ?>



    <?php while ( have_rows('blog_testimonials')) : the_row(); // loop through the repeater fields ?>
    <div class="testimonial testimonial-center testimonial-thumb-circle testimonial-thumb-border custom_sidebar_testimonial">
    <?php // set up post object
        $post_object = get_sub_field('select_blog_testimonial');
        	if( $post_object ) :
        		$post = $post_object;
        	setup_postdata($post);
    ?>

    	<div class="testimonial-quote">
			<?php the_content(); ?>
		</div>
        
        
		<div class="testimonial-flag">
			<div class="testimonial-flag-image">
            	<?php the_post_thumbnail('testimonial-thumbnail', array( 'class'	=> "testimonial-thumb")); ?>
            </div>		
            
            <div class="testimonial-flag-body clearfix">
				<strong class="testimonial-title"><?php the_title(); ?></strong>
				<small class="testimonial-subtitle"><?php the_field('testimonial_subtitle'); ?></small>					
            </div>
		</div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

    <?php endif; ?> 
    </div>
    <?php endwhile; ?>


<!-- End Repeater -->
<?php endif; ?>
</div>

