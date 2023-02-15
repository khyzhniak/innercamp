<!-- Block 2 -->
<section class="faq__2">
  <div class="faq-tabs">
    <div class="tabs-list">
      <?php 
        if(have_rows("faq_2_tabs")):
          $counter = 1;
          while(have_rows("faq_2_tabs")): the_row();
          $tab_name = get_sub_field("faq_2_tab_item");?>
            <button class="tabs-item" name="tab-<?php echo $counter; ?>"><?php echo $tab_name; ?></button>
          <?php 
          $counter++; 
          endwhile;
        endif;
      ?>
    </div>
  </div>
    <div class="container">
        <div class="faq-wrap">
          <?php
           if(have_rows("faq_2_tabs")):
            $counter = 1;
            while(have_rows("faq_2_tabs")): the_row(); ?>
              <div class="faq-content" id="tab-<?php echo $counter; ?>">
                <?php 
                  if(have_rows("faq_2_content")):
                    while(have_rows("faq_2_content")): the_row();
                    $question = get_sub_field("faq_2_question");
                    $answer = get_sub_field("faq_2_answer"); ?>
                    <div class="faq-item">
                      <?php 
                        if(!empty($question) && !empty($answer)){ ?>
                          <button class="faq-questions"><?php echo $question; ?></button>
                      <div class="faq-panel">
                        <?php echo $answer; ?>
                      </div>
                        <?php }
                      ?>
                    </div>                
                  <?php endwhile;
                  endif;
                ?>               
              </div>
            <?php 
            $counter++; 
            endwhile;
          endif;
          ?>
        </div>
    </div>
</section>