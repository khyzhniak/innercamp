<!-- Block 2 -->
<section class="home__2" id="home_section_2">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l9 xl9">
        <?php 
          $top_suptitle = get_field('home_section_2_suptitle');

          if(!empty($top_suptitle)){ ?>
            <p class="sub"><?php echo $top_suptitle; ?></p>
          <?php }

          $top_title = get_field('home_section_2_title');

          if(!empty($top_title)){ ?>
            <h2 class="title"><?php echo $top_title; ?></h2>
          <?php }
        ?>
      </div>
          <div class="col m12 s12 l3 xl3">
            <div class="arrows"><a class="left_a previous-button" href="javascript:;">
                <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
                </svg></a><a class="right_a next-button" href="javascript:;">
                <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742"></path>
                </svg></a></div>
      </div>
    </div>
  </div>
  <div class="splide" id="slider__post">
    <div class="splide__track">
      <ul class="splide__list">
        <?php 
          if(have_rows('home_2_slider')):
            while(have_rows('home_2_slider')) : the_row();
              $slide_title = get_sub_field('home_2_slide_title');
              $slide_link = get_sub_field('home_2_slide_link');
              $slide_img = get_sub_field('home_2_slide_image'); ?>
              <li class="splide__slide">
                <div class="box__">
                  <div class="cont">
                    <?php 
                    if(!empty($slide_title)) { ?>
                      <h3 class="title"><?php echo $slide_title; ?></h3>
                    <?php }

                    if($slide_link) { ?>
                      <a class="bundle" href="<?php echo $slide_link['url']; ?>"><?php echo $slide_link['title'] ?></a>
                    <?php }
                    ?>
                  </div>               
                  <div class="img">
                    <?php
                    if($slide_link) { ?>
                      <a class="left_a" href="<?php echo $slide_link['url']; ?>">
                      <?php if(!empty($slide_img)){ ?>
                        <img src="<?php echo $slide_img['url']; ?>" alt="<?php echo $slide_img['alt']; ?>">
                      <?php } ?>
                      </a>
                    <?php }
                    ?>
                  </div>
                </div>
              </li>
            <?php  endwhile;
          endif;
        ?>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <div class="block__elips">
          <?php 
            $bottom_row = get_field('home_2_lower_row');

            if($bottom_row) : 
              $left_repeater = $bottom_row['home_2_left_side'];
              $right_repeater = $bottom_row['home_2_right_side'];
            ?>
              <ul class="left__">
                <?php 
                  foreach($left_repeater as $item_left) { ?>
                    <li>
                      <a href="<?php echo $item_left["home_2_left_link"]["url"]; ?>">
                        <p class="sub_t"><?php echo $item_left["home_2_left_sup_title"]; ?></p>
                        <h3 class="title"><?php echo $item_left["home_2_left_link"]["title"]; ?></h3>
                      </a>
                    </li>
                  <?php }
                ?>
              </ul>
              <div class="images">
                <?php 
                  $center_side_image = $bottom_row["home_2_center"]["home_2_central_image"];
                  if(!empty($center_side_image)){ ?>
                    <img  class="lazy__" data-src="<?php echo $center_side_image["url"]; ?>" alt="<?php echo $center_side_image["alt"]; ?>">
                  <?php }

                  $center_side_sup_title = $bottom_row["home_2_center"]["home_2_center_sup_title"];
                  $center_side_title = $bottom_row["home_2_center"]["home_2_center_title"];
                  if(!empty($center_side_sup_title)){ ?>
                    <div class="sub_t"><?php echo $center_side_sup_title; ?></div>
                  <?php }
                  if(!empty($center_side_title)){ ?>
                    <h2 class="title"><?php echo $center_side_title; ?></h2>
                  <?php }
                ?>                
              </div>
              <ul class="right__">
                <?php 
                 $icon = 1;
                  foreach($right_repeater as $item_right){ ?>
                    <li>
                      <a href="<?php echo $item_right["home_2_right_link"]["url"]; ?>"><i><img class="trainings__info-language-icon" src="<?= get_template_directory_uri(); ?>/img/home_2_icon<?php echo $icon++; ?>.svg"></i>
                        <h3 class="title"><?php echo $item_right["home_2_right_link"]["title"]; ?></h3>
                      </a>
                    </li>                    
                  <?php }
                ?>
              </ul>
            <?php endif;
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <div class="arrows"><a class="left_r previous-button" href="javascript:;">
                <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
                </svg></a><a class="right_r next-button" href="javascript:;">
                <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742"></path>
                </svg></a></div>
          </div>
        </div>
      </div>
</section>

<?php 

if(0) {
  if( have_rows('fotogalereya') ): ?>
    <div class="slider-nav">
      <?php while( have_rows('fotogalereya') ): the_row();
          // vars
  
        $image = get_sub_field('img');   ?>
  
         <div>
          <div class="box__smoll">
            <?php if( !empty( $image ) ): 
             $testimony = $image['sizes']['testimonial-bg'];  ?>
              <img src="<?php echo $testimony; ?>"  alt="img2"> 
            <?php endif; ?>   
           </div>
         </div>
  
      <?php endwhile; ?>
    </div>
  <?php endif; 
}

