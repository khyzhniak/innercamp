<!-- Block 8 -->
<section class="home__8">
  <div class="container">
    <div class="row">
          <div class="col m12 s12 l12 xl9">
        <?php 
          $sup_title = get_field("home_8_sup_title");
          $title = get_field("home_8_title");
          $link = get_field("home_8_link");

          if(!empty($sup_title)){ ?>
            <p class="sub"><?php echo $sup_title; ?></p>
          <?php }

          if(!empty($title)) { ?>
            <h2 class="title"><?php echo $title; ?></h2>
          <?php }
        ?>
      </div>
          <div class="col m12 s12 l2 xl3">
            <div class="arrows"><a class="left_a previous-button" href="javascript:;">
                <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
                </svg></a><a class="right_a next-button" href="javascript:;">
                <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742"></path>
                </svg></a></div>
          </div>
    </div>
    <div class="row">
      <div class="col m12 s12 l12 xl4">
        <?php 
        if(!empty($link)) { ?>
          <a class="bundle" href="<?php echo $link["url"] ?>"><?php echo $link["title"]; ?></a>
        <?php }
        ?>
        
      </div>
      <div class="col m12 s12 l12 xl8"> 
        <div class="splide" id="testimonias">
          <div class="splide__track">
            <ul class="splide__list">
              <?php 
                if(have_rows("home_8_testiomonial_slider")):
                  while(have_rows("home_8_testiomonial_slider")): the_row();
                  $item_text = get_sub_field("home_8_testimonial_text");
                  $item_img = get_sub_field("home_8_author_image");
                  $item_name = get_sub_field("home_8_author_name");
                  $item_link = get_sub_field("home_8_link_item");
                  ?>
                  <li class="splide__slide">
                    <div class="block__">
                      <?php 
                        if(!empty($item_text)) {
                          echo $item_text;
                        }
                      ?>
                    </div>
                    <div class="user">
                      <div class="images">
                        <?php 
                          if(!empty($item_img)) { ?>
                            <img src="<?php echo $item_img["url"]; ?>" alt="<?php echo $item_img["alt"]; ?>">
                          <?php }
                        ?>
                      </div>
                      <div class="info">
                        <?php 
                          if(!empty($item_name)) { ?>
                            <h4 class="name"><?php echo $item_name; ?></h4>
                          <?php }
                        ?>                        
                        <div class="tag">
                          <?php
                            if(!empty($item_link)) { ?>
                              <a class="tags" href="<?php echo $item_link["url"]; ?>"><?php echo $item_link["title"]; ?></a>
                            <?php }
                          ?>                          
                        </div>
                      </div>
                    </div>
                  </li>
                  <?php endwhile;
                endif;
              ?>
            </ul>
          </div>
              <div class="arrows"><a class="left_a previous__" href="javascript:;">
                  <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
                  </svg></a><a class="right_a next__" href="javascript:;">
                  <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742">    </path>
                  </svg></a></div>
        </div>
      </div>
    </div>
  </div>
</section>