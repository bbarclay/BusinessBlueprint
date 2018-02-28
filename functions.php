<?php
/**
 * BusinessBlueprint functions and definitions
 *
 * @package BusinessBlueprint
 */

/* ============================
  Setup
============================= */


/* ============================
  Include
============================= */
require_once( get_stylesheet_directory() . '/inc/init.php');
require_once( get_stylesheet_directory() . '/inc/enqueue.php');
require_once( get_stylesheet_directory() . '/inc/template-tags.php');
require_once( get_stylesheet_directory() . '/inc/customizer.php');
require_once( get_stylesheet_directory() . '/inc/bootstrap-navwalker.php');



function add_login_logout_register_menu( $items, $args ) {
 if ( $args->theme_location != 'navbar' ) {
 return $items;
 }
 
 if ( is_user_logged_in() ) {
 	$items .= '<li><a href="' . wp_logout_url() . '">' . __( 'Log Out' ) . '</a></li>';
 } 
 return $items;
}
 
add_filter( 'wp_nav_menu_items', 'add_login_logout_register_menu', 199, 2 );



