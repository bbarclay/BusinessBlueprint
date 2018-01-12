<?php


function zero_body_classes( $classes ) {
 

    if ( is_front_page() ) {
     
        $classes[] = 'front-page';
         
    }
    else if ( is_page('blueprint-reunion-tour') ) {
    	$classes[] = 'reunion-tour-page';
    }
    else if ( is_page('charity') ) {
        $classes[] = 'charity-page';
    } 
    else if ( is_page('apply-now') ) {
        $classes[] = 'apply-page';
    } 
    else if ( is_page('book-bundles') ) {
        $classes[] = 'woocommerce';
    }  
    else {
        $classes[] = 'sub-page';
    }
     
    return $classes;
    
    
}

add_filter( 'body_class','zero_body_classes' );