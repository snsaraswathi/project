		
	<?php
		include 'connection.php';
		$email="vsvraja@gmail.com";
		
		$query=mysql_query("SELECT FirstName FROM  `Login` WHERE  `EmailId` = '$email'") or die(mysql_error());
		$row = mysql_result($query,0);
		echo $row;
	


	?>