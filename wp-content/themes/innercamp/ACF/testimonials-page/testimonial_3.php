<!-- Block 3 -->
<section class="testimonial__3">
    <div class="container">
        <div class="row">
            <div class="col m12 s12 l12 xl12">
              <?php 
                $sup_title = get_field("testimonial_3_sup_title");
                $title = get_field("testimonial_3_title");
                $after_title = get_field("testimonial_3_after_title_text");
                $link = get_field("testimonial_3_link");

                if(!empty($sup_title)){?>
                  <p class="sub"><?php echo $sup_title; ?></p>
                <?php }

                if(!empty($title)) { ?>
                    <h2 class="title"><?php echo $title; ?></h2>
                <?php }

                if(!empty($after_title)){
                  echo $after_title;
                }

                if(!empty($link)) { ?>
                  <a class="bundle" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                <?php }
              ?>                
            </div>
        </div>
    </div>
</section>