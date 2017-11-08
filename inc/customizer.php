<?php

add_action( 'customize_register', 'themex_add_css_section', 15 );
/**
 * Add the additional CSS section, introduced in 4.7, from the Customizer.
 * @param $wp_customize WP_Customize_Manager
 */
function themex_add_css_section( $wp_customize ) {
	$wp_customize->add_section( 'custom_css' );
}
