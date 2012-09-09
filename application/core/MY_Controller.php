<?php

class MY_Controller extends CI_Controller
{
     
function __construct(){
   parent::__construct();

    $this->db->cache_off(); 

       
    //$this->load->driver('cache'); // file, APC, and Memcached *should* now enabled - failing
    $this->load->driver('cache', array('adapter' => 'file'));      
    $this->load->driver('cache', array('adapter' => 'memcached'));  // loads but "non-object"
    $this->load->driver('cache', array('adapter' => 'apc'));       

    if (!$this->cache->apc->is_supported()) print_r("apc not supported");
    if (!$this->cache->file->is_supported()) print_r("file not supported");
    //if (!$this->cache->memcached->is_supported()) print_r("memcached not supported");

            
     
    $result = $this->cache->get('storage');  //set $storage if its not 
    if(!$result){
            $this->load->model('optionsSet_M');
            $result=$this->optionsSet_M->retrieve_storage();
    $this->cache->file->save('storage', $result, 60); 
    $this->cache->apc->save('storage', $result, 60);               //(in seconds)
//(in seconds)
    } 
        
}//__construct 


}//class

?>
