<?php 
   $logo = get_sub_field('logo');
   $cta  = get_sub_field('call_to_action');

?>
<header class="main-header">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-4 col-xs-8">
                <div class="site-logo">
                   <?php
                       if($logo) :
                   ?>
                    <a href="<?php echo home_url() ?>"><img src="<?php echo $logo['url'] ?>" alt="Logo"></a>
                    <?php 
                        endif;
                    ?>
                </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-4">
               <div class="tl-block">
                   <?php if($cta) {
                                echo $cta;
                         }
                    ?>
               </div> 
            </div>

        </div>
    </div>
</header>