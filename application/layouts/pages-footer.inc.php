							<div class="page_icon">
								<img src="<?php echo $path;?>public/images/<?php echo $viewImage;?>">
							</div>
							<div class="page_header">
								<span class="breadcrumb">
									<a href="<?php echo $path;?>index.php">Home</a> <?php Functions::breadcrumbs();?>
								</span>
								<h2><?php echo $viewTitle;?></h2>
							</div>							
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td id="footer">
				Powered by [Company name] Framework. All Rights Reserved <?php echo date("Y");?>.
			</td>
		</tr>	
	</table>	
</body>
</html>