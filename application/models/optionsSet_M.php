<?php 

class optionsSet_M extends CI_Model {

// Function to retrieve an array with all configurable options 
    function retrieve_options(){
            $this->db->cache_on();
            $query = $this->db->get('options');
            $this->db->cache_off();
            return $query->result_array();
    }
	
// Function to retrieve an array with all storage options
    function retrieve_storage(){
            $this->db->cache_on(); 
            $query = $this->db->get('storage');
            $this->db->cache_off(); 
            return $query->result_array();
    }	

// Update shopping cart from product widget
	function update_persistence($item, $value){

            $updates = array(storage => $value);
            $this->db->update('options', $updates, array(item => $item)); 
	} //validate_update_persistence
	
                
        
} //class


/* End of file cart_model.php */
/* Location: ./application/models/cart_model.php */