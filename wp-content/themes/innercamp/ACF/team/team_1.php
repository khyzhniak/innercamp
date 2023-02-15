<!-- Block 1 -->
<?php 
	$section_backrgound_image = get_field('hero_background_image');
?>
<section class="team__1" style="background: url('<? if($section_backrgound_image){ echo $section_backrgound_image["url"]; } else{ echo get_template_directory_uri(); "/img/team/team-banner.webp'"; }?>') no-repeat top/cover">
    <div class="container">
        <div class="row">
        	<?php 
        		if(get_field('hero_subtitle')){
        			?>
        				<p class="sub">Coaches</p>
        			<?php
        		}
        		if(get_field('hero_title')){
        			?>
        				<h1 class="title">Get to know the team that will guide you to find your true potential and put it to good use.</h1>
        			<?php
        		}
        	?>
        </div>
    </div>
</section>
