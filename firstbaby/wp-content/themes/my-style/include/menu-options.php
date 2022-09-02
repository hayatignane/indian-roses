<?php if( ! defined( 'ABSPATH' ) ) exit;
function my_style__customize_register_menu( $wp_customize ) {

	function my_style_menu_position_sanitize_position( $input ) {
		$valid = array(
				'left' => esc_attr__( 'Left', 'my-style' ),
				'right' => esc_attr__( 'Right', 'my-style' ),
				'center' => esc_attr__( 'Center', 'my-style' ),
		);
		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
			return '';
		}
	}
	
		$wp_customize->add_section( 'seos_menu_section' , array(
			'title'       => __( 'Menu Options', 'my-style' ),
			'priority'    => 2,	
			//'description' => __( 'Social media buttons', 'seos-white' ),
		) );
		
		$wp_customize->add_setting( 'hide_menu', array (
            'default' => '',		
			'sanitize_callback' => 'my_style__sanitize_checkbox',
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hide_menu', array(
			'label'    => __( 'Hide Menu', 'my-style' ),
			'section'  => 'seos_menu_section',
			'priority'    => 1,				
			'settings' => 'hide_menu',
			'type' => 'checkbox',
		) ) );
		$wp_customize->add_setting( 'hide_menu_slow', array (
            'default' => true,		
			'sanitize_callback' => 'my_style__sanitize_checkbox',
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hide_menu_slow', array(
			'label'    => __( 'Activate Scroll Menu Slide', 'my-style' ),
			'section'  => 'seos_menu_section',
			'priority'    => 1,				
			'settings' => 'hide_menu_slow',
			'type' => 'checkbox',
		) ) );
		
		$wp_customize->add_setting( 'menu_padding', array (
			'sanitize_callback' => 'absint',
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'menu_padding', array(
			'section'  => 'seos_menu_section',
			'priority'    => 1,
			'settings' => 'menu_padding',
			'label'       => __( 'Menu Padding', 'my-style' ),			
			'type'     =>  'number',
			'input_attrs'     => array(
				'min'  => 1,
				'max'  => 100,
				'step' => 1,
			),
		) ) );
		
		$wp_customize->add_setting( 'menu_font_size', array (
			'sanitize_callback' => 'absint',
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'menu_font_size', array(
			'section'  => 'seos_menu_section',
			'priority'    => 1,
			'settings' => 'menu_font_size',
			'label'       => __( 'Menu Font Size', 'my-style' ),			
			'type'     =>  'number',
			'input_attrs'     => array(
				'min'  => 11,
				'max'  => 30,
				'step' => 1,
			),
		) ) );
		
		$wp_customize->add_setting( 'hide_arrow', array (
            'default' => '',		
			'sanitize_callback' => 'my_style__sanitize_checkbox',
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hide_arrow', array(
			'label'    => __( 'Hide Sub Menu Arrow.', 'my-style' ),
			'section'  => 'seos_menu_section',
			'priority'    => 1,				
			'settings' => 'hide_arrow',
			'type' => 'checkbox',
		) ) );

		$wp_customize->add_setting( 'menu_position', array (
			'sanitize_callback' => 'my_style_menu_position_sanitize_position',
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'menu_position', array(
			'label'    => __( 'Menu Position', 'my-style' ),
			'section'  => 'seos_menu_section',		
			'settings' => 'menu_position',
			'type'     =>  'select',
			'priority'    => 2,			
            'choices'  => array(
				'left' => esc_attr__( 'Left', 'my-style' ),
				'right' => esc_attr__( 'Right', 'my-style' ),
				'center' => esc_attr__( 'Center', 'my-style' ),
            ),
			'default'  => 'center'	
		) ) );
		
   	    $wp_customize->add_setting( 'menu_color', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_color', array(
			'label'    => __( 'Menu Color', 'my-style' ),
			'priority' => 14,
			'section'  => 'seos_menu_section',
			'settings' => 'menu_color',
		) ) );

   	    $wp_customize->add_setting( 'menu_hover_color', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_hover_color', array(
			'label'    => __( 'Menu Hover Color', 'my-style' ),
			'priority' => 14,
			'section'  => 'seos_menu_section',
			'settings' => 'menu_hover_color',
		) ) );
		
   	    $wp_customize->add_setting( 'menu_sub_color', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_sub_color', array(
			'label'    => __( 'Sub Menu Color', 'my-style' ),
			'priority' => 14,
			'section'  => 'seos_menu_section',
			'settings' => 'menu_sub_color',
		) ) );
		
   	    $wp_customize->add_setting( 'menu_sub_hover_color', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_sub_hover_color', array(
			'label'    => __( 'Sub Menu Hover Color', 'my-style' ),
			'priority' => 14,
			'section'  => 'seos_menu_section',
			'settings' => 'menu_sub_hover_color',
		) ) );		
   	    $wp_customize->add_setting( 'menu_background_image', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_background_image', array(
			'label'    => __( 'Menu Background Color', 'my-style' ),
			'description'    => __( 'Only when a page has an active header image.', 'my-style' ),
			'priority' => 14,
			'section'  => 'seos_menu_section',
			'settings' => 'menu_background_image',
		) ) );			
   	    $wp_customize->add_setting( 'menu_background_no_image', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_background_no_image', array(
			'label'    => __( 'Menu Background Color', 'my-style' ),
			'description'    => __( 'Only when a page does not have an active header image.', 'my-style' ),
			'priority' => 14,
			'section'  => 'seos_menu_section',
			'settings' => 'menu_background_no_image',
		) ) );
   	    $wp_customize->add_setting( 'menu_sub_top', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_sub_top', array(
			'label'    => __( 'Sub Menu Border Top Color', 'my-style' ),
			'priority' => 14,
			'section'  => 'seos_menu_section',
			'settings' => 'menu_sub_top',
		) ) );
   	    $wp_customize->add_setting( 'menu_sub_background', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_sub_background', array(
			'label'    => __( 'Sub Menu Background Color', 'my-style' ),
			'priority' => 14,
			'section'  => 'seos_menu_section',
			'settings' => 'menu_sub_background',
		) ) );
   	    $wp_customize->add_setting( 'menu_sub_hover_background', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_sub_hover_background', array(
			'label'    => __( 'Sub Menu Background Hover Color', 'my-style' ),
			'priority' => 14,
			'section'  => 'seos_menu_section',
			'settings' => 'menu_sub_hover_background',
		) ) );				
}
add_action( 'customize_register', 'my_style__customize_register_menu' );
/********************************************
* Content Styles
*********************************************/ 	
function my_style__menu_styles () {
        $scroll_menu = esc_html(get_theme_mod( 'hide_menu_slow', true ) );
		if($scroll_menu) {
			wp_enqueue_script( 'style-scroll-menu', get_template_directory_uri() . '/js/scroll-menu.js', array(), '', true );
		}

        $menu_padding = esc_html(get_theme_mod( 'menu_padding' ) );
        $menu_font_size = esc_html(get_theme_mod( 'menu_font_size' ) );
        $hide_arrow = esc_html(get_theme_mod( 'hide_arrow' ) );
        $menu_color = esc_html(get_theme_mod( 'menu_color' ) );
        $menu_hover_color = esc_html(get_theme_mod( 'menu_hover_color' ) );
        $menu_sub_hover_color = esc_html(get_theme_mod( 'menu_sub_hover_color' ) );
        $menu_sub_color = esc_html(get_theme_mod( 'menu_sub_color' ) );
        $menu_background_image = esc_html(get_theme_mod( 'menu_background_image' ) );
        $menu_background_no_image = esc_html(get_theme_mod( 'menu_background_no_image' ) );
        $menu_sub_top = esc_html(get_theme_mod( 'menu_sub_top' ) );
        $menu_sub_background = esc_html(get_theme_mod( 'menu_sub_background' ) );
        $menu_sub_hover_background = esc_html(get_theme_mod( 'menu_sub_hover_background' ) );
        $menu_position = esc_html(get_theme_mod( 'menu_position' ) );
$menu_background_no_image_style = "";
		if( $hide_arrow ) { $hide_arrow_style = "@media screen and (min-width: 800px) {#primary-menu ul:before {display: none;}}";} else {$hide_arrow_style ="";}
		if( $menu_color ) { $menu_color_image_no_style = "@media screen and (min-width: 800px) {.main-navigation ul li a {color: {$menu_color};}}";} else {$menu_color_image_no_style ="";}
		if( $menu_hover_color ) { $menu_hover_color_style = "@media screen and (min-width: 800px) {.main-navigation ul li a:hover {color: {$menu_hover_color};}}";} else {$menu_hover_color_style ="";}
		
		if( $menu_position == "left" ) { 
			$menu_position_style = "@media screen and (min-width: 800px) { #site-navigation {margin-left: 23px;} body .header-right { right: 48px; left:auto; } }";
			}
		elseif ( $menu_position == "right" ) {
			$menu_position_style = "@media screen and (min-width: 800px) { #site-navigation {margin-right: 23px;} body .header-right { left: 48px; right:v; } }";
			} 
		else { 
			$menu_position_style ="";
		}

		if( $menu_sub_hover_color ) { $menu_sub_hover_color_style = "@media screen and (min-width: 800px) {.main-navigation ul ul li a:hover {color: {$menu_sub_hover_color};}}";} else {$menu_sub_hover_color_style ="";}
		if( $menu_sub_color ) { $menu_color_image_style = "@media screen and (min-width: 800px) {.main-navigation ul ul li a {color: {$menu_sub_color};}}";} else {$menu_color_image_style ="";}
		if( $menu_font_size ) { $menu_font_size_style = "@media screen and (min-width: 800px) {.main-navigation ul li a {font-size: {$menu_font_size}px;}}";} else {$menu_font_size_style ="";}
		if( $menu_padding ) { $menu_padding_style = "@media screen and (min-width: 800px) {.grid-top{ padding: {$menu_padding}px 0 {$menu_padding}px 13px;}}";} else {$menu_padding_style ="";}
		
		if( has_header_image() and ( ( !is_front_page() and ( !get_theme_mod( 'header_image_show' ) == "all" ) and get_theme_mod( 'header_image_show' ) )
		or (!is_front_page() and  get_theme_mod( 'header_image_show' ) == "home"  ) ) or ( !has_header_image() ) ) {
			if( $menu_background_no_image ) { $menu_background_no_image_style = "@media screen and (min-width: 800px) {body .grid-top {background: {$menu_background_no_image};}}";} else {$menu_background_no_image_style ="";}		
		}
		if( $menu_background_image ) { $menu_background_image_style = "@media screen and (min-width: 800px) {.grid-top { background: {$menu_background_image};}}";} else {$menu_background_image_style ="";}
		if( $menu_sub_top ) { $menu_sub_top_style = "@media screen and (min-width: 800px) {#primary-menu ul:before { color: {$menu_sub_top}; } #primary-menu ul {border-top: 3px solid {$menu_sub_top};}}" ;} else {$menu_sub_top_style ="";}
		if( $menu_sub_background ) { $menu_sub_background_style = "@media screen and (min-width: 800px) {.main-navigation ul ul { background: {$menu_sub_background};}}";} else {$menu_sub_background_style ="";}
		if( $menu_sub_hover_background ) { $menu_sub_hover_background_style = "@media screen and (min-width: 800px) {.main-navigation ul ul li a:hover { background: {$menu_sub_hover_background};}}";} else {$menu_sub_hover_background_style ="";}
		
		wp_add_inline_style( 'custom-style-css', 
		    $hide_arrow_style.$menu_color_image_no_style.$menu_color_image_style.$menu_background_no_image_style.$menu_background_image_style.$menu_sub_top_style.$menu_sub_background_style.$menu_sub_hover_background_style.$menu_sub_hover_color_style.$menu_hover_color_style.$menu_position_style.$menu_padding_style.$menu_font_size_style
		);
}
add_action( 'wp_enqueue_scripts', 'my_style__menu_styles' );