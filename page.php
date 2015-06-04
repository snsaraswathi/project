
	
<?php 
echo "<form name='delsel' method='post' action='delsel.php'>";
for ($x = 1; $x <= 5; $x++) {
    echo "<input type='checkbox' name='files[]' value='".$x."'>".$x;
    echo "<input type='text' name='delete' value='".$x."'>";
} 
echo "<br><input type='submit' name='submit' value='delselec'>";
echo "</form>";


    
?>
	