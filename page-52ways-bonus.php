<?php


get_header(); 


?>

  <div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">

        <?php 
          $banner = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
          $style = $banner ? 'style="background-image: url( ' . $banner[0] . ' );"' : '';
        ?>

      <header class="entry__header  page-banner" <?php echo $style; ?>>
        <div class="container">
         
            <h1 class="entry__title" itemprop="headline">
              <?php the_title() ?>
            </h1>

        </div>
      </header>
 

      <div class="container">

        
         <?php the_content() ?>
         
           <?php 

           if( !post_password_required( $post )): 

               if( have_rows('books') ) : ?>

                  <div class="book-summaries">

                  <?php

                    while( have_rows('books') ) : the_row(); 

                  ?>
                 

                      <div class="book">
                        <div class="cover">
                            <?php $image = get_sub_field('image');
                                  $size  = 'full';

                                  if( $image ) {

                                     echo  wp_get_attachment_image($image['id'], $size);
                                  }
                             ?>
                        </div>
                        <div class="info">
                            <div>
                              <?php if( get_sub_field('title') ) : ?>
                                <h3 class="title"><?php echo get_sub_field('title') ?></h3>
                              <?php endif; ?>  
                              <?php if( get_sub_field('author') ) : ?>
                                <h4 class="author"><?php echo get_sub_field('author') ?></h4>
                              <?php endif; ?>  
                              <?php if( get_sub_field('download_link') ) : ?>
                                <a href="<?php echo get_sub_field('download_link'); ?>" class="download-link" target="blank" download>Download</a>
                              <?php endif; ?>  
                              
                            </div>
                        </div>
                      </div>

                    <?php
                    endwhile;
                    ?>
                </div>  
                <?php
                endif;

            endif;
            ?>    

      </div>
    
  </div>

<?php get_footer(); ?>