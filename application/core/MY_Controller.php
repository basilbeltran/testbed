<?php

class MY_Controller extends CI_Controller
{
     
 function __construct(){
   parent::__construct();

    // $this->load->driver('cache');        // file, APC, and Memcached *should* now enabled - failing
     $this->load->driver('cache', array('adapter' => 'file'));      
    // $this->load->driver('cache', array('adapter' => 'memcache'));  // loads but "non-object"
    // $this->load->driver('cache', array('adapter' => 'apc'));       


        $result = $this->cache->get('storage');
        if(!$result){
            $this->load->model('optionsSet_M');  
            $this->db->cache_on();
            $result=$this->optionsSet_M->retrieve_storage();
            $this->db->cache_off();                                      // we have STORAGE

            $this->cache->save('storage', $result, 86400);               //(in seconds)
        }//set $storage if its not  

   //print_r( $this->cache->file->get('storage') );

        
  }//__construct        
}//class

?>
