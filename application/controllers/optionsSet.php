<?php

class OptionsSet extends CI_Controller { 
    function __construct()                          
    {
        parent::__construct();                      
        $this->load->model('optionsSet_M');            
        
    }//OptionsSet
    
        
	
    function index()
    {   
        $data['options'] = $this->optionsSet_M->retrieve_options(); // Retrieve configurable items	
        $data['storage'] = $this->optionsSet_M->retrieve_storage(); // Retrieve storage options		
        $this->load->view('optionsSet_V/index', $data);             // Display the page
    }//index
    
    
    
    function update_persistence(){                       
        $item=$this->uri->segment(3);
        $value=$this->uri->segment(4);
        print_r($item);
        print_r($value);
        $this->optionsSet_M->validate_update_persistence( $item, $value );
        redirect('optionsSet');   
                
    }//update_option
	
    function redis_sessions(){    
         if (extension_loaded('redis')) {
           ini_set('session.save_handler', 'redis');
           ini_set('session.save_path', 'tcp://localhost:6379');
         }
    }

}//class

/* End of file OptionsSet.php */
/* Location: ./application/controllers/OptionsSet.php */