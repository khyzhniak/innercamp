<?php
/**
 * Template Name: -- 2.2 Retreat Page*
 * Template Post Type: product, page, post
 */
get_header(); ?>


<?php $arr_left_menu = [];
if (have_rows('retreat_pages')): ?>
  <?php
  while (have_rows('retreat_pages')) : the_row();
    if (get_row_layout() == 'section_1') :
      if (get_sub_field('menu_scroll') != '') {
        $arr_left_menu[] .= get_sub_field('menu_scroll');
      }
      $image_url = '';
      $images = get_sub_field('images');
      if ($images) {
        $image_url = esc_url($images['url']);
      } ?>
      <section id="<?php echo format_id(get_sub_field('menu_scroll')); ?>"
               style="<?php echo ($image_url) ? 'background-image:url(' . $image_url . ');' : '' ?>"
               class="retreat__0 header__scroll">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl12">
              <h1 class="title"><?php the_sub_field('title'); ?></h1>
              <?php
              if (have_rows('navigation')) { ?>
                <div class="battoms__"><?php
                  while (have_rows('navigation')) : the_row();
                    $data_to = get_sub_field('data_to');
                    $data_do = get_sub_field('data_do');
                    ?>
                    <a class="tantra" href="#"><?php the_sub_field('icon'); ?></a>
                    <a class="data" href="#"><?php echo $data_to ?> - <?php echo $data_do ?></a>
                    <a class="loc" href="#"><?php the_sub_field('mark_map'); ?></a>
                  <?php
                  endwhile; ?>
                </div>
                <?php
              } ?>
              <div class="content__">
                <p><?php the_sub_field('content'); ?></p>
                <?php $link = get_sub_field('link'); ?>
                <?php if ($link) : ?>
                  <a class="bundle" href="<?php echo esc_url($link['url']); ?>"
                     target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php
    elseif (get_row_layout() == 'section_2') :
      if (get_sub_field('menu_scroll') != '') {
        $arr_left_menu[] .= get_sub_field('menu_scroll');
      }; ?>
      <section id="<?php echo format_id(get_sub_field('menu_scroll')); ?>" class="retreat__1">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl9 offset-xl3">
              <div class="block__top">
                <div class="box__img">
                  <?php
                  $images = get_sub_field('images');
                  if ($images) { ?>
                    <img src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>"/>
                    <?php
                  } ?>
                </div>
                <?php
                if (have_rows('start_my_journey')) :
                  while (have_rows('start_my_journey')) : the_row();
                    if (get_sub_field('menu_scroll') != '') {
                      $arr_left_menu[] .= get_sub_field('menu_scroll');
                    };
                    $data_to = get_sub_field('data_to');
                    $data_do = get_sub_field('data_do');
                    ?>
                    <div id="<?php echo format_id(get_sub_field('menu_scroll')); ?>" class="box__content">
                      <?php
                      $link = get_sub_field('link');
                      if ($link) : ?>
                        <a class="bundle" href="<?php echo esc_url($link['url']); ?>"
                           target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
                      <?php endif; ?>
                      <hr>
                      <span class="data"><?php echo $data_to ?> - <?php echo $data_do ?></span>
                      <span class="loc"><?php the_sub_field('mark_map'); ?></span>
                      <div class="status"><?php the_sub_field('status'); ?></div>
                    </div>
                  <?php
                  endwhile;
                endif; ?>
              </div>
            </div>
            <?php
            if (have_rows('about_the_retreat')) :
              while (have_rows('about_the_retreat')) : the_row();
                if (get_sub_field('menu_scroll') != '') {
                  $arr_left_menu[] .= get_sub_field('menu_scroll');
                } ?>
                <div id="<?php echo format_id(get_sub_field('menu_scroll')); ?>" class="col m12 s12 l12 xl9 offset-xl3">
                  <div class="twix2">
                    <div class="picture2">
                      <?php
                      $image = get_sub_field('image');
                      if ($image) { ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                        <?php
                      } ?>
                    </div>
                    <div class="blog2">
                      <h4 class="title"><?php the_sub_field('title'); ?></h4>
                      <?php the_sub_field('content'); ?>
                    </div>
                  </div>
                </div>
              <?php
              endwhile;
            endif;
            if (have_rows('the_retreat_will_help')) :
              while (have_rows('the_retreat_will_help')) : the_row();
                if (get_sub_field('menu_scroll') != '') {
                  $arr_left_menu[] .= get_sub_field('menu_scroll');
                }; ?>
                <div id="<?php echo format_id(get_sub_field('menu_scroll')); ?>" class="col m12 s12 l12 xl9 offset-xl3">
                  <h4 class="title"><?php the_sub_field('title'); ?></h4>
                  <div class="twix2">
                    <div class="blog3">
                      <?php
                      if (have_rows('mark_repeater')) { ?>
                        <ul>
                          <?php
                          while (have_rows('mark_repeater')) : the_row(); ?>
                            <li><?php the_sub_field('text'); ?></li>
                          <?php
                          endwhile; ?>
                        </ul>
                        <?php
                      } ?>
                    </div>
                    <div class="picture3">
                      <?php
                      $image = get_sub_field('image');
                      if ($image) { ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                        <?php
                      } ?>
                    </div>
                  </div>
                </div>
              <?php
              endwhile;
            endif; ?>
          </div>
        </div>
      </section>
    <?php
    elseif (get_row_layout() == 'section_3') :
      if (get_sub_field('menu_scroll') != '') {
        $arr_left_menu[] .= get_sub_field('menu_scroll');
      }; ?>
      <section id="<?php echo format_id(get_sub_field('menu_scroll')); ?>" class="retreat__2">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l6 xl6 offset-xl3 offset-l3">
              <h2 class="title"><?php the_sub_field('title'); ?></h2>
            </div>
            <div class="col m12 s12 l3 xl3">
              <p>Facilitated by</p>
              <div class="box__img">
                <a href="#">
                  <img src="<?= get_template_directory_uri(); ?>/img/retreat_24k.svg" alt="logo"></a>
                <a href="#">
                  <img src="<?= get_template_directory_uri(); ?>/img/retreat_23f.png" alt="logo"></a>
              </div>
            </div>
          </div>
          <?php
          if (have_rows('box_list')) : ?>
            <?php
            $i = 0;
            $j = 2;
            $y = 0;
            $odd_elem = false;
            while (have_rows('box_list')) :
              the_row();
              echo ($j == 2) ? '<div class="row">' : '';
              $add_first_class = ' l4 xl3 ';
              $add_second_class = ' l8 xl6';
              if ($odd_elem) {
                $add_first_class = ' l6 xl6';
                $add_second_class = ' l3 xl3';
              }
              $add_first_class .= ' offset-xl3';
              ?>
              <div
                  data-odd_elem='<?php echo $odd_elem; ?>'
                  data-y='<?php echo $y; ?>'
                  data-i='<?php echo $i % 2; ?>'
                  data-j='<?php echo $j; ?>'
                  class="col m12 s12 <?php echo ($i % 2 == 0) ? $add_first_class : $add_second_class ?>">
                <div class="box__">
                  <div class="picture3">
                    <?php $images = get_sub_field('images'); ?>
                    <?php if ($images) : ?>
                      <img style="width: 100%;" src="<?php echo esc_url($images['url']); ?>"
                           alt="<?php echo esc_attr($images['alt']); ?>"/>
                    <?php endif; ?>
                  </div>
                  <div class="box__content">
                    <div class="title__"><?php the_sub_field('title'); ?></div>
                    <?php
                    if (have_rows('list_text')) :
                      $i = 1;
                      ?>
                      <ul class="reborn">
                        <?php
                        while (have_rows('list_text')) : the_row();
                          $original_time = get_sub_field('time');
                          if (!$original_time) {
                            $original_time = '00:00';
                          }

                          ?>
                          <li>
                            <span class="data"><?php echo $original_time ?></span>
                            <p><?php the_sub_field('content'); ?></p>
                          </li>
                          <?php
                          $i++;
                        endwhile; ?>
                      </ul>
                    <?php
                    endif;
                    ?>
                  </div>
                </div>
              </div>
              <?php
              $j--;
              echo ($j === 0) ? '</div>' : '';

              if ($j === 0) {
                $j = 2;
                $odd_elem = true;
              }
              $i++;
            endwhile; ?>
          <?php
          endif; ?>

        </div>
      </section>
    <?php
    elseif (get_row_layout() == 'section_4') :
      if (get_sub_field('menu_scroll') != '') {
        $arr_left_menu[] .= get_sub_field('menu_scroll');
      };
      ?>
      <section id="<?php echo format_id(get_sub_field('menu_scroll')); ?>" class="retreat__3">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
              <?php
              if (have_rows('the_cacao')) :
                if (get_sub_field('menu_scroll') != '') {
                  $arr_left_menu[] .= get_sub_field('menu_scroll');
                };
                while (have_rows('the_cacao')) : the_row();
                  if (get_sub_field('menu_scroll') != '') {
                    $arr_left_menu[] .= get_sub_field('menu_scroll');
                  };
                  ?>
                  <div id="<?php echo format_id(get_sub_field('menu_scroll')); ?>" class="kacao">
                    <h4 class="title__"><?php the_sub_field('content'); ?></h4>
                    <div class="box__">
                      <?php
                      $images = get_sub_field('images');
                      if ($images) : ?>
                        <img src="<?php echo esc_url($images['url']); ?>"
                             alt="<?php echo esc_attr($images['alt']); ?>"/>
                      <?php
                      endif; ?>
                    </div>
                  </div>
                <?php
                endwhile;
              endif;
              if (have_rows('take_a_moment_to_pause')) : ?>
                <?php
                while (have_rows('take_a_moment_to_pause')) : the_row();
                  if (get_sub_field('menu_scroll') != '') {
                    $arr_left_menu[] .= get_sub_field('menu_scroll');
                  };
                  ?>
                  <div id="<?php echo format_id(get_sub_field('menu_scroll')); ?>" class="mix__">
                    <div class="tea__">
                      <?php
                      $image = get_sub_field('image');
                      if ($image) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                      <?php
                      endif; ?>
                    </div>
                    <div class="box__"><?php the_sub_field('content'); ?></div>
                  </div>
                <?php
                endwhile;
              endif; ?>
            </div>
          </div>
        </div>
      </section>
      <section class="retreat__4">
        <div class="container">
          <div class="row">
            <?php
            if (have_rows('team_member')) :
              while (have_rows('team_member')) : the_row();
                if (get_sub_field('menu_scroll') != '') {
                  $arr_left_menu[] .= get_sub_field('menu_scroll');
                };
                ?>
                <div id="<?php echo format_id(get_sub_field('menu_scroll')); ?>"
                     class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <h2 class="title"><?php the_sub_field('title'); ?></h2>
                </div>
                <?php
                $team_member_list = get_sub_field('team_member_list');
                if ($team_member_list) : ?>
                  <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                    <?php
                    foreach ($team_member_list as $post) :
                      setup_postdata($post);
                      $id_post = get_the_ID();
                      $featured_img_url = get_the_post_thumbnail_url($id_post, 'full');
                      ?>
                      <div class="post__user">
                        <div class="img__">
                          <img src="<?php echo $featured_img_url ?>" alt="<?php echo get_the_title($id_post) ?>">
                        </div>
                        <div class="cont__">
                          <div class="title__"><?php echo get_the_title($id_post) ?></div>
                          <?php if (have_rows('tags_list', $id_post)) : ?>
                            <ul>
                              <?php while (have_rows('tags_list', $id_post)) : the_row(); ?>
                                <li><a class="teg" href="#"><?php the_sub_field('single_tag'); ?></a></li>
                              <?php endwhile; ?>
                            </ul>
                          <?php endif; ?>
                          <?php echo get_the_content($id_post) ?>
                        </div>
                      </div>
                    <?php
                    endforeach;
                    wp_reset_postdata(); ?>
                  </div>
                <?php
                endif;
              endwhile;
            endif; ?>
            <?php
            if (have_rows('venue')) :
              while (have_rows('venue')) : the_row();
                ?>
                <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <div class="venue">
                    <div class="block__">
                      <h2 class="title"><?php the_sub_field('title'); ?></h2>
                      <p class="info"><?php the_sub_field('content'); ?></p>
                      <div class="block__dashed"><?php the_sub_field('border'); ?></div>
                      <div class="box_widt">
                        <p><?php the_sub_field('mark'); ?></p>
                      </div>
                    </div>
                    <?php $gallery_images = get_sub_field('gallery');
                    if ($gallery_images) : ?>
                      <div class="block__">
                        <?php
                        foreach ($gallery_images as $gallery_image): ?>
                          <div class="box__img">
                            <img src="<?php echo esc_url($gallery_image['url']); ?>"
                                 alt="<?php echo esc_attr($gallery_image['alt']); ?>"/>
                          </div>
                        <?php
                        endforeach; ?>
                      </div>
                    <?php
                    endif; ?>
                  </div>
                </div>
              <?php
              endwhile;
            endif;
            if (have_rows('box_list')) : ?>
              <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                <div class="retreat__map splide">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <?php
                      while (have_rows('box_list')) : the_row(); ?>
                        <li class="splide__slide">
                          <div class="box__">
                            <?php $images = get_sub_field('images'); ?>
                            <?php if ($images) : ?>
                              <img src="<?php echo esc_url($images['url']); ?>"
                                   alt="<?php echo esc_attr($images['alt']); ?>"/>
                            <?php endif; ?>
                            <div class="map"><?php the_sub_field('inframe'); ?>
                            </div>
                          </div>
                        </li>
                      <?php
                      endwhile; ?>
                    </ul>
                  </div>
                </div>
                <div class="arrows">
                  <a class="left_r previous-button" href="javascript:;">
                    <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z"
                          fill="#B9B9B9"></path>
                    </svg>
                  </a>
                  <a class="right_r next-button" href="javascript:;">
                    <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z"
                          fill="#B68742"></path>
                    </svg>
                  </a>
                </div>
              </div>
            <?php
            endif; ?>
          </div>
        </div>
      </section>
    <?php
    elseif (get_row_layout() == 'section_5') :
      if (get_sub_field('menu_scroll') != '') {
        $arr_left_menu[] .= get_sub_field('menu_scroll');
      }; ?>
      <section id="<?php echo format_id(get_sub_field('menu_scroll')); ?>" class="retreat__5">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
              <div class="middle">
                <h2 class="title"><?php the_sub_field('title'); ?></h2>
                <p><?php the_sub_field('content'); ?>.</p>
                <div class="battoms">
                  <?php $link = get_sub_field('link');
                  if ($link) : ?>
                    <a class="bundle" href="<?php echo esc_url($link['url']); ?>"
                       target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
                  <?php
                  endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php
    elseif (get_row_layout() == 'section_6') :
      if (get_sub_field('menu_scroll') != '') {
        $arr_left_menu[] .= get_sub_field('menu_scroll');
      } ?>
      <section id="<?php echo format_id(get_sub_field('menu_scroll')); ?>" class="retreat__7">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
              <div class="remix">
                <h2 class="title"><?php the_sub_field('title'); ?></h2>
                <?php
                $data_to = get_sub_field('data_to');
                $data_do = get_sub_field('data_do');
                ?>
                <a class="whitebuttom" href="#">
                  <img src="<?= get_template_directory_uri(); ?>/img/retreat_k.svg" alt="logo">
                  <?php echo $data_to ?> - <?php echo $data_do ?>
                </a>
                <img src="<?= get_template_directory_uri(); ?>/img/retreat_cxf.svg" alt="logo">
                <h4><?php the_sub_field('paragraph'); ?></h4>
                <?php
                if (have_rows('box_list')) :
                  while (have_rows('box_list')) : the_row();
                    $number_of_beds = get_sub_field('number_of_beds');
                    ?>
                    <div class="<?php echo ($number_of_beds == 3) ? 'box2' : 'boxi' ?>">
                      <?php
                      for ($y = 0; $y < $number_of_beds; $y++) { ?>
                        <img src="<?= get_template_directory_uri(); ?>/img/retreat_bad.svg" alt="bad">
                        <?php
                      } ?>
                      <p><?php the_sub_field('title'); ?></p>
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_zce.svg" alt="bad">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_ave.svg" alt="ava">
                      <p><?php the_sub_field('price'); ?></p>
                    </div>
                  <?php
                  endwhile;
                endif; ?>
                <div class="battoms">
                  <?php $link = get_sub_field('link'); ?>
                  <?php if ($link) : ?>
                    <a class="bundle" href="<?php echo esc_url($link['url']); ?>"
                       target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="retreat__8">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
              <div class="twix2">
                <div class="block__">
                  <h4 class="title"><?php the_sub_field('title_included'); ?></h4>
                  <div class="blog3">
                    <?php
                    if (have_rows('included_repeater')) : ?>
                      <ul>
                        <?php
                        while (have_rows('included_repeater')) : the_row(); ?>
                          <li><?php the_sub_field('text'); ?></li>
                        <?php
                        endwhile; ?>
                      </ul>
                    <?php
                    endif; ?>
                  </div>
                </div>
                <div class="block__">
                  <h4 class="title"><?php the_sub_field('title_not_included'); ?></h4>
                  <div class="blog38">
                    <?php
                    if (have_rows('not_included_repeater')) : ?>
                      <ul>
                        <?php
                        while (have_rows('not_included_repeater')) : the_row(); ?>
                          <li><?php the_sub_field('text'); ?></li>
                        <?php
                        endwhile; ?>
                      </ul>
                    <?php
                    endif; ?>
                  </div>
                </div>
              </div>
              <p><?php the_sub_field('paragraph_last'); ?></p>
            </div>
          </div>
        </div>
      </section>
    <?php
    endif;
  endwhile;
endif; ?>


<?php if (count($arr_left_menu) > 0) { ?>
  <div class="left__menu__scroll">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l3 xl3">
          <div class="box__"><a class="bundle" href="javascript:;">Book now</a>
            <ul>
              <?php
              $i = 0;
              foreach ($arr_left_menu as $item) { ?>
                <li class="<?php echo ($i == 0) ? 'active' : '' ?>"><a
                      href="#<?php echo format_id($item) ?>"><?php echo $item ?></a></li>
                <?php
                $i++;
              } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }

function format_id($str): string
{
  $new_str = str_replace(" ", '', $str);
  return strtolower($new_str);
}

?>
<?php
get_footer();
