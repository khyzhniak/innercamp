<!-- Block 5 -->
<section class="home__5">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <?php 
          $sup_title = get_field("home_5_sup_title");
          $title = get_field("home_5_title");
          $text = get_field("home_5_sub_title_text");

          if(!empty($sup_title)) {?>
            <p class="sub"><?php echo $sup_title; ?></p>
          <?php }

          if(!empty($title)) { ?>
            <h2 class="title"><?php echo $title; ?></h2>
          <?php }

          if(!empty($text)) {
            echo $text;
          }
        ?> 
      </div>
    </div>
  </div>
</section>