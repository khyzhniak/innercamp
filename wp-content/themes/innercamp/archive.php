<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innercamp
 */

get_header(); ?>


    
    <section class="blog__1">
      <div class="container">
        <div class="row">     
          <div class="col m12 s12 l12 xl12">
            <p class="sub">BLOG</p>
            <h1 class="title"><?php 
              $catID = $cat->term_id;
             $current_cat = get_queried_object($catID);
echo $current_cat->name;  ?></h1>
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

//                print_r($all_categories);
                
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
  
              
        if(is_category()){
          $args = array(
              'order' => 'DESC', // order filter  last post
              'post_type'  => 'post', // Post type category BLOG
              'posts_per_page' => 11, // echo show three post 
                  'paged'         => $paged,

           'category_name'    => $current_cat->slug,
          );
        }else{
         $args = array(
              'order' => 'DESC', // order filter  last post
              'post_type'  => 'post', // Post type category BLOG
              'posts_per_page' => 11, // echo show three post 
              'paged'         => $paged,

           'tag'    => $current_cat->slug,
          );
          
        }

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
             

              
              
              
             <?php if(0){ ?>

              <article>
                <div class="box__img"><img src="<?= get_template_directory_uri(); ?>/img/blog__1.svg" alt="#">
                  <ul>
                    <li><a class="tag" href="#">Breathwork</a></li>
                    <li><a class="tag" href="#">Trauma healing</a></li>
                  </ul>
                </div>
                <div class="box__content">
                  <h3 class="title__">6 very influential healing and embodiment traditions from around the world</h3>
                  <p>Somatic psychology studies the link between physical matter and energy, the association of bodily structures and mental processes.</p>
                  <div class="box__"><img src="<?= get_template_directory_uri(); ?>/img/blog_inercamp.svg" alt="#"><span class="data">June 21, 2022</span></div>
                </div>
              </article>
             <?php } ?>
            </div>

          </div>

        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl10 offset-xl2">
            <div class="pagination__"> 
  
             <?php $big = 999999999; // need an unlikely integer
              echo paginate_links( array(
                  'format' => '?number=%#%',
                  'current' => $paged,
    'mid_size' => 1, 

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


<?php if(0){ ?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php } ?>

<?php
//get_sidebar();
get_footer();
