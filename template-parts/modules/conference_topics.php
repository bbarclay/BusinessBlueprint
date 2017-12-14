   <div id="top-topics" class="top-topics">
        <div class="container">
           
                  <div class="slides rolling">
                      <?php 
                         if( have_rows('topics') ) :
                              while( have_rows('topics') ) : the_row(); 


                            $title = get_sub_field('title');
                            $subtitle = get_sub_field('subtitle');

                      ?>

                        <div class="topic">
                            <?php if($title) : ?>
                               <h3 class="list__title"><?php echo $title; ?></h3>
                             <?php endif; ?>

                             <?php if($subtitle) : ?>
                               <p class="list__description"><?php echo $subtitle; ?></p>
                              <?php endif; ?>

                              <?php if(have_rows('lists')) : 
                                      echo '<ul class="list__list">';
                                       while(have_rows('lists')) : the_row();

                                       $text = get_sub_field('text');
                              ?>
                                          <li><?php echo $text; ?></li>

                              <?php 
                                        endwhile;
                                      echo '</ul>';   
                                    endif;
                              ?>
    
                        </div>

                     <?php 
                              endwhile;
                         endif;
                       
                     ?>

              </div>

              <div class="topic-overview">
                  <?php 
                     $heading = get_sub_field('bottom_text');

                  if($heading) :?>
                     <h3><?php echo $heading; ?></h3>
                  <?php endif; ?>
                  <?php if( have_rows('downloads') ) : 
                              echo '<ul>';
                              while(have_rows('downloads')) : the_row();
                  ?>
                             <li><a href="<?php echo get_sub_field('download_link') ?>" target="_blank" download><?php echo get_sub_field('svg') ?></a></li>

                  <?php
                              endwhile;
                              
                           echo '</ul>';
                 endif; ?>  

              </div>
        </div>
    </div>