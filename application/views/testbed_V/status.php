      <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">MMP1</li>
              <li><a href="#">Sprint1</a></li>
              <li><a href="#">Sprint2</a></li>
              <li class="nav-header">MMP2</li>
              <li><a href="#">Sprint1</a></li>
              <li><a href="#">Sprint2</a></li>

                  
            
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
        
<div class="span10" id="HinFront">
<div   class="row-fluid">

            
            <div class="span5">
              <h2>Output Caching</h2>
              <p> Currently configurable per controller. A (production) option is
                  to set a large value in MY_Controller and use delete_cache($uri_string)
                  with each DB write.
              </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            
            
            
             <div class="span5">
              <h2>Query Caching</h2>
              <p> Is currently implemented in MY_Controller for the 'storage'
                  table and is used in the view/include/header to populate
                  the admin dropdown. 
              </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            
</div><!--/row--> 
<div class="row-fluid">
    
             <div class="span5">
              <h2>Object Caching</h2>
               <p>  Currently caching sessions in Mongo. Redis config is in base_url/index.php
                   and sets php vbls. This is overwritten by MY_Session
                   which uses Mongo. Sessions would be a good starting place to 
                   implement functionality across the datastores.                  
              </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
               
            
            <div class="span5">
              <h2>In Memory Caching</h2>             
              <p>
              Memcached, ACP and file options added to extended Controller.
              Added front end for APC to ADMIN | APC  
              http://www.electrictoolbox.com/apc-php-cache-information/
              </p>
            </div><!--/span-->
            
            
</div><!--/row-->          
<div   class="row-fluid">          
            <div class="span5">
              <h2>NoSQL Storage</h2>
              <p>
               Session storage now defaults to Mongo   
              </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            
            
            
            <div class="span5">
              <h2>Cloud Storage</h2>
              <p>
               Not yet implemented
              </p>
            </div><!--/span--   
          
        </div> <!--/HinFront-->  