      <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Alpha Functionality</li>
              <li><a href="#">APC & SQL Admin</a></li>
              <li><a href="#">SQL, Mongo, APC, Redis, & Memcached available</a></li>
              <li><a href="#">Current settings Config File Based</a></li>
              <li><a href="#">crude data->store mapping interface uses SQL</a></li>
            
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
        
<div class="span10" id="SinFront">
<div   class="row-fluid">

            
            <div class="span5">
              <h2>Output Caching</h2>
              <p> Currently configurable per controller. 
              <br/>Added an alert to notify developer that a page is cached.
               
              </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            
            
            
             <div class="span5">
              <h2>Query Caching</h2>
              <p> Is currently implemented in MY_Controller for the 'storage'
                  table. [Storage] is used in the view/include/header to populate
                  the Admin dropdown and Set Options to populate the buttons. 
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
            </div><!--/span-->   
 </div><!--/row-->  
</div> <!--/HinFront-->  