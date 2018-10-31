<?php
  get_header();

  if(have_posts()) :
  	while(have_posts()) :the_post();  ?>

  		 <h5> <?php the_title(); ?></h5>
            <p> <?php the_content(); ?></p>
            <div>
              
              <?php  echo get_the_post_thumbnail($post->ID,'large'); ?>
            </div>
            <?php
  	endwhile;
  	endif;

?>



<?php 
   get_footer();
?>