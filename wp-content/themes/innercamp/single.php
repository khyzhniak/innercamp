<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package innercamp
 */

get_header(); ?>

<!--single.php-->

    
    
 <?php if( is_product() ){  ?>
   
    <section class="blog-single__1">
      <div class="container">
        <div class="row">     
          <div class="col m12 s12 l9 xl9">
            <p class="sub">Product</p>
            <h1 class="title"><?php echo the_title(); ?></h1>
            <div class="box__"><img src="<?= get_template_directory_uri(); ?>/img/brand-logo-white.svg" alt="#"><span class="data"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></span></div>
          </div>
        </div>
      </div>
    </section>
   
    <section class="blog-single__2">
      <div class="container">
        <div class="row">     
          <div class="col m12 s12 l12 xl12">
          
            <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                <input type="hidden" name="action" value="addcart_prod">

                  <a data-add="<?php echo get_the_ID(); ?>" class="bundle" name="add" >Add to cart</a>
                <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
            </form>

          
          
  <?php if(0){ ?>        
          <form class="cart" action="" method="post" enctype="multipart/form-data">
		
		
<!--  yourtheme/woocommerce/global/quantity-input.php  -->

<div class="quantity">

	<input type="text" readonly="readonly" id="quantity_63da4970b9556" class="input-text qty text" name="quantity" value="1" title="Qty" size="4" min="1" max="1">
	</div>

		<button type="submit" name="add-to-cart" value="<?php echo get_the_id(); ?>" class="single_add_to_cart_button button alt wp-element-button bundle">Add to cart</button>

			</form>
			
  <?php } ?>   
 
		<?php
                          
                          if(0){ 
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'innercamp' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'innercamp' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
                          
                          }
		?>
          
          </div>
        </div>
      </div>
    </section>
   
  <?php }else{ ?> 
    

    <section class="blog-single__1">
      <div class="container">
        <div class="row">     
          <div class="col m12 s12 l9 xl9">
            <p class="sub">BLOG</p>
            <h1 class="title"><?php echo the_title(); ?></h1>
            <div class="box__"><img src="<?= get_template_directory_uri(); ?>/img/brand-logo-white.svg" alt="#"><span class="data"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></span></div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="blog-single__2">
      <div class="container">
        <div class="row">     
          <div class="col m12 s12 l7 xl8">
          
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

			endwhile;   ?>
           
          <?php // the_content(); ?>
            
            
            <div class="box__soseal">
              <h3>Share on</h3>
              <div class="soseal">
                <li><a href="javascript:;"> 
                    <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M34 16C34 16 33.3 18.1 32 19.4C33.6 29.4 22.6 36.7 14 31C16.2 31.1 18.4 30.4 20 29C15 27.5 12.5 21.6 15 17C17.2 19.6 20.6 21.1 24 21C23.1 16.8 28 14.4 31 17.2C32.1 17.2 34 16 34 16Z" stroke="#424F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      <circle cx="24" cy="24" r="23" stroke="#424F44" stroke-width="2"></circle>
                    </svg></a></li>
                <li><a href="javascript:;">
                    <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="24" cy="24" r="23" stroke="#424F44" stroke-width="2"></circle>
                      <path d="M30 14H27C25.6739 14 24.4021 14.5268 23.4645 15.4645C22.5268 16.4021 22 17.6739 22 19V22H19V26H22V34H26V26H29L30 22H26V19C26 18.7348 26.1054 18.4804 26.2929 18.2929C26.4804 18.1054 26.7348 18 27 18H30V14Z" stroke="#424F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></a></li>
              </div>
            </div>
            <hr>
            <h3>References</h3>
      <ul class="list">          
<?php

$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 10, 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>

        <li>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>

        </li>

<?php }
wp_reset_postdata(); ?>
           
    </ul>   
 
          </div>
          <div class="col m12 s12 l5 xl4">
            <div class="soseal">
              <li><a href="javascript:;"> 
                  <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34 16C34 16 33.3 18.1 32 19.4C33.6 29.4 22.6 36.7 14 31C16.2 31.1 18.4 30.4 20 29C15 27.5 12.5 21.6 15 17C17.2 19.6 20.6 21.1 24 21C23.1 16.8 28 14.4 31 17.2C32.1 17.2 34 16 34 16Z" stroke="#424F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <circle cx="24" cy="24" r="23" stroke="#424F44" stroke-width="2"></circle>
                  </svg></a></li>
              <li><a href="javascript:;">
                  <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="24" cy="24" r="23" stroke="#424F44" stroke-width="2"></circle>
                    <path d="M30 14H27C25.6739 14 24.4021 14.5268 23.4645 15.4645C22.5268 16.4021 22 17.6739 22 19V22H19V26H22V34H26V26H29L30 22H26V19C26 18.7348 26.1054 18.4804 26.2929 18.2929C26.4804 18.1054 26.7348 18 27 18H30V14Z" stroke="#424F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg></a></li>
            </div>
            <h3>Related posts</h3>
            
            <div class="list__post">
             
<?php

$relateds = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
if( $relateds ) foreach( $relateds as $posts ) {
setup_postdata($posts); ?>

              <li>
                <div class="box__img"><img src="<?= get_template_directory_uri(); ?>/img/blog__img_2.png" alt="#"></div>
                <div class="content"><a class="title__" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
              </li>
        

<?php }
wp_reset_postdata(); ?>

            </div>
            
            <a class="bundle" href="/category/all/">See all posts</a>
          </div>
        </div>
      </div>
    </section>
    
  <?php } ?> 

<?php if(0){ ?>
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


	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'innercamp' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'innercamp' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
}
//get_sidebar();
get_footer();
