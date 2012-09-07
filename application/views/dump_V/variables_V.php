<!-- THE MAIN CONTENT  -->
<?php $this->load->helper('debug'); ?>

<div                class="container-fluid">  

<br/>
     <div           class="accordion" id="accordion2">

                     
         
            <div    class="accordion-group">  
              <div  class="accordion-heading">  
                <a  class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" 
                    href="#collapseOne">  
                  Cache  
                </a>  
              </div>  <!-- accordion-heading  -->
              <div   class="accordion-body collapse" id="collapseOne" style="height: 0px; ">  
                <div class="accordion-inner">  
                                                <?php dump2($cache); ?>                
                </div> <!-- accordion-inner -->
              </div>   <!-- accordion-body collapse -->
            </div>     <!-- accordion-group -->

            
            
         
            <div   class="accordion-group">  
              <div class="accordion-heading">  
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" 
                   href="#collapseTwo">  
                 File Cache  
                </a>  
              </div>   <!-- accordion-heading  -->
              <div   class="accordion-body collapse" id="collapseTwo" >  
                <div class="accordion-inner">  
                                                <?php dump2($file_cache); ?>                
                </div> <!-- accordion-inner -->
              </div>   <!-- accordion-body collapse -->
            </div>     <!-- accordion-group -->
         
            
            
         
            <div   class="accordion-group">  
              <div class="accordion-heading">  
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" 
                   href="#collapseThree">  
                  APC Cache  
                </a>  
              </div>  
              <div   class="accordion-body collapse" id="collapseThree">  
                <div class="accordion-inner">  
                                                <?php dump2($apc_cache); ?>                
                </div> <!-- accordion-inner -->
              </div>   <!-- accordion-body collapse -->
            </div>     <!-- accordion-group --> 

            

            <div   class="accordion-group">  
              <div class="accordion-heading">  
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" 
                   href="#collapseFour">  
                  userdata  
                </a>  
              </div>  
              <div  class="accordion-body collapse" id="collapseFour">  
                <div class="accordion-inner">  
                                                <?php dump2($userdata); ?>                
                </div> <!-- accordion-inner -->
              </div>   <!-- accordion-body collapse -->
            </div>     <!-- accordion-group --> 
            
            
            
            
            
              <div   class="accordion-group">  
              <div class="accordion-heading">  
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" 
                   href="#collapseFive">  
                 URI 
                </a>  
              </div>  
              <div  class="accordion-body collapse" id="collapseFive">  
                <div class="accordion-inner">  
                                                <?php dump2($uri); ?>                
                </div> <!-- accordion-inner -->
              </div>   <!-- accordion-body collapse -->
            </div>     <!-- accordion-group --> 
            
            
                    
              <div class="accordion-group">  
              <div class="accordion-heading">  
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" 
                   href="#collapseSix">  
                 config  
                </a>  
              </div>  
              <div   class="accordion-body collapse"  id="collapseSix">  
                <div class="accordion-inner">  
                                                <?php dump2($config); ?>                
                </div> <!-- accordion-inner -->
              </div>   <!-- accordion-body collapse -->
            </div>     <!-- accordion-group --> 
            
            
              
              <div   class="accordion-group">  
              <div class="accordion-heading">  
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" 
                   href="#collapseSeven">  
                  server  
                </a>  
              </div>  
              <div  class="accordion-body collapse"  id="collapseSeven">  
                <div class="accordion-inner">  
                                                <?php dump2($server); ?>                
                </div> <!-- accordion-inner -->
              </div>   <!-- accordion-body collapse -->
            </div>     <!-- accordion-group -->
            
            

            <div    class="accordion-group">  
              <div  class="accordion-heading">  
                <a  class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" 
                    href="#collapseEight">  
                  PhpInfo  
                </a>  
              </div>  <!-- accordion-heading  -->
              <div   class="accordion-body collapse" id="collapseEight" style="height: 0px; ">  
                <div class="accordion-inner">  
    <!-- overwrite phpinfo() in-line style that interferes with page rendering -->
                        <style type="text/css">

                        #phpinfo body, td, th, h1, h2 {font-family: sans-serif;}
                        #phpinfo pre {margin: 0px; font-family: monospace;}
                        #phpinfo a:link {color: #000099; text-decoration: none; background-color: #ffffff;}
                        #phpinfo a:hover {text-decoration: underline;}
                        #phpinfo table {border-collapse: collapse; width:100%}
                        #phpinfo .center {text-align: center;}
                        #phpinfo .center table { margin-left: auto; margin-right: auto; text-align: left;}
                        #phpinfo .center th { text-align: center !important; }
                        #phpinfo td, th { border: 1px solid #000000; font-size: 100%; vertical-align: baseline;}
                        #phpinfo h1 {font-size: 150%;}
                        #phpinfo h2 {font-size: 125%;}
                        #phpinfo .p {text-align: left;}
                        #phpinfo .e {background-color: #ccccff; font-weight: bold; color: #000000;}
                        #phpinfo .h {background-color: #9999cc; font-weight: bold; color: #000000;}
                        #phpinfo .v {background-color: #cccccc; color: #000000;}
                        #phpinfo .vr {background-color: #cccccc; text-align: right; color: #000000;}
                        #phpinfo img {float: right; border: 0px;}
                        #phpinfo hr {width: 800px; background-color: #cccccc; border: 0px; height: 1px; color: #000000;}
                        </style>

                        <div id="phpinfo">
                                <?php 
                                ob_start() ;
                                phpinfo() ;
                                $pinfo = ob_get_contents() ;
                                ob_end_clean() ;                                    
                                echo ( str_replace ( "Phar EXT version", "Phar_EXT_version", preg_replace ( '%^.*<body>(.*)</body>.*$%ms', '$1', $pinfo ) ) ) ;

                                


                               ?>
                        </div>
                </div> <!-- accordion-inner -->
              </div>   <!-- accordion-body collapse -->
            </div>     <!-- accordion-group -->   

     </div>            <!-- accordion -->
</div>                 <!-- container-fluid -->

