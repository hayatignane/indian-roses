<?php if( ! defined( 'ABSPATH' ) ) exit;
/**
 * Enqueue scripts and styles.
 */
function my_style__animations_scripts() {	
	wp_enqueue_style( 'style-aos-css', get_template_directory_uri() . '/include/animations/aos.css' );
	wp_enqueue_script( 'style-aos-js', get_template_directory_uri() . '/include/animations/aos.js', array(), '', true);
	wp_enqueue_script( 'style-aos-options-js', get_template_directory_uri() . '/include/animations/aos-options.js', array(), '', true);
}
add_action( 'wp_enqueue_scripts', 'my_style__animations_scripts' );
function  my_style__animation ($animation) {
	if ( get_theme_mod( $animation ) != "none" and get_theme_mod( $animation ) != ""  )  {
		return "data-aos-delay='100'"." ".
		"data-aos-duration='500'"." ".
		"data-aos='".esc_html ( get_theme_mod( $animation ) )."'";
	}
	if ( get_theme_mod( $animation  ) == "" ) {
		return "data-aos-delay='100'"." ".
		"data-aos-duration='500'"." ".
		"data-aos='slide-right'";		
	}
}
function my_style__animations() {
	$array = array(
				'' => esc_attr__( 'Default', 'my-style' ),			
				'none' => esc_attr__( 'Deactivate Animation', 'my-style' ),			
				'fade' => esc_attr__( 'fade', 'my-style' ),
				'fade-up' => esc_attr__( 'fade-up', 'my-style' ),
				'fade-down' => esc_attr__( 'fade-down', 'my-style' ),
				'fade-left' => esc_attr__( 'fade-left', 'my-style' ),
				'fade-right' => esc_attr__( 'fade-right', 'my-style' ),
				'fade-up-right' => esc_attr__( 'fade-up-right', 'my-style' ),
				'fade-up-left' => esc_attr__( 'fade-up-left', 'my-style' ),
				'fade-down-right' => esc_attr__( 'fade-down-right', 'my-style' ),
				'fade-down-left' => esc_attr__( 'fade-down-left', 'my-style' ),
				'flip-up' => esc_attr__( 'flip-up', 'my-style' ),
				'flip-down' => esc_attr__( 'flip-down', 'my-style' ),
				'flip-left' => esc_attr__( 'flip-left', 'my-style' ),
				'flip-right' => esc_attr__( 'flip-right', 'my-style' ),
				'slide-up' => esc_attr__( 'slide-up', 'my-style' ),
				'slide-down' => esc_attr__( 'slide-down', 'my-style' ),
				'slide-left' => esc_attr__( 'slide-left', 'my-style' ),
				'slide-right' => esc_attr__( 'slide-right', 'my-style' ),
				'zoom-in' => esc_attr__( 'zoom-in', 'my-style' ),
				'zoom-in-up' => esc_attr__( 'zoom-in-up', 'my-style' ),
				'zoom-in-down' => esc_attr__( 'zoom-in-down', 'my-style' ),
				'zoom-in-left' => esc_attr__( 'zoom-in-left', 'my-style' ),
				'zoom-in-right' => esc_attr__( 'zoom-in-right', 'my-style' ),
				'zoom-out' => esc_attr__( 'zoom-out', 'my-style' ),
				'zoom-out-up' => esc_attr__( 'zoom-out-up', 'my-style' ),
				'zoom-out-down' => esc_attr__( 'zoom-out-down', 'my-style' ),
				'zoom-out-left' => esc_attr__( 'zoom-out-left', 'my-style' ),
				'zoom-out-right' => esc_attr__( 'zoom-out-right', 'my-style' ),
				);
	return $array;
}
		function my_style__sanitize_animations( $input ) {
			$valid = my_style__animations();
			if ( array_key_exists( $input, $valid ) ) {
				return $input;
			} else {
				return '';
			}
		}
function my_style__animations_customize_register( $wp_customize ) {
		$wp_customize->add_panel( 'my_style__panel_animations' , array(
			'title'       => __( 'Animations', 'my-style' ),
			'priority'   => 1,
		) );
/************************************
* Animation Articles
************************************/
		$wp_customize->add_section( 'my_style__animations_section_articles' , array(
			'title'       => __( 'Animation Articles', 'my-style' ),
			'panel'       => 'my_style__panel_animations',
			'priority'   => 64,
		) );
		$wp_customize->add_setting( 'my_style__articles_animation', array (
			'sanitize_callback' => 'my_style__sanitize_animations',
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'my_style__articles_animation', array(
			'label'    => __( 'Animation Articles', 'my-style' ),
			'section'  => 'my_style__animations_section_articles',
			'settings' => 'my_style__articles_animation',
			'type'     =>  'select',
            'choices'  => my_style__animations(),		
		) ) );
}
add_action( 'customize_register', 'my_style__animations_customize_register' );