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

                                        $col = ($type == 'Gold') ? 'item3col ' : 'item4col ';
                            ?> 
                                            <div class="item <?php echo $col; ?>" popnum='<?php echo get_sub_field('unique_id'); ?>'>
                                                 
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


                                  <div id="popup<?php echo get_sub_field('unique_id') ?>" class="overlay">
                                    <div class="popup">
                                            <h2><?php echo $title ?></h2>
                                            <span class="close" >&times;</span>
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
   
    <script>
        (function($){

            $('.overlay').on('click', function(e){
            
                var open_overlay = $('.overlay').hasClass('open');
                var popup = $('.open > .popup');

                console.log(e.target);    
                if( open_overlay && popup != e.target) {
                    popup.addClass('active');
                    $('.overlay').removeClass('open');
                }
            })


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
