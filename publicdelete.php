<html>
<body>
<?php   
	$a=$_GET['name'];
	
   if (!unlink($a)){
   
	echo "<script>window.location.href='publicviewimages.php' </script>";

	}
	else{
	
	echo "<script>window.location.href='publicviewimages.php' </script>";

    }
	?>
	</body>
	</html>
	