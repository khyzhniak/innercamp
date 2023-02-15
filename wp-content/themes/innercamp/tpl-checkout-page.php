<?php
/**
 * Template Name: Checkout Page* 
 */
get_header('none'); ?>

<?php 

    global $product;
    global $woocommerce;
    $items = $woocommerce->cart->get_cart();
    $total = $woocommerce->cart->get_cart_total();

?>
 
    <section class="checkout__1">
      <div class="box__top">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl12"><a class="logo" href="/"><img src="<?= get_template_directory_uri(); ?>/img/checkout__1_logo.svg" alt="logo"></a>
              <div class="box__next"><span class="orange"></span><span></span></div>
              <div class="step"> 
                <div class="start">Step <span>1</span></div>of 2
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl7">

            <div class="cont__">
              
          <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */

				the_content(); 

			endwhile;

// the_content(); ?>
              
              
            </div>
            <div class="block__bottom">
                <?php
                  $arg_legal = array(
                     'menu' => 'legal',
                  );
                ?>
                <?php  wp_nav_menu( $arg_legal );?>
              <p class="copy">© 2023 InnerCamp</p>
            </div>
          </div>
          <div class="col m12 s12 l12 xl5">
            <div class="block__top"><a class="open__top" href="javascript:;">Show order summary</a>
              <div class="price"> <span><?php echo WC()->cart->get_cart_total(); ?></span></div>
            </div>
            <div class="block__add">
             
             
              <p class="top">Add more experiences</p>
              <div class="box">
               
               <?php  
                 $args = array(
                      'orderby' => 'rand', 
                      'order' => 'DESC', // order filter  last post
                      'post_type'  => 'product', // Post type category BLOG
                      'posts_per_page' => 1, // echo show three post 
                  );
                  // The Query
                  $the_query = new WP_Query( $args );

                  // The Loop
                  if ( $the_query->have_posts() ) {

                      while ( $the_query->have_posts() ) {
                          $the_query->the_post(); ?>
                          <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/checkout__1_add_img.png" alt="paypal"></div>
                          <div class="block__cont">
                            <h3 class="title__"><?php echo get_the_title(); ?></h3>
                            <div class="bottom"><span class="price">
                            
                             <?php $product = wc_get_product( $post->ID ); // Works for any product type ?>

                              <?= $product->get_price_html(); ?></span>

                              <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                                  <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                                  <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                                  <input type="hidden" name="action" value="addcart_prod">

                                    <a data-add="<?php echo get_the_ID(); ?>" class="add__" name="add" >Add to cart</a>
                                  <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
                              </form>
                              
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
            </div>
            <div class="block__content">
              <ul class="list">
               
               

							
						<?php
                global $woocommerce;
                foreach ($woocommerce->cart->get_cart() as $item): ?>

                  <?php  $iditems = $item['product_id'];  ?>

                      <li>
                        <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/checkout__1_add_img.png" alt="paypal"></div>
                        <div class="block__cont">
                          <h3 class="title__"><?php echo get_the_title( $iditems ); ?></h3>
                          
                          <div class="bottom"><span class="price">
                            <?php 
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
                      
                      <?php if(0){ ?>
                          <div class="tt-item">
                                  <a href="<?php echo get_the_permalink( $iditems ); ?>">
                                      <div class="tt-item-img">
                                          <img src="<?php echo get_the_post_thumbnail_url( $iditems ); ?>" data-src="<?php echo get_the_post_thumbnail_url( $iditems ); ?>" alt="" class="loaded" data-was-processed="true">
                                      </div>
                                      <div class="tt-item-descriptions">
                                          <h2 class="tt-title"><?php echo get_the_title( $iditems ); ?></h2>
                                          <ul class="tt-add-info">
                                              <li>Yellow, Material 2, Size 58,</li>
                                              <li>Vendor: Addidas</li>
                                          </ul>
                                          <div class="tt-quantity"><?php echo $item['quantity']; ?> X</div> <div class="tt-price"><?php echo get_post_meta( $iditems, '_price', true); ?></div>
                                      </div>
                                  </a>
                                  <div class="tt-item-close">
                                      <a href="#" class="tt-btn-close" data-id='<?= $iditems; ?>'></a>
                                  </div>
                              </div>
                      <?php } ?>


                        <?php      
                endforeach;  ?>

  
              </ul>
              <div class="coupon__">
               
                <form id="coupon" method='POST' action='javascript:void(null);'>
                  <?php wp_nonce_field( 'coupon_post', 'coupon_post_nonce' ); ?>

                  <input type="hidden" name="action" value="couponcode_prod">
                  <input type="hidden" name="hash" value="<?php echo $item; ?>">

                  <input type="text" name="coupon_code" value="" placeholder="Coupon code">

                  <button type="submit" class="grey" name="apply_coupon">Apply</button>
                </form>
                
               <?php if(0){ ?>
                <form method="POST" action="javascript:void(null);">
                  <div class="form_input"><span class="field"> 
                      <input type="text" name="coupon" required="" value="" placeholder="Coupon code"></span></div>
                  <button class="grey" type="submit" name="send">Apply</button>
                </form>
               <?php } ?>
               
              </div>
              <div class="all__price">
   
               
                
             <?php if( count( WC()->cart->get_applied_coupons() ) > 0 ) { ?>
                
                  <?php foreach( WC()->cart->get_applied_coupons() as $coupon_code ) { ?>
                    <?php  // Get the WC_Coupon object
                      $coupon = new WC_Coupon($coupon_code);

                      $discount_type = $coupon->get_discount_type(); // Get coupon discount type
                      $coupon_amount = $coupon->get_amount(); // Get coupon amount ?>
                       <div class="box__total">
                    <div class="subtotal"><?php echo 'Coupon: '. $coupon_code;	?></div>
                    <div class="pricesubtotal"><?php echo  '- €'. $coupon_amount;      ?></div>
                                    </div>
                  <?php } ?>

             <?php } ?>
                
                <div class="box__total">
                  <div class="subtotal">Subtotal</div>
                  <div class="pricesubtotal"><?php echo WC()->cart->get_cart_subtotal(); ?></div>
                </div>
                <div class="box__order__tol">
                  <div class="subtotal">Order Total</div>
                  <div class="pricesubtotal"><?php echo WC()->cart->get_cart_total(); ?></div>
                </div>
              </div>
              <div class="need">
                <p>Need help?<a class="open" href="javascript:;">Chat with us.</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

        <!-- //// MODAL THANK YOU ////-->
    <div class="thank modal" id="modal-thank" style="display: none;">
      <div class="content_modal">
        <div class="box__">
          <div class="box__img"><img src="<?= get_template_directory_uri(); ?>/img/thenk__modal.png" alt="logo_brand_1"></div>
          <div class="box__content">
            <h5 class="title">Thank you!</h5>
            <p>You will receive <span>soon an email with further instructions.</span>Thank you for choosing us.</p><a class="bundle" href="/">Go to the home page</a>
          </div>
        </div>
      </div>
    </div>
    
  
<?php
get_footer('none');