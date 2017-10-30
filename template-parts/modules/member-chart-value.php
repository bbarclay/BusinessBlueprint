<style>
.table-cv .table {
  border-collapse: separate;
}
.table-cv .table tr:hover td:nth-child(1),
.table-cv .table tr td:nth-child(2) {
    background: transparent;
    font-family: 'Avenir-Heavy', sans-serif;
    font-size: 1.2em;
    line-height: 1;
}
.table-cv .table tr td span {
    -webkit-transition: all 0.4s;
    transition: all 0.4s;
}
.table-cv .table tr:nth-child(1) th:nth-child(3),
.table-cv .table tr:nth-child(1) th:nth-child(4) {
    font-family: 'Avenir-Heavy', sans-serif;
}
.table-cv .table tr:hover td:nth-child(1) {
   font-size: 1em;
}
.table-cv .table tr:hover td:nth-child(3) .fa,
.table-cv .table tr:hover td:nth-child(4) .fa {
    font-size: 1.2em;
    transform: scale(1.3);
}
.table-cv .table tr td.no-bg {
   background: transparent !important;
}
.table-cv .table tr td:first-child {
  font-family: 'Avenir-Light', sans-serif;
}
.table-cv .table tr.slim-pd td {
   padding: 15px 0;
   font-family: 'Avenir-Medium', sans-serif;
   vertical-align: middle;
}
.table-cv .table tr.slim-pd td:nth-child(3) {
    background: #f8f8f9 !important;
    color: #00254c;
    font-size: 20px;
}
.table-cv .table tr.slim-pd td:nth-child(2) {
    background: #f8f8f9 !important;
    color: #00254c;
    font-size: 20px;
}
.table-cv .table tr th:nth-child(3),
.table-cv .table tr th:nth-child(4) {
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}
.table-cv .table tr.slim-pd:last-child td:nth-child(2),
.table-cv .table tr.slim-pd:last-child td:nth-child(3) {
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}
.table-cv .table tr.slim-pd  .text-dominant {
   color: #0076c0;
   font-weight: 600;
   font-size: 1.2em;
}
.table-cv .table tr.slim-pd .text {
    text-align: right;
    display: block;
}
.table-cv .fa-check {
  color: #79c142;
}
.table-cv .fa-close {
  color: #f15d22;
}
.testimonials .video span {
    font-family: 'Avenir-Heavy', sans-serif;
    color: #00254c;
}
.testimonials .detail .name {
    font-size: 1.2em;
    margin-top: 10px;
    line-height: 1;
}

@media screen and ( max-width: 768px ) {
  .table-cv.module-table-chart .table tr:nth-child(1) th:nth-child(1) {
    width: 40% !important;
  }
  .table-cv .table tr:nth-child(1) th:nth-child(2) {
    width: 10% !important;
  }
  .table-cv .table tr:nth-child(1) th:nth-child(3) {
    width: 25% !important;
  }
  .table-cv .table tr:nth-child(1) th:nth-child(4) {
    width: 25% !important;
  }
}
</style>

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
