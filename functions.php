<?php

function fse_child_styles() {
	wp_enqueue_style( 'fse-child-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'fse_child_styles' );


//Dequeue the generated parent stylesheet
// function child_enqueue_styles() {

// 	// dequeue the Twenty Twenty-One parent style
// 	wp_dequeue_style( 'zenflow5_style_bs_gen' );
    
// 	// Theme stylesheet
// 	//wp_enqueue_style( 'child-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );

// }
// add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 11 );


function enqueue_customizer_scssphp_styles() {
	//A custom generated SCSSPHP style sheet, this files exists & is written to by customizer
	wp_enqueue_style( 'wp-zenflow-child-bs-theme-options', get_stylesheet_directory_uri() . '/options-generated-bootstrap-stylesheet.css' );
 }
 
 //Import parent style sheets
 add_action( 'wp_enqueue_scripts', 'enqueue_customizer_scssphp_styles', 4);

?>