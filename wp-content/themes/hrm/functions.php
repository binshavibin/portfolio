<?php
show_admin_bar(true);
 	
 	add_action('after_setup_theme','my_theme_support');
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