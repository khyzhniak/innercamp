<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package innercamp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="bar-long OK"></div>
    
    <div class="right__menu">
      <div class="bock__top"><a class="close__" href="javascript:;"></a></div>
      <div class="menu__">
      
             <?php  $argsm = array(
                'container'=> false,
                 'menu' => 'header',
        //        'container_class' => 'nav__menu',
              );
            ?>
            <?php  wp_nav_menu( $argsm );?>

        <div class="app__">
          <p>Download The App</p>
             <?php while (have_rows('fotter_social_network', 'option')) : the_row();  ?>
             
								<?php if (get_row_layout() == 'ios_1') : ?>
										<a target="_blank" class="ios" href="<?php the_sub_field('ios'); ?>"><img src="<?= get_template_directory_uri(); ?>/img/apl.svg" alt="ios"></a>
								<?php endif; ?>             
								<?php if (get_row_layout() == 'android_1') : ?>
										<a target="_blank" class="goo" href="<?php the_sub_field('android'); ?>"><img src="<?= get_template_directory_uri(); ?>/img/goo.svg" alt="goo"></a>
								<?php endif; ?>
             <?php endwhile; ?>
        </div>
      </div><a class="academy" href="https://members.innercamp.com/auth/google?from=https%3A%2F%2Fmembers.innercamp.com%2F&from_sign_in=1">InnerCamp Academy</a><a class="profile" href="javascript:;">Profile</a>
    </div>
    
    <div class="profile__menu">
      <div class="bock__top">
        <h4 class="title__">Profile</h4><a class="close__" href="javascript:;"></a>
      </div>
      <a class="academy" href="https://members.innercamp.com/auth/google?from=https%3A%2F%2Fmembers.innercamp.com%2F&from_sign_in=1">InnerCamp Academy</a>
      <a class="orders" href="/my-account/orders/">My orders</a>
      <a class="affiliate" href="javascript:;">Affiliate Program</a>
      <a class="account" href="/my-account/">Account information</a>
          <?php if ( is_user_logged_in() ) {  ?>
      <a class="log" href="<?php echo wp_logout_url(get_permalink()); ?>">Log out</a>
            <?php }  ?>
    </div>
 
    <div class="checkout__menu">
      <div class="bock__top">

        <div class="top">YOU HAVE <?php if(WC()->cart->get_cart_contents_count()){ ?>  <span class='num'><?php echo WC()->cart->get_cart_contents_count(); ?></span>  <?php // echo WC()->cart->get_cart_subtotal(); ?> <?php }else{ ?>0<?php } ?> ITEM(S) IN YOUR BAG</div><a class="close__" href="javascript:;"></a>
      </div>
      <div class="box__content">
       
        <?php if(WC()->cart->get_cart_contents_count()){ ?>

        <div class="block__content">
          <ul class="list">
						<?php

                global $woocommerce;
                foreach ($woocommerce->cart->get_cart() as $item): ?>
                  
                  <?php // print_r($item); ?>

                  <?php  $iditems = $item['product_id'];  ?>

                      <li>
                        <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/checkout__1_add_img.png" alt="paypal"></div>
                        <div class="block__cont">
                          <h3 class="title__"><?php echo get_the_title( $iditems ); ?></h3>
                          <div class="bottom">
                            <span class="price"><?php 
                             $product = wc_get_product( $iditems );
                              //echo $product->get_regular_price() . '<br>';
                              //echo $product->get_sale_price(). '<br>';
                              echo $product->get_price_html();
                              ?></span>
                            
                            
                   <form id="form_del_<?php echo $iditems; ?>" method='POST' action='javascript:void(null);'>
                      <?php wp_nonce_field( 'delete_post', 'delete_post_nonce' );?>
                      <input type="hidden" name="postid" value="<?php echo $iditems; ?>">
                      <input type="hidden" name="action" value="delete_prod">
                      
                         <a class="delete__" href="javascript:;" name="delete">
                          <svg width="24" height="25" viewbox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 6.5H21" stroke="#ADADAD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19 6.5V20.5C19 21.5 18 22.5 17 22.5H7C6 22.5 5 21.5 5 20.5V6.5" stroke="#ADADAD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M8 6.5V4.5C8 3.5 9 2.5 10 2.5H14C15 2.5 16 3.5 16 4.5V6.5" stroke="#ADADAD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M10 11.5V17.5" stroke="#ADADAD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M14 11.5V17.5" stroke="#ADADAD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </a>
              
                      <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo $iditems; ?>">x</button>   
                 </form>

                            </div>
                        </div>
                      </li>
            
              <?php   endforeach;  ?>

          </ul>
        </div>

        <?php }else{ ?>
        
          <div class="block__add">
          <h5 class="top__">Suggestions:</h5>
          
               <?php  
                 $args = array(
                      'orderby' => 'rand', 
                      'order' => 'DESC', // order filter  last post
                      'post_type'  => 'product', // Post type category BLOG
                      'posts_per_page' => 5, // echo show three post 
                  );
                  // The Query
                  $the_query = new WP_Query( $args );

                  // The Loop
                  if ( $the_query->have_posts() ) {

                      while ( $the_query->have_posts() ) {
                          $the_query->the_post(); ?>
                          
                           <?php $product = wc_get_product( $post->ID ); // Works for any product type ?>

                        <div class="box">
                          <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/checkout__1_add_img.png" alt="paypal"></div>
                          <div class="block__cont">
                            <h3 class="title__"><?php echo get_the_title(); ?></h3>
                            <div class="bottom"><span class="price"><?= $product->get_price_html(); ?></span><a class="here" href="<?php echo get_the_permalink(); ?>">Join here</a></div>
                          </div>
                        </div>
          
                     <?php }

                  } else {
                      // no posts found
                  }
                  /* Restore original Post Data */
                  wp_reset_postdata();
                ?>

        </div>

        <?php } ?> 
        
 
        
        
      </div>
      <div class="bottom__">
       
        <?php if(WC()->cart->get_cart_contents_count()){ ?> 
          <div class="box__total">
            <div class="subtotal">Total:</div>
            <div class="pricesubtotal"><?php echo WC()->cart->get_cart_total(); ?></div>
          </div>
                <a class="bundle" href="/checkout/">Proceed to checkout</a>
        <?php }else{ ?>
        <div class="box__total">
          <div class="subtotal">You have no products in the cart.</div>
        </div>
        
              <a class="bundle" href="/virtual-workshops/">Explore our trainings</a>
        <?php } ?> 
        
  
      </div>
    </div>
    
   
    <header main>
      <div class="container">
       <div class="row">
         <div class="col m12 s12 l12 xl12">

          <div class="box__logo">
            <a class="logo" href="/"><img src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="logo"></a>
          </div>
          <div class="menu__">
          <?php  $argsm = array(
      //        'container_id'         => 'mobileMenu',
               'menu' => 'header',
      //        'container_class' => 'nav__menu',
            );
          ?>
          <?php  wp_nav_menu( $argsm );?>

        </div>
        <div class="naviget__">
          <div class="box__user">
               <a class="user" href="javascript:;"></a>
                <div class="box_menu__">
                  <a class="academy" href="https://members.innercamp.com/auth/google?from=https%3A%2F%2Fmembers.innercamp.com%2F&from_sign_in=1">InnerCamp Academy</a>
                  <a class="orders" href="/my-account/orders/">My orders</a>
                  <a class="affiliate" href="javascript:;">Affiliate Program</a>
                  <a class="account" href="/my-account/">Account information</a>
                    <?php if ( is_user_logged_in() ) {  ?>
                  <a class="log" href="<?php echo wp_logout_url(get_permalink()); ?>">Log out</a>
                    <?php } ?>
                </div>
              </div>
              

              <a class="cart" href="javascript:;"><?php if(WC()->cart->get_cart_contents_count()){ ?>  <span class='num'><?php echo WC()->cart->get_cart_contents_count(); ?></span>  <?php // echo WC()->cart->get_cart_subtotal(); ?> <?php } ?>  </a><a class="open__" href="javascript:;"> </a></div>
         </div>
       </div>
      </div>
    </header>
