<?php
	$path = "../../";
	include($path ."application/configs/application.php");
	
	$viewTitle = "Icon Link Example";
	$viewImage = "home.png";
	$viewBreadcrumbs = array();
?>

<?php include($path ."application/layouts/pages-header.inc.php");?>
	<table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<div class="content_title">
					Currently viewing how to change the icon on the given page.
				</div>
			<td>
		</tr>
		<tr>
			<td>
				<div class="actions">
					<?php include("includes/options.inc.php");?>
				</div>
			</td>
		</tr>
		<tr>
			<td class="content_area">
				<div class="text">
					<p>
						To change the icon for a particular page, edit the variable $viewImage; found in each file.
					</p>
					<p>
						In this case the view image is home.png.
					</p>
					<p>
						This template includes the following images which can be found in the \public\images directory:
					</p>
					<p>
						<img src="<?php echo $path;?>public/images/bullet1.gif" border="0">&nbsp;&nbsp; announcements.png<br>
						<img src="<?php echo $path;?>public/images/bullet1.gif" border="0">&nbsp;&nbsp; contacts.png<br>
						<img src="<?php echo $path;?>public/images/bullet1.gif" border="0">&nbsp;&nbsp; content.png<br>
						<img src="<?php echo $path;?>public/images/bullet1.gif" border="0">&nbsp;&nbsp; documents.png<br>
						<img src="<?php echo $path;?>public/images/bullet1.gif" border="0">&nbsp;&nbsp; error.png<br>
						<img src="<?php echo $path;?>public/images/bullet1.gif" border="0">&nbsp;&nbsp; events.png<br>
						<img src="<?php echo $path;?>public/images/bullet1.gif" border="0">&nbsp;&nbsp; forums.png<br>
						<img src="<?php echo $path;?>public/images/bullet1.gif" border="0">&nbsp;&nbsp; generic.png<br>
						<img src="<?php echo $path;?>public/images/bullet1.gif" border="0">&nbsp;&nbsp; home.png<br>
						<img src="<?php echo $path;?>public/images/bullet1.gif" border="0">&nbsp;&nbsp; links.png<br>
						<img src="<?php echo $path;?>public/images/bullet1.gif" border="0">&nbsp;&nbsp; reports.png<br>
						<img src="<?php echo $path;?>public/images/bullet1.gif" border="0">&nbsp;&nbsp; resources.png<br>
						<img src="<?php echo $path;?>public/images/bullet1.gif" border="0">&nbsp;&nbsp; settings.png<br>
						<img src="<?php echo $path;?>public/images/bullet1.gif" border="0">&nbsp;&nbsp; tasks.png<br>
					</p>
					<p>
						These images are copyright to their original authors.
					</p>
				</div>
			</td>
		</tr>
	</table>
<?php include($path ."application/layouts/pages-footer.inc.php");?>