<!-- Block 1 -->

<?php $esr = 1; ?>
   
    <div class="top__about">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l3 xl3">
            <ul class="about__left">
            <?php // check if the flexible content field has rows of data
    if( have_rows('about_us') ):
         // loop through the rows of data
        while ( have_rows('about_us') ) : the_row(); ?>
 
        <?php if( get_row_layout() == 'about_us_section_1' ): ?>     
            
                <?php if( have_rows('block') ): ?> <!-- Repeater withdrawal__methods__5__diamond__list__content -->

                    <?php while( have_rows('block') ): the_row();  ?> <!-- Repeater withdrawal__methods__5__diamond__list__content --> 
                    
                    
                    
                     <?php if( get_sub_field('sub_title')): ?><!-- if under__the -->
                        <li><a class="<?php if($esr == '1'){ echo 'active'; } ?>" href="#list_<?php echo $esr++; ?>_<?php echo get_row_index(); ?>"><?php the_sub_field('sub_title'); ?></a></li>
                     <?php endif; ?>

                    <?php endwhile; ?> <!-- END Repeater withdrawal__methods__5__diamond__list__content -->

                <?php endif; ?> <!-- END Repeater withdrawal__methods__5__diamond__list__content -->
  
          <?php endif;
          endwhile;
      endif; ?>
              
              
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    
<?php $esrk = 1; ?>

    <?php // check if the flexible content field has rows of data
    if( have_rows('about_us') ):
         // loop through the rows of data
        while ( have_rows('about_us') ) : the_row(); ?>
 
        <?php if( get_row_layout() == 'about_us_section_1' ): ?>
 
   <?php  $file = get_sub_field('background_video'); ?>
   
    <section class="about-us__1 one__  <?php if( $file ): ?>back<?php endif; ?>">
    
<?php

if( $file ): ?>
   
  <?php if(0){ ?>
    <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>
  <?php } ?>
     
      <video playsinline="" autoplay="" muted="" loop="" preload="none">
        <source src="<?php echo $file['url']; ?>" type="video/mp4">
      </video>
    
<?php endif; ?>
        

     
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl9 offset-xl3">
           

                <?php if( have_rows('block') ): ?> <!-- Repeater withdrawal__methods__5__diamond__list__content -->
                  
                    <?php while( have_rows('block') ): the_row();  ?> <!-- Repeater withdrawal__methods__5__diamond__list__content -->
    <article>
                     <?php if( get_sub_field('sub_title')): ?><!-- if under__the -->
                        <p class="sub" id="list_<?php echo $esrk++; ?>_<?php echo get_row_index(); ?>"><?php the_sub_field('sub_title'); ?></p>
                     <?php endif; ?> 
                     
                     
   <?php // check if the flexible content field has rows of data
    if( have_rows('flex_content') ):
         // loop through the rows of data
        while ( have_rows('flex_content') ) : the_row(); ?>
        <?php if( get_row_layout() == 'h2_title' ): ?>
 
          <?php if( get_sub_field('title_text')): ?><!-- if under__the -->
           <h2 class="title"> <?php the_sub_field('title_text'); ?></h2>
          <?php endif; ?>

        <?php elseif( get_row_layout() == 'h3_title' ): ?>

          <?php if( get_sub_field('title_text')): ?><!-- if under__the -->
           <h3><?php the_sub_field('title_text'); ?></h3>
          <?php endif; ?>
          
        <?php elseif( get_row_layout() == 'content_text' ): ?>
                     
            <?php if( get_sub_field('content_text')): ?><!-- if under__the -->
           <p><?php the_sub_field('content_text'); ?></p>
          <?php endif; ?>

        <?php elseif( get_row_layout() == 'mark_content' ): ?> 

               <?php if( get_sub_field('content')): ?><!-- if under__the -->
                <div class="mark">
                   <p><?php the_sub_field('content'); ?></p>
                 </div>
          <?php endif; ?>
 

        <?php elseif( get_row_layout() == 'images' ): ?>

    <?php $image = get_sub_field('images'); ?>

    <?php if( !empty( $image ) ): ?>
        <div class="bloc__img"><img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>"></div>
    <?php endif; ?>        
              
           
        <?php elseif( get_row_layout() == 'gallery' ): ?>
        
                  <div class="about__gallery splide">
                <div class="splide__track">
                  <ul class="splide__list">         
     
     
 <?php            
$images = get_sub_field('gallery_img');
if( $images ): ?>

        <?php foreach( $images as $image ): ?>

                    <li class="splide__slide"> <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> </li>
              
        <?php endforeach; ?>

<?php endif; ?>
 
               </ul>
                </div>
              </div>
       
        <?php elseif( get_row_layout() == 'title_and_button' ): ?>

        
              <div class="title_and_button">

  <?php if( get_sub_field('title')): ?><!-- if under__the -->
      <h4><?php the_sub_field('title'); ?></h4>
  <?php endif; ?>
               
      <?php $link = get_sub_field('link_button'); ?>
 
    <?php if( $link ): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self'; ?>

        <a class="bundle" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
          
              </div>

        <?php elseif( get_row_layout() == 'brand_logo' ): ?>
            
            
              <ul class="list__brand">
 <?php            
$images = get_sub_field('brands');
if( $images ): ?>

        <?php foreach( $images as $image ): ?>

                    <li> <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> </li>
              
        <?php endforeach; ?>

<?php endif; ?>
      
      </ul>
       
        <?php elseif( get_row_layout() == 'content_images' ): ?>
        
              <div class="box__images__content">
                <div class="content">
                 
  <?php if( get_sub_field('content')): ?><!-- if under__the -->
    <p><?php the_sub_field('content'); ?></p>
  <?php endif; ?>

                </div>
                
    <?php $image = get_sub_field('images'); ?>

    <?php if( !empty( $image ) ): ?>
                <div class="img__"><img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>"></div>
    <?php endif; ?> 

              </div>

        <?php elseif( get_row_layout() == 'media_mentions' ): ?>
        

    <?php if( have_rows('list') ): ?>
              <ul class="media__list">
        <?php while( have_rows('list') ): the_row();
            // vars
            //$image = get_sub_field('imag');
            //$title = get_sub_field('title');
            // $paragraph = get_sub_field('paragraph');
            //$link = get_sub_field('link');  ?>
               
                <li>
                
                   <?php $image = get_sub_field('images'); ?>

                    <?php if( !empty( $image ) ): ?>
                        <div class="box__img"><img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>"></div>
                    <?php endif; ?>        

                  
                  <div class="navigat">
                       <?php if( get_sub_field('tag_name')): ?><!-- if under__the -->
                    <span class="tag"><?php the_sub_field('tag_name'); ?></span>
                      <?php endif; ?>
                      
                      <?php $file = get_sub_field('file_doc');
                          if( $file ): ?>
                              <a class="download"  href="<?php echo $file['url']; ?>" download><?php // echo $file['filename']; ?></a>
                          <?php endif; ?>

                    
                  </div>
        
                  
                  <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <h4 class="title__"><?php the_sub_field('title'); ?></h4>
  <?php endif; ?>
                </li>

          <?php endwhile; ?>
                </ul>

      <?php endif; ?>
         
        
        
        


        <?php elseif( get_row_layout() == 'our_founder' ): ?>
        
              <div class="founder">
               
    <?php $image = get_sub_field('images'); ?>

    <?php if( !empty( $image ) ): ?>
        <img class="autor" src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
    <?php endif; ?>       
               
               
  <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <h3 class="name"><?php the_sub_field('title'); ?></h3>
  <?php endif; ?>

<?php if( get_sub_field('content')): ?><!-- if under__the -->
    <?php the_sub_field('content'); ?>
  <?php endif; ?>
              </div>
        
        <?php elseif( get_row_layout() == 'section_12' ): ?>
        
        
        <?php elseif( get_row_layout() == 'section_13' ): ?>
        
        <?php elseif( get_row_layout() == 'section_14' ): ?>

   
          <?php endif;
          endwhile;
      endif; ?>
                     
</article>

                    <?php endwhile; ?> <!-- END Repeater withdrawal__methods__5__diamond__list__content -->

                    

                <?php endif; ?> <!-- END Repeater withdrawal__methods__5__diamond__list__content -->


          </div>
        </div>
      </div>
    </section>

          <?php endif;
          endwhile;
      endif; ?>

    <?php if(0){ ?>
    
    <section class="about-us__1 one__">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl9 offset-xl3">
            <article>
              <p class="sub" id="list__1">Spirit and Science</p>
              <h2 class="title">InnerCamp is all about the spirit and science of holistic health</h2>
              <p>At InnerCamp, our focus is on blending the spirit and science of holistic health to build a strong and trustworthy foundation.</p>
              <p>Because of these beliefs, we have a Research Department, to ensure the content of our educational programmes is always up to date and based on scientific study, allowing you to completely relax when embarking on your journey with us.</p>
              <div class="mark">
                <p>Undertake a transformational journey with unique science-powered methodologies alongside like-minded people, enhancing both your personal and professional development.</p>
              </div>
              <div class="about__gallery splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide"><img src="<?= get_template_directory_uri(); ?>/img/about__1.png" alt="image"></li>
                    <li class="splide__slide"><img src="<?= get_template_directory_uri(); ?>/img/about__2.png" alt="image"></li>
                    <li class="splide__slide"><img src="<?= get_template_directory_uri(); ?>/img/about__3.png" alt="image"></li>
                  </ul>
                </div>
              </div>
            </article>
            <article>
              <p class="sub" id="list__2">Life-long Learning</p>
              <h3>Our vision</h3>
              <p>Our vision is a world with well-educated holistic practitioners and people who have the tools to succeed in their every day.</p>
              <h3>Our mission</h3>
              <p>Our mission is to deliver professional holistic education courses and experiences that improve the standard of Breathwork, Tantra and Bodywork teaching worldwide and enable our students to step into their higher selves.</p>
              <h3>Our beliefs</h3>
              <p>Life-long learning is immersed and encouraged in all of our programs, this is what makes them so effective when combined with each other. We nurture our students to recognize the importance and joy of personal growth and professional development so that they are constantly growing and seeking to enhance their perspective.</p>
              <div class="bloc__img"><img src="<?= get_template_directory_uri(); ?>/img/about_img.png" alt="image"></div>
              <p>With a deep passion for Tanta, Bodywork and Breathwork, our drive to help guide you on your journey of self-discovery is unstoppable. We support you every step of the way; whether you choose to partake in a workshop or venture deeper into one of our teacher trainings, we make sure that the InnerCamp community is cultivated, cherished and supported, always.</p>
            </article>
          </div>
        </div>
      </div>
    </section>
    <section class="about-us__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl9 offset-xl3">
            <article>
              <p class="sub" id="list__3">Our Disciplines</p>
              <h2 class="title">We help you harness the power of Breathwork, Tantra and Bodywork to discover your higher self.</h2>
              <p>We offer multiple disciplines such as Breathwork, Tantra, Bodywork, Shamanism, Cacao Ceremony, Energy Work and Holistic Coaching to give you a professional advantage whether you are just starting your career in the holistic field or returning to continue to build upon years of experience.</p>
              <div class="title_and_button">
                <h4>InnerCamp will help you keep moving forward.</h4><a class="bundle" href="javascript:;">Discover our courses</a>
              </div>
            </article>
            <article>
              <p class="sub" id="list__4">Partners</p>
              <h2 class="title">Partners</h2>
              <p>InnerCamp has been awarded the “CMA Registered Training School” status, which means our courses are registered and accredited by The Complementary Medical Association (The CMA) that contributes towards the development of the complementary medical and natural health industry. We are excited to grow our international community of holistic practitioners through The CMA, as well as promote and encourage emotional and spiritual well-being.</p>
              <ul class="list__brand">
                <li><img src="<?= get_template_directory_uri(); ?>/img/brand_1.svg" alt="image"></li>
                <li><img src="<?= get_template_directory_uri(); ?>/img/brand_2.svg" alt="image"></li>
              </ul>
              <p>InnerCamp is a member school of the International Breathwork Foundation. This status acknowledges our achievements in influencing a healthier, more fulfilling, and purposeful life.</p>
              <p>We are awarded with the Holistic Health Specialists of the 2022/2023 Award by the "Prestige Awards"</p>
              <ul class="list__brand">
                <li><img src="<?= get_template_directory_uri(); ?>/img/brand_5.svg" alt="image"></li>
                <li><img src="<?= get_template_directory_uri(); ?>/img/brand_4.svg" alt="image"></li>
              </ul>
            </article>
          </div>
        </div>
      </div>
    </section>
    
       <?php } ?>