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
            $tags = get_the_tags($post->ID);
            if(!empty($tags)) {
                foreach ($tags as $key => $value) {
                   echo '<a href="'.get_tag_link($value->term_id).'"><span class="badge badge-pill badge-success">'.$value->name.'</span></a>';
                }
            }
         
            ?>



<?php
    endwhile;
      endif;
   get_footer();
?>