   <div id="testimonials" class="testimonials">
        <div class="container">
                <div class="slick-video">
                    <?php if( have_rows('video_list') ) : 

                          echo '<div class="row">';

                            while( have_rows('video_list') ) : the_row(); 

                            $video = get_sub_field('video');
                            $name = get_sub_field('name');
                            $company = get_sub_field('company');
                    ?>
                              <div class="col-xs-6 col-sm-4 col-custom">
                                 <div class="video">
                                      <?php if($video) {
                                              echo $video;
                                        } ?>  
                                        <div class="detail">
                                            <?php 
                                               if($name) : ?>
                                                  <span class="name"><?php echo $name; ?></span>
                                            <?php 
                                                endif; 
                                                if( $company ) :
                                            ?>
                                                   <span class="company"><?php echo $company; ?></span>
                                            <?php endif; ?>       
                                        </div>
                                 </div>
                              </div>  
                    <?php 
                             endwhile;
                           echo '</div>';
                          endif; 
                    ?>   
          </div>

        </div>

    </div>
    