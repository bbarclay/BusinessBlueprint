<section class="module full-slider-module">

   
             <div class="slick-this">

                <?php   
                  $count = 0;
                   if( have_rows('slide') ):

                       while ( have_rows('slide') ) : the_row(); 

                       $image = get_sub_field('image');
                       $title = get_sub_field('title');

                       if( $image ) :
                      ?>

                        <div class="slide">
                           <div style="background: url(<?php echo $image['url'] ?>) top center no-repeat;">
                               <?php if( $title ) { ?>
                                    <div class="container">
                                        <header class="slide-heading">
                                         <h2><?php echo $title ?></h2>
                                        </header>
                                    </div>
                               <?php } ?>
                           </div>
                        </div>

                <?php  
                      endif;
                endwhile; 

                else:  

                endif;  ?>

              </div>
      

</section>
