<!-- Block 4 -->
<section class="testimonial__4">
  <div class="container">
    <!--    Slider with more other testimonials -->
    <?php 
      $sup_title = get_field("testimonial_4_sup_title");
      $title = get_field("testimonial_4_title");      
    ?>
    <div class="row">
      <div class="col m12 s12 l9 xl9">
        <?php 
          if(!empty($sup_title)) { ?>
            <p class="sub"><?php echo $sup_title; ?></p>
          <?php }

          if(!empty($title)) { ?>
            <h2 class="title"><?php echo $title; ?></h2>
          <?php }
        ?>        
      </div>
      <div class="col m12 s12 l3 xl3 more-testimonials-arrow-nav">
        <div class="arrows">
          <a class="left_a previous-button" href="javascript:;">
            <svg width="45" height="16" viewBox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
            </svg>
          </a>
          <a class="right_a next-button" href="javascript:;">
            <svg width="45" height="16" viewBox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742"></path>
            </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial__4-video-slider">
        <div class="splide" aria-roledescription="carousel" id="video-testimonials-slider-1">
            <div class="splide__track">
                <ul class="splide__list">
                  <?php 
                    if(have_rows('testimonial_4_video_top_slider')):
                      while(have_rows('testimonial_4_video_top_slider')) : the_row();
                        $video_link = get_sub_field("testimonial_4_top_slider_video_link");
                        $video_bg = get_sub_field("testimonial_4_top_slider_video_background");
                      ?>
                        <li class="splide__slide">
                          <?php 
                            if(!empty($video_link) && !empty($video_bg)) { ?>
                              <a data-fancybox class="video-testimony-item" href="<?php echo $video_link; ?>">
                                <img src="<?php echo $video_bg['url']; ?>" alt="<?php echo $video_bg['alt']; ?>" />
                              </a>
                            <?php }
                          ?>
                          
                        </li>
                      <?php  endwhile;
                    endif;
                  ?>
                </ul>
            </div>
        </div>
        <div class="splide" aria-roledescription="carousel" id="video-testimonials-slider-2">
            <div class="splide__track">
                <ul class="splide__list">
                <?php 
                    if(have_rows('testimonial_4_video_bottom_slider')):
                      while(have_rows('testimonial_4_video_bottom_slider')) : the_row();
                        $video_link_b = get_sub_field("testimonial_4_bottom_slider_video_link");
                        $video_bg_b = get_sub_field("testimonial_4_bottom_slider_video_background");
                      ?>
                        <li class="splide__slide">
                          <?php 
                            if(!empty($video_link_b) && !empty($video_bg_b)) { ?>
                              <a data-fancybox class="video-testimony-item" href="<?php echo $video_link_b; ?>">
                              <img src="<?php echo $video_bg_b['url']; ?>" alt="<?php echo $video_bg_b['alt']; ?>" />
                          </a>
                            <?php }
                          ?>                          
                        </li>
                      <?php  endwhile;
                    endif;
                  ?>
                </ul>
            </div>
        </div>
    </div>
</section>
