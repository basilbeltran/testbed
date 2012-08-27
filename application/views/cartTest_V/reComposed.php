<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Persistence & Caching Testbed</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="">
<meta name="author" content="">
    <link href="<?php echo base_url(); ?>assets/css/core.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.ico">

<style>
     body {
      padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
     }
</style>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
    
<body>
    
<!--THE NAV BAR -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            
           <ul class="nav">  
                <li class="active"> 
                <a class="brand" href="#">Persistence & Caching Testbed</a>
                </li>        
                        
                <li><a href="http://localhost/testbed/index.php/cartTest">Home</a></li>
                <li><a href="#about">Options</a></li>
           </ul>

            <ul class="nav">  
                <li class="dropdown">  
                <a href="#"  
                    class="dropdown-toggle"  
                    data-toggle="dropdown">  
                    Submission  
                    <b class="caret"></b>  
                </a>  
                <ul class="dropdown-menu">  
                    <li><a href="#">Code</a></li>  
                    <li><a href="#">Dot Files</a></li>  
                    <li><a href="#">Etc</a></li>  
                    <li><a href="#">Resume</a></li>  
                </ul>  
                </li>  
           </ul>  
                        
           <form class="navbar-search pull-left">  
              <input type="text" class="search-query" placeholder="Search">  
           </form>        
            
        </div><!--/container -->
    </div><!--/navbar-inner -->
</div><!--/navbar navbar-fixed-top -->


<!-- THE MAIN CONTENT  -->
<div class="container">  
<div class="row"> 
    
    
<div class="span3">
	<?php $this->view('cartTest_V/products'); ?>	
</div> <!-- /span4 -->

<div class="span9">
		<h3>Your shopping cart</h3>
		<div id="cart_content">
		  <?php echo $this->view('cartTest_V/cart.php'); ?>
		</div>
</div> <!-- /span8 -->
</div> <!-- /row -->


<!-- THE PAGE LOAD STAT -->

  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>

        
        
<!-- Placed at the end of the document for faster loads -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.0.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/js/bootstrap.min.js"></script>


</body>
</html>