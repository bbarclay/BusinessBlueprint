<?php
function bb_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {


    	//wp_enqueue_script('jquery'); // Enqueue it!

        /**
         *
         * Minified and concatenated scripts
         *
         *     @vendors     plugins.min,js
         *     @custom      scripts.min.js
         *
         *     Order is important
         *
         */
        //wp_deregister_script('jquery');
        wp_register_script('bb_vendorsJs', get_stylesheet_directory_uri() . '/assets/js/vendors.min.js', array(), '1.0.0', true); // Custom scripts
        wp_enqueue_script('bb_vendorsJs'); // Enqueue it!

        wp_register_script('bb_customJs', get_stylesheet_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true); // Custom scripts
        wp_enqueue_script('bb_customJs'); // Enqueue it!

    }

}


function bb_styles()
{

    /**
     *
     * Minified and Concatenated styles
     *
     */
    wp_deregister_style('cascade');
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_register_style('bb_style', get_stylesheet_directory_uri() . '/style.min.css', array('parent-style'), wp_get_theme()->get('Version'));
    wp_enqueue_style('bb_style'); // Enqueue it!

}



function bb_enqueue_comments_reply() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}


/*
*  Deregister css files 
*
*/

function bb_deregister_javascript() {
    if ( ! is_page( 'contact-us' ) ) {
        wp_deregister_script( 'contact-form-7' );
    }
    if( ! is_page( 'testimonials' ) ) {
		wp_deregister_script( 'magicdust-testimonials' );
    }
}



add_action( 'wp_enqueue_scripts', 'bb_styles', 11);
add_action( 'wp_enqueue_scripts', 'bb_scripts');
add_action( 'wp_enqueue_scripts', 'bb_enqueue_comments_reply' );
add_action( 'wp_print_scripts', 'bb_deregister_javascript');


add_action( 'wp_print_styles', 'my_deregister_javascript', 9999 );

function my_deregister_javascript() 
 { 
    if ( is_front_page() ) 
      {
        
        wp_deregister_style( 'speechkit' );
        wp_deregister_style( 'cff' );
        wp_deregister_style( 'contact-form-7' );
        wp_deregister_style( 'symple_shortcode_styles' );
        wp_deregister_style( 'mashsb-styles' ); 
        wp_deregister_style( 'fbmsg-css' ); 
        wp_deregister_style( 'mashnet-styles' ); 
        wp_deregister_style( 'mashnet' );
        wp_deregister_style( 'page-list-style' );
      } 
 } 