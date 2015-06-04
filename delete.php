<?php session_start();
if(!isset($_SESSION["emailid"])){
	header("location:signin.php");
}else{?>
<!DOCTYPE html>
<html>
<body>
<?php   
	$a=$_GET['name'];
$b=basename($a);
$email=$_SESSION["emailid"];

	
   if (!unlink($a)){
	echo "<script>window.location.href='viewimages.php' </script>";

	}
	else{
	include 'connection.php';
	$query=mysql_query("DELETE FROM  `images` WHERE  `username` = '$email' and `ImgName` ='$b'") or die(mysql_error());
	echo "<script>window.location.href='viewimages.php' </script>";

    }
	?>
	</body>
	</html>
	<?php }?>