<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Testbed</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="">
<meta name="author" content="">
    <link href="<?php echo base_url(); ?>assets/css/core.css" media="screen" rel="stylesheet" type="text/css" />
    <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/css/bootstrap-combined.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" /> 
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.ico">

    <style type="text/css">
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
<?php $link = "/testbed/index.php";  ?>
<?php //$link = "";  ?>

<!--THE NAV BAR -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            
           <ul class="nav">  
                <li class="active"> 
                <a class="brand" href="#">Testbed</a>
                </li>        
                
           </ul>
            <ul class="nav">  
                <li class="dropdown">  
                <a href="#"  
                    class="dropdown-toggle"  
                    data-toggle="dropdown">  
                    Tests  
                    <b class="caret"></b>  
                </a>  
                <ul class="dropdown-menu"> 
                    <li><a href='<?php  echo  $link."/cartTest" ?>'>Static</a></li>
                    <li><a href='<?php  echo  $link."/cartTest" ?>'>Session</a></li>
                    <li><a href='<?php  echo  $link."/cartTest" ?>'>Cart</a></li> 
                    <li><a href='<?php  echo  $link."/cartTest" ?>'>Payment</a></li>
                    <li><a href='<?php  echo  $link."/cartTest" ?>'>MultiMedia</a></li>

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
                    <li><a href="http://localhost/testbed/index.php/optionsSet/">Persistence Settings</a></li>
                    <li><a href="http://localhost/testbed/index.php/configMgmt/">Stress Settings</a></li>
                    <li><a href="http://localhost/testbed/index.php/configMgmt/">Current Settings</a></li>
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
                     <?php echo "<a href=".$link."/dbAdmin/index/".$store['datasourceName']." >".$store['datasourceName']."</a>"; ?> 
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
           
           
           <form class="navbar-search pull-left">  
              <input type="text" class="search-query" placeholder="Search">  
           </form>        
            
        </div><!--/container -->
    </div><!--/navbar-inner -->
</div><!--/navbar navbar-fixed-top -->

