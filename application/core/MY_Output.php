<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Output Class
 *
 * Responsible for sending final output to browser
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Output
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/output.html
 */
class MY_Output extends CI_Output{


    
	function __construct(){
	   parent::__construct();
	}
        
	// --------------------------------------------------------------------

	/**
	 * Get cache_expiration time
	 *
	 * Returns the current output string
	 *
	 * @access	public
	 * @return	string
	 */
	function get_expiration()
	{
		return $this->cache_expiration;
	}

	// --------------------------------------------------------------------


}
// END MY_Output Class

/* End of file MY_Output.php */
/* Location: ./application/core/MY_Output.php */