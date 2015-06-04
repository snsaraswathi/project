<?php
if (isset($_FILES['myimage']['tmp_name'])){
	$path="publicuploads/".$_FILES['myimage']['name'];
	move_uploaded_file($_FILES['myimage']['tmp_name'], $path);
}
else{
header('Location: http://veerappanraja.com/uploadcurl.php');
}
?>