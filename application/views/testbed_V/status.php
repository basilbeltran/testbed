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
                  table. $storage is used in the view/include/header to populate
                  the "Admin" drop-down AND optionsSet to populate the buttons.
                  
                  <br/>9/12: set cache_delete in dbMgmtSql_M->set_basic_table()
                       this should cover update / insert and any cruft.
                       Implies cache entry name MUST be table name.
                  <code>
                        if($this->cache->get($this->table_name)){ 
                        $this->cache->delete($this->table_name)};
                  </code>
                   <br/>At this point, since no controller has been called,
                        the *file-based* cache entry "APPPATH/cache/storage"
                        has been removed and not accessible to the NAV bar with
                        <code>$sources = $this->cache->get('storage'); ?></code>
                        and displays an error on the dropdown event. After ANY
                        controller is called (they all extend MY_Controller) the Admin NAV
                        then displays an out of date listing of the storage table.
                        Why? Because the QUERY has been cached.
                        
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
 
         
<div   class="row-fluid">          
            <div class="span5">
              <h2>Environment</h2>
              <p><code>
                extension=apc.so
                extension=mongo.so
                extension=redis.so

                [xdebug]

                xdebug.default_enable=1
                xdebug.remote_enable=1
                xdebug.remote_handler=dbgp
                xdebug.remote_host=localhost
                xdebug.remote_port=9000
                xdebug.remote_autostart=1
                zend_extension=/usr/lib/php/extensions/no-debug-non-zts-20090626/xdebug.so 
                </code>
              </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            
            
            
            <div class="span5">
              <h2>Cloud Storage</h2>
              <p>
               Amazon, RackSpace, and MongoLab implemented
              </p>
            </div><!--/span-->   
 </div><!--/row-->  
 
 
 
 
 
</div> <!--/HinFront-->  