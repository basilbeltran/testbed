<!--  the view is decomposed to allow reuse -->
<?php $this->view('include/header.php'); ?>        

<!-- THE MAIN CONTENT  -->
<div class="container">  
    
     <div   class="row">    
        <?php $this->view('cartTest_V/products'); ?>	
     </div><!--  class="row-" --> 
 

     <div   class="row">   
     <center>
        <div class="span8 offset2">
        <h3>Your shopping cart</h3>
            <div id="cart_content">
                <?php echo $this->view('cartTest_V/cart'); ?>
            </div>
        </div> <!-- /span9 -->
      </center>
     </div> <!-- /row -->
 
</div> <!-- /container -->

<?php $this->view('include/footer.php'); ?>

