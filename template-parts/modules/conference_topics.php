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
    <div class="application">
        <div class="container">


             <div class="calendar">
            
                     <div class="row">

                        
                         <div class="col-md-12 col-sm-12 col-xs-12 col-xxs">
                            <div class="lead">
                               
                                <div class="image right-image">
                                    <img src="https://businessblueprint.com.au/wp-content/uploads/2015/06/BusinessBlueprintMagazine.jpg" alt="BusinessBlueprintMagazine" width="397" height="561" class="size-full wp-image-9679">
                                </div>  
                                <div class="option-btn">
                                  <a href="https://business-blueprint.s3.amazonaws.com/Magalogs/BB%202017%20Magalog_FINAL_OPTIMIZED_ONLINE.pdf" class="btn btn-orange" target="_blank">Open</a>
                                  <a href="https://business-blueprint.s3.amazonaws.com/Magalogs/BB%202017%20Magalog_FINAL_OPTIMIZED_ONLINE.pdf" class="btn btn-green" target="_blank" download>Download</a>
                                </div>
                            </div>
                         </div>

                     </div>
            
            </div>

        </div>
    </div>
    <div class="apply-now">
      <div class="container"> 
         <h2>Are you ready to join Australia's #1 Business Education Program?</h2>

         <a href="" class="btn btn-green">Complete Application</a>
      </div> 
    </div>