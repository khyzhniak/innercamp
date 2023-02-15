<!-- Block 1 -->
<?php 
    $bg_img = get_field("testimonial_1_background_image");
    $title = get_field("testimonial_1_title");
    $text = get_field("testimonial_1_text");
?>
<section class="testimonial__1" style="background: url(<?php if(!empty($bg_img)) {echo $bg_img['url'];} else { echo get_template_directory_uri() .'/img/testimonials/testimonial-bg.webp';} ?>) no-repeat top/cover ;">
    <div class="container">
        <div class="row">
            <?php 
                if(!empty($title)) { ?>
                    <h1 class="title"><?php echo $title; ?></h1>
                <?php }
                if(!empty($text)) { ?>
                    <div class="testimonial-description">
                        <?php echo $text; ?>
                    </div>
                <?php }
            ?>            
        </div>
    </div>
</section>