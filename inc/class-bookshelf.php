<?php

/**
 * The main theme class
 */
class bookshelf {

	public static $instance = null;
	public $scripts;

	public static function get_instance() {

		if ( self::$instance==null ) {
			self::$instance = new Bookshelf();
		}
		return self::$instance;

	}

	/**
	 * The class constructor
	 */
	private function __construct() {

		$this->scripts      	= new bookshelf_scripts();

	}

}	


