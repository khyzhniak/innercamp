<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>
<!--  yourtheme/woocommerce/checkout/form-checkout.php  -->
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
  

             
              <div class="tab__check">
               
                <div class="tab__ active">
                 
                 
            <div class="box__pay"><span><img src="<?= get_template_directory_uri(); ?>/img/checkout__1_pa.svg" alt="paypal"></span><span><img src="<?= get_template_directory_uri(); ?>/img/checkout__1_p.svg" alt="pay"></span></div>
            <div class="or">OR</div>
                  
                  

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>


				<?php do_action( 'woocommerce_checkout_billing' ); ?>

				<?php do_action( 'woocommerce_checkout_shipping' ); ?>


		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
          
                  
                  <div class="next__menu"><a class="back" href="javascript:;" data-num="1">
                      <svg width="8" height="11" viewbox="0 0 8 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.25 1L1.75 5.5L6.25 10" stroke="#C6C1B3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>Go back</a><a class="bundle" href="javascript:;" data-num="2">Continue to payment method </a></div>
                </div>
                
                
                <div class="tab__">
                
                       <h3>Contact information</h3>
                      <div class="box__email"> <span class="info">Contact</span><span class="email__"> </span><a href="#billing_email" data-num="1">Change</a></div>
       
                  
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>


		<?php do_action( 'woocommerce_checkout_order_review' ); ?>

                  
                  
                  <div class="next__menu">
                     
                     <a class="back" href="javascript:;" data-num="1">
                      <svg width="8" height="11" viewbox="0 0 8 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.25 1L1.75 5.5L6.25 10" stroke="#C6C1B3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>Go back</a>
                      
                      <a class="bundle" href="javascript:;">Place your order</a>
                      
                      
                                
                      	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>  
                      
                      </div>
                </div>
                
              
                
              </div>
              
              
              
  
<?php if(0){ ?>
	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
	
	
	<?php } ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
