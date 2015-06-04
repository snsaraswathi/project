<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="main1.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>

<body> 
    <section class="signin">
        <div>
        <center class= "logo">Socket Snipers</center>
        </div>
		<div>
		<?php 
include ("nav.html");
?>
</div>           
<?php 
          
          	include 'connection.php';
			$EA=$_POST['inputEA'];
          	$PW=md5($_POST['inputPW']);
			$OPW=md5($_POST['inputOPW']);
			$count=mysql_query("SELECT * FROM `Login` WHERE `EmailId` ='$EA' AND `Password` = '$OPW'") or die(mysql_error());
	if(mysql_num_rows($count)==1){
			$activate=mysql_query("UPDATE Login SET `Password`='$PW' WHERE EmailId='$EA' and Password='$OPW'");
			echo "<h1><br><font color='#FFFFF'>Password Change successful!!!</font></h1>";
			}
			else{
				echo "<h1><br><font color='#FFFFF'>Invalid Username or Password!!!</font></h1>";
			}
			
	?>
</section></body></html>