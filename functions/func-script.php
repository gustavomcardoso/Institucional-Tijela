<?php
/**
 * Script functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Enqueue theme scripts
 */
function gulp_wp_theme_scripts() {
	/**
	 * Set a script handle prefix based on theme name.
	 * Note that this should be the same as the `themePrefix` var set in your Gulpfile.js.
	 * Enqueue common scripts.
	 */
	// $theme_handle_prefix = 'theme-name';
	// wp_enqueue_script( $theme_handle_prefix . '-scripts', get_template_directory_uri() . '/assets/js/' . $theme_handle_prefix . '.min.js', array( 'jquery' ), '1.0.0', true );

	wp_register_script('jquery' , 'https://code.jquery.com/jquery-3.2.1.min.js', array(), 1, 1, 1);
	wp_enqueue_script('jquery');
	
	wp_register_script('bootstrap' , 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), 1, 1, 1);
	wp_enqueue_script('bootstrap');
	
	wp_register_script('validate' , 'http://jqueryvalidation.org/files/dist/jquery.validate.js', array(), 1, 1, 1);
	wp_enqueue_script('validate');

	wp_register_script('parallax' , 'https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js', array(), 1, 1, 1);
	wp_enqueue_script('parallax');

	wp_register_script('custom' , get_template_directory_uri() . '/src/js/custom.js' , array(), 1, 1, 1);
	wp_enqueue_script('custom'); 

}

add_action( 'wp_enqueue_scripts', 'gulp_wp_theme_scripts' );