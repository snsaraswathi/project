<!DOCTYPE html>
<html>
<?php
	include 'connection.php';
	$Email=$_POST['email'];
	$PWD=md5($_POST['password']);
	$query=mysql_query("SELECT * FROM `Login` WHERE `EmailId` ='$Email' AND `Password` = '$PWD'") or die(mysql_error());
	if (mysql_num_rows($query)==1){
	$count=mysql_query("SELECT * FROM `Login` WHERE `EmailId` ='$Email' AND `Password` = '$PWD' AND `active`='1'") or die(mysql_error());
	if(mysql_num_rows($count)==1){
		?> <script type="text/javascript">
			window.location.href="home.php"
			</script>
		<?php 
		}
		else{
			?><script type="text/javascript">
			alert("Your account has not yet been activated!! Please check your Registered Email")
			window.location.href="signin.php"
			</script>
		<?php 
		} 
	}else{
		?><script type="text/javascript">
			alert("Invalid Username and Password!!")
			window.location.href="signin.php"
			</script>
			<?php
	}
?>
</html>
