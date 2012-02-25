<?php
	//$rows = null;
	
	$rows = array();
	$rows[0]['id'] = 1000;
	$rows[0]['firstName'] = "James";
	$rows[0]['lastName'] = "Helpert";
	$rows[0]['emailAddress'] = "jhelp@contact.ca";
	$rows[0]['validated'] = "Yes";
	
	$rows[1]['id'] = 1001;
	$rows[1]['firstName'] = "Ben";
	$rows[1]['lastName'] = "Dover";
	$rows[1]['emailAddress'] = "bend_over@contact.co.uk";
	$rows[1]['validated'] = "No";
	
	$rows[2]['id'] = 1002;
	$rows[2]['firstName'] = "Information";
	$rows[2]['lastName'] = "Bot";
	$rows[2]['emailAddress'] = "info@calgarywebdev.com";
	$rows[2]['validated'] = "Yes";
?>	
	<table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0">
		<tr>
			<td class="content_area">
				<table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td>
							<?php if ($rows == NULL):?>
								<div class="text">
									There are currently no users saved to the database or current search query returned no users.
								</div>
							<?php else:?>								
								<form name="records" class="records" method="get">
								<table class="list" border="0" width="100%" cellspacing="0" cellpadding="0">
									<thead>
										<tr>
											<th width="30">&nbsp;</th>
											<th width="40" align="left">Id</th>
											<th width="150" align="left">First Name</th>
											<th width="150" align="left">Last Name</th>
											<th align="left">Email Address</th>
											<th width="60" align="left">Validated</td>
										</tr>
									</thead>
									<tbody>
									<?php
									foreach($rows as $r):
										$bgcolor = ($count%2==0)?"class=\"tr_alt\"":"class=\"tr_white\"";
										?>
										<tr <?php echo $bgcolor;?> id="record_count_<?php echo $count;?>">
											<td align="right"><?php echo ++$count;?>.</td>
											<td><?php echo $r['id'];?></td>
											<td><?php echo $r['firstName'];?></td>
											<td><?php echo $r['lastName'];?></td>
											<td><?php echo $r['emailAddress'];?></td>
											<td align="center"><?php echo $r['validated'];?></td>
										</tr>
									<?php endforeach;?>
									</tbody>
								</table>
								</form>	
							<?php endif;?>
						</td>
					</tr>
				</table>
			</td>	
		</tr>
	</table>