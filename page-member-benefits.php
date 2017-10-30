<?php


get_header(); 


?>
<?php get_template_part( 'partials/page-banner' ); ?>



		<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">

			<?php while ( have_posts() ) : the_post(); ?>

				
         <section class='tabs'>

              <div class="grid-flex" role="tablist" id="info-tabs">

                  <?php   

                       if( have_rows('tab_component') ):

                           while ( have_rows('tab_component') ) : the_row();  ?>

                                  <div class="box <?php echo (get_sub_field('tab_control') == 'tab-1') ? 'active' : ''; echo (get_sub_field('custom_color') == true) ? ' custom_color' : ''; ?>" role="presentation">

                                     <a href="#<?php echo get_sub_field('tab_control') ?>" aria-controls="<?php echo get_sub_field('tab_control') ?>" role="tab" data-toggle="tab">

                                       <span class="<?php echo get_sub_field('icon') ?>"></span>

                                       <h3 class="entry-title"><?php echo get_sub_field('title') ?></h3>

                                       <span class="scroller"></span>

                                      </a>  

                                 </div>

                  <?php  endwhile; else:  endif;  ?>

              </div>

         </section>
         <section class="component">

 

                    <div class="tab-content" >

                       <?php

                           if( have_rows('tab_content') ):

                                while ( have_rows('tab_content') ) : the_row();  												

                      ?>

                                     <div role="tabpanel" class="tab-pane <?php echo (get_sub_field('name') == 'tab-1') ? 'active' : '';?>" id="<?php echo get_sub_field('name') ?>">				     

                                           <div class="module background--image" style='background-image: url(<?php echo get_sub_field('image'); ?>);'></div>	

                                           <div class="module--content"><?php echo get_sub_field('content') ?></div>

                                     </div>

                       <?php endwhile; else: endif; ?>

                  </div>

        

     </section>

     <div class="features">

          <div class="container">
   
              <div class="table-wrap">

     							<table class="table">
                      <tbody>

                           <tr>
                                <th></th>
                                <th><span>Gold</span> Membership</th>
                                <th><span>Platinum</span> Membership</th>
                           </tr>
                           <?php if ( have_rows( 'comparison_table' ) ): 

                                          while ( have_rows('comparison_table') ) : the_row();  ?>

                                               <tr>
                                                  <td><a href="#" data-toggle="modal" data-target="#Modal-<?php echo get_sub_field('id'); ?>"><span class="<?php echo get_sub_field('icon'); ?>"></span><span class="title"><?php echo get_sub_field('title'); ?></span></a></td>
                                                   <td>
                                                      <?php if( get_sub_field('gold_membership') ){ ?>

											                                       <span class="genericon genericon-checkmark"></span>

	                                                    <?php  } else { ?>

	                                                           <span class="genericon genericon-close"></span>

									                                     <?php } ?>

                                                  </td>
                                                  <td>
                                                     <?php if( get_sub_field('platinum_membership') ){ ?>
  											                                    <span class="genericon genericon-checkmark"></span>
  	                                                 <?php  } else { ?>
  	                                                       <span class="genericon genericon-close"></span>

  									                                 <?php } ?>
                                                   </td>
                                               </tr> 
                         <?php    endwhile; 
                                 endif;         ?>

                        </tbody>

                      </table>

                </div>

                                                              

                <?php if ( have_rows( 'comparison_table' ) ) :  while ( have_rows('comparison_table') ) : the_row(); ?>

                        <!-- Modal -->
                        <div class="modal fade" id="Modal-<?php the_sub_field('id'); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                           <div class="modal-dialog" role="document">
                                 <div class="modal-content">

                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                          <h4 class="modal-title" id="myModalLabel"><?php echo get_sub_field('title'); ?></h4>

                                      </div>
                                      <div class="modal-body">
                                          <?php echo get_sub_field('description'); ?>
                                      </div>
                                      <div class="modal-footer">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      </div>

                                  </div>
                             </div>
                        </div> 

                       <?php endwhile; endif; ?>   

               <?php if(get_field('comparison_chart')) { echo get_field('comparison_chart'); } ?>

                

              </div>   

         </div> 



				</article>

			<?php endwhile; ?>

		</div>

	

<?php get_footer('nosign'); ?>