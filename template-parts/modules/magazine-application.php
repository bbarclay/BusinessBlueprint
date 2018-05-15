    <div class="application">
        <div class="container">


             <div class="calendar">
            
                     <div class="row">

                        
                         <div class="col-md-12 col-sm-12 col-xs-12 col-xxs">
                            <div class="lead">
                               
                                <div class="image right-image">
                                    <h2>Business Blueprint Magazine</h2>
                                        <div class="hidden-xs">
                                            <p><a href="<?php echo get_sub_field('magazine_link') ?>" target="_blank" download>Click here to download</a></p>
                                        </div>
                                        <div class="visible-xs">
                                            <p><a href="<?php echo get_sub_field('magazine_link') ?>" target="_blank">Click here to download</a></p>
                                        </div>
                                </div>  
                            </div>
                         </div>

                     </div>
            
            </div>

        </div>
    </div>
    <div class="apply-now">
      <div class="container"> 
        <div class="row">
            <div class="col-sm-9 col-xs-8">
                <?php if(  get_sub_field('main_text') ) { ?>
                     <h3><?php echo get_sub_field('main_text') ?></h3>
                <?php } ?> 
            </div>
            <div class="col-sm-3 col-xs-4">
                
                 <div class="hidden-xs">
                      <a href="<?php echo get_sub_field('application_link') ?>" class="btn btn-green" target="_blank" download>Get Started</a>
                 </div>
                 <div class="visible-xs">
                      <a href="<?php echo get_sub_field('application_link') ?>" class="btn btn-green" target="_blank">Get Started</a>
                 </div>
        
            </div>
        </div>


      </div> 
    </div>
