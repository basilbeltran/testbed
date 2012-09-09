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

// Update persistence matrix
	function update_persistence($item, $value){
            //$this->db->cache_delete("default","index");
            //$this->db->cache_delete("optionsSet","index");
            //$this->db->cache_delete("optionsSet","update_persistence");
            //so how lame was that?
            $this->db->cache_delete_all(); // RX: B
            //lastitol
            
            $updates = array(storage => $value);
            $this->db->update('options', $updates, array(item => $item));
            
	} //validate_update_persistence
	
                
        
} //class


/* End of file optionsSet_M.php */
/* Location: ./application/models/optionsSet_M.php */