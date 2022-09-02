<?php if( ! defined( 'ABSPATH' ) ) exit;
	
	function my_style_how_to_scripts() {
		wp_enqueue_style( 'how-to-use', get_template_directory_uri() . '/include/pro/pro.css' );
	}
	
	add_action( 'admin_enqueue_scripts', 'my_style_how_to_scripts' );	
	
	// create custom plugin settings menu
	add_action('admin_menu', 'my_style__create_menu');
	
	function my_style__create_menu() {
		
		//create new top-level menu
		global $my_style__settings_page;
		
		$my_style__settings_page = add_theme_page('Style Theme', 'Style Theme', 'edit_theme_options',  'style-unique-identifier', 'my_style__settings_page');
		
		//call register settings function
		add_action( 'admin_init', 'register_mysettings' );
	}
	
	function register_mysettings() {
		//register our settings
		register_setting( 'seos-settings-group', 'adsense' );
	}
	
	function my_style__settings_page() {	
	$path_img = get_template_directory_uri()."/include/pro/"; ?>
	<div id="cont-pro">
		<h1><?php esc_html_e('Style WordPress Theme', 'my-style'); ?></h1>	
		<div class="pro-links">	
		<p><?php esc_html_e('We create free themes and have helped thousands of users to build their sites. You can also support us using the Style Pro theme with many new features and extensions.', 'my-style'); ?></p>
			<a class="button button-primary" target="_blank" href="https://seosthemes.info/style-wordpress-theme/"><?php esc_html_e('Theme Demo', 'my-style'); ?></a>
			<a style="background: #A83625;" class="reds button button-primary" target="_blank" href="https://seosthemes.com/style-wordpress-theme/"><?php esc_html_e('Upgrade to PRO', 'my-style'); ?></a>
		</div>	
		<table id="table-colors" class="free-wp-theme">
			<tbody>
				<tr>
					<th><?php esc_html_e('Style WordPress Theme', 'my-style'); ?></th>
					<th><?php esc_html_e('Free WP Theme','my-style'); ?></th>
					<th><?php esc_html_e('Premium WP Theme','my-style'); ?></th>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('About US', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>				
				<tr>
					<td><strong><?php esc_html_e('Sidebar Position', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Counter', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>								
				<tr>
					<td><strong><?php esc_html_e('Portfolio Filter', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Home Page Parallax Image', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Popular Posts', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Recent Posts Slider', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Contacts Footer', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>						
				<tr class="s-white">
					<td><strong><?php esc_html_e('Page Right Sidebar', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>				
				<tr>
					<td><strong><?php esc_html_e('Page Left Sidebar', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>					
				<tr class="s-white">
					<td><strong><?php esc_html_e('Blog Page', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Blog Page Right Sidebar', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Blog Page Full Width', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Blog Page Three Columns', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Blog Page Two Columns', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>					
				<tr>
					<td><strong><?php esc_html_e('Camera Slider', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>

				<tr class="s-white">
					<td><strong><?php esc_html_e('Title Position', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('One Click Demo Import', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>					
				<tr class="s-white">
					<td><strong><?php esc_html_e('Post Options', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('WooCommerce My Account Icon', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Multiple Gallery', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Animations of all elements', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Header Options', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Hide Single Page Title', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Featured Image', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('WooCommerce Product Zoom', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('WooCommerce Cart Options', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('WooCommerce Pagination', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				
				
				<tr class="s-white">
					<td><strong><?php esc_html_e('All Google Fonts', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Shortcode', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Color of All Elements', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Full Width Page', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				
				<tr>
					<td><strong><?php esc_html_e('Font Sizes', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>				
				<tr class="s-white">
					<td><strong><?php esc_html_e('Social Media Icons', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Custom Footer Copyright', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Microdata', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Translation Ready', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Header Logo', 'my-style'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					
					
					<tr class="s-white">
						<td><strong><?php esc_html_e('Header Image', 'my-style'); ?></strong></td>
						<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
						<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					</tr>
					<tr>
						<td><strong><?php esc_html_e('Background Image', 'my-style'); ?></strong></td>
						<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
						<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					</tr>
					<tr class="s-white">
						<td><strong><?php esc_html_e('404 Page Template', 'my-style'); ?></strong></td>
						<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
						<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					</tr>
					<tr>
						<td><strong><?php esc_html_e('Footer Widgets', 'my-style'); ?></strong></td>
						<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
						<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					</tr>
					<tr class="s-white">
						<td><strong><?php esc_html_e('WooCommerce Plugin Support', 'my-style'); ?></strong></td>
						<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
						<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					</tr>
					<tr>
						<td><strong><?php esc_html_e('Back to top button', 'my-style'); ?></strong></td>
						<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
						<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					</tr>
					<tr>
						
						<td><a class="button button-primary" target="_blank" href="https://seosthemes.info/style-wordpress-theme/"><?php esc_html_e('Theme Demo', 'my-style'); ?></a></td>
						<td> </td>
						<td style=" text-align:center;"><a style="background: #A83625;" class="reds button button-primary" target="_blank" href="https://seosthemes.com/style-wordpress-theme/"><?php esc_html_e('Upgrade to PRO', 'my-style'); ?></a></td>
					</tr>					
				</tbody>
			</table>
		</div>
		<?php	
		}		