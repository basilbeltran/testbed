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
              <p> $storage is currently implemented in MY_Controller for the 'storage'
                  table. $storage is used in the view/include/header to populate
                  the "Admin" drop-down AND optionsSet to populate the buttons.
                  
                  <br/>9/12: set cache_delete in dbMgmtSql_M->set_basic_table()
                             this should cover system maintenance through the dbMgmtSql
                             controller. This case does not cover user CRUD activities.
                  <code>
                        if($this->cache->get($this->table_name)){ 
                        $this->cache->delete($this->table_name)};
                  </code>
                       
                       Implies general cache entries (currently; file, memcached, APC)  
                       dependant on SQL must be keyed with the table name.
                       (CRUD is not limited to dbMgmtSql_M. We may need crudController)

                   <br/>At this point, since no controller has been called and
                        the FILE cache entry "APPPATH/cache/storage"
                        has been removed, NAV bar errors on drop-down event.
                        <code>$sources = $this->cache->get('storage'); ?></code>
                        After ANY MY_Controller use, the Admin NAV
                        then displays an out of date listing of the storage table.
                        Why? Because the QUERY has been cached in "APPPATH/cache/dbMgmtSql+storage"
              <br/><H2>==> BP1: create and invalidate all QUERY caching in the models: write() informs refresh()</H2>
                        <code>$this->db->cache_delete('dbMgmtSql', 'storage');</code>
                        When this happens make a call to regenerate $storage the header NAV 
                        (no controller) use.
                        
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