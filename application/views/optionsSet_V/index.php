<!--  the view is decomposed to allow reuse -->
<?php $this->view('include/header.php'); ?>        

<!-- THE MAIN CONTENT  -->
<div class="container">                         
<div class="row"> 
    

<div class="span12">
   <h3>Testbed Options</h3>
     <div id="options">
        <?php $this->view('optionsSet_V/options', $storage); ?>
     </div>
</div> <!-- /span12 -->


</div> <!-- /row -->
</div> <!-- /container -->


<?php $this->view('include/footer.php'); ?>

