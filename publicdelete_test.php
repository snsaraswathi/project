<html>
<body>
<?php   
	$a=$_GET['name'];
	
   if (!unlink($a)){
   
	echo "<script>window.location.href='publicviewimages_test.php' </script>";

	}
	else{
	
	echo "<script>window.location.href='publicviewimages_test.php' </script>";

    }
	?>
	</body>
	</html>
	