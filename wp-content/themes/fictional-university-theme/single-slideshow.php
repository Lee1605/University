<?php
    get_header();
    while(have_posts()) {
        the_post(); 
        ?>
    <div class="hero-slider__slide" style="background-image: url(<?php the_field('slide_background_image');?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center"><?php the_field('slide_title');?></h2>
                <p class="t-center"><?php the_field('slide_sub_title');?></p>
                <p class="t-center no-margin"><a href="<?php the_field('slide_link');?>" class="btn btn--blue"><?php the_field('slide_link_text');?></a></p>
              </div>
            </div>
    </div>
            
            

        
<?php    }
    get_footer();
?>