<?php
	$path = "../../";
	include($path ."application/configs/application.php");
	
	$viewTitle = "Breadcrumb Example";
	$viewImage = "resources.png";
	$viewBreadcrumbs = array("form.php" => "Mary Had", "info.php" => "A Little Lamb", "" => "... White as Snow");
?>

<?php include($path ."application/layouts/pages-header.inc.php");?>
	<table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<div class="content_title">
					Currently viewing how to change the breadcrumbs on the given page.
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
				<div class="text width_400">
					<h3>General Information About Breadcrumbs</h3>
					<p>
						To change the breadcrumb update the variable $viewBreadcrumbs; found in each file.
					</p>
					<p>
						The breadcrumbs are placed on the page using CSS to position them just above the page's header content. If you should ever need
						to edit the functionality of the breadcrumbs. Edit the files \application\layouts\pages-footer.inc.php and the model 
						\application\models\Default\Functions.class.php
					</p>
					<p>
						It is an associative array that uses the keys are page locations, and the values as descriptions to be displayed in the breadcrumb.
						If the key is left empty, then the value is displayed as normal text and not as a link.
					</p>
					<p>
						Note that the Home link is automatically displayed in all breadcrumbs.
					</p>
				</div>
			</td>
		</tr>
	</table>
<?php include($path ."application/layouts/pages-footer.inc.php");?>