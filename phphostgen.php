<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 9/1/17
 * Time: 3:30 PM
 */

class HostGen {
	/**
	 * @var null
	 */
	protected static $instance;
	private $partss;

	/**
	 * WC_Bom_Post_Type constructor.
	 */
	private function __construct() {

		$this->init();
	}

	public function init() {

	}

	/**
	 * @return null
	 */
	public static function getInstance() {

		if ( null === static::$instance ) {
			static::$instance = new static;
		}

		return static::$instance;
	}
}