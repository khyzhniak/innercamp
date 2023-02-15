<!--  Block 9 -->
<?php 
  $bg_img = get_field("home_9_bg_image");
?>
<section class="home__9" style="background: url(<?php if(!empty($bg_img)) {echo $bg_img['url'];} else { echo get_template_directory_uri() .'/img/bg.webp';} ?>) repeat 50%;">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <?php 
          $title = get_field("home_9_title");
          $link = get_field("home_9_link");

          if(!empty($title)) { ?>
            <h2 class="title"><?php echo $title; ?></h2>
          <?php }

          if(!empty($link)) { ?>
            <a class="bundle" href="<?php echo $link["url"]; ?>"><?php echo $link["title"]; ?></a>
          <?php }
        ?>
      </div>
    </div>
  </div>
</section>