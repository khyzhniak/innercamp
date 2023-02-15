<!-- Block 5 -->
<?php
  $bg_img = get_field("testimonial_5_background_image");
?>
<section class="testimonial__5" style="background: url(<?php if(!empty($bg_img)) {echo $bg_img['url'];} else { echo get_template_directory_uri() .'/img/testimonials/img/testimonials/testimonial-bottom-banner.webp';} ?>) no-repeat top/cover ;" >
<div class="container">
    <div class="row">
        <div class="title">Find more reviews at <a href="">Google reviews</a> or <a href="">Trustpilot</a> </div>
    </div>
</div>
</section>