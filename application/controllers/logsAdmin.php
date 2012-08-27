<?php

class Logger extends CI_Controller { 

	function Logger()
	{
		parent::__construct();              	
		$this->load->model('log_M');   
	}
	
	function index()
	{
		 $data['products'] = $this->cart_model->retrieve_products(); // Retrieve an array with all products		
		 // DEBUG print_r($data['products']);
                 $data['content'] = 'cart/products'; // Select view to display
		 $this->load->view('index', $data);  // Display the page
	}
	

}

/* End of file Test1.php */
/* Location: ./application/controllers/test1.php */