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


//  function zenflow5_theme_add_editor_styles() {
// 	add_editor_style( get_theme_file_uri( '/options-generated-bootstrap-stylesheet.css' ) );
//   }
//   add_action( 'admin_init', 'zenflow5_theme_add_editor_styles' );


//   function swsg_theme_add_editor_styles() {
//     // add_editor_style( get_template_directory_uri() . '/build/admin/style-editor.css' );
//     add_editor_style( get_theme_file_uri( '/options-generated-bootstrap-stylesheet.css' )  );
// }
// add_action( 'admin_init', 'swsg_theme_add_editor_styles', 20 );


// add_action( 'admin_init', 'generate_child_setup' );
// function generate_child_setup() 
// {
// 	add_editor_style( get_stylesheet_directory_uri() . '/options-generated-bootstrap-stydddlesheet.css' );
// }



// add_theme_support('editor-styles');
// /**
//  * Registers an editor stylesheet for the theme.
//  */
// function wpdocs_theme_add_editor_styles() {
//     add_editor_style( '/options-generated-bootstrap-stylesheet.css' );
// }
// add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );
#
/**
 * Registers an editor stylesheet for the theme.
 */
// function zenflow5_add_editor_styles() {
//     add_editor_style( get_template_directory_uri() . '/options-generated-bootstrap-stylesheet.css' );
// }
// add_action( 'admin_init', 'zenflow5_add_editor_styles', 20 );


function zenflow5_add_editor_styles() {
    add_editor_style( get_stylesheet_directory_uri() . '/options-generated-bootstrap-stylesheet.css' );
}
add_action( 'admin_init', 'zenflow5_add_editor_styles', 20 );


?>