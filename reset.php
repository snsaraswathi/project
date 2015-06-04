<!DOCTYPE html>
<html>
<body>          
<?php 
          
          	include 'connection.php';
			$EA=$_POST['inputEA'];
          	$PW=md5($_POST['inputPW']);
			$activate=mysql_query("UPDATE Login SET `Password`='$PW' WHERE EmailId='$EA'");
			?>
			<script>
			alert("Password Change successful!!!");
			window.location.href="signin.php";
			</script>					
</body></html>