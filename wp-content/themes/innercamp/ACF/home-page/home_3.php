<!-- Block 3 -->
<section class="home__3">
  <div class="splide" id="info__brand">
    <div class="splide__track">
      <ul class="splide__list">
        <?php 
          if( have_rows('home_3_slider') ):
            while( have_rows('home_3_slider') ) : the_row();
            $title = get_sub_field("hero_3_slide_title");
            $subtitle = get_sub_field("home_3_slide_text");
            $after_img_text = get_sub_field("home_3_text_after_img"); ?>
            <li class="splide__slide">
              <div class="box__con">
                <?php 
                if(!empty($title)) { ?>
                  <h3 class="sub"><?php echo $title; ?></h3>
                <?php }

                if(!empty($subtitle)) {
                  echo $subtitle;
                }
                ?>
                <ul class="list_img">
                  <?php 
                    if(have_rows("home_3_images_list")):
                      while(have_rows("home_3_images_list")): the_row();
                      $slide_img = get_sub_field("home_3_image_item"); ?>
                        <li><img src="<?php echo $slide_img["url"]; ?>" alt="<?php echo $slide_img["alt"]; ?>"></li>
                        <?php endwhile;
                    endif;
                  ?>
                  
                </ul>
                <?php 
                  if(!empty($after_img_text)) {
                    echo $after_img_text;
                  }
                ?>
              </div>
            </li>

            <?php endwhile;
          endif;
        ?>
      </ul>
    </div>
  </div>
</section>