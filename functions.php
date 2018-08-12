<?php 
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

spl_autoload_register('bookshelf_register_classes');


function bookshelf_register_classes($class)
{
	if ( class_exists($class) ) {
		return;
	}

	$file = get_template_directory() . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR . 'class-' . strtolower( str_replace( '_', '-', $class ) ) . '.php';
	if (!file_exists($file)){
	return;
	}
	include $file;
  
}

function bookshelf() {

	$bookshelf = bookshelf::get_instance();
	return $bookshelf;

}

$bookshelf = bookshelf();
require_once( get_template_directory() . '/inc/class-bookshelf.php' );



//Navigation Menus
register_nav_menus( array(
    'primary' => 'هدر - منو' ,
    'side_links' => 'سایدبار - پیوندها',
	'int_links' => 'فوتر - لینک های مهم	' ,
	'ext_links' => 'فوتر - پیوندها'
) );


//qoute
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'حدیث',
'id'            => 'qoute-main',
'before_widget' => '<div class="qoute clearfix"><div class="qoute_text">',
'after_widget' => '</div></div>',
'before_title' => '<h1>',
'after_title' => '</h1>',
));

//Address Footer
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'آدرس فوتر',
'id'            => 'address_footer',
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h1 class="widgettitle">',
'after_title' => '</h1>',
));


add_theme_support( 'post-thumbnails' );
add_image_size( 'post_thumb', 270 , 240 , true );
function new_excerpt_length($length) {
return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



	