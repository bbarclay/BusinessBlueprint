<?php 
	$subheading = get_sub_field('subheading');
	$heading = get_sub_field('heading');
	$bg_img = get_sub_field('background_image');


?>
<section class="main-intro" style="background: url(<?php echo $bg_img['url']; ?>)">
         <div class="container">
            <div class="text">
                <?php if($subheading) { ?>
                   <h1 class="aligcenter heading boldH"><?php echo $heading; ?></h1>
                <?php 
                	   }	
                if($subheading) { ?>
                    <p class="aligncenter"><?php echo $subheading; ?></p>
                <?php } ?>
            </div>
        </div>
</section>