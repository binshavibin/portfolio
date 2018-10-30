<?php
  get_header();
?>

<?php if (have_posts()) :
        while(have_posts()): the_post();
           
            ?>
            <h5> <?php the_title(); ?></h5>
            <p> <?php the_content(); ?></p>
            <div>
              
              <?php  echo get_the_post_thumbnail($post->ID,'large'); ?>
            </div>
            <br />
            <br />
            <?php 
            $notToDisplay = array('_edit_last','_edit_lock','_thumbnail_id');
            $custom_fields = get_post_custom($post->ID); // echo '<pre>'; print_r($custom_fields);die();
            $my_custom_field = $custom_fields['my_custom_field'];
            foreach ( $custom_fields as $key => $value ) {
              if(!in_array($key, $notToDisplay))
                  echo '<p>'.$key . " :  " . $value[0] . "</p>";
            }
            ?>



<?php
    endwhile;
      endif;
   get_footer();
?>