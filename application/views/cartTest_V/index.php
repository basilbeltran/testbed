<!--  the view is decomposed to allow reuse -->
<?php $this->view('include/header.php'); ?>        

<!-- THE MAIN CONTENT  -->
<div class="container">                         
<div class="row"> 
    
    
<div class="span3">                                
	<?php $this->view('cartTest_V/products'); ?>	
</div> <!-- /span4 -->

<div class="span9">
   <h3>Your shopping cart</h3>
     <div id="cart_content">
	<?php echo $this->view('cartTest_V/cart'); ?>
     </div>
</div> <!-- /span8 -->
</div> <!-- /row -->


<?php $this->view('include/footer.php'); ?>

