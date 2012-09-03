<?php

class ConfigMgmt extends MY_Controller { 
    function __construct()                          
    {
        parent::__construct();                      
        $this->output->cache(0); //should remain low in QA/PROD
    }//OptionsSet
    
    
    
    function index(){  
        $data = array();
        $data['userdata']=$this->session->all_userdata();
        $data['uri']=$this->uri->_uri_to_assoc(0);
        $data['config']=get_config();
        $data['server']=$_SERVER;
        $data['cache']=$this->cache->cache_info();
        $data['file_cache']=$this->cache->file->cache_info();
        $data['apc_cache']=$this->cache->apc->cache_info();

        $this->load->view('dump_V/index', $data);

    }// index

}