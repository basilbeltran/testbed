<!--  the view is decomposed to allow reuse -->
<?php $this->view('include/header.php'); ?>        

<!-- THE MAIN CONTENT  -->
<div class="container">                         
<div class="row"> 
    
    
<div class="span12">                                
	<?php $this->view('dbAdmin_V/dbMgmtSql_V'); ?>	
</div> <!-- /span4 -->


</div> <!-- /row -->
</div> <!-- /container -->


<?php $this->view('include/footer.php'); ?>

