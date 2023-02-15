<?php
/**
 * Template Name: Blog Page* 
 */
get_header(); ?>

    
    <section class="blog__1">
      <div class="container">
        <div class="row">     
          <div class="col m12 s12 l12 xl12">
            <p class="sub"><?php the_title(); ?></p>
            <h1 class="title">InnerCamp Blog</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="blog__2">
      <div class="container">
        <div class="row">     
          <div class="col m12 s12 l2 xl2">
            <h3 class="title__">Categories</h3>
            <div class="box__categor">
              <ul>

               <?php 
                
                $all_categories = wp_list_categories( array(
                      'orderby'    => 'count',
                      'order'      => 'DESC',
                      'show_count' => 1,
                      'title_li'   => '',
                      'number'     => 10,
                      'hide_empty' => true,
                  ) );
                
                
               // print_r($all_categories);
                
                  ?>
               
                
              </ul>
            </div>
          </div>
          <div class="col m12 s12 l12 xl10">
            <div class="list__post">
             
     <?php  
          $alt = 1;    
              
              
          if ( isset( $_GET['number'] ) ) {
              $pagesnamber = (int) $_GET['number'];
          }else{
               $pagesnamber = (int) $_GET['number'];                   
          }

              
       $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : $pagesnamber;
  
       $args = array(
            'order' => 'DESC', // order filter  last post
            'post_type'  => 'post', // Post type category BLOG
            'posts_per_page' => 11, // echo show three post 
                'paged'         => $paged,
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
                $the_query->the_post();  ?>
                
              <article>
                <div class="box__img">
                      <?php if(get_the_post_thumbnail_url()){ ?>
                          <img src="<?= get_the_post_thumbnail_url(); ?>" alt="blog_<?php echo $alt++; ?>">
                      <?php }else{ ?>
                          <img src="<?= get_template_directory_uri(); ?>/img/blog__1.svg"  alt="blog_<?php echo $alt++; ?>">
                      <?php } ?>

                   <?php   // GET TAGS BY POST_ID
                      $tags = get_the_tags($post->ID);  ?>
 
                  <ul>
                   <?php foreach($tags as $tag) :  ?>
                        <li><a class="tag" href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>"><?php print_r($tag->name); ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                
                <div class="box__content">
                   <?php if(get_the_permalink()){ ?><a class="title__" href="<?php echo get_the_permalink(); ?>"><?php } ?>  <?php echo get_the_title(); ?>  <?php if(get_the_permalink()){ ?></a><?php } ?>  
                  
                  <p>Somatic psychology studies the link between physical matter and energy, the association of bodily structures and mental processes.</p>
                  <div class="box__"><img src="<?= get_template_directory_uri(); ?>/img/blog_inercamp.svg" alt="#"><span class="data">
                  <?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></span></div>
                </div>
              </article>
                
           <?php }

        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
      ?>
             
            </div>
             <?php if(0){ ?>
            <div class="twix none">
              <div class="picture"><img src="<?= get_template_directory_uri(); ?>/img/blog__1.svg" alt="#">
                <div class="battom"><a class="whitebuttom" href="#">Breathwork </a><a class="whitebuttom" href="#">Trauma healing</a></div>
              </div>
              <div class="blog">
                <h4></h4><a href="">6 very influential healing and embodiment traditions from around the world </a>
                <p>Somatic psychology studies the link between physical matter and <br/> energy, the association of bodily structures and mental processes.</p>
                <ul class="reb11">
                  <li> <img src="<?= get_template_directory_uri(); ?>/img/blog__logo.svg" alt="#">
                    <p class="reb22">June 21, 2023</p>
                  </li>
                </ul>
              </div>
            </div>
             <?php } ?>
          </div>
             <?php if(0){ ?>
          <div class="col m12 s12 l4 xl4 none">
            <div class="twix2">
              <div class="picture2"><img src="<?= get_template_directory_uri(); ?>/img/blog__2.svg" alt="#">
                <div class="battom2"><a class="whitebuttom" href="#">Breathwork </a><a class="whitebuttom" href="#">Trauma healing</a></div>
              </div>
              <div class="blog2">
                <h4></h4><a href="">6 very influential healing and embodiment traditions from around the world </a>
                <p>Somatic psychology studies the link between physical matter and <br/> energy, the association of bodily structures and mental processes.</p>
                <ul class="reborn">
                  <li><img src="<?= get_template_directory_uri(); ?>/img/blog__logo.svg" alt="#">
                    <p class="reborn2"> June 21, 2023</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
             <?php } ?>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl10 offset-xl2">
            <div class="pagination__"> 
  
             <?php $big = 999999999; // need an unlikely integer
              echo paginate_links( array(
                  'format' => '?number=%#%',
                  'current' => $paged,
                
//                  'mid_size' => 3,

                  'total' => $the_query->max_num_pages,
                  'prev_text'    => __('«'),
                  'next_text'    => __('»'),
                  'type' => 'list'
              ) );  ?>
               
               
                <?php if(0){ ?>
                <li><a href="pag.php?page1">1</a></li>
                <li><a class="active" href="pag.php?page1">2</a></li>
                <li><a href="pag.php?page1">3</a></li>
               <?php } ?>
 
            </div>
          </div>
        </div>
      </div>
    </section>
    
  
<?php
get_footer();