<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Testbed</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="">
<meta name="author" content="">
    <link rel="stylesheet"    href="<?php echo base_url(); ?>assets/css/imported.css"  />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.ico">
        
        
    <style class="hnav" type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
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
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>
            <a class="brand" href='<?php  echo site_url()?>'>TESTBED</a>

          <div class="nav-collapse">
            <ul class="nav">  
                <li class="active"><a href='<?php  echo site_url()?>'><i class="icon-home icon-white"></i> Home</a>
                </li>
                <li class="dropdown">  
                <a href="#"  
                    class="dropdown-toggle"  
                    data-toggle="dropdown">  
                    Tests  
                    <b class="caret"></b>  
                </a>  
                <ul class="dropdown-menu"> 
                    <li><a href='<?php  echo site_url("cartTest") ?>'>Cart</a></li> 
<!--                <li><a href='<?php  echo site_url("cartTest") ?>'>Static</a></li>
                    <li><a href='<?php  echo site_url("cartTest") ?>'>Session</a></li>
                    <li><a href='<?php  echo site_url("cartTest") ?>'>Payment</a></li>
                    <li><a href='<?php  echo site_url("cartTest") ?>'>MultiMedia</a></li>-->

                </ul>  
                </li>  
           </ul> 
            
           </ul>
            <ul class="nav">  
                <li class="dropdown">  
                <a href="#"  
                    class="dropdown-toggle"  
                    data-toggle="dropdown">  
                    Config  
                    <b class="caret"></b>  
                </a>  
                <ul class="dropdown-menu">  
                    <li><a href='<?php  echo site_url("optionsSet") ?>'>Set Options</a></li>
<!--                <li><a href='<?php  echo site_url("configMgmt") ?>'>Stress Options</a></li>-->
                    <li><a href='<?php  echo site_url("configMgmt") ?>'>Current Settings</a></li>
                </ul>  
                </li>  
           </ul> 

           
            <ul class="nav">  
                <li class="dropdown">  
                <a href="#"  
                    class="dropdown-toggle"  
                    data-toggle="dropdown">  
                    Admin  
                    <b class="caret"></b>  
                </a>  
                <ul class="dropdown-menu">  
                    <?php $source = $this->cache->get('storage'); ?>
                    <?php foreach($source as $store): ?>
                    <li>
                     <?php echo "<a href=/testbed/index.php/dbAdmin/index/".$store['datasourceName']." >".$store['datasourceName']."</a>"; ?> 
                    </li>
                    <?php endforeach; ?>

                </ul>  
                </li>  
           </ul>  
                        
            <ul class="nav">  
                <li class="dropdown">  
                <a href="#"  
                    class="dropdown-toggle"  
                    data-toggle="dropdown">  
                    Results  
                    <b class="caret"></b>  
                </a>  
                <ul class="dropdown-menu">   
                    <li><a href="#">Logs</a></li>
                    <li><a href="#">Stats</a></li>
                    <li><a href="#">Reporting</a></li>
                </ul>  
                </li>  
           </ul> 
           
           
           <form class="navbar-search pull-right">  
              <input type="text" class="search-query" placeholder="Search">  
           </form>        
          </div> <!-- /.nav-collapse -->  
        </div><!--/container -->
    </div><!--/navbar-inner -->
</div><!--/navbar navbar-fixed-top -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.0.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prettify.js"></script>    
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  
    
<!-- If needed, initialize scripts on this page -->


<iframe src="<?php echo $url ?>" marginheight="0px" width="100%" height="1000px" name="viewport" frameborder="0" id="viewport"></iframe>
</body>
</html>