<?php
/**
 * Template Name: Clear page content* 
 */
get_header();
?>
<section class="single-page-content with-divider">
  <div class="container">
    <div class="row">
      <?php 
        if ( have_posts() ) :
          while ( have_posts() ) : the_post(); ?>
            <h1 class="title"><?php single_post_title(); ?></h1>
            <?php
            the_content();
          endwhile;
        endif;
      ?>
    </div>
  </div>
</section> 
<?php
get_footer();