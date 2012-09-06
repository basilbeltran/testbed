<!--  the view is decomposed to allow reuse -->
<?php $this->view('include/header.php'); ?>        

<!-- THE MAIN CONTENT  -->
<!--<div class="container">                         
<div class="row"> 
<div class="span12">  -->
    
    <div class="tabbable">
    <ul class="nav nav-tabs" id="navtabs">
    <li class="active"> <a href="#tab1" data-toggle="tab">Home      </a></li>
    <li>                <a href="#tab2" data-toggle="tab">Status    </a></li>
    <li>                <a href="#tab3" data-toggle="tab">Design    </a></li>

    </ul>
        
        
    <div class="tab-content">
        
        <div class="tab-pane active" id="tab1">
            <?php $this->view('testbed_V/home'); ?> 
        </div> <!--/tab-pane--> 
        
        
        <div class="tab-pane " id="tab2">                  
            <?php $this->view('testbed_V/status'); ?>
        </div>  <!-- /tab-pane -->
   
        
        
        <div class="tab-pane " id="tab3">
            <?php $this->view('testbed_V/design'); ?>
        </div> <!--/tab-pane-->



    </div>  <!-- /tab-content -->    
    </div>  <!-- /tabbable -->  
   
<!--<script>
$(function () {
$('#navtabs a:last').tab('show');
})
</script>-->
   
    
                               
 <!-- 	
</div>  /span12 
</div>   <!-- /row
</div>   <!-- /container 
-->


<?php $this->view('include/footer.php'); ?>

