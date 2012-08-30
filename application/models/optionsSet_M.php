<?php 

class optionsSet_M extends CI_Model {

// Function to retrieve an array with all configurable options 
    function retrieve_options(){

            $query = $this->db->get('options');
            return $query->result_array();
    }
	
// Function to retrieve an array with all storage options
    function retrieve_storage(){
        
            $query = $this->db->get('storage');
            return $query->result_array();
    }	

// Update shopping cart from product widget
	function validate_update_persistence($item, $value){

            $updates = array(storage => $value);
            $this->db->update('options', $updates, array(item => $item)); 
	} //validate_update_persistence
	
                
        
} //class


/* End of file cart_model.php */
/* Location: ./application/models/cart_model.php */