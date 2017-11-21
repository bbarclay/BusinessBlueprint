   <div id="testimonials" class="testimonials">
        <div class="container">
                <h2>Some Of Our Clients..</h2> 
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

                                              $image = get_sub_field('image');

                                        ?>
                                              
                                           <a href="<?php the_sub_field('video') ?>" class="wistia-popover[height=360,playerColor=005798,width=640]"><img src="<?php echo $image['url'] ?>" alt="Business Blueprint Success Stories" > </a>   
                                      <?php  } ?>  
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
    <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
    <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js" async></script>
