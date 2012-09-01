<?php 

class Cart_model extends CI_Model {

// Function to retrieve an array with all product information
    function retrieve_products(){
            $query = $this->db->get('products');
            return $query->result_array();
    }
	
	

// Update shopping cart from shopping cart
	function validate_update_cart(){
		
		// Get the total number of rows in cart
                $rows = $this->input->post('rows');
               
		// Cycle through all items and update them
                //$contents = $this->cart->contents();
               
                $data = array();
		for( $i=1; $i < $rows+1; $i++ )                  // iterating through total_items?
		{
                  $id =  $this->input->post($i.'[rowid]');
                  $qty = $this->input->post($i.'[qty]');
                  
                  
                  //if ( $contents[$id]['qty'] !== $qty) {
                    
                     $tmp = array('rowid' => $id,'qty' => $qty); 
                     array_push ( $data , $tmp ); 
                     
                  //}
		                
		} //for
            if ( count($data) > 0) {
                    $this->cart->update($data);                  // Update cart from QNT field changes
                    return TRUE;
            }else{
                    return FALSE;
            }        
	} // validate_update_cart
        
        
        
	
// Update shopping cart from product widget
	function validate_add_cart_item(){
		
		$id = $this->input->post('product_id');     // Assign posted product_id to $id
		$cty = $this->input->post('quantity');      // Assign posted quantity to $cty
		
		$this->db->where('id', $id);                // Select where id matches the posted id
		$query = $this->db->get('products', 1);     // Select the products where a match is found and limit the query by 1
		
		// Check if a row has been found
		if($query->num_rows > 0){
		
			foreach ($query->result() as $row)  // this makes no sense given the limit on get
			{
			    $data = array(
                                        'id'      => $id,
                                        'qty'     => $cty,
                                        'price'   => $row->price,
                                        'name'    => $row->name
                                         );

				$this->cart->insert($data); 
				
			return TRUE;
			}	
		}else{ return FALSE; }  //nothing found
	} //validate_add_cart_item
	

} //class


/* End of file cart_model.php */
/* Location: ./application/models/cart_model.php */