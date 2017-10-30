<section class='module module-benefit tabs'>
    <div class="container">
		  		<div class="hidden-sm hidden-xs">
		  				  <div class="grid-flex equalHMVWrap eqWrap" role="tablist">
			        <?php   
			      		$count = 0;
			           if( have_rows('lists') ):

			               while ( have_rows('lists') ) : the_row();  ?>

	    		            <div class="box equalHMV eq <?php echo (get_sub_field('tab_control') == 'tab-1') ? 'active' : ''; echo (get_sub_field('custom_color') == true) ? ' custom_color' : ''; ?>" role="presentation">

	    		                <a href="#<?php echo get_sub_field('tab_control') ?>" aria-controls="<?php echo get_sub_field('tab_control') ?>" role="tab" data-toggle="tab">

	    		                    <span class="<?php echo get_sub_field('icon') ?>"></span>
	    		                    <h3 class="entry-title"><?php echo get_sub_field('title') ?></h3>
	    		                    <span class="scroller"></span>

	    		                </a>  

	    		            </div>

					        <?php  
			            endwhile; 

			            else:  

			            endif;  ?>
			        </div>
		        </div>
		        <div class="visible-sm visible-xs">
		        	<div class="grid-flex equalHMVWrap eqWrap" role="tablist" id="info-tabs">
			        	<?php   
				      		$count = 0;
				           if( have_rows('lists') ):

				               while ( have_rows('lists') ) : the_row();  ?>

		    		            <div class="box equalHMV eq <?php echo (get_sub_field('tab_control') == 'tab-1') ? 'active' : ''; echo (get_sub_field('custom_color') == true) ? ' custom_color' : ''; ?>" role="presentation">

		    		                <a href="#<?php echo get_sub_field('tab_control') ?>" aria-controls="<?php echo get_sub_field('tab_control') ?>" role="tab" data-toggle="tab">

		    		                    <span class="<?php echo get_sub_field('icon') ?>"></span>
		    		                    <h3 class="entry-title"><?php echo get_sub_field('title') ?></h3>
		    		                    <span class="scroller"></span>

		    		                </a>  

		    		            </div>

						        <?php  
				            endwhile; 

				            else:  

				            endif;  ?>	 
			        </div>
			    </div>    

		  </div>
	</div>			  
</section>

<section class="module module-component component">
	<div class="container">

		    <div class="tab-content" >

		        <?php

		        if( have_rows('tab_lists') ):

		                while ( have_rows('tab_lists') ) : the_row();  		

						        $image = get_sub_field('image');
		                ?>

		                     <div role="tabpanel" class="tab-pane <?php echo (get_sub_field('name') == 'tab-1') ? 'active' : '';?>" id="<?php echo get_sub_field('name') ?>">				     

		                           <div class="module background--image" style='background-image: url(<?php echo $image['url']; ?>);'></div>	

		                           <div class="module--content"><?php the_sub_field('content') ?></div>

		                     </div>

		        <?php 
		       			endwhile; 
		       	else: 


		       	endif; ?>

		  </div>
    </div>              
</section>   
