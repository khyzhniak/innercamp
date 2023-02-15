<!-- Block 1 -->
<?php 
  $bg_img = get_field("home_1_bg_image");
  $filehome1 = get_field('video_file'); 
  ?>
<section class="home__1 <?php if( $filehome1 ): ?>black<?php endif; ?>" style="background: url(<?php if(!empty($bg_img)) {echo $bg_img['url'];} else { echo get_template_directory_uri() .'/img/bg-tablet@1x.webp';} ?>) no-repeat top/cover ;">

  <div class="container">
    <div class="row">
      <div class="col m12 s12 l3 xl3">
        <?php 
          $link = get_field('hero_training_links');
          $text = get_field('hero_section_description');

          if($link) { ?>
            <a class="bundle" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
          <?php }

          if(!empty($text)) {
            echo $text;
          }
        ?>
      </div>
      <div class="col m12 s12 l7 xl7">
        <?php 
          $title = get_field('hero_section_title');
          if(!empty($title)) { ?>
            <h1 class="title"><?php echo $title; ?></h1>
          <?php }
        ?>
      </div>
      <div class="col m12 s12 l2 xl2"><a class="scroll" href="#home_section_2"><?php echo __('Scroll', 'innercamp'); ?></a></div>
    </div>
  </div>
  
  <?php if( $filehome1 ): ?>
    <?php if(0){ ?> <a href="<?php echo $filehome1['url']; ?>"><?php echo $filehome1['filename']; ?></a> <?php } ?>
        <video playsinline="" autoplay="" muted="" loop="" preload="none">
          <source src="<?php echo $filehome1['url']; ?>" type="video/mp4">
        </video>
  <?php endif; ?>
  
</section>