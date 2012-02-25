	<div class="text">
		<form name="inputform" method="post" action="<?php echo($currentURL);?>">
			<div class="input_form width_550">
				* First Name<br>
				<input name="firstName" class="width_150"><br><br>
				
				* Last Name<br>
				<input name="lastName" class="width_150"><br><br>
				
				* Email Address<br>
				<input name="emailAddress" class="width_250"><br><br>
				
				Validated<br>
				<select name="validated">
					<option value="0">Select One
					<option value="Yes">Yes
					<option value="No">No
				</select>
				<br><br>
			</div>
			<br><br>
			
			<input type="submit" class="button" value="    Update Record Info   ">
			<input type="reset" class="button" value="    Cancel   ">
		</form>
	</div>	