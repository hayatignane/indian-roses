<?php if( ! defined( 'ABSPATH' ) ) exit;

/*******************************
* Enqueue scripts and styles.
********************************/
 
function photo_studio_anima_scripts() {
	if(!get_theme_mod('my_style__header_animation')) {
		wp_enqueue_style( 'super-anima-css', get_template_directory_uri() . '/include/letters/anime.css');
		wp_enqueue_script( 'super-anima-js', get_template_directory_uri() . '/include/letters/anime.min.js', array( 'jquery' ), true);
		wp_enqueue_script( 'super-anime-custom-js', get_template_directory_uri() . '/include/letters/anime-custom.js', array( 'jquery' ), '', true);
	}
		
}

add_action( 'wp_enqueue_scripts', 'photo_studio_anima_scripts' );


