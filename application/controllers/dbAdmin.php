<?php

class DbAdmin extends CI_Controller { 
    function __construct()                          
    {
        parent::__construct();                      
        //$this->load->model('dbAdmin_M');            
        
    }//OptionsSet
    
    
    
    
    function index(){                       
        $db=$this->uri->segment(3);
        print_r($db);
        if ($db == 5) $this->load->view('readmin/index.php');   
                
    }//update_option

}
