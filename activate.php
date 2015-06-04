<?php
include 'connection.php';

$code=$_GET['code'];

if (!$code)
{?>

	<script>alert( "No code supplied");
window.location.href="signin.php";
</script><?php }
else {
	
	$check= mysql_query("SELECT * FROM Login WHERE `code`='$code' AND `active`='1'");

	if (mysql_num_rows($check)==1){
?>
<script>

		alert("You have already activated");
window.location.href="signin.php";
</script>
<?php }
	else{
		$activate=mysql_query("UPDATE Login SET `active`='1' WHERE `code`='$code'");
?>
<script>
		alert( "Your account has been activated");
		window.location.href="signin.php";
		</script><?php 
	}
}
?>