<?php
	define( 'THEME_URI', get_template_directory_uri() );
	define( 'THEME_PATH', get_template_directory() );

	include (THEME_PATH . '/inc/theme-file.php');
	include (THEME_PATH . '/inc/theme-setup.php');
	// echo THEME_URI . '<br>' . THEME_PATH;
	
	

	add_action('wp_enqueue_scripts', 'xpent_scripts' );
	add_action('after_setup_theme', 'xpent_theme_setup');