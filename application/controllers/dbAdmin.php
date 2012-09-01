<?php

class DbAdmin extends CI_Controller { 
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
                case "file":
                        echo "Bring an open mind";
                        break;
                case "Mongo":
                        echo "Bring 15 bottles of SPF 50 Sunscreen";
                        break;	
                case "APC":
                        echo "Bring lots of money";
                        break;	
                case "S3":
                        echo "Bring a swimsuit";
                        break; 	
                default:
                        echo "Store not found";
                        break;
        }//switch   
                
    }//index

}//class
