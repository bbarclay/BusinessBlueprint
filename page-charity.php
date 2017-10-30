<?php


get_header();
?>
  <div class="entry__content">
    <?php get_template_part( 'template-parts/content', 'banner' ); ?>

    <section id="calculator" class="banner">

        <div class="container">
              <div class="calculator">
                <div class="wrap">
                   <div class="bb-logo">
                     <?php if( get_field('blueprint_logo') ) { ?>
                       <a href="<?php echo get_field('blueprint_link'); ?>" target="_blank">
                          <img src="<?php echo get_field('blueprint_logo'); ?>" alt="blueprint logo" />
                       </a> 
                      <?php } ?>
                   </div>
                   <div class="plus sign">+</div>
                   <div class="hatw-logo">
                     <?php if( get_field('hatw_logo') ) { ?>
                       <a href="<?php echo get_field('hatw_link'); ?>" target="_blank">
                          <img src="<?php echo get_field('hatw_logo'); ?>" alt="hands across the water logo" />
                       </a> 
                      <?php } ?>
                   </div>
                   <div class="equal sign">=</div>
                   <div class="amount">
                         <?php if( get_field('total_amount') ) { ?>
                              <span id="count-num"><?php echo get_field('total_amount') ?></span>
                          <?php } ?>
                    </div>
                </div>    
            </div>
        </div>

    </section>
    <section class="support bg-gray">
            <?php if( get_field('donation_heading') ) { ?>
              <h1><?php echo  get_field('donation_heading') ?></h1> 
            <?php } ?>
                <?php if( get_field('donation_button_link') ) { ?>
                    <a href="<?php echo get_field('donation_button_link') ?>" class="btn" target="_blank"><span><?php echo get_field('donation_button_text') ?></span></a>
                <?php } ?>
     </section>
     <section class="about">
      <div class="container">
         <div class="images">
                  <?php if( get_field('content_images') ) { ?>
                   
                      <img src="<?php echo get_field('content_images'); ?>" alt="charity" />
                 
                  <?php } ?>
         </div>
         <div class="text">

             <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                  <?php the_content(); ?>
                </div>

            <?php endwhile; ?>

            <?php else : ?>

                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                  <h1>Not Found</h1>
                </div>

            <?php endif; ?>
         </div>
       </div>
     </section>
     <?php $image_dale = get_field('dale_image') ?>
     <section class="dale">
        <div class="container">
          <?php $dale = get_field('dale_image')  ?>
          <div class="module--text-image__image" style="background-image: url(<?php echo $dale; ?>);"></div>
          <div class="text">

                 <?php if( get_field('content_text') ) { ?>
                    <p><?php echo get_field('content_text') ?></p>
                <?php } ?>
         </div>
        </div> 
     </section>

     <section class="support">
            <?php if( get_field('donation_heading') ) { ?>
              <h1><?php echo  get_field('donation_heading') ?></h1> 
            <?php } ?>
                <?php if( get_field('donation_button_link') ) { ?>
                    <a href="<?php echo get_field('donation_button_link') ?>" class="btn primary-btn" target="_blank"><span><?php echo get_field('donation_button_text') ?></span></a>
                <?php } ?>
        
     </section>
  </div>

<?php 
get_footer();
?>       


