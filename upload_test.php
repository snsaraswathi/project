<?php 
session_start();
if(!isset($_SESSION["emailid"])){
	header("location:signin.php");
}else{
?>
<!DOCTYPE html>
<html>
<body>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$name=basename($_FILES["fileToUpload"]["name"]);
$size1=$_FILES["fileToUpload"]["size"];
$size2=($size1/1024);
$size3=round($size2, 2, PHP_ROUND_HALF_DOWN);
$size=$size3." KB";
$email=$_SESSION["emailid"];
 
/*
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {?><script> 
    alert("Sorry, your file is too large.");</script><?php
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {?><script>
    alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");</script><?php
    $uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {?>
<script>
    alert("Sorry, your file was not uploaded.");
	window.location.href="home_test.php";
</script>
<?php
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	 include 'connection.php';
	$query=mysql_query("INSERT INTO  `images` (  `username` ,  `ImgName` ,  `size` ,  `date` ) VALUES ( '$email',  '$name',  '$size',  now() )") or die(mysql_error());
	
	?>
	<script>
window.location.href="uploadsuccess_test.php";
</script>
<?php
    } else {?>
<script>
        alert("Sorry, there was an error uploading your file.");
window.location.href="home_test.php";
</script>
<?php
    }

}
?>
</body>
</html>
<?php }?>