
        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Target Features</li>
              <li><a href="#">Configurable CONFIG storage</a></li>              
              <li><a href="#">Configurable OUTPUT Caching</a></li>
              <li><a href="#">Configurable QUERY Caching</a></li>              
              <li><a href="#">Configurable OBJECT (Library / Model) Caching</a></li>
              <li><a href="#">Configurable SESSION Caching</a></li>
 
              <li><a href="#">Configurable Data Stores</a></li>
              <li><a href="#">Memcached Administration</a></li>
              <li><a href="#">APC Administration</a></li>
              <li><a href="#">MySQL Administration</a></li>
              <li><a href="#">Mongo Administration</a></li>
              <li><a href="#">Redis Administration</a></li>
              <li><a href="#">Testing Driver</a></li>
              <li><a href="#">Test Reporting</a></li>
              <li class="nav-header">In Progress</li>
              <li><a href="#">Configurable CONFIG storage</a></li>
              <li><a href="#">Configurable Output Caching</a></li>
              <li><a href="#"></a></li>
              <li class="nav-header">Alpha Functionality</li>
              <li><a href="#">Redis & Mongo integration</a></li>
              <li><a href="#">Current Config Status</a></li>
              <li><a href="#">ds functionality</a></li>
              <li><a href="#">ds mapping intreface</a></li>


                  
            
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
        
       <div class="span10" id="HinFront">

          <div   class="row-fluid">
           <div class="hero-unit">
            <h2>Persistence & Caching Testbed</h2>
              <p>This site allows the application architect to gather data about how persistence and caching decisions 
                might impact the behavior and performance of a developing project.
               The variety of deployment options in the data storage and caching space can lead to 
               unanticipated interactions in the data flow. TESTBED allows the architect / developer / QA analyst
               to test, document and analyze storage / caching options. </p> <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
          </div>
              
            
            
            <div class="span5">
              <h2>Output Caching</h2>
              <p>The amount of dynamic information you display in your pages will correlate 
                  directly to the server resources, memory, and processing cycles utilized, 
                  which affect your page load speeds. By caching your pages, since 
                  they are saved in their fully rendered state, you can achieve performance 
                  that nears that of static web pages. 
              </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            
            
            
            <div class="span5">
              <h2>Query Caching</h2>
              <p>Database caching will greatly reduce the load on your database and increase 
                  the performance of your application as a result. Once you have query caching up 
                  and running you will need to clear the caches whenever you do an update. 
                  <code>$this->db->cache_delete('controller', 'method');</code> </p>
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
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            
            
            
            <div class="span5">
              <h2>In Memory Caching</h2>
              <p>Redis is a fast in-memory persistent "key-value store" (values being 
                  strings, lists, hashes, sets, sorted sets) that is eventually persistent and
                  can span the use of multiple machines for both performance and logical 
                  distribution.
              </p>
              <p>Memcached</p>
              <p>Alternative PHP Cache (APC) is an opcode cache for PHP. Its goal is to provide a 
                  robust framework for caching and optimizing PHP intermediate code. <code>apc_store()</code>
                  can be used as an additional caching mechanism.
              </p>
            </div><!--/span-->
          </div><!--/row-->          

          <div   class="row-fluid">          
            <div class="span5">
              <h2>NoSQL Storage</h2>
              <p>Redis is a fast in-memory persistent "key-value store" (values being 
                  strings, lists, hashes, sets, sorted sets) that is eventually persistent and
                  can span the use of multiple machines for both performance and logical 
                  distribution.
                  
                  
                  
              </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            
            
            
            <div class="span5">
              <h2>Cloud Storage</h2>
              <p>
                  
              </p>
            </div><!--/span--   
          
        </div> <!--/HinFront-->  



