<?php
$query_args = array(
  'post_type' => 'team_member',
  'posts_per_page' => -1,
  'post_status' => 'publish'
);
$query = new WP_Query($query_args);
if ($query->have_posts()) {
  $counter = 1;
  while ($query->have_posts()) {
    $query->the_post();
    $coach_id = get_the_id();
    ?>
    <div class="mobile-coach-item left-menu-1" id="mobile-coach-item-<?php echo $counter; ?>">
      <button class="close"><img src="<?= get_template_directory_uri(); ?>/img/team/close-img.svg" alt=""></button>
      <div class="mobile-coach-item-wrap">
        <div class="coach-info-mobile">
          <?php echo get_the_post_thumbnail(); ?>
          <h2 class="title-mobile"><?php the_title(); ?></h2>
        </div>
        <div class="categories-mobile">
          <?php
          if (have_rows('tags_list', $coach_id)) {
            while (have_rows('tags_list', $coach_id)) {
              the_row();
              ?>
              <a href="#" class="tag"><?php the_sub_field('single_tag'); ?></a>
              <?php
            }
          }
          ?>
        </div>

        <div class="mobile-coach-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    <?php
    $counter++;
  }
}
?>

<section class="team__2">
  <div class="container">
    <div class="row">
      <div class="team-nav">
        <div class="team-nav-wrap">
          <nav>
            <h2 class="team-nav-title">InnerCamp Team</h2>
            <ul>
              <?php
              if ($query->have_posts()) {
                $counter = 1;
                while ($query->have_posts()) {
                  $query->the_post();
                  ?>
                  <li><a href="#team-member-<?php echo $counter; ?>"><?php the_title(); ?></a></li>
                  <?php
                  $counter++;
                }
              }
              ?>
            </ul>
          </nav>
        </div>
      </div>
      <div class="coach-list">
        <?php
        if ($query->have_posts()) {
          $counter = 1;
          while ($query->have_posts()) {
            $query->the_post();
            $coach_id = get_the_id();
            ?>
            <div class="coach-item" id="team-member-<?php echo $counter; ?>">
              <div class="coach-content">
                <h2 class="coach-name"><?php the_title(); ?></h2>
                <div class="categories">
                  <?php
                  if (have_rows('tags_list', $coach_id)) {
                    while (have_rows('tags_list', $coach_id)) {
                      the_row();
                      ?>
                      <a href="#"><?php the_sub_field('single_tag'); ?></a>
                      <?php
                    }
                  }
                  ?>
                </div>
                <div class="coach-description">
                  <?php the_content(); ?>
                </div>
              </div>
              <div class="coach-photo">
                <?php echo get_the_post_thumbnail(); ?>
                <div class="single-category">InnerCamp founder</div>
              </div>
            </div>
            <?php
            $counter++;
          }
        }
        ?>
      </div>
    </div>
  </div>
</section>
