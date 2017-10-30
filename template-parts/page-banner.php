<?php
$banner = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
$style = $banner ? 'style="background-image: url( ' . $banner[0] . ' );"' : '';
?>

<header class="entry__header  page-banner  <?php echo esc_attr( get_field( 'colour_scheme' ) ); ?>" <?php echo $style; ?>>
	<div class="container">
		<?php  if(get_field('banner_title')) { ?>
			<h1 class="entry__title" itemprop="headline">
				<?php the_field( 'banner_title' ); ?>
			</h1>
		<?php } ?>
		<?php  if(get_field('subtitle')) { ?>
			<p class="entry__subtitle"><?php the_field( 'subtitle' ); ?></p>
		<?php } ?>
	</div>
</header>