<?php
  get_header();
  $condition = array('tag'=>$tag);
  $tagPosts = new WP_Query($condition);
  if($tagPosts->have_posts()):
  	while($tagPosts->have_posts() ): $tagPosts->the_post();  ?>
  		  <div class="row">
              <div class="col-6">
                  <h5><a href="<?php   echo get_permalink($post->ID);?>"><?php  echo $post->post_title; ?></a></h5>
                  <p><?php  echo substr($post->post_content, 0,100).'..'; ?></p>
              </div>
              <div class="col-6"><a href="<?php  echo get_permalink($post->ID);?>"><?php  echo get_the_post_thumbnail($post->ID,'medium');
              ?></a></div>
            </div>
  		<?php

  	endwhile;
  endif;

?>



<?php 
   get_footer();
?>