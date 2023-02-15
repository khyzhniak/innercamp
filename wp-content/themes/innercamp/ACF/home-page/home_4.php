<!-- Block 4 -->
<section class="home__4">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l8 xl8">
        <?php 
          $top_slider = get_field('home_4_top_slider');
          $top_sup_title = $top_slider["home_4_top_sup_title"];
          $top_title = $top_slider["home_4_top_title"];

          if($top_slider):
            if(!empty($top_sup_title)) { ?>
              <p class="sub"><?php echo $top_sup_title; ?></p>
            <?php }

            if(!empty($top_title)) { ?>
              <h2 class="title"><?php echo $top_title; ?></h2>
            <?php }

          endif;
        ?>
      </div>
    </div>
  </div>

  <div class="splide" id="brand_logo">
    <div class="splide__track">
      <?php
        if($top_slider):
          $brand_slider = $top_slider["home_4_brand_list"]; ?>
          <ul class="splide__list">
            <?php 
              foreach($brand_slider as $brand_item){ ?>
                <li class="splide__slide">
                  <img class="partners__image" src="<?php echo $brand_item["home_4_brand_image"]["url"]; ?>" alt="<?php echo $brand_item["home_4_brand_image"]["alt"]; ?>">
                </li>                    
              <?php }
            ?>
          </ul>
        <?php endif;
      ?>
    </div>
  </div>
  <div class="container">
    <?php 
      $bottom_slider = get_field("home_4_bottom_slider");
      $bottom_sup_title = $bottom_slider["home_4_bottom_sup_title"];
      $bottom_title = $bottom_slider["home_4_bottom_title"];
      $bottom_link = $bottom_slider["home_4_link_to_all_trainings"];

      if($bottom_slider) : ?>
      
        <div class="row">
          <div class="col m12 s12 l8 xl8">
            <?php
              if(!empty($bottom_sup_title)) { ?>
                <p class="sub"><?php echo $bottom_sup_title; ?></p>
              <?php }

              if(!empty($bottom_title)) { ?>
                <h2 class="title"><?php echo $bottom_title; ?></h2>
              <?php }
            ?>
          </div>
          <div class="col m12 s12 l4 xl4">
            <?php 
            if(!empty( $bottom_link)) { ?>
              <a class="more" href="<?php echo $bottom_link["url"]; ?>"><?php echo $bottom_link["title"]; ?>
                <svg width="38" height="15" viewbox="0 0 38 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M37.7071 8.20711C38.0976 7.81658 38.0976 7.18342 37.7071 6.79289L31.3431 0.428932C30.9526 0.0384078 30.3195 0.0384078 29.9289 0.428932C29.5384 0.819457 29.5384 1.45262 29.9289 1.84315L35.5858 7.5L29.9289 13.1569C29.5384 13.5474 29.5384 14.1805 29.9289 14.5711C30.3195 14.9616 30.9526 14.9616 31.3431 14.5711L37.7071 8.20711ZM0 8.5H37V6.5H0V8.5Z" fill="#424F44"></path>
                </svg>
              </a>
            <?php }
            ?>            
          </div>
        </div>
      <?php  endif;
    ?>
  </div>
  <div class="containerr">
        <div class="splide" id="trainings">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <div class="trainings__">
                  <div class="top__img"><a class="element tantra" href="javascript:;">Tantra</a><img src="<?= get_template_directory_uri(); ?>/img/trainin_1.png" alt=""></div>
                  <div class="box__content">
                    <p class="man">november 2022</p>
                    <h3 class="title__">Tantra method teacher training</h3><a class="level" href="javascript:;">Levels 1 & 2</a>
                    <div class="categor"><a href="javascript:;">Fundamentals,</a><a href="javascript:;">Facilitator & Coach</a></div>
                    <div class="date">Nov 11, 2022 to Sep 15, 2023</div>
                    <div class="lang">English</div>
                    <div class="clock">300 hours</div>
                    <div class="status online">online</div><a class="bundle">Start from 1200€</a>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="trainings__">
                  <div class="top__img"><a class="element breathwork" href="javascript:;">Breathwork</a><img src="<?= get_template_directory_uri(); ?>/img/trainin_2.png" alt=""></div>
                  <div class="box__content">
                    <p class="man">november 2022</p>
                    <h3 class="title__">Tantra method teacher training</h3><a class="level" href="javascript:;">Levels 1 & 2</a>
                    <div class="categor"><a href="javascript:;">Fundamentals,</a><a href="javascript:;">Facilitator & Coach</a></div>
                    <div class="date">Nov 11, 2022 to Sep 15, 2023</div>
                    <div class="lang">English</div>
                    <div class="clock">700 hours</div>
                    <div class="status on-site">on-site</div><a class="bundle">Start from 1700€</a>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="trainings__">
                  <div class="top__img"><a class="element bodywork" href="javascript:;">bodywork</a><img src="<?= get_template_directory_uri(); ?>/img/trainin_3.png" alt=""></div>
                  <div class="box__content">
                    <p class="man">november 2022</p>
                    <h3 class="title__">Tantra method teacher training</h3><a class="level" href="javascript:;">Levels 1 & 2</a>
                    <div class="categor"><a href="javascript:;">Fundamentals,</a><a href="javascript:;">Facilitator & Coach</a></div>
                    <div class="date">Nov 11, 2022 to Sep 15, 2023</div>
                    <div class="lang">English</div>
                    <div class="clock">300 hours</div>
                    <div class="status online">online</div><a class="bundle">Start from 1200€</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12"><a class="more" href="javascript:;">View All Trainings
              <svg width="38" height="15" viewbox="0 0 38 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M37.7071 8.20711C38.0976 7.81658 38.0976 7.18342 37.7071 6.79289L31.3431 0.428932C30.9526 0.0384078 30.3195 0.0384078 29.9289 0.428932C29.5384 0.819457 29.5384 1.45262 29.9289 1.84315L35.5858 7.5L29.9289 13.1569C29.5384 13.5474 29.5384 14.1805 29.9289 14.5711C30.3195 14.9616 30.9526 14.9616 31.3431 14.5711L37.7071 8.20711ZM0 8.5H37V6.5H0V8.5Z" fill="#424F44"></path>
              </svg></a></div>
        </div>
      </div>
</section>