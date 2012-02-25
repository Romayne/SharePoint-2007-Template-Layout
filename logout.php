<?php
	session_start();
	unset($_SESSION['adminUser']);
	
	header("Location: index.php");
	echo("<script type=\"text/javascript\" language=\"javascript\">location = \"index.php\"</script>");