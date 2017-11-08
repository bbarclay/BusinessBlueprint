<div class="conference-date">
        <div class="container">

            <?php 
              if( have_rows('membership_conference_date') ) : 

                   while( have_rows('membership_conference_date') ) : the_row();

                   $heading = get_sub_field('heading');

                ?>
                  <div class="date-container">
                     <h2 class="bolder"><?php echo $heading; ?></h2>

                         <?php if( have_rows('conf-date') ) : 

                          
                                echo '<div class="row">';
                                  

                                   while( have_rows('conf-date') ) : the_row();

                                   echo '<div class="col-md-3 col-sm-6 col-xs-6 col-custom">';

                                   $title = get_sub_field('title');
                         ?>
                                    <?php if($title) { ?>
                                       <h3><?php echo $title; ?></h3>
                                    <?php } ?> 

                                        <?php if( have_rows('date') ) : 
                                                
                                                  echo '<ul class="calendar-event grid-4">';

                                                while( have_rows('date') ) : the_row();

                                                $event_date = get_sub_field('event_date');
                                        ?>
                                                 <?php if($event_date) { 
                                                  $month = date("M", strtotime($event_date));
                                                  $day = date("jS", strtotime($event_date));
            

                                                  ?>
                                                   <li>
                                                    <div class="date">
                                                       <span class="month"><?php echo $month ?></span><span class="day"><?php echo $day; ?></span>
                                                    </div> 
                                                  </li>
                                                  <?php } ?> 
                                         
                                        <?php   endwhile;
                                                  echo '</ul>';
                                              
                                              endif; //date loop ?>  

                                

                        <?php    
                                     echo '</div>';

                                    endwhile;

                                   
                                
                                echo '</div>'; 
                              endif;  //conf-date loop
                        ?> 
            
                  </div>      
            <?php       
                   
                   endwhile;
              endif; //membership_conference_dates loop
            ?>

            
            <div class="lead c-download">
                 <?php 

                    $img = get_sub_field('calendar_image');
                    $dl = get_sub_field('image_download_link');

                 if($img) : ?>


                  <div class="image">
                     <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['title'] ?>" />
                  </div>
                 <?php 
 
                  endif;
                 ?>

                  <?php if($dl) : ?>
                  <div class="option-btn">
                    <a href="<?php echo $dl;?>" class="btn btn-orange" target="_blank">Open</a>
                    <a href="<?php echo $dl; ?>" class="btn btn-green" target="_blank" download>Download</a>
                  </div>
                <?php endif; ?>
            </div>
           

  </div>
</div>

