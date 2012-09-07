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
                        $data['url']= "https://s3-console-us-standard.console.aws.amazon.com/GetResource/Console.html";
                        $this->load->view('include/headerFrame', $data); 
                        break; 
                case "Glacier":
                        $data['url']= "https://glacier-console-us-west-1.console.aws.amazon.com/GetResource/Console.html#details";
                        $this->load->view('include/headerFrame', $data); 
                        break; 	
                case "DynamoDB":
                        $data['url']= "https://console.aws.amazon.com/dynamodb/home#table:name=session;region=us-east-1";
                        $this->load->view('include/headerFrame', $data); 
                        break; 	                    
                case "RDS":
                        $data['url']= "https://console.aws.amazon.com/rds/home#dbinstances:sf=na;region=us-east-1";
                        $this->load->view('include/headerFrame', $data); 
                        break; 
                case "ElastiCache":
                        $data['url']= "https://console.aws.amazon.com/elasticache/home#cache-clusters:region=us-west-1";
                        $this->load->view('include/headerFrame', $data); 
                        break; 
                    default:
                        echo "Admin UI not found";
                        break;
        }//switch   
                
    }//index

}//class
