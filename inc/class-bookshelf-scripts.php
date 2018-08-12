<?php 

class bookshelf_scripts {

	public function __construct() {

		if ( !is_admin() ) {

			add_action('wp_enqueue_scripts' , array($this , 'enqueue_scripts') );
	}
			add_action('admin_enqueue_scripts', array($this , 'admin_style') );
	}



	public function enqueue_scripts() {

		$theme_info = wp_get_theme();
	
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' , array(), '2.0.0');

		wp_enqueue_script( 'jquery', false, array(), $theme_info->get( 'Version'), true );	
		
		
	}
	
	public function admin_style() {
		
		wp_enqueue_style('admin-styles', get_template_directory_uri().'/assets/css/admin.css');
		
	}
	
	
	
	

	

}