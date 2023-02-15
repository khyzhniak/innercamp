<!-- Block 7 -->
<section class="home__7">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l6 xl6">
        <?php 
        $sup_title = get_field("home_7_sup_title");
        $title = get_field("home_7_title");
        $text = get_field("home_7_text");
        $link = get_field("home_7_link");
        $img = get_field("home_7_image");

        $filehome7 = get_field('video_file'); 

        if(!empty($sup_title)) { ?>
          <p class="sub"><?php echo $sup_title; ?></p>
        <?php }

        if(!empty($title)){ ?>
          <h2 class="title"><?php echo $title; ?></h2>
        <?php }
        
        if(!empty($text)) {
          echo $text;
        }

        if(!empty($link)) { ?>
          <a class="bundle" href="<?php echo $link["url"] ?>"><?php echo $link["title"]; ?></a>
        <?php }
        ?>
      </div>
      <div class="col m12 s12 l6 xl6">
        <div class="block__img">
        
  
  <?php if( $filehome7 ): ?>
    <?php if(0){ ?> <a href="<?php echo $filehome7['url']; ?>"><?php echo $filehome7['filename']; ?></a> <?php } ?>
        <video playsinline="" autoplay="" muted="" loop="" preload="none">
          <source src="<?php echo $filehome7['url']; ?>" type="video/mp4">
        </video>
  <?php endif; ?>
  
          
       <?php if(!empty($img)) { ?>
            <img class="images" src="<?php echo $img["url"] ?>" alt="<?php echo $img["alt"]; ?>">
          <?php }
          ?>
          
        </div>
      </div>
    </div>
  </div>
</section>
