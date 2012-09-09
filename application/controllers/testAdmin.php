<?php

class TestAdmin extends MY_Controller
{
    function __construct()                          
    {
        parent::__construct();                      
        $this->load->library('testbed');

    }//__construct();                      

    
    
   public function index()
   {
      
      $this->testbed->memcachSetGet();

   }

}
