<?php 


function prod_couponcode(){

  if ( empty($_POST) || ! wp_verify_nonce( $_POST['coupon_post_nonce'], 'coupon_post') ){
        print 'Sorry, the verification data does not match 1111.';
        exit;
    }else{

      $coupon_code = sanitize_text_field($_POST['coupon_code']);

          WC()->cart->apply_coupon( $coupon_code );
          wc_print_notices();

  }
}

add_action( 'wp_ajax_couponcode_prod', 'prod_couponcode' );
add_action( 'wp_ajax_nopriv_couponcode_prod', 'prod_couponcode' );


  function prod_addcart(){
    if ( empty($_POST) || ! wp_verify_nonce( $_POST['addcart_post_nonce'], 'addcart_post') ){
          print 'Sorry, the verification data does not match 1111.';
          exit;
      }else{
      
    global $woocommerce;
        $woocommerce->cart->add_to_cart( $product_id = sanitize_text_field($_POST['postid']), $quantity = sanitize_text_field($_POST['quantity']), $variation_id = 0, $variation = array(), $cart_item_data = array() );
        $woocommerce->cart->add_to_cart(sanitize_text_field($_POST['postid']), );
        $pid = sanitize_text_field($_POST['postid']);
//echo get_price_html($product_id);
        
        
             $get_cart_contents_count =  WC()->cart->get_cart_contents_count();


        
            $return = array(
                'quantity'   => $get_cart_contents_count,
              
              
            );

            wp_send_json( $return );
        
 
      }
      die;
  }

add_action( 'wp_ajax_addcart_prod', 'prod_addcart' );
add_action( 'wp_ajax_nopriv_addcart_prod', 'prod_addcart' );



  function prod_delete(){
    if ( empty($_POST) || ! wp_verify_nonce( $_POST['delete_post_nonce'], 'delete_post') ){
          print 'Sorry, the verification data does not match 1111.';
          exit;
      }else{
      
//      echo 'remove_cart_item';

       // WC_Cart::remove_cart_item( sanitize_text_field($_POST['postid']) );
      
         $product_id = sanitize_text_field($_POST['postid']);
         $product_cart_id = WC()->cart->generate_cart_id( $product_id );
         $cart_item_key = WC()->cart->find_product_in_cart( $product_cart_id );
         if ( $cart_item_key ) WC()->cart->remove_cart_item( $cart_item_key );
        
        
             $get_cart_contents_count =  WC()->cart->get_cart_contents_count(); 

//             $get_cart_subtotalrrr = strip_tags(  WC()->cart->get_cart_subtotal() , '<ins><ins/>');

//             $get_cart_subtotal = str_replace("&nbsp;&#107;&#114;", "", $get_cart_subtotalrrr);
        
        
//         global $woocommerce;
//           $items = $woocommerce->cart->get_cart();
//          $total = $woocommerce->cart->get_cart_total();
//
//        foreach ($items as $item => $values) {
//            
//                  $iditems = $values['product_id']; 
//            
//                            $rrrvalues = wc_get_product( $iditems );
//
//                         $sum_regular_price = $rrrvalues->get_regular_price();
//                   
//                        $sum_quantity = $values['quantity'];
//                   
//                        $summm  =  $sum_regular_price * $sum_quantity;
//                   
//                   $sum+= $summm;
//        }
//           $notsale = number_format($sum , 2, ',', '.') . ' kr';
        
        

            $return = array(
                'quantity'   => $get_cart_contents_count,
//                'total'        => $get_cart_subtotal .' kr',
//                'notsale'        =>  $notsale,
            );

            wp_send_json( $return );
        
      
      }
      die;
  }

add_action( 'wp_ajax_delete_prod', 'prod_delete' );
add_action( 'wp_ajax_nopriv_delete_prod', 'prod_delete' );



if(0){

  function search_chang_post(){
      if ( empty($_POST) || ! wp_verify_nonce( $_POST['search_change_nonce'], 'search_change') ){
          print 'Sorry, the verification data does not match 1111.';
          exit;
      }else{



        if(sanitize_text_field($_POST['s']) !== ''){

            $options = array(
                'posts_per_page' => -1,
                'suppress_filters' => false, // important!
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby'     => 'title', 
                'order'       => 'ASC'  
            );
            $keyword = sanitize_text_field($_POST['s']);

            add_filter( 'posts_where', function ($where) use ($keyword) {
                global $wpdb;
                $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $keyword ) ) . '%\'';
                return $where;
            });
            $posts = get_posts( $options );


              echo '<ul class="list open">';
              foreach( $posts as $post ){   ?>
                  <li><a href="<?php echo the_permalink($post); ?>"><?php echo get_the_title($post); ?></a></li>
                  <?php
              }
              echo '</ul>';
          }
      }
      die;
  }

add_action( 'wp_ajax_search_post_change', 'search_chang_post' );
add_action( 'wp_ajax_nopriv_search_post_change', 'search_chang_post' );


  
  
}