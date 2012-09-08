<?php

class OptionsSet extends MY_Controller { 
    function __construct()                          
    {
        parent::__construct();    
        $this->output->cache(0); // DO NOT CHANGE - page must be cached
        $this->load->model('optionsSet_M');            
        
    }//OptionsSet
    
        
	
    function index()
    {   
	
        $this->load->view('optionsSet_V/index', $data);             // Display the page
    }//index
    
    
    
    function update_persistence(){                       
        $item=$this->uri->segment(3);
        $value=$this->uri->segment(4);
        $this->optionsSet_M->update_persistence( $item, $value ); //write the passed tuple to storage
        redirect('optionsSet');   
                
    }//update_option

    function retrieve_options(){    
        $data['options'] = $this->optionsSet_M->retrieve_options(); // Retrieve configurable items
    }
    
    function retrieve_storage(){    
        $data['storage'] = $this->optionsSet_M->retrieve_storage(); // Retrieve storage options		

    }
         
//    function redis_sessions(){    
//         if (extension_loaded('redis')) {
//           ini_set('session.save_handler', 'redis');
//           ini_set('session.save_path', 'tcp://localhost:6379');
//         }
//    }

}//class

/* End of file OptionsSet.php */
/* Location: ./application/controllers/OptionsSet.php */