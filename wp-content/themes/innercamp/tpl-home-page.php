<?php
/**
* Template Name: Home Page*
*
*/
get_header(); ?>
    
    <?php the_content(); ?>
    
    <!-- <section class="home__4">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l8 xl8">
            <p class="sub">PARTNERS</p>
            <h2 class="title">As seen in</h2>
          </div>
        </div>
      </div>
      <div class="splide" id="brand_logo">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide"><img class="partners__image" src="<?= get_template_directory_uri(); ?>/img/brand_logo_1.svg" alt=""></li>
            <li class="splide__slide"><img class="partners__image" src="<?= get_template_directory_uri(); ?>/img/brand_logo_2.svg" alt=""></li>
            <li class="splide__slide"><img class="partners__image" src="<?= get_template_directory_uri(); ?>/img/brand_logo_3.svg" alt=""></li>
            <li class="splide__slide"><img class="partners__image" src="<?= get_template_directory_uri(); ?>/img/brand_logo_4.svg" alt=""></li>
            <li class="splide__slide"><img class="partners__image" src="<?= get_template_directory_uri(); ?>/img/brand_logo_5.svg" alt=""></li>
            <li class="splide__slide"><img class="partners__image" src="<?= get_template_directory_uri(); ?>/img/brand_logo_6.svg" alt=""></li>
            <li class="splide__slide"><img class="partners__image" src="<?= get_template_directory_uri(); ?>/img/brand_logo_7.svg" alt=""></li>
            <li class="splide__slide"><img class="partners__image" src="<?= get_template_directory_uri(); ?>/img/brand_logo_1.svg" alt=""></li>
          </ul>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l8 xl8">
            <p class="sub">TEACHER TRAININGS</p>
            <h2 class="title">Upcoming Trainings</h2>
          </div>
          <div class="col m12 s12 l4 xl4"><a class="more" href="javascript:;">View All Trainings
              <svg width="38" height="15" viewbox="0 0 38 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M37.7071 8.20711C38.0976 7.81658 38.0976 7.18342 37.7071 6.79289L31.3431 0.428932C30.9526 0.0384078 30.3195 0.0384078 29.9289 0.428932C29.5384 0.819457 29.5384 1.45262 29.9289 1.84315L35.5858 7.5L29.9289 13.1569C29.5384 13.5474 29.5384 14.1805 29.9289 14.5711C30.3195 14.9616 30.9526 14.9616 31.3431 14.5711L37.7071 8.20711ZM0 8.5H37V6.5H0V8.5Z" fill="#424F44"></path>
              </svg></a></div>
        </div>
      </div>
      <div class="containerr">
        <div class="splide" id="trainings">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <div class="trainings__card">
                  <div class="trainings__card-wrap">
                    <picture>
                      <source srcset="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-pc.png" media="(min-width: 1200px)">
                      <source srcset="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-2.png" media="(min-width: 768px)">
                      <source srcset="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-2.png" media="(min-width: 300px)"><img class="trainings__card-image" src="<?= get_template_directory_uri(); ?>/img/mobile/news/image-01-01.png" alt="image">
                    </picture><img class="trainings__card-wave" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/wave.png" alt="">
                    <div class="trainings__card-image-info">
                      <div class="trainings__card-image-info-yoga"><img class="trainings__card-image-info-yoga-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-icon-01.png" alt="">
                        <p class="trainings__card-image-info-yoga-text">Tantra</p>
                      </div><br>
                      <div class="trainings__card-image-info-mobile">
                        <div class="trainings__card-image-info-level">Level 1+2. Practitioner</div><br>
                        <div class="trainings__card-image-info-type">Teacher Training</div>
                      </div>
                    </div>
                  </div>
                  <div class="trainings__info">
                    <p class="trainings__info-date">november 2022</p>
                    <p class="trainings__info-title">Tantra method teacher training</p>
                    <div class="trainings__card-image-info-pc">
                      <div class="trainings__card-image-info-level">Level 1+2. Practitioner</div><br>
                      <div class="trainings__card-image-info-type">Teacher Training</div>
                    </div>
                    <div class="trainings__info-date-wrapper"><img class="trainings__info-date-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/calendar-days.png" alt="">
                      <p class="trainings__info-date-date">Nov 11, 2022 to Sep 15, 2023</p>
                    </div>
                    <div class="trainings__info-language-wrapper"><img class="trainings__info-language-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/globe.png">
                      <p class="trainings__info-language-title">English</p>
                    </div>
                    <div class="trainings__info-hours-wrapper"><img class="trainings__info-hours-image" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/play-circle.png" alt="">
                      <p class="trainings__info-hours-title">500 hours</p>
                    </div>
                    <div class="trainings__info-status">Online</div><a class="primary__btn trainings__btn-primary" href="">Start from 1950&euro;</a>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="trainings__card">
                  <div class="trainings__card-wrap">
                    <picture>
                      <source srcset="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-pc.png" media="(min-width: 1200px)">
                      <source srcset="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-2.png" media="(min-width: 768px)">
                      <source srcset="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-2.png" media="(min-width: 300px)"><img class="trainings__card-image" src="<?= get_template_directory_uri(); ?>/img/mobile/news/image-01-01.png" alt="image">
                    </picture><img class="trainings__card-wave" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/wave.png" alt="">
                    <div class="trainings__card-image-info">
                      <div class="trainings__card-image-info-yoga"><img class="trainings__card-image-info-yoga-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-icon-01.png" alt="">
                        <p class="trainings__card-image-info-yoga-text">Tantra</p>
                      </div><br>
                      <div class="trainings__card-image-info-mobile">
                        <div class="trainings__card-image-info-level">Level 1+2. Practitioner</div><br>
                        <div class="trainings__card-image-info-type">Teacher Training</div>
                      </div>
                    </div>
                  </div>
                  <div class="trainings__info">
                    <p class="trainings__info-date">november 2022</p>
                    <p class="trainings__info-title">Tantra method teacher training</p>
                    <div class="trainings__card-image-info-pc">
                      <div class="trainings__card-image-info-level">Level 1+2. Practitioner</div><br>
                      <div class="trainings__card-image-info-type">Teacher Training</div>
                    </div>
                    <div class="trainings__info-date-wrapper"><img class="trainings__info-date-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/calendar-days.png" alt="">
                      <p class="trainings__info-date-date">Nov 11, 2022 to Sep 15, 2023</p>
                    </div>
                    <div class="trainings__info-language-wrapper"><img class="trainings__info-language-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/globe.png">
                      <p class="trainings__info-language-title">English</p>
                    </div>
                    <div class="trainings__info-hours-wrapper"><img class="trainings__info-hours-image" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/play-circle.png" alt="">
                      <p class="trainings__info-hours-title">500 hours</p>
                    </div>
                    <div class="trainings__info-status">Online</div><a class="primary__btn trainings__btn-primary" href="">Start from 1950&euro;</a>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="trainings__card">
                  <div class="trainings__card-wrap">
                    <picture>
                      <source srcset="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-pc.png" media="(min-width: 1200px)">
                      <source srcset="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-2.png" media="(min-width: 768px)">
                      <source srcset="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-2.png" media="(min-width: 300px)"><img class="trainings__card-image" src="<?= get_template_directory_uri(); ?>/img/mobile/news/image-01-01.png" alt="image">
                    </picture><img class="trainings__card-wave" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/wave.png" alt="">
                    <div class="trainings__card-image-info">
                      <div class="trainings__card-image-info-yoga"><img class="trainings__card-image-info-yoga-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-icon-01.png" alt="">
                        <p class="trainings__card-image-info-yoga-text">Tantra</p>
                      </div><br>
                      <div class="trainings__card-image-info-mobile">
                        <div class="trainings__card-image-info-level">Level 1+2. Practitioner</div><br>
                        <div class="trainings__card-image-info-type">Teacher Training</div>
                      </div>
                    </div>
                  </div>
                  <div class="trainings__info">
                    <p class="trainings__info-date">november 2022</p>
                    <p class="trainings__info-title">Tantra method teacher training</p>
                    <div class="trainings__card-image-info-pc">
                      <div class="trainings__card-image-info-level">Level 1+2. Practitioner</div><br>
                      <div class="trainings__card-image-info-type">Teacher Training</div>
                    </div>
                    <div class="trainings__info-date-wrapper"><img class="trainings__info-date-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/calendar-days.png" alt="">
                      <p class="trainings__info-date-date">Nov 11, 2022 to Sep 15, 2023</p>
                    </div>
                    <div class="trainings__info-language-wrapper"><img class="trainings__info-language-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/globe.png">
                      <p class="trainings__info-language-title">English</p>
                    </div>
                    <div class="trainings__info-hours-wrapper"><img class="trainings__info-hours-image" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/play-circle.png" alt="">
                      <p class="trainings__info-hours-title">500 hours</p>
                    </div>
                    <div class="trainings__info-status">Online</div><a class="primary__btn trainings__btn-primary" href="">Start from 1950&euro;</a>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="trainings__card">
                  <div class="trainings__card-wrap">
                    <picture>
                      <source srcset="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-pc.png" media="(min-width: 1200px)">
                      <source srcset="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-2.png" media="(min-width: 768px)">
                      <source srcset="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-2.png" media="(min-width: 300px)"><img class="trainings__card-image" src="<?= get_template_directory_uri(); ?>/img/mobile/news/image-01-01.png" alt="image">
                    </picture><img class="trainings__card-wave" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/wave.png" alt="">
                    <div class="trainings__card-image-info">
                      <div class="trainings__card-image-info-yoga"><img class="trainings__card-image-info-yoga-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/training-card-icon-01.png" alt="">
                        <p class="trainings__card-image-info-yoga-text">Tantra</p>
                      </div><br>
                      <div class="trainings__card-image-info-mobile">
                        <div class="trainings__card-image-info-level">Level 1+2. Practitioner</div><br>
                        <div class="trainings__card-image-info-type">Teacher Training</div>
                      </div>
                    </div>
                  </div>
                  <div class="trainings__info">
                    <p class="trainings__info-date">november 2022</p>
                    <p class="trainings__info-title">Tantra method teacher training</p>
                    <div class="trainings__card-image-info-pc">
                      <div class="trainings__card-image-info-level">Level 1+2. Practitioner</div><br>
                      <div class="trainings__card-image-info-type">Teacher Training</div>
                    </div>
                    <div class="trainings__info-date-wrapper"><img class="trainings__info-date-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/calendar-days.png" alt="">
                      <p class="trainings__info-date-date">Nov 11, 2022 to Sep 15, 2023</p>
                    </div>
                    <div class="trainings__info-language-wrapper"><img class="trainings__info-language-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/globe.png">
                      <p class="trainings__info-language-title">English</p>
                    </div>
                    <div class="trainings__info-hours-wrapper"><img class="trainings__info-hours-image" src="<?= get_template_directory_uri(); ?>/img/mobile/trainings/play-circle.png" alt="">
                      <p class="trainings__info-hours-title">500 hours</p>
                    </div>
                    <div class="trainings__info-status">Online</div><a class="primary__btn trainings__btn-primary" href="">Start from 1950&euro;</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section> -->
    <!-- <section class="home__5">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <p class="sub">EXPERIENCE INNERCAMP</p>
            <h2 class="title">Come join our workshops and try the InnerCamp Method</h2>
            <p>Experience the benefits of our virtual and in-person workshops.</p>
          </div>
        </div>
      </div>
    </section> -->
    <!-- <section class="home__6">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l8 xl8">
            <p class="sub">TEACHER TRAININGS</p>
            <h2 class="title">Upcoming Workshops</h2>
          </div>
          <div class="col m12 s12 l4 xl4"><a class="more" href="javascript:;">View All Trainings
              <svg width="38" height="15" viewbox="0 0 38 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M37.7071 8.20711C38.0976 7.81658 38.0976 7.18342 37.7071 6.79289L31.3431 0.428932C30.9526 0.0384078 30.3195 0.0384078 29.9289 0.428932C29.5384 0.819457 29.5384 1.45262 29.9289 1.84315L35.5858 7.5L29.9289 13.1569C29.5384 13.5474 29.5384 14.1805 29.9289 14.5711C30.3195 14.9616 30.9526 14.9616 31.3431 14.5711L37.7071 8.20711ZM0 8.5H37V6.5H0V8.5Z" fill="#424F44"></path>
              </svg></a></div>
        </div>
      </div>
      <div class="splide" id="workshop">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div class="carousel-cell workshop__cell">
                <div class="workshop__card">
                  <div class="workshop__type-wrapper"><img class="workshop__type-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/icon-01.png" alt="">
                    <p class="workshop__type-title">Tantra</p>
                  </div>
                  <div class="workshop__card-info-wrapper">
                    <div class="workshop__card-info-type-wrapper"><img class="workshop__card-info-type-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/icon-11.png" alt="">
                      <p class="workshop__card-info-type-title">Zoom meeting in English</p>
                    </div>
                    <div class="workshop__card-info-date-wrapper"><img class="workshop__card-info-date-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/calendar-days.png" alt="">
                      <p class="workshop__card-info-date-title">Nov 11</p>
                    </div>
                  </div>
                  <p class="workshop__card-title">Awakening your 3 power centers</p>
                  <p class="workshop__card-text">Bring back the power to create inner strength and joy.</p>
                  <div class="workshop__card-footer">
                    <div class="workshop__card-footer-author-wrapper"><img class="workshop__card-footer-author-image" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/author-01.jpg" alt="">
                      <p class="workshop__card-footer-author-name">Marjolein Van Ommeren</p>
                    </div><a class="secondary__btn workshop__card-btn" href="">Join for free</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="carousel-cell workshop__cell">
                <div class="workshop__card">
                  <div class="workshop__type-wrapper"><img class="workshop__type-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/icon-01.png" alt="">
                    <p class="workshop__type-title">Tantra</p>
                  </div>
                  <div class="workshop__card-info-wrapper">
                    <div class="workshop__card-info-type-wrapper"><img class="workshop__card-info-type-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/icon-11.png" alt="">
                      <p class="workshop__card-info-type-title">Zoom meeting in English</p>
                    </div>
                    <div class="workshop__card-info-date-wrapper"><img class="workshop__card-info-date-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/calendar-days.png" alt="">
                      <p class="workshop__card-info-date-title">Nov 11</p>
                    </div>
                  </div>
                  <p class="workshop__card-title">Awakening your 3 power centers</p>
                  <p class="workshop__card-text">Bring back the power to create inner strength and joy.</p>
                  <div class="workshop__card-footer">
                    <div class="workshop__card-footer-author-wrapper"><img class="workshop__card-footer-author-image" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/author-01.jpg" alt="">
                      <p class="workshop__card-footer-author-name">Marjolein Van Ommeren</p>
                    </div><a class="secondary__btn workshop__card-btn" href="">Join for free</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="carousel-cell workshop__cell">
                <div class="workshop__card">
                  <div class="workshop__type-wrapper"><img class="workshop__type-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/icon-01.png" alt="">
                    <p class="workshop__type-title">Tantra</p>
                  </div>
                  <div class="workshop__card-info-wrapper">
                    <div class="workshop__card-info-type-wrapper"><img class="workshop__card-info-type-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/icon-11.png" alt="">
                      <p class="workshop__card-info-type-title">Zoom meeting in English</p>
                    </div>
                    <div class="workshop__card-info-date-wrapper"><img class="workshop__card-info-date-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/calendar-days.png" alt="">
                      <p class="workshop__card-info-date-title">Nov 11</p>
                    </div>
                  </div>
                  <p class="workshop__card-title">Awakening your 3 power centers</p>
                  <p class="workshop__card-text">Bring back the power to create inner strength and joy.</p>
                  <div class="workshop__card-footer">
                    <div class="workshop__card-footer-author-wrapper"><img class="workshop__card-footer-author-image" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/author-01.jpg" alt="">
                      <p class="workshop__card-footer-author-name">Marjolein Van Ommeren</p>
                    </div><a class="secondary__btn workshop__card-btn" href="">Join for free</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="carousel-cell workshop__cell">
                <div class="workshop__card">
                  <div class="workshop__type-wrapper"><img class="workshop__type-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/icon-01.png" alt="">
                    <p class="workshop__type-title">Tantra</p>
                  </div>
                  <div class="workshop__card-info-wrapper">
                    <div class="workshop__card-info-type-wrapper"><img class="workshop__card-info-type-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/icon-11.png" alt="">
                      <p class="workshop__card-info-type-title">Zoom meeting in English</p>
                    </div>
                    <div class="workshop__card-info-date-wrapper"><img class="workshop__card-info-date-icon" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/calendar-days.png" alt="">
                      <p class="workshop__card-info-date-title">Nov 11</p>
                    </div>
                  </div>
                  <p class="workshop__card-title">Awakening your 3 power centers</p>
                  <p class="workshop__card-text">Bring back the power to create inner strength and joy.</p>
                  <div class="workshop__card-footer">
                    <div class="workshop__card-footer-author-wrapper"><img class="workshop__card-footer-author-image" src="<?= get_template_directory_uri(); ?>/img/mobile/workshop/author-01.jpg" alt="">
                      <p class="workshop__card-footer-author-name">Marjolein Van Ommeren</p>
                    </div><a class="secondary__btn workshop__card-btn" href="">Join for free</a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section> -->
    <!-- <section class="home__7">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l6 xl6">
            <p class="sub">Our Mission</p>
            <h2 class="title">You become part of something bigger.</h2>
            <p>Our expert-led experiences are powered by science and extensive spiritual research. We have put a lot of thought, time and love behind each course to help you progress and lead others through times of change.</p>
            <p>We are a global community that has established a new approach to the world of holistic health and creates a safe environment for learning and growth. Through the contemporary teachings of Breathwork, Tantra, Bodywork, Shamanism and Energy Healing we create a vision for the life you want while increasing knowledge and providing tools to fulfil your dreams.</p><a class="bundle" href="javascript:;">Discover our trainings</a>
          </div>
          <div class="col m12 s12 l6 xl6">
            <div class="block__img"><img class="images" src="<?= get_template_directory_uri(); ?>/img/common/mission/Ellipse.png" alt=""></div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- <section class="home__8">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l9 xl9">
            <p class="sub">testimonias</p>
            <h2 class="title">Have a look at what our students have to say about InnerCamp</h2>
          </div>
          <div class="col m12 s12 l3 xl3"></div>
        </div>
        <div class="row">
          <div class="col m12 s12 l4 xl4"><a class="bundle" href="javascript:;">Discover our trainings</a></div>
          <div class="col m12 s12 l8 xl8"> 
            <div class="splide" id="testimonias">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <div class="block__">
                      <p>The structure of the course and shedule made it completely doable while working. It gave me all of the tools that I need  to confidently use breathwork with my clients. As well as teaching me to find my unique voice as a breathwork facilitator</p>
                    </div>
                    <div class="user">
                      <div class="images"><img src="<?= get_template_directory_uri(); ?>/img/testimonials/user.png" alt=""></div>
                      <div class="info">
                        <h4 class="name">JEN D</h4>
                        <div class="tag"><a class="tags" href="javascript:;">Breathwork Teacher Training</a></div>
                      </div>
                    </div>
                  </li>
                  <li class="splide__slide">
                    <div class="block__">
                      <p>The structure of the course and shedule made it completely doable while working. It gave me all of the tools that I need  to confidently use breathwork with my clients. As well as teaching me to find my unique voice as a breathwork facilitator</p>
                    </div>
                    <div class="user">
                      <div class="images"><img src="<?= get_template_directory_uri(); ?>/img/testimonials/user.png" alt=""></div>
                      <div class="info">
                        <h4 class="name">JEN D</h4>
                        <div class="tag"><a class="tags" href="javascript:;">Breathwork Teacher Training</a></div>
                      </div>
                    </div>
                  </li>
                  <li class="splide__slide">
                    <div class="block__">
                      <p>The structure of the course and shedule made it completely doable while working. It gave me all of the tools that I need  to confidently use breathwork with my clients. As well as teaching me to find my unique voice as a breathwork facilitator</p>
                    </div>
                    <div class="user">
                      <div class="images"><img src="<?= get_template_directory_uri(); ?>/img/testimonials/user.png" alt=""></div>
                      <div class="info">
                        <h4 class="name">JEN D</h4>
                        <div class="tag"><a class="tags" href="javascript:;">Breathwork Teacher Training</a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- <section class="home__9">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h2 class="title">Our Methods help increase energy levels</h2><a class="bundle" href="javascript:;">Discover our trainings</a>
          </div>
        </div>
      </div>
    </section> -->
<?php get_footer();