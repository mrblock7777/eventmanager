<?php
/**
 * phpHyppo
 *
 * An open source MVC application framework for PHP 5.1+
 *
 * @package			phpHyppo
 * @author			Muhammad Hamizi Jaminan <hymns@time.net.my>
 * @copyright		Copyright (c) 2008 - 2014, Green Apple Software.
 * @license			LGPL, see included license file
 * @link			http://www.phphyppo.org
 * @since			Version 8.02
 */

/* no direct access */
if ( ! defined('BASEDIR') )
	exit;

/**
 * AppModel
 *
 * Class that manage to handle application model
 *
 * @package	    	phpHyppo
 * @subpackage		Core Engine
 * @author			Muhammad Hamizi Jaminan
 */

class AppModel
{
 	/**
	 * $db
	 *
	 * the database object instance
	 *
	 * @access	public
	 */
	public $db = null;

	public $trans_enabled		= TRUE;

	/**
	 * Strict transaction mode flag
	 *
	 * @var	bool
	 */
	public $trans_strict		= TRUE;

	/**
	 * Transaction depth level
	 *
	 * @var	int
	 */
	protected $_trans_depth		= 0;

	/**
	 * Transaction status flag
	 *
	 * Used with transactions to determine if a rollback should occur.
	 *
	 * @var	bool
	 */
	protected $_trans_status	= TRUE;

	/**
	 * Transaction failure flag
	 *
	 * Used with transactions to determine if a transaction has failed.
	 *
	 * @var	bool
	 */
	protected $_trans_failure	= FALSE;

 	/**
	 * class constructor
	 *
	 * @access	public
	 */
	public function __construct()
	{
		// global objects
		foreach ( array_keys( get_object_vars( registry::instance() ) ) as $object )
		{
			if ( ! isset( $this->$object ) )
				$this->$object = registry::instance()->$object;
		}

		// load database library
		$this->db = $this->load->database();
	}

	
}

/* End of file AppModel.php */
/* Location: core/classes/AppModel.php */