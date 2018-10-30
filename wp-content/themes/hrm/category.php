<?php
  get_header();
?>

<?php
$counter = 0;

 if (have_posts()) :
        while(have_posts()): the_post();

           $category =  get_the_category($post->ID);
           $counter++;
            if($category[0]->name == 'Projects') { 
            ?>
            
            <div class="row">
              <div class="col-6">
                  <h5><a href="<?php   echo get_permalink($post->ID);?>"><?php  echo $post->post_title; ?></a></h5>
                  <p><?php  echo substr($post->post_content, 0,100).'..'; ?></p>
              </div>
              <div class="col-6"><a href="<?php  echo get_permalink($post->ID);?>"><?php  echo get_the_post_thumbnail($post->ID,'medium');
              ?></a></div>
            </div>
                   <?php 
                 } else { if($counter ==1 ) echo '<div class="row">';
                  ?> 
                  <?php  if($counter % 3 == 0 ) { ?>
                    </div> <div class="row"> <?php } ?>
                       <div class="col-4"><?php  echo get_the_post_thumbnail($post->ID,'medium');
              ?>
                       
                     </div>
                  <?php 



                 }

        endwhile;
      endif;

 ?>

<?php
   get_footer();
?>