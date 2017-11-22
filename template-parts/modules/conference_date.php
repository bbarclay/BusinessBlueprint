<div class="conference-date">
        <div class="container">

              <!-- Display the countdown timer in an element -->
              <h2>Next Conference</h2>
              <div id="countdown">
              </div>


            <?php 

            $counter = 0;
              if( have_rows('membership_conference_date') ) : 

                   while( have_rows('membership_conference_date') ) : the_row();

                   $heading = get_sub_field('heading');

                ?>
                  <div class="date-container">
                     <h2 class="bolder"><?php echo $heading; ?></h2>

                         <?php if( have_rows('conference_topic') ) : 

                          
                                echo '<div class="row">';
                                    
                                    

                                   while( have_rows('conference_topic') ) : the_row();

                                   
        
                                   if( strtotime(get_sub_field('due_date')) > strtotime(date('Y-m-d H:i:s') ) ) :
                                      $counter++;

                                        //add countdown for the first date
                                        if($counter == 1) {

                                           $due_time =  get_sub_field('due_date');
                                            ?>

                                                  <script>
                                                        // Set the date we're counting down to

                                                   

                                                              //var countDownDate = new Date("Jan 18, 2018 09:00:00").getTime();

                                                              var countDownDate = new Date("<?php echo $due_time; ?>").getTime();

                                                              console.log(countDownDate);
                                                              //var countDownDate = new Date(date).getTime();

                                                              // Update the count down every 1 second
                                                              var x = setInterval(function() {

                                                                // Get todays date and time
                                                                var now = new Date().getTime();

                                                                // Find the distance between now an the count down date
                                                                var distance = countDownDate - now;

                                                                // Time calculations for days, hours, minutes and seconds
                                                                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                                                // Display the result in the element with id="demo"
                                                                document.getElementById("countdown").innerHTML = "<div class='date date-days'><span class='date-no date-c'>"
                                                                + days +  "</span><span class='label'>Days</span></div><div class='date date-hours'><span class='date-no date-h'>" 
                                                                + hours + "</span><span class='label'>Hours</span></div> <div class='date date-minutes'><span class='date-no date-m'>"
                                                                + minutes + "</span><span class='label'>Minutes</span></div> <div class='date date-seconds'><span class='date-no date-s'> " + seconds + "</span><span class='label'>Seconds</span></div> ";

                                                                // If the count down is finished, write some text 
                                                                if (distance < 0) {
                                                                 clearInterval(x);
                                                                  document.getElementById("countdown").innerHTML = "EXPIRED";
                                                                }
                                                              }, 1000);

                                                          
                                                  </script> 



                                            <?php
                                        }

                                        if( have_rows('topics') ) : 

                                                while( have_rows('topics') ) : the_row();

                                                    

                                                    echo '<div class="col-md-3 col-sm-6 col-xs-6 col-custom">';

                                                             $title = get_sub_field('title');
                                                             if($title) { 
                                                                      echo '<h3>' . $title . '</h3>'; 
                                                              }


                                                                    if( have_rows('date') ) {

                                                                      echo '<ul class="calendar-event grid-4">';

                                                                      while( have_rows('date') )  {
                                                                            
                                                                            the_row();

                                                                            $event_date = get_sub_field('event_date');

                                                                          
                                                                



                                                                            if($event_date) { 



                                                                                $month = date("M", strtotime($event_date));
                                                                                $day = date("jS", strtotime($event_date));


                                                                                ?>


                                                                                         <li>
                                                                                          <div class="date">
                                                                                             <span class="month"><?php echo $month ?></span><span class="day"><?php echo $day; ?></span>
                                                                                          </div> 
                                                                                        </li>

                                                                                <?php

                                                                              }
                          

                                                                        } // END WHILE

                                                                      echo '</ul>';
                                                                    }  // END IF   
                                 

                                      
                                                      echo '</div>'; 
                                                endwhile;

                                        endif;// END OF TOPICS
    
                                      endif;  // END OF DUE DATE 

                                    endwhile;  
                                echo '</div>';  
                                
                              endif; // END OF CONFERENCE TOPIC    
                        ?> 
            
                  </div><!-- end of date container -->      
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

