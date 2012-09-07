<?php

class DbAdmin extends MY_Controller { 
    function __construct()                          
    {
        parent::__construct();                      
        
    }//__construct
     
    
    function index(){  
        $mgr = $this->uri->segment(3);
        echo "Traveling to $mgr <br />";
        switch ($mgr){
                case "MySQL":
                        redirect(dbMgmtSql);
                        break;
                case "Redis":
                        $data['url']= "http://127.0.0.1:8080/";
                        $this->load->view('include/headerFrame', $data);
                        break;
                case "Mongo":
                        $data['url']= "http://localhost/testbed/UTIL/rockmongo/index.php";
                        $this->load->view('include/headerFrame', $data);	                       
                        break;	
                case "APC":
                        $data['url']= "http://localhost/testbed/UTIL/apc.php";
                        $this->load->view('include/headerFrame', $data);                       
                        break;	
                case "S3":
                        echo "Bring a swimsuit";
                        break; 	
                default:
                        echo "Admin UI not found";
                        break;
        }//switch   
                
    }//index

}//class
