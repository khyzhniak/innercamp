<!-- Block 1 -->
<section class="faq__1">
  <?php 
    $desktop_bg = get_field("faq_1_bg_image");
    $mobile_bg = get_field("faq_1_mobile_bg_image");

    if(!empty($desktop_bg)) {?>
      <img src="<?php echo $desktop_bg["url"]; ?>" alt="<?php echo $desktop_bg["alt"]; ?>" class="faq-bg-desktop">
    <?php } else { ?>
      <img src="<?= get_template_directory_uri(); ?>/img/faq/faq-banner.webp" alt="" class="faq-bg-desktop">
    <?php }
    if(!empty($mobile_bg)) { ?>
      <img src="<?php echo $mobile_bg["url"]; ?>" alt="<?php echo $mobile_bg["alt"]; ?>" class="faq-bg-mobile">
    <?php } else { ?>
      <img src="<?= get_template_directory_uri(); ?>/img/faq/faq-bc.webp" alt="" class="faq-bg-mobile">
    <?php }
  ?>
  <div class="container">
    <div class="row">
      <?php 
        $sup_title = get_field("faq_1_sup_titlte");
        $title = get_field("faq_1_title");
        $text = get_field("faq_1_text");

        if(!empty($sup_title)) { ?>
          <p class="sub"><?php echo $sup_title; ?></p>
        <?php }

        if(!empty($title)) { ?>
          <h1 class="faq-title"><?php echo $title; ?></h1>
        <?php }
      ?>
      <div class="faq-description">
        <?php 
          if(!empty($text)):
          echo $text;
          endif;
        ?>
      </div>
    </div>
  </div>
</section>