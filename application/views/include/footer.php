

<!--  PAGE LOAD STATS -->
      <footer>
        <p>&copy; SparkFun 2012  
            Time: <?php echo $this->benchmark->elapsed_time(); ?>  
            Mem: <?php echo $this->benchmark->memory_usage(); ?>  
        </p>
      </footer>

     


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.0.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prettify.js"></script>    
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  
    
<!-- If needed, initialize scripts on this page -->

<script>

  // Activate Google Prettify for pretty-printing code
  addEventListener('load', prettyPrint, false);

  $(document).ready(function(){

    // Add prettyprint class to pre elements
    $('pre').addClass('prettyprint');

    // Initialize tabs and pills
    $('.note-tabs').tab();
    
    
		
  });
</script>
</body>
</html>
