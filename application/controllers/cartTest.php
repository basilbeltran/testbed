<?php

class CartTest extends CI_Controller {            // syntax changed from CI 1.x to 2.x "CI_"        

    
    function __construct()                          //"function CartTest_C(){" style is depricated in PHP5
    {
        parent::__construct();                      // as of CI 2.x PHP4 style was removed
        $this->load->model('cart_model_M');           // Load MODEL; 
        
    }//cartTest_C

    
    
    function index()                                // The codeigniter default function class 
    {
                                                    // Use MODEL
        $data['products'] = $this->cart_model->retrieve_products(); 		
        // DEBUG: print_r($data['products']);       // Leave debugs, add to logging later

        $this->load->view('cartTest_V/index', $data); // Load and Call VIEW
        
    }//index
    
    

    function add_cart_item(){                       // call from js in view
        
        if($this->cart_model->validate_add_cart_item() == TRUE){
            if($this->input->post('ajax') != '1'){  // Check if user has javascript enabled
                redirect('cartTest');               // not enabled, reload the page with new data
            }else{ 
                echo 'true';                        // enabled, return true, so the js executes update
            }//ajax                   
        }//retVal

    }//add_cart_item 

    
    
    function update_cart(){                         // call from view
            $this->cart_model->validate_update_cart();
            redirect('cartTest');
    }//update_cart
    
    

    function show_cart(){                           // call from view
            $this->load->view('cartTest_V/cart');   
    }//show_cart
    

    
    function empty_cart(){                          // call from view
            $this->cart->destroy();
            redirect('cartTest');
    }//empty_cart
    
    
    
}//class

/* End of file cartTest.php */
/* Location: ./application/controllers/cartTest.php */