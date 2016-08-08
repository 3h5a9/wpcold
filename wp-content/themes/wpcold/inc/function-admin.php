<?php

// Add Theme Admin Page
function add_theme_admin_page(){
   
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page('wpcold_option', 'WpCold', 'manage_options', 'wpcold_option', 'wpcold_create_option_page', get_template_directory_uri() . '/img/sunset-icon.png', 110 );
   
  // add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );
  add_submenu_page('wpcold_option', 'WPcold Theme Option', 'General', 'manage_options', 'wpcold_option', 'wpcold_create_option_page' );
   
  add_submenu_page('wpcold_option', 'WPcold CSS Option', 'CSS Settings', 'manage_options', 'wpcold_option_css', 'wpcold_theme_settings_page');
   
  //  Active Custom Settings
  
   
}

add_action( 'admin_menu', 'add_theme_admin_page' );

function wpcold_create_option_page(){
  // Generate Admin Page
  require_once(get_template_directory() . '/inc/templates/wpcold-admin.php');

}

function wpcold_theme_settings_page (){
  // Generate Admin SubPages
}
?>