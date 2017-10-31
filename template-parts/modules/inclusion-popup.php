      <section class="inclusions">
        <div class="container">
            <?php if( have_rows('inclusions') ) : 

                       while( have_rows('inclusions') ) : the_row();

                                    $heading = get_sub_field('heading');
                                    $subheading = get_sub_field('subheading');


                        ?>
                            <?php if( $heading ) : ?>
                                 <h2 class="boldH"><?php echo $heading ?></h2>

                            <?php endif; 
                            
                                 if( $subheading ) :
                            ?>    
                                   <p class="textright"><?php echo $subheading; ?></p>
                            <?php 
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

                                        $col = ($type == 'Platinum') ? 'item3col ' : 'item4col ';
                            ?> 
                                            <div class="item <?php echo $col; ?>" popnum='<?php echo $count; ?>'>
                                                 
                                                  <?php 
                                                    if($svg) {
                                                        echo '<i class="' . $svg . ' fa-4x"></i>'; 
                                                    }

                                                  ?>  
                                                  <span><?php echo $title; ?></span>

                                            </div>
                                            
                            <?php 
                                        endwhile;
                                    echo '</div>';

                                 endif; ?>
                        <?php 
                       endwhile; 
                  endif; ?>

        </div>
    </section>

    <?php if( have_rows('inclusions') ) : 

               while( have_rows('inclusions') ) : the_row();



                 if( have_rows('items') ) :

                    $count = 0;

                

                            while( have_rows('items') ) : the_row();

                            $count++;


                            $title = get_sub_field('title');
                            $description = get_sub_field('description');

                    ?> 


                                  <div id="popup<?php echo $count; ?>" class="overlay">
                                    <div class="popup">
                                            <h2><?php echo $title ?></h2>
                                            <span class="close" >&times;</span>
                                            <div class="content">
                                                <?php echo $description ?>
                                            </div>
                                        </div>
                                  </div>
          
                            
                    <?php 
                            endwhile;


                         endif; ?>
    <?php 
            endwhile;


         endif; ?>
   
    <script>
        (function($){
            $('.inclusions .item').on('click', function(){
                var popnum = $(this).attr('popnum');
                       
                $('#popup' + popnum).addClass('open');

            });


            $('.overlay .close').on('click', function(){

                if( $('.overlay').hasClass('open') ) {
                    $('.overlay').removeClass('open');
                }
            });
        })(jQuery);

    </script>
