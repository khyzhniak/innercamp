<!-- Block 6 -->
<section class="home__6">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l8 xl8">
            <?php 
              $sup_title = get_field("home_6_sup_title");
              $title = get_field("home_6_title");
              $link = get_field("home_6_link_all_training");
              
              if(!empty($sup_title)) { ?>
                <p class="sub"><?php echo $sup_title; ?></p>
              <?php }
              if(!empty($title)) { ?>
                <h2 class="title"><?php echo $title; ?></h2>
              <?php }
            ?>
          </div>
          <div class="col m12 s12 l4 xl4">
            <?php 
              if(!empty($link)) { ?>
                <a class="more" href="<?php echo $link["url"]; ?>"><?php echo $link["title"]; ?>
                  <svg width="38" height="15" viewbox="0 0 38 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M37.7071 8.20711C38.0976 7.81658 38.0976 7.18342 37.7071 6.79289L31.3431 0.428932C30.9526 0.0384078 30.3195 0.0384078 29.9289 0.428932C29.5384 0.819457 29.5384 1.45262 29.9289 1.84315L35.5858 7.5L29.9289 13.1569C29.5384 13.5474 29.5384 14.1805 29.9289 14.5711C30.3195 14.9616 30.9526 14.9616 31.3431 14.5711L37.7071 8.20711ZM0 8.5H37V6.5H0V8.5Z" fill="#424F44"></path>
                  </svg></a>
              <?php }
            ?>
          </div>
        </div>
      </div>
      
      
      <div class="splide" id="workshop">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div class="workshop__box">
                <div class="top__"><img src="<?= get_template_directory_uri(); ?>/img/home__6_icon1.svg" alt="">Breathwork</div>
                <div class="soom"><span class="video">Zoom meeting in English</span><span class="calen">Nov 11</span></div>
                <h3 class="title__">Awakening your 3 power centers</h3>
                <p>Bring back the power to create inner strength and joy.</p>
                <div class="box__img">
                  <div class="images"><img src="<?= get_template_directory_uri(); ?>/img/home__6_user.png" alt=""><span class="name">Marjolein Van Ommeren</span></div><a class="join" href="javascript:;">Join for free</a>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="workshop__box">
                <div class="top__ grey"><img src="<?= get_template_directory_uri(); ?>/img/home__6_icon2.svg" alt="">Breathwork</div>
                <div class="soom"><span class="video">Zoom meeting in English</span><span class="calen">Nov 11</span></div>
                <h3 class="title__">Awakening your 3 power centers</h3>
                <p>Bring back the power to create inner strength and joy.</p>
                <div class="box__img">
                  <div class="images"><img src="<?= get_template_directory_uri(); ?>/img/home__6_user.png" alt=""><span class="name">Marjolein Van Ommeren</span></div><a class="join" href="javascript:;">Join for free</a>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="workshop__box">
                <div class="top__ grey"><img src="<?= get_template_directory_uri(); ?>/img/home__6_icon1.svg" alt="">Breathwork</div>
                <div class="soom"><span class="video">Zoom meeting in English</span><span class="calen">Nov 11</span></div>
                <h3 class="title__">Awakening your 3 power centers</h3>
                <p>Bring back the power to create inner strength and joy.</p>
                <div class="box__img">
                  <div class="images"><img src="<?= get_template_directory_uri(); ?>/img/home__6_user.png" alt=""><span class="name">Marjolein Van Ommeren</span></div><a class="join" href="javascript:;">Join for free</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      
    </section>