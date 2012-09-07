        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Target Features</li>

       <li class="nav-header">WIP</li>
              <li><a href="#">Abstract settings from config files</a></li>
              <li><a href="#"></a></li>      
       <li class="nav-header">ADMIN</li>
              <li><a href="#">Memcached Administration</a></li>
              <li><a href="#">APC Administration</a></li>
              <li><a href="#">MySQL Administration</a></li>
              <li><a href="#">Mongo Administration</a></li>
              <li><a href="#">Redis Administration</a></li>
       <li class="nav-header">INTEGRATION</li>
              <li><a href="#">Configurable OUTPUT Caching</a></li>
              <li><a href="#">Configurable QUERY Caching</a></li>              
              <li><a href="#">Configurable OBJECT (Library / Model) Caching</a></li>
              <li><a href="#">Configurable SESSION Caching</a></li>
              <li><a href="#">Configurable Data Stores</a></li>
       <li class="nav-header">TESTING / REPORTING</li>
              <li><a href="#">Testing Driver</a></li>
              <li><a href="#">Test Reporting</a></li>

                 
            
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
      <div class="span10" id="DinFront">

          <div   class="row-fluid">

              
            
            
            <div class="span5">
<h2>Output Caching</h2>
              <p> A (production) option is
                 to set a large value in MY_Controller and invalidate with 
                 each write to a constituent store. However, a page could change for reasons other than a DB write.
                 It could be composed  differently according to user role, 
                 inventory status, sales campaign...for example.
                 Although very powerful I think this caching is dangerous.
                 Each page must be reviewed and documented to reflect the 
                 situations that will invalidate the cache.
               <br/>Use <code> delete_cache($uri_string) </code>  to expire.
                 
              </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            
            
            
            <div class="span5">
<h2>Query Caching</h2>
              <p>Once you have query caching up and running you will need to clear the 
                 caches whenever you do an update. Seems like it's not as wild as Output.
                 Simply invalidate after every write. 
              <br/>Open question: would memory caching add significantly to this file based
                  solution? At what cost? How to determine what queries are candidates.
              <br/>call each time a write is made to a constituent table. Mapping needed.
                <code>$this->db->cache_delete('controller', 'method');</code> 
               <br/> How to get this more granular. EX: Is the NAV cached for each controller/method?
                     How to expire [storage]?
              </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          
          
<div   class="row-fluid">          
<div class="span5">
<h2>Object Caching</h2>
              <p>Flexible caching systems that write arbitrary objects (models , library calls)
                  to disk (like output and database caching) in a serialized format
                  For some situations this is the best alternative to reduce the number of queries run. 
              </p>
              
              <p>(CI driver) CI also  has a file driver (used for view components)
                 http://codeigniter.com/user_guide/libraries/caching.html
                  <code>$this->load->driver('cache'); $this->cache->file->save('foo', 'bar', 10);</code>
              <br/>File Cache is good for long term storage If you need something stored long term or something 
              which needs to be cached but does not fit even in distributed memory you can use file cache 
              (ie on shared storage).
              </p>
              
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            
            
            
            <div class="span5">
<h2>In Memory Caching</h2>
              <p>Redis is a fast in-memory persistent NoSQL "key-value store," values being; 
                  strings, lists, hashes, sets, sorted sets. It is eventually persistent and
                  can span the use of multiple machines for both performance and logical 
                  distribution.
              </p>
              <p>(CI driver) Memcached is a distributed caching system <br/> MemcacheD is relatively slow 
                  but distributed and so you do not waste memory by caching same item in a few places, 
                  it is also faster to warmup as you need only one access to bring item into the cache, 
                  not access for each of web servers.
              <br/>Use Memcached for large scale applications If local node cache is not large enough to 
                   cache good amount of data caching on network by using memcached is very good way to go. </p>
              
              <p>(CI driver) APC is mainly a PHP optimizer (optimizes by default as long as it's enabled), 
                  and apc_store() is just an extra bonus on top of that.
              <br/> APC will be great for caching 
                  small but frequently accessed things which are not taking too much memory.
              <br/>use APC Cache for single node applications If you have just one web server or your data set is 
                  small so it fits in memory in each of the servers APC Cache may be the most efficient way for you 
                  to cache the data. <br/>
              <br/>http://devzone.zend.com/1812/using-apc-with-php/
              </p>
            </div><!--/span-->
          </div><!--/row-->          

<div   class="row-fluid">          
<div class="span5">
<h2>NoSQL Storage</h2>
              <p>https://github.com/mongodb/mongo-php-driver
              <br/>https://mongolab.com/    
    
                  
              </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            
            
            
            <div class="span5">
    <h2>Cloud Storage</h2>
              <p>
                research notification systems ie: https://github.com/amazonwebservices/aws-sdk-for-php/blob/master/services/sns.class.php  
              <br/>http://cloud.google.com/
              <br/>https://mycloud.rackspace.com/
              </p>
            </div><!--/span-->   
          </div><!--/row-->            
        </div> <!--/HinFront-->  






