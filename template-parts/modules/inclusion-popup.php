<section class="inclusions" id="inc-first">


            <?php  $no_of_item = 0;

               if( have_rows('inclusions') ) : 

                    while( have_rows('inclusions') ) : the_row();

                        $heading = get_sub_field('heading');
                        $subheading = get_sub_field('subheading');


                        $no_of_item++;
                        $item =  ($no_of_item == 2) ?  'grid-4col' : 'grid-3col';

                        echo '<div class="inclusion-wrapper ' .  $item . '">';          ?>

                                <div class="container">

                                <?php if( $heading ) : $image = get_sub_field('image');

                                      echo '<div class="inclusions__header">';
                                          

                                                  echo '<div>';

                                                  echo '<img src="' . $image['url'] .'" title="'. $image['title'] .'"  />';
                                             ?>

                                                   <h2 class="boldH"><?php echo $heading ?></h2>
                                                   <?php if( $no_of_item == 1 ) : ?>
                                                        <p class="note">Click on each below inclusion to find out more…</p>
                                                   <?php endif;

                                                   if( $subheading ) :   ?>    
                                                       <p class="textcenter"><?php echo $subheading; ?></p>

                                             <?php endif;       
                                                  echo '</div>';
                                    echo '</div>';            
                               
                               endif; 
                                
 
                             

                                 if( have_rows('items') ) :
                                    

                                    $count = 0;

                                    echo '<div class="grid tab-able">';

                                        while( have_rows('items') ) : the_row();

                                        $count++;

                                        $svg = get_sub_field('svg');
                                        $title = get_sub_field('title');
                                        $description = get_sub_field('description');
                                        $type = get_sub_field('membership_type');

                                        $col = ($type == 'Gold') ? 'item3col ' : 'item4col ';
                            ?> 
                                            <div class="item <?php echo $col; ?>" data-toggle="modal" data-target="#Modal-<?php echo get_sub_field('unique_id'); ?>">
                                                 
                                                  <?php 
                                                    if($svg) {
                                                        echo '<i class="' . $svg . ' fa-3x"></i>'; 
                                                    }

                                                  ?>  
                                                  <div class="text">
                                                      <span class="title"><?php echo $title; ?></span>
                                                     
                                                  </div>
                                            </div>
                                            
                            <?php 
                                        endwhile;
                                    echo '</div>';

                                 endif; ?>
                        <?php 
                                 echo '</div>'; 
                              echo '</div>';
                       endwhile; 
                  endif; ?>


    </section>

    <?php if( have_rows('inclusions') ) : 

               while( have_rows('inclusions') ) : the_row();

                 

                 if( have_rows('items') ) :

                    $count = 0;

                

                            while( have_rows('items') ) : the_row();

                            $count++;

                            $svg = get_sub_field('svg');
                            $title = get_sub_field('title');
                            $description = get_sub_field('description');

                    ?> 


                                  <div class="modal fade" id="Modal-<?php the_sub_field('unique_id'); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="popup">
                                            <h2><?php if($svg) {  echo '<i class="' . $svg . ' fa-lg"></i>'; }  ?> <?php echo  $title ?></h2>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                            <div class="scrolling">
                                                <div class="content">
                                                    <?php echo $description ?>
                                                </div>
                                            </div>
                                        </div>
                                  </div>
          
                            
                    <?php 
                            endwhile;


                         endif; ?>
    <?php 
            endwhile;


         endif; ?>
   
