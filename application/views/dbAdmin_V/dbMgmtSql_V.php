
    
    
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
	<div>
		<a href='<?php echo site_url('/dbMgmtSql/options')?>'>Options</a> |
		<a href='<?php echo site_url('/dbMgmtSql/products')?>'>Products</a> |
		<a href='<?php echo site_url('/dbMgmtSql/storage')?>'>Storage</a> |
		<a href='<?php echo site_url('/dbMgmtSql/ci_sessions')?>'>Sessions</a> | 
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>

        
