<?php

/**
 * Enqueue child styles
 */
function fse_child_styles() {
	
    wp_enqueue_style( 'zenflow5-child-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'fse_child_styles' );


/**
 * A custom generated SCSSPHP style sheet, this files exists & is written to by customizer
 */
function enqueue_customizer_scssphp_styles() {

    // Use the parent Themes version for caching
    $parent_version =  wp_get_theme( 'zenflow5' )->get( 'Version' ); // Specify the parent theme name here
	
	wp_enqueue_style( 
        'wp-zenflow-child-bs-theme-options', 
            get_stylesheet_directory_uri() . '/options-generated-bootstrap-stylesheet.css', 
            array(), 
            $parent_version 
        );

}
add_action( 'wp_enqueue_scripts', 'enqueue_customizer_scssphp_styles', 4);



/**
 * Registers an editor stylesheet for the theme.
 */
function zenflow5_add_editor_styles() {
    
    add_editor_style( get_stylesheet_directory_uri() . '/options-generated-bootstrap-stylesheet.css' );

}
add_action( 'admin_init', 'zenflow5_add_editor_styles', 20 );



/**
 * Registers the editor stylesheet (Child Themes CSS: style.css)
 */
function enqueue_child_theme_editor_style() {
    
    // Get the child theme stylesheet URL
    $child_theme_css_url = get_stylesheet_directory_uri() . '/style.css';

    // Enqueue the child theme stylesheet for the editor
    wp_enqueue_style('child-theme-editor-style', $child_theme_css_url);

}
add_action('enqueue_block_editor_assets', 'enqueue_child_theme_editor_style');


?>