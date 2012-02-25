<?php
	$path = "../../";
	include($path ."application/configs/application.php");
	
	$viewTitle = "List Contacts";
	$viewImage = "contacts.png";
	$viewBreadcrumbs = array();
?>

<?php include($path ."application/layouts/pages-header.inc.php");?>
	<table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<div class="content_title">
					Currently viewing how to list tabular information on the given page.
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
				<?php include($path ."application/views/forms/Samples/list_users.inc.php");?>
			</td>
		</tr>
	</table>
<?php include($path ."application/layouts/pages-footer.inc.php");?>