
<table class="table table-striped table-bordered">	
  <thead>
      <tr>
           <td></td>    
           <td> <?php echo anchor('optionsSet/persistLink', 'Persistence', 'class="persist"');?> </td> 
           <td> <?php echo anchor('optionsSet/cachetLink', 'Caching', 'class="cache"');?> </td> 
           <td> <?php echo anchor('optionsSet/loggingLink', 'Logging', 'class="logging"');?> </td>
           <td> <?php echo anchor('optionsSet/testingLink', 'Testing', 'class="testing"');?> </td> 
      </tr>
  </thead>   
  
  <tbody>                    
            <?php foreach($options as $item): ?>       
            <tr>  

                <td><?php  echo $item['itemName']  ?>
                </td> 


                <td>
                    <div class="fixed">
                    <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <!--data-toggle="buttons-radio" -->
                            <?php  echo $storage[$item['storage']-1]['datasourceName']  ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php $link = "http://localhost/testbed/index.php/optionsSet/update_persistence";  ?>
                            <?php foreach($storage as $store): ?>
                            <?php $idItem=$item['item'] ?>
                            <?php $idStore=$store['datasource'] ?>
                            <li>
                                <a href=' <?php echo $link."/$idItem/$idStore" ?> ' > <?php echo $store['datasourceName']; ?> </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    </div> 
                </td>

                <td></td>
                <td></td>
                <td></td>

            </tr>
            <?php endforeach; ?>                  
            
    </tbody>
</table>


                  
            





