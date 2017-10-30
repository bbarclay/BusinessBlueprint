<style>
  .calendar-event {
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    text-align: center;
  }
  .calendar-event.grid-4 li { width: 25%; margin: 0 5px; }
  .calendar-event.grid-4 li:first-child { margin-left: 0; }
  .calendar-event.grid-4 li:last-child { margin-right: 0; }
  .calendar-event .date {
    transition: all 0.3s;
  }
  .calendar-event .date:hover {
      box-shadow: 0 2px 5px #ddd;
      border-radius: 3px;
      cursor: pointer
  }
  .date .month { 
    display: block; 
    background: #0076c0;
    color: #fff;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    position: relative;
    padding-top: 3px;
  }
  .date .month:after {
    content: '';
    position: absolute;
    top: -3px;
    right: 16px;
    height: 6px;
    width: 3px;
    background: #00254c;
  }
  .date .month:before {
    content: '';
    position: absolute;
    top: -3px;
    left: 16px;
    height: 6px;
    width: 3px;
    background: #00254c;
  }
  .date .day {
    display: block;
    padding: 5px 0 6px;
    background: #fff;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    color: #545454;
  }
  .conference-date {
      padding: 3em 0;
      text-align: center;
      background: #f5f5f5;
  }
  .testimonials {
    padding: 3em 0;
  }
  .module-table-chart {
      background: #f5f5f5;
  }
  .conference-date .date-container {
    padding: 3em 0;
  }
  .conference-date .c-download {
    max-width: 400px;
    margin: 0 auto;
  }
  @media screen and ( max-width: 992px ) {
    .calendar-event .date {
        max-width: 55px;
    }
    .conference-date h3 {
      margin-top: 40px;
    }
  }
</style>
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
                  <div class="image">
                  <img src="https://businessblueprint.com.au/wp-content/uploads/2017/10/calendar2.jpg" />
                  </div>
                  <!-- <h2>2018 FastTrack Calendar</h2> -->
                  <div class="option-btn">
                    <a href="" class="btn btn-orange">Open</a>
                    <a href="https://businessblueprint.com.au/wp-content/uploads/2017/10/BB-2018-Fast-Track-Calendar.pdf" class="btn btn-green" target="_blank" download>Download</a>
                  </div>
            </div>
           

  </div>
</div>

