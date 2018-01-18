    <div class="application">
        <div class="container">


             <div class="calendar">
            
                     <div class="row">

                        
                         <div class="col-md-12 col-sm-12 col-xs-12 col-xxs">
                            <div class="lead">
                               
                                <div class="image right-image">
                                    <h2>Business Blueprint Magazine</h2>
                                    <p><a href="<?php echo get_sub_field('magazine_link') ?>" target="_blank" download>Click here to download</a></p>
                                </div>  
                            </div>
                         </div>

                     </div>
            
            </div>

        </div>
    </div>
    <div class="apply-now">
      <div class="container"> 
        <?php if(  get_sub_field('main_text') ) { ?>
         <h2><?php echo get_sub_field('main_text') ?></h2>
        <?php } ?> 

         <div class="hidden-xs">
              <a href="<?php echo get_sub_field('application_link') ?>" class="btn btn-green" target="_blank" download>Complete Application</a>
         </div>
         <div class="visible-xs">
              <a href="<?php echo get_sub_field('application_link') ?>" class="btn btn-green" target="_blank">Complete Application</a>
         </div>
        
      </div> 
    </div>