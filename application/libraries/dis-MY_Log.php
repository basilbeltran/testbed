
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Log extends CI_Log {
    
        //@todo add config
        private $log_use_mongo_database = TRUE;
        private $log_collection_name = 'logging';
        public  $CI;
        
    
        public function __construct($params = array()){
        $this->CI = & get_instance();
        //$this->CI->load->library('mongo_db');
        parent::__construct();
        
        }

        
        function write_log($level = 'error', $msg, $php_error = FALSE) {	

    
        //    if ($this->_enabled === FALSE) {
        //      return FALSE;
        //    }
        //
        //    
        //    $level = strtoupper($level);
        //    if ( ! isset($this->_levels[$level]) OR ($this->_levels[$level] > $this->_threshold)){
        //        return FALSE;
        //    }
        $mdb = $this->CI->mongo_db->{$this->log_collection_name};

        //    $mdb = $this->mongo->logs->system_codeigniter;
$output = $mdb->update(array(

// Server Info
'server_name'	=> $_SERVER['SERVER_NAME'],
'server_ip'	=> (isset($_SERVER['SERVER_ADDR'])) ? $_SERVER['SERVER_ADDR'] : '0.0.0.0',
'domain'	=> (!empty($_SERVER['HTTP_HOST'])) ? $_SERVER['HTTP_HOST'] : '',
'user_agent'	=> (!empty($_SERVER['HTTP_USER_AGENT'])) ? $_SERVER['HTTP_USER_AGENT'] : '',
'ip_address'	=> (!empty($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : '',
'uri'           => (!empty($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '',
'query_string'	=> (!empty($_SERVER['QUERY_STRING'])) ? $_SERVER['QUERY_STRING'] : '',
'timestamp'	=> date($this->_date_fmt),
'message'	=> $msg,
'level'         => $level
));


return $output;
}

}
/* End of file MY_Log.php */
/* Location: ./application/libraries/MY_Log.php */


