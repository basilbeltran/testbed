<!-- THE MAIN CONTENT  -->
<?php $this->load->helper('debug'); ?>

<div                class="container-fluid">         
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

     </div>            <!-- accordion -->
</div>                 <!-- container-fluid -->

