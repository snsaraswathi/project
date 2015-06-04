<?php

$a=$_POST['files'];
$b=array();
echo $a;
foreach ($a as $b){ 
 $b="uploads/".$b;
echo $b;
unlink($b);
}
	echo "<script>window.location.href='viewimages.php' </script>";	
	
	
?>