<?php
show_admin_bar(true);
 	
 	add_action('after_setup_theme','my_theme_support'); 	
    if(function_exists('register_sidebar')) {
    	register_sidebar( array(
        'name'          => 'Home page sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

    }
   if(function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name' => 'Header Advt',
            'id' =>'header-advt-2',
            'before_widget'=>'',
            'after_widget'=>'',
            'before_title'=>'',
            'after_title'=>''
        )
    );
   }

   add_action('widgets_init','wp_advertise_widget');
   function wp_advertise_widget() 
   {
    register_widget('Advertisement');
   }

   Class Advertisement extends WP_Widget {
        function __construct() {
            parent::__construct(false,'Advertisement widget');
            $widget_opt = array('classname'=>'widget Advertisement','description' =>'Advertisement');
            $this->WP_Widget('Advertisement','Advertisement',$widget_opt);

        } 
        function widget($args, $instance) {
          
           if(isset($instance['content']))  echo  $instance['content'];
        } 
        function form( $instance ) {
            if(isset($instance['content'])) {
                $content = esc_attr($instance['content']);
            } else {
                $content = '';
            } 
            ?>
            <label for="cddf"><?php  _e('content') ?> </php>
            <textarea id="<?php echo $this->get_field_id('content');?>"  name="<?php echo $this->get_field_name('content');?>"><?php echo $content;?></textarea> 
            <?php 
            

        } 
        function update( $new_instance, $old_instance ) {
           $instance = array();
           $instance['content'] = !empty($new_instance['content']) ? $new_instance['content'] :'';
           return $instance;
        }
   }


// Register and load the widget
function wpb_load_widget() {
    register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
 

  //  add_action('widges_init','homeslider_widget');
    Class wpb_widget extends WP_Widget{
    	function __construct() {
    		parent::__construct(
                'wpb_widget',
                __('Home Page Slider','wpb_widget_slider'),
                array('description'=> __('test widget','wpb_widget_slider' ) ,)
            ); 
    	}
    	function widget($args, $instance) {
    		$category = isset($instance['category']) ? $instance['category'] : '';
            $number = isset($instance['number']) ? $instance['number'] : '3';
            $posts = get_posts(array('category'=>$category,'posts_per_page' => $number));
            
            if (!empty($posts)) {
                echo '<div class="carousel-inner">';
                foreach ($posts as $key => $value) {
                    if($key == 0) $class='active';else $class='';
                    $image  = get_the_post_thumbnail($value->ID,'large',array('class'=>'d-block w-100')); 
                 echo   '<div class="carousel-item '.$class.'">'.$image.'</div>';
                }
                echo '<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>';
            }
           // return  $sliderlist;
            //echo '<pre>';print_r($posts);
    	} 
    	function form( $instance ) {
    		
    		if(isset($instance['category'])) {
    			$category = $instance['category'];
    		} else {
                $category = __('Category','wpb_widget_slider');
            }
                if(isset($instance['number'])) {
                $number = $instance['number'];
            } else {
                $number = __('number','wpb_widget_slider');
            }
    		?>
    			<label for ="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e('category') ;?></label>
    			<input type="text" name="<?php echo $this->get_field_name( 'category' ); ?>" id="<?php echo $this->get_field_id( 'category' ); ?>" value="<?php  echo esc_attr($category);?>">
                <label for ="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e('number') ;?></label>
                <input type="text" name="<?php echo $this->get_field_name( 'number' ); ?>" id="<?php echo $this->get_field_id( 'number' ); ?>" value="<?php  echo esc_attr($number);?>">
    		<?php 

    	} 
    	function update( $new_instance, $old_instance ) {
    		$instance = array();
    		$instance['category'] = !empty($new_instance['category']) ? esc_attr($new_instance['category']) : '';
            $instance['number'] = !empty($new_instance['number']) ? esc_attr($new_instance['number']) : '';
    		return $instance; 
    	}
    }
 	
 	function my_theme_support() {
 		add_theme_support('menus');
 		add_theme_support('post-thumbnails');	
 		add_theme_support('post-meta');
 	}
 	function getNavMenu()
 	{
 		$navItems = wp_get_nav_menu_items(16);
 		$itemList = '';
 		if(!empty($navItems)) {
 			foreach ($navItems as $key => $value) {
 				$itemList .= '<a class="nav-link" href="'.$value->url.'">'.$value->title.'</a>';
 			}
 		}
 		return $itemList;
 	}


?>