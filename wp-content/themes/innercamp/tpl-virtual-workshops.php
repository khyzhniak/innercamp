<?php 
/**
* Template Name: Virtual Workshops*
*
*/
get_header(); 
?>
<div class="mobile-experience-filter-nav">
    <button class="close"><img src="<?= get_template_directory_uri(); ?>/img/team/close-img.svg" alt=""></button>
    <div class="mobile-experience-filter-wrap">
        <nav class="experience-filter-nav">
            <h2 class="experience-filter-title">Filter by</h2>
            <ul>
                <li class="active"><a href="#">All courses <span>(50)</span></a></li>
                <li><a href="#">Online <span>(50)</span></a></li>
                <li><a href="#">On-site <span>(50)</span></a></li>
            </ul>
        </nav>
        <nav class="experience-event-nav">
            <h3 class="experience-event-title">Event type</h3>
            <ul>
                <li><a href="#">Breathwork <span>(1)</span></a></li>
                <li><a href="#">Tantra <span>(50)</span></a></li>
                <li><a href="#">Bodywork <span>(50)</span></a></li>
                <li><a href="#">Cacao ceremonies <span>(50)</span></a></li>
            </ul>
        </nav>
        <nav class="experience-lang-nav">
            <h3 class="experience-lang-title">language</h3>
            <ul>
                <li><a href="#">English <span>(1)</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<section class="workshops__1" style="background: url('<?= get_template_directory_uri(); ?>/img/experience/v-workshops-bg.webp') no-repeat top/cover">
    <div class="container">
        <div class="row">
            <h1 class="title">Explore InnerCamp <strong>Workshops</strong></h1>
            <div class="workshops__1-description">
                <p>Discover our virtual and on-site workshops guided by leading practitioners from around the world.</p>
            </div>
        </div>
    </div>
</section>
<section class="workshops__2 experience-wrap">
    <div class="container">
        <div class="row">
            <div class="experience-nav">
                <div class="experience-nav-wrap">
                    <nav class="experience-filter-nav">
                        <h2 class="experience-filter-title">Filter by</h2>
                        <ul>
                            <li><a href="#">All courses <span>(40)</span></a></li>
                            <li><a href="#">Online <span>(1)</span></a></li>
                            <li><a href="#">On-site <span>(4)</span></a></li>
                        </ul>
                    </nav>
                    <nav class="experience-event-nav">
                        <h3 class="experience-event-title">Event Type</h3>
                        <ul>
                            <li><a href="#">Breathwork <span>(1)</span></a></li>
                            <li><a href="#">Tantra <span>(4)</span></a></li>
                            <li><a href="#">Bodywork <span>(4)</span></a></li>
                            <li><a href="#">Cacao ceremonies <span>(3)</span></a></li>
                        </ul>
                    </nav>
                    <nav class="experience-lang-nav">
                        <h3 class="experience-lang-title">Language</h3>
                        <ul>
                            <li><a href="#">English <span>(4)</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="experience-content">
                <h2 class="experience-content-title">Workshops</h2>
                <div class="experience-list">
                 
     <?php  
       $args = array(
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
                
                  <div class="experience-item v-workshops">
                       <div class="box__content">

                              <div class="left-side">
                                  <div class="category-list">
                                      <a class="element tantra" href="#">Tantra</a>
                                      <a class="calen" href="#">Nov 11</a>
                                      <a href="#" class="event-time">7pm CET</a>
                                      <a class="video" href="#">Zoom meeting in English</a>
                                  </div>
                                  <h3 class="item-title"><?php echo get_the_title();  ?></h3>
                                  <div class="item-excerpt">Bring back the power to create inner strength and joy.</div>
                                  <div class="author-info">
                                      <img src="<?= get_template_directory_uri(); ?>/img/testimonials/user.png" alt="" class="author-photo">
                                      <span class="author-name">Marjolein Van Ommeren</span>
                                  </div>
                              </div>
                             <div class="right-side">
                                 <a href="#" class="download" download="#">Download App</a>
                                 <a href="<?php echo get_the_permalink(); ?>" class="bundle">See details</a>
                             </div>
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

        </div>
    </div>
</section>

<?php 
get_footer();