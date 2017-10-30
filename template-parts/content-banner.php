<?php 


  

  	 $image = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'banner' ); 
     $title = ( !empty( get_field('banner_title')) ) ? get_field('banner_title') : get_the_title();

     $heading = $title;
     $bg =  $image[0];

    
    $title = ( !empty( get_field('banner_title')) ) ? get_field('banner_title') : get_the_title();

    $heading = $title;
  

  $banner = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
  $style = $bg ? 'style="background-image: url( ' . $bg . ' );"' : '';




      $banner_title = get_field('banner_title');

      if( has_post_thumbnail() ) :
 
?>
<header class="entry__header  page-banner  <?php echo esc_attr( get_field( 'colour_scheme' ) ); ?>" <?php echo $style; ?>>
   <div class="container">
    	 
    	 <?php 

    	  if(is_home()) {
    	 		echo '<h1 class="entry__title" itemprop="headline">' . $heading . '</h1>';  
    	   }
        else if( get_post_type()  == 'post' && is_single()) {
          echo '<h1 class="entry__title" itemprop="headline">' . $heading . '</h1>'; 
         }
         else if( get_post_type()  == 'page' && is_single()){
          echo '<h1 class="entry__title" itemprop="headline">' . $heading . '</h1>'; 
         }
    	   else {
    	   	  echo '<h1 class="entry__title" itemprop="headline">' . $heading . '</h1>';  
    	   }

         if(get_field('subtitle')) {
            echo '<p class="entry__subtitle">'. get_field('subtitle') .'</p>';
         }
    	 ?>
    	 	
    	
   </div>    
</header>
<?php  endif; ?>
