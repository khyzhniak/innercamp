<?php
/**
 * Template Name: -- 2.1 Cacao Ceremony  Page*
 * Template Post Type: product, page
 */
get_header(); ?>


<?php
$arr_left_menu = [];
if (have_rows('cacao_ceremony_pages')):
  while (have_rows('cacao_ceremony_pages')) : the_row();
    if (get_row_layout() == 'section_1') :
      $image_url = '';
      $images = get_sub_field('images');
      if ($images) :
        $image_url = esc_url($images['url']);
      endif;
      $arr_left_menu[] .= get_sub_field('menu_scroll');
      ?>
      <section id="<?php echo format_id(get_sub_field('menu_scroll')); ?>"
               style="<?php echo ($image_url) ? 'background-image:url(' . $image_url . ');' : '' ?>"
               class="cacao__0 header__scroll">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl12">
              <div class="middle">
                <h1 class="title"><?php the_sub_field('title'); ?></h1>
                <div class="battoms"><p><?php the_sub_field('content'); ?></p></div>
                <?php
                $link = get_sub_field('link');
                if ($link) : ?>
                  <a class="bundle" href="<?php echo esc_url($link['url']); ?>"
                     target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php
    elseif (get_row_layout() == 'section_2') : ?>
      <section class="cacao__1">
        <div class="container">
          <div class="row otstup">
            <div class="col m12 s12 l12 xl12">
              <div class="middle">
                <a class="its" href="#"><img src="<?= get_template_directory_uri(); ?>/img/cacao_juk.png">Cacao</a>
                <a class="whitebuttom" href="#">Teacher training</a>
                <img class="cross" src="<?= get_template_directory_uri(); ?>/img/cacao_logo.svg"
                     alt="#">
              </div>
            </div>
            <?php
            if (have_rows('price_from')) :
              while (have_rows('price_from')) : the_row();
                $arr_left_menu[] .= get_sub_field('menu_scroll');
                $image = get_sub_field('image');
                ?>
                <div id="<?php echo format_id(get_sub_field('menu_scroll')); ?>"
                     class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <div class="twix">
                    <div class="picture">
                      <?php if ($image) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                      <?php endif; ?>
                    </div>
                    <div class="blog">
                      <div class="rxdm"><span>Price:</span>
                        <span><?php
                          $product = new WC_Product(get_the_ID());
                          $thePrice = $product->get_price();
                          echo $thePrice; ?>€</span>
                      </div>
                      <a class="bundle" href="#">Book now</a>
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_st12.svg" alt="#">
                      <a class="whitebuttom" href="#">
                        <img src="<?= get_template_directory_uri(); ?>/img/retreat_k.svg"
                             alt="<?php the_sub_field('Calendar'); ?>"><?php the_sub_field('Calendar'); ?>
                        4 weeks</a>
                      <a class="whitebuttom" href="#">
                        <img src="<?= get_template_directory_uri(); ?>/img/retreat_fs.svg"
                             alt="<?php the_sub_field('video'); ?>"><?php the_sub_field('video'); ?>
                      </a>
                      <a class="whitebuttom" href="#">
                        <img src="<?= get_template_directory_uri(); ?>/img/retreat_ts.svg"
                             alt="<?php the_sub_field('hours'); ?>"><?php the_sub_field('hours'); ?>
                      </a>
                      <p class="statusonline"><?php the_sub_field('status'); ?></p>
                    </div>
                  </div>
                </div>
              <?php
              endwhile;
            endif;
            if (have_rows('after_completing')) :
              while (have_rows('after_completing')) : the_row();
                $arr_left_menu[] .= get_sub_field('menu_scroll');
                ?>
                <div id="<?php echo format_id(get_sub_field('menu_scroll')); ?>"
                     class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <div class="twix2">
                    <div class="left">
                      <h4 class="title"><?php the_sub_field('title'); ?></h4>
                      <p class="cs16"><?php the_sub_field('content'); ?></p>
                      <div class="blog3">
                        <?php
                        if (have_rows('list')) : ?>
                          <ul>
                            <?php while (have_rows('list')) : the_row(); ?>
                              <li><?php the_sub_field('list_text'); ?></li>
                            <?php endwhile; ?>
                          </ul>
                        <?php
                        endif; ?>
                      </div>
                    </div>
                    <?php $images_second = get_sub_field('images'); ?>
                    <div class="picture3">
                      <?php if ($images_second) : ?>
                        <img src="<?php echo esc_url($images_second['url']); ?>"
                             alt="<?php echo esc_attr($images_second['alt']); ?>">
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php
              endwhile;
            endif;
            if (have_rows('about_the_course')) :
              while (have_rows('about_the_course')) : the_row();
                $arr_left_menu[] .= get_sub_field('menu_scroll');
                $image = get_sub_field('image'); ?>
                <div id="<?php echo format_id(get_sub_field('menu_scroll')); ?>"
                     class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <div class="twix2">
                    <div class="picture2">
                      <?php if ($image) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                      <?php endif; ?>
                    </div>
                    <div class="blog2">
                      <h4></h4>
                      <div class="title"><?php the_sub_field('title'); ?></div>
                      <img src="<?= get_template_directory_uri(); ?>/img/cacao_gr.svg">
                      <h5><?php the_sub_field('quotes'); ?></h5>
                      <div class="otstupx"></div>
                      <p><?php the_sub_field('paragraph'); ?></p>
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
      $arr_left_menu[] .= get_sub_field('menu_scroll');
      ?>
      <section id="<?php echo format_id(get_sub_field('menu_scroll')); ?>" class="cacao__2">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l6 xl6 offset-xl3 offset-l3">
              <h2 class="title"><?php the_sub_field('title'); ?></h2>
              <p><?php the_sub_field('content'); ?></p>
            </div>
            <div class="col m12 s12 l3 xl3">
              <div class="middle">
                <h3>Facilitated by</h3>
                <a class="referi1" href="#">
                  <img src="<?= get_template_directory_uri(); ?>/img/retreat_24k.svg" alt="logo"></a>
                <a class="ref whitebuttom" href="#">
                  <img src="<?= get_template_directory_uri(); ?>/img/retreat_23f.png"
                       alt="logo"></a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col m12 s12 l5 xl5 offset-xl3 offset-l3">
              <div class="block__elips">
                <div class="images"><img src="<?= get_template_directory_uri(); ?>/img/cacao__logo.png" alt="image">
                  <h2 class="title">Cacao Ceremony Facilitator Training</h2>
                </div>
                <ul class="right">
                  <?php
                  if (have_rows('box_list')) :
                    $i = 0;
                    while (have_rows('box_list')) : the_row();
                      ?>
                      <li class="toggle-items <?php echo ($i !== 0) ? '' : ' toggle-items_active' ?>">
                        <img src="<?= get_template_directory_uri(); ?>/img/cacao__ogo.png" alt="image">
                        <img src="<?= get_template_directory_uri(); ?>/img/cacao__ogo2.png" alt="image">
                        <a><?php the_sub_field('title'); ?></a>
                      </li>
                      <?php
                      $i++;
                    endwhile;
                  endif; ?>
                </ul>
              </div>
            </div>
            <div class="col m12 s12 l4 xl4">
              <?php
              if (have_rows('box_list')) :
                $i = 0;
                while (have_rows('box_list')) : the_row(); ?>
                  <div class="twix2 box_list <?php echo ($i == 0) ? ' box_list_active' : '' ?>">
                    <div class="blog33">
                      <h4 class="title"><?php the_sub_field('title'); ?></h4>
                      <?php if (have_rows('dots')) : ?>
                        <ul class="reborn">
                          <?php while (have_rows('dots')) : the_row(); ?>
                            <li><?php the_sub_field('dots_text'); ?></li>
                          <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>
                    </div>
                  </div>
                  <?php
                  $i++;
                endwhile;
              endif; ?>
            </div>
          </div>
        </div>
      </section>
      <style>
          .toggle-items {
              position: relative;
              z-index: 20;
              display: inline-block;
              cursor: pointer;
          }

          .toggle-items img:first-child {
              display: none;
          }

          .toggle-items_active img {
              display: none;
          }

          .toggle-items_active img:first-child {
              display: inline-block;
          }

          .box_list {
              display: none;
          }

          .box_list_active {
              display: block;
          }
      </style>
      <script>
        document.querySelectorAll('.toggle-items').forEach(function (item, idx, arr) {
          item.addEventListener('click', function () {
            let parent = item.closest('.row');
            arr.forEach(function (el) {
              if (el.classList.contains('toggle-items_active')) {
                el.classList.remove('toggle-items_active')
              }
            })
            item.classList.add('toggle-items_active');
            parent.querySelectorAll('.box_list').forEach(function (el) {
              if (el.classList.contains('box_list_active')) {
                el.classList.remove('box_list_active')
              }
            })
            parent.querySelectorAll('.box_list')[idx].classList.add('box_list_active')
          });
        });

      </script>
    <?php
    elseif (get_row_layout() == 'section_4') :
      $arr_left_menu[] .= get_sub_field('menu_scroll');
      $team = get_sub_field('team');
      ?>
      <section id="<?php echo format_id(get_sub_field('menu_scroll')); ?>" class="cacao__4">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
              <h2 class="title"><?php the_sub_field('title'); ?></h2>
            </div>
            <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
              <?php
              if ($team) :
                foreach ($team as $post) :
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
                wp_reset_postdata();
              endif; ?>
            </div>
          </div>
        </div>
      </section>
      <?php
      if (have_rows('certified')) :
        while (have_rows('certified')) : the_row();
          $arr_left_menu[] .= get_sub_field('menu_scroll');
          $image = get_sub_field('image');
          $link = get_sub_field('link');
          ?>
          <section id="<?php echo format_id(get_sub_field('menu_scroll')); ?>" class="cacao__4">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <div class="twist">
                    <div class="picturecertificate">
                      <?php if ($image) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                      <?php endif; ?>
                    </div>
                    <div class="content">
                      <?php the_sub_field('paragraph'); ?>
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
        <?php
        endwhile;
      endif;
    elseif (get_row_layout() == 'section_5') :
      $arr_left_menu[] .= get_sub_field('menu_scroll');
      ?>
      <section id="<?php echo format_id(get_sub_field('menu_scroll')); ?>"
               class="cacao__6">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
              <div class="middle">
                <h2 class="title"><?php the_sub_field('title'); ?>
                  <img src="<?= get_template_directory_uri(); ?>/img/cacao__qest.svg" alt="cacao__qest">
                  <p><?php the_sub_field('paragraph'); ?></p>
                </h2>
                <div class="battoms">
                  <?php
                  $link = get_sub_field('link');
                  if ($link) : ?>
                    <a class="bundle" href="<?php echo esc_url($link['url']); ?>"
                       target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php
    elseif (get_row_layout() == 'section_6') :
      if (have_rows('get_yourself_ready')) :
        while (have_rows('get_yourself_ready')) : the_row();
          $image = get_sub_field('image'); ?>
          <section class="cacao__7">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <div class="twix2">
                    <div class="blog2">
                      <h4><?php the_sub_field('title'); ?></h4>
                      <?php the_sub_field('content'); ?>
                      <?php if (have_rows('tag_repeater')) : ?>
                        <ul>
                          <?php while (have_rows('tag_repeater')) : the_row(); ?>
                            <li><a class="statusonline" href="#"><?php the_sub_field('text'); ?></a></li>
                          <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>
                    </div>
                    <div class="picture2">
                      <?php if ($image) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <?php
        endwhile;
      endif;
      if (have_rows('testimonials')) : ?>
        <?php while (have_rows('testimonials')) : the_row();
          $arr_left_menu[] .= get_sub_field('menu_scroll');
          ?>
          <section id="<?php echo format_id(get_sub_field('menu_scroll')); ?>" class="cacao__7">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <h4 class="title"><?php the_sub_field('title'); ?></h4>
                  <div class="twix2">
                    <?php if (have_rows('testimonials_repeater')) : ?>
                      <?php while (have_rows('testimonials_repeater')) : the_row(); ?>
                        <div class="blog7">
                          <p><?php the_sub_field('paragraph'); ?></p>
                          <div class="user">
                            <div class="pictureavatr"><img
                                  src="<?= get_template_directory_uri(); ?>/img/cacao_avatart.png">
                            </div>
                            <div class="content">
                              <h5>Carolina</h5><span class="teg">Breathwork Teacher Training</span>
                            </div>
                          </div>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php if (have_rows('faq')) : ?>
      <?php while (have_rows('faq')) : the_row();
        $arr_left_menu[] .= get_sub_field('menu_scroll');

        ?>

        <section class="cacao__8">
          <div class="breathwork__2-16">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <article class="breathwork-faq" id="faq">
                    <h2 class="title"><?php the_sub_field('title'); ?></h2>
                    <?php if (have_rows('faq_repeater')) : ?>
                      <?php while (have_rows('faq_repeater')) : the_row(); ?>
                        <div class="faq-item">
                          <button class="faq-questions"><?php the_sub_field('title'); ?></button>
                          <div class="faq-panel">
                            <p><?php the_sub_field('paragraph'); ?></p>
                          </div>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </section>

      <?php endwhile; ?>
    <?php endif; ?>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
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
<?php } ?>
<?php
function format_id($str): string
{
  $new_str = str_replace(" ", '', $str);
  return strtolower($new_str);
}

?>
<?php
get_footer();
