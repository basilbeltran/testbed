<?php

class MY_Controller extends CI_Controller
{
     
 function __construct(){
   parent::__construct();

    // $this->load->driver('cache');        // file, APC, and Memcached *should* now enabled - failing
     $this->load->driver('cache', array('adapter' => 'file'));      
    // $this->load->driver('cache', array('adapter' => 'memcache'));  // loads but "non-object"
    // $this->load->driver('cache', array('adapter' => 'apc'));       

     
        $result = $this->cache->get('storage');  //set $storage if its not 
        if(!$result){
            $this->load->model('optionsSet_M');
            $result=$this->optionsSet_M->retrieve_storage();
            $this->cache->save('storage', $result, 60);               //(in seconds)
        } 

   //print_r( $this->cache->file->get('storage') );

        
  }//__construct        
}//class

?>
