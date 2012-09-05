<?php

class Testbed extends MY_Controller {               // syntax changed from CI 1.x to 2.x "CI_"        

    
    function __construct()                          //"function CartTest_C(){" style is depricated in PHP5
    {
        parent::__construct();                      // as of CI 2.x PHP4 style was removed
        $this->output->cache(0);  // output page caching in minutes:  QA/PROD=60
        print_r("DEV NOTICE: This page has output cache set for ".$this->output->get_expiration()." minutes");    

    }//cartTest_C

    
    
    function index()                                // The codeigniter default function class 
    {                                                    
        $this->load->view('testbed_V/index');       // Load and Call VIEW   
    }//index
    
    
    
    
}//class

/* End of file Testbed.php */
/* Location: ./application/controllers/Testbed.php */