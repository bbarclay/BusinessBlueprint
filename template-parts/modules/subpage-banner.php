<?php 

  	 $image = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'banner' ); 
     $title = ( !empty( get_sub_field('banner_title')) ) ? get_sub_field('banner_title') : get_the_title();

     $heading = $title;
     $bg =  $image[0];


  $banner = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
  $height = get_sub_field('height_adjustment');
  $style  = $bg ? 'style="background-image: url( ' . $bg . ' );"' : '' ;

?>
<header class="entry__header  page-banner  <?php echo esc_attr( get_sub_field( 'colour_scheme' ) ); ?>" <?php echo $style; ?>>
   <div class="container">
    	 
    	 <?php 

    	  if( $heading ) {
    	 		echo '<h1 class="entry__title" itemprop="headline">' . $heading . '</h1>';  
    	   }


        if( get_sub_field('subtitle') ) {
            echo '<p class="entry__subtitle">'. get_sub_field('subtitle') .'</p>';
        }
    	 ?>
    	 	
    	
   </div>    
</header>