   <div id="top-topics" class="top-topics">
        <div class="container">
           
                  <div class="slides rolling">
                      <?php 
                         if( have_rows('topics') ) :
                              while( have_rows('topics') ) : the_row(); 


                            $title = get_sub_field('title');
                            $subtitle = get_sub_field('subtitle');

                      ?>

                        <div class="topic">
                            <?php if($title) : ?>
                               <h3 class="list__title"><?php echo $title; ?></h3>
                             <?php endif; ?>

                             <?php if($subtitle) : ?>
                               <p class="list__description"><?php echo $subtitle; ?></p>
                              <?php endif; ?>

                              <?php if(have_rows('lists')) : 
                                      echo '<ul class="list__list">';
                                       while(have_rows('lists')) : the_row();

                                       $text = get_sub_field('text');
                              ?>
                                          <li><?php echo $text; ?></li>

                              <?php 
                                        endwhile;
                                      echo '</ul>';   
                                    endif;
                              ?>
    
                        </div>

                     <?php 
                              endwhile;
                         endif;
                       
                     ?>

              </div>

              <div class="topic-overview">
                  <h3>Download Conference Overview</h3>
                  <ul>
                     <li><a href="">
                          <div class="image image-cc">
                            <?xml version="1.0" encoding="iso-8859-1"?>
                              <!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 324.842 324.842" style="enable-background:new 0 0 324.842 324.842;" xml:space="preserve" width="512px" height="512px">
                              <g>
                                <g>
                                  <path d="M56.955,162.421c0,58.154,47.312,105.467,105.466,105.467s105.466-47.313,105.466-105.467S220.575,56.954,162.421,56.954    S56.955,104.267,56.955,162.421z M252.887,162.421c0,49.884-40.583,90.467-90.466,90.467s-90.466-40.583-90.466-90.467    s40.583-90.467,90.466-90.467S252.887,112.537,252.887,162.421z" fill="#00254c"/>
                                  <path class="dollar-sign" d="M155.673,103.326v11.748c-4.221,0.975-8.204,2.808-11.87,5.515c-10.031,7.403-14.539,17.662-12.06,27.443    c2.385,9.406,10.942,16.242,22.333,17.839c25.827,3.619,30.031,7.476,28.925,16.522c-0.589,4.82-3.359,8.271-8.234,10.252    c-8.241,3.352-22.528,1.93-35.877-8.797l-9.396,11.693c8.071,6.486,17.19,10.78,26.177,12.653v13.32h15v-12.532    c3.403-0.394,6.679-1.196,9.745-2.443c9.862-4.009,16.231-12.147,17.475-22.329c1.412-11.556-3.121-20.498-13.108-25.859    c-7.74-4.155-17.957-5.842-28.625-7.337c-5.314-0.744-9.005-3.238-9.875-6.67c-0.929-3.663,1.474-8.032,6.427-11.688    c5.245-3.87,11.426-4.44,18.896-1.744c6.338,2.289,11.008,6.119,11.054,6.157l4.803-5.76l4.824-5.743    c-0.646-0.543-6.563-5.397-15.093-8.581c-2.204-0.823-4.379-1.451-6.522-1.903v-11.757L155.673,103.326L155.673,103.326z" fill="#00254c"/>
                                  <path class="arrow-top" d="M162.421,15c32.26,0,62.947,10.307,88.3,29.347h-19.724v15h48.265V11.082h-15v24.799C235.488,12.638,199.918,0,162.421,0    C72.862,0,0,72.862,0,162.421h15C15,81.133,81.133,15,162.421,15z" fill="#00254c"/>
                                  <path class="arrow-bottom" d="M309.842,162.421c0,81.288-66.133,147.421-147.421,147.421c-31.345,0-61.291-9.767-86.256-27.84h19.583v-15H47.483v48.265    h15v-24.803c28.446,22.273,63.324,34.378,99.938,34.378c89.56,0,162.421-72.861,162.421-162.421H309.842z" fill="#00254c"/>
                                </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g>
                                </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                <span class="name">Create Cashflow</span>
                          </div>
                      </a></li>
                     <li>
                        <div class="image image-oo">
                          <?xml version="1.0" encoding="iso-8859-1"?>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 470 470" enable-background="new 0 0 470 470" width="512px" height="512px">
                              <g>
                                <path d="M452.159,16.364H17.841C8.003,16.364,0,24.367,0,34.205v329.205c0,9.837,8.003,17.841,17.841,17.841h163.807v57.386   h-70.739c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h248.182c4.143,0,7.5-3.358,7.5-7.5s-3.357-7.5-7.5-7.5h-70.738V381.25   h163.807c9.838,0,17.841-8.003,17.841-17.841V34.205C470,24.367,461.997,16.364,452.159,16.364z M273.353,438.636h-76.705V381.25   h76.705V438.636z M455,363.409c0,1.54-1.301,2.841-2.841,2.841H17.841c-1.54,0-2.841-1.301-2.841-2.841V34.205   c0-1.54,1.301-2.841,2.841-2.841h434.318c1.54,0,2.841,1.301,2.841,2.841V363.409z" fill="#00254c"/>
                                <path d="m431.478,305.227h-392.955c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5 7.5,7.5h392.955c4.143,0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z" fill="#00254c"/>
                                <path class="chart-first" d="m110,280.227h40c4.142,0 7.5-3.358 7.5-7.5v-108.808c0-4.142-3.358-7.5-7.5-7.5h-40c-4.142,0-7.5,3.358-7.5,7.5v108.808c0,4.142 3.358,7.5 7.5,7.5zm7.5-108.808h25v93.808h-25v-93.808z" fill="#00254c"/>
                                <path class="chart-second" d="m180,280.227h40c4.142,0 7.5-3.358 7.5-7.5v-144.291c0-4.142-3.358-7.5-7.5-7.5h-40c-4.142,0-7.5,3.358-7.5,7.5v144.291c0,4.142 3.358,7.5 7.5,7.5zm7.5-144.291h25v129.291h-25v-129.291z" fill="#00254c"/>
                                <path class="chart-third" d="m250,280.227h40c4.143,0 7.5-3.358 7.5-7.5v-177.841c0-4.142-3.357-7.5-7.5-7.5h-40c-4.143,0-7.5,3.358-7.5,7.5v177.841c0,4.142 3.357,7.5 7.5,7.5zm7.5-177.841h25v162.841h-25v-162.841z" fill="#00254c"/>
                                <path class="chart-fourth" d="m320,280.227h40c4.143,0 7.5-3.358 7.5-7.5v-74.291c0-4.142-3.357-7.5-7.5-7.5h-40c-4.143,0-7.5,3.358-7.5,7.5v74.291c0,4.142 3.357,7.5 7.5,7.5zm7.5-74.291h25v59.291h-25v-59.291z" fill="#00254c"/>
                              </g>
                            </svg>

                            <span class="name">Optimise Online</span>
                        </div>
                     </li>
                     <li><a href="">
                        <div class="image image-ss">
                           <?xml version="1.0" encoding="iso-8859-1"?>
                            <!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 308.248 308.248" style="enable-background:new 0 0 308.248 308.248;" xml:space="preserve" width="512px" height="512px">
                            <path class="downline" d="M277.812,222.656v-50.413c0-7.444-6.056-13.5-13.5-13.5H161.624v-43.436  c25.513-3.652,45.191-25.642,45.191-52.148c0-29.054-23.637-52.691-52.691-52.691c-29.054,0-52.691,23.638-52.691,52.691  c0,26.507,19.678,48.496,45.191,52.148v43.436H43.936c-7.444,0-13.5,6.056-13.5,13.5v50.413C13.099,226.147,0,241.494,0,259.845  c0,20.918,17.018,37.935,37.936,37.935c20.918,0,37.937-17.017,37.937-37.935c0-18.351-13.098-33.697-30.437-37.19v-48.912h101.188  v48.913c-17.338,3.491-30.436,18.838-30.436,37.189c0,20.918,17.018,37.935,37.936,37.935c20.918,0,37.936-17.017,37.936-37.935  c0-18.351-13.098-33.697-30.436-37.189v-48.913h101.188v48.912c-17.338,3.492-30.437,18.839-30.437,37.19  c0,20.918,17.018,37.935,37.937,37.935c20.918,0,37.936-17.017,37.936-37.935C308.248,241.494,295.149,226.147,277.812,222.656z   M116.433,63.159c0-20.783,16.908-37.691,37.691-37.691c20.783,0,37.691,16.908,37.691,37.691s-16.908,37.691-37.691,37.691  C133.341,100.851,116.433,83.942,116.433,63.159z M60.873,259.845c0,12.646-10.289,22.935-22.937,22.935  C25.289,282.78,15,272.491,15,259.845c0-12.648,10.289-22.937,22.936-22.937C50.583,236.908,60.873,247.197,60.873,259.845z   M177.06,259.845c0,12.646-10.289,22.935-22.936,22.935c-12.647,0-22.936-10.289-22.936-22.935  c0-12.648,10.289-22.937,22.936-22.937C166.771,236.908,177.06,247.197,177.06,259.845z M270.312,282.78  c-12.647,0-22.937-10.289-22.937-22.935c0-12.648,10.289-22.937,22.937-22.937c12.647,0,22.936,10.289,22.936,22.937  C293.248,272.491,282.959,282.78,270.312,282.78z" fill="#00254c"/>
                            <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

                            <span class="name">Simple Systems</span>
                        </div>
                     </a></li>
                     <li><a href="">
                         <div class="image image-pp">
                             <?xml version="1.0" encoding="iso-8859-1"?>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 470 470" enable-background="new 0 0 470 470" width="512px" height="512px">
                                  <g>
                                    <path d="m257.567,360.535h-45c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5 7.5,7.5h45c4.142,0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z" fill="#00254c"/>
                                    <path d="m469.962,397.284c-0.03-0.304-0.082-0.597-0.146-0.885-0.015-0.067-0.034-0.132-0.051-0.198-0.058-0.229-0.125-0.454-0.204-0.674-0.025-0.07-0.049-0.139-0.076-0.208-0.1-0.258-0.212-0.509-0.339-0.752-0.009-0.016-0.014-0.034-0.023-0.051-0.038-0.072-41.624-78.35-41.624-78.35v-204.275c0-4.142-3.358-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v198.644h-355v-211.071c0-12.407 10.093-22.5 22.5-22.5h297.574c4.142,0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-297.573c-20.678,0-37.5,16.822-37.5,37.5v216.702l-41.585,78.278c-0.047,0.089-0.053,0.106-0.061,0.123-0.127,0.243-0.239,0.495-0.339,0.753-0.027,0.068-0.051,0.137-0.075,0.206-0.079,0.221-0.146,0.446-0.204,0.676-0.017,0.066-0.036,0.13-0.05,0.197-0.064,0.288-0.116,0.581-0.146,0.88-0.027,0.252-0.04,0.502-0.04,0.756v15c0,20.678 16.822,37.5 37.5,37.5h395c20.678,0 37.5-16.822 37.5-37.5v-15c0-0.254-0.013-0.504-0.038-0.751zm-415.454-71.749h360.983l34.531,65h-430.045l34.531-65zm377.992,110h-395c-12.407,0-22.5-10.093-22.5-22.5v-7.5h440v7.5c0,12.407-10.093,22.5-22.5,22.5z" fill="#00254c"/>
                                    <path class="arrow" d="m422.5,34.465h21.894l-179.003,179.002-55.411-55.411c-2.929-2.929-7.678-2.929-10.606,0l-124.677,124.676c-2.929,2.929-2.929,7.678 0,10.606 1.464,1.464 3.384,2.197 5.303,2.197s3.839-0.732 5.303-2.197l119.373-119.373 55.411,55.411c2.929,2.929 7.678,2.929 10.606,0l184.307-184.305v21.894c0,4.142 3.358,7.5 7.5,7.5s7.5-3.358 7.5-7.5v-40c0-4.142-3.358-7.5-7.5-7.5h-40c-4.142,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z" />
                                  </g>
                                </svg>

                                <span class="name">Productive People</span>
                         </div>
                     </a></li>
                  </ul>
              </div>
        </div>
    </div>
    <div class="application">
        <div class="container">


             <div class="calendar">
            
                     <div class="row">

                        
                         <div class="col-md-12 col-sm-12 col-xs-12 col-xxs">
                            <div class="lead">
                               
                                <div class="image right-image">
                                    <img src="https://businessblueprint.com.au/wp-content/uploads/2015/06/BusinessBlueprintMagazine.jpg" alt="BusinessBlueprintMagazine" width="397" height="561" class="size-full wp-image-9679" srcset="https://businessblueprint.com.au/wp-content/uploads/2015/06/BusinessBlueprintMagazine.jpg 397w, https://businessblueprint.com.au/wp-content/uploads/2015/06/BusinessBlueprintMagazine-212x300.jpg 212w" sizes="(max-width: 397px) 100vw, 397px" pagespeed_url_hash="2551985748" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>  
                               <!--  <h2>2017 FastTrack Calendar</h2> -->
                                <div class="option-btn">
                                  <a href="https://business-blueprint.s3.amazonaws.com/Magalogs/BB%202017%20Magalog_FINAL_OPTIMIZED_ONLINE.pdf" class="btn btn-orange" target="_blank">Open</a>
                                  <a href="https://business-blueprint.s3.amazonaws.com/Magalogs/BB%202017%20Magalog_FINAL_OPTIMIZED_ONLINE.pdf" class="btn btn-green" target="_blank" download>Download</a>
                                </div>
                            </div>
                         </div>

                     </div>
            
            </div>

        </div>
    </div>
    <div class="apply-now">
      <div class="container"> 
         <h2>Are you ready to join Australia's #1 Business Education Program?</h2>

         <a href="" class="btn btn-green">Complete Application</a>
      </div> 
    </div>