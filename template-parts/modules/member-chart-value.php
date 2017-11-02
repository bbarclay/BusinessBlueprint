<section class="module features module-table-chart table-cv">
    <div class="container-fluid">

        <div class="table-wrap">

							<table class="table">
                <tbody>
                     <tr>
                          <th></th>
                          <th></th>
                          <th><span class="level">Gold</span> <span class="sublevel">Membership</span></th>
                          <th><span class="level">Platinum</span> <span class="sublevel">Membership</span></th>
                     </tr>
                     <?php if ( have_rows( 'compare_table' ) ): 

                                    while ( have_rows('compare_table') ) : the_row();  ?>

                                         <tr>
                                            <td><a href="#" data-toggle="modal" data-target="#Modal-<?php echo get_sub_field('id'); ?>"><span class="fa fa-<?php echo get_sub_field('icon'); ?>"></span><span class="title"><?php echo get_sub_field('title'); ?></span></a></td>
                                            <td>
                                              <span><?php echo get_sub_field('value'); ?></span>
                                            </td>
                                             <td>
                                                <?php if( get_sub_field('gold_membership') ){ ?>

								                                       <span class="fa fa-check"></span>

                                                <?php  } else { ?>

                                                       <span class="fa fa-close"></span>

						                                     <?php } ?>

                                            </td>
                                            <td>
                                               <?php if( get_sub_field('platinum_membership') ){ ?>
									                                    <span class="fa fa-check"></span>
                                               <?php  } else { ?>
                                                     <span class="fa fa-close"></span>

							                                 <?php } ?>
                                             </td>
                                         </tr> 
                   <?php    endwhile; 
                           endif;         ?>
                           <?php if( get_sub_field('gold_pricing') &&  get_sub_field('platinum_pricing')) :?>
                           <tr class="price">
                              <td></td>
                              <td class="item"><?php echo get_sub_field('gold_pricing') ?></td>
                              <td class="item"><?php echo get_sub_field('platinum_pricing') ?></td>
                           </tr>
                         <?php endif; ?>

                         <tr class="slim-pd">
                           <td colspan="2"><span class="text">MY TOTAL VALUE</span></td>
                           <td><span class="amount amount-md">$60,940</span></td>
                           <td class="no-bg custom-text">$153,420</td>
                         </tr>

                         <tr class="slim-pd">
                           <td colspan="2"><span class="text">SINGLE INVESTMENT & GET 2 MONTHS FREE (Save $1745)</span></td>
                           <td><span class="amount amount-md text-dominant">$9,995</span></td>
                           <td class="no-bg custom-text"><span class="text-dominant">$14,995</span></td>
                         </tr>

                         <tr class="slim-pd">
                           <td colspan="2"><span class="text">OR... Only 12 Easy monthly instalment</span></td>
                           <td><span class="amount amount-md text-dominant">$995</span></td>
                           <td class="no-bg custom-text"><span class="text-dominant">$1495</span></td>
                         </tr>

                         <tr class="slim-pd">
                           <td colspan="2"><span class="text">My Total Saving</span></td>
                           <td><span class="amount amount-md">$50,945</span></td>
                           <td class="no-bg custom-text">$138,425</td>
                         </tr>

                  </tbody>

                </table>

          </div>

                                                        

          <?php if ( have_rows( 'compare_table' ) ) :  while ( have_rows('compare_table') ) : the_row(); ?>

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
                                   <button type="button" class="btn btn-close btn-default" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                       </div>
                  </div> 

                 <?php endwhile; endif; ?>   

                 <?php if( get_sub_field('text') ) { ?>
                    <div class="download-note"><?php echo get_sub_field('text') ?></div>
                 <?php } ?>    

                 <?php if ( have_rows( 'button' ) ) : ?>
                    <ul class="btn-group-select">
                          <?php 
                          $count = 0;
                          while ( have_rows('button') ) : the_row(); $count++;?>
                          
                          <?php if($count == 1 ) : ?>
                              <li><a href="<?php echo get_sub_field('link') ?>" data-opf-trigger='p2c1648f158'class="btn btn-<?php echo get_sub_field('color') ?>"><?php echo get_sub_field('text') ?></a></li>
                          <?php else: ?>    
                              <li><a href="<?php echo get_sub_field('link') ?>" class="btn btn-<?php echo get_sub_field('color') ?>"><?php echo get_sub_field('text') ?></a></li>
                          <?php endif; ?>
                          <?php 

                          endwhile; ?>
                     </ul>
                 <?php endif; ?>    

          
        </div>   

   </section> 
