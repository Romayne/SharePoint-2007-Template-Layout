<html>
<head>
	<title><?php echo $viewTitle;?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $path;?>public/css/default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $path;?>public/css/print.css" media="print">
	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="<?php echo $path;?>public/css/default_ie.css">
	<![endif]-->
	<script type="text/javascript" language="javascript" src="<?php echo $path;?>public/js/jquery/jquery-1.4.4.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo $path;?>public/js/common.js"></script>
</head>	

<body>
	<table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0">
		<tr>
			<td id="header">
				<div class="login_area">
					Welcome <strong><?php echo "Anonymous User";?></strong> | <a href="<?php echo $path;?>logout.php">Logout</a>
				</div>
				<h2><a href="<?php echo $path;?>index.php">SharePoint Administration</a></h2>
				<ul id="menu">
					<li>
						<a href="<?php echo $path;?>index.php">Home</a>
					</li>
					<li>
						<a href="<?php echo $path;?>modules/samples/index.php">Sample Link 1</a>
					</li>
					<li>
						<a href="<?php echo $path;?>modules/samples/form.php">Sample Link 2</a>
					</li>
				</ul>
				<div class="search_area">
					<form name="search_form" action="<?php echo $path;?>search.php" method="get">
						<input type="text" class="width_175" name="sq">	
						<input type="submit" class="button"  value="Search">
					</form>
				</div>
			</td>
		</tr>
		<tr>
			<td id="content">
				<table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td id="content_header" colspan="3">
							&nbsp;
						</td>
					</tr>
					<tr>
						<td id="content_left">
							<h2>SharePoint Administration Menu</h2>
							<?php include("pages-menu.inc.php");?>
						</td>
						<td id="content_spacer">
							&nbsp;
						</td>
						<td id="content_right">