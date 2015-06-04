	<!DOCTYPE html>
	<html>
	<head>
		<title>i-snap</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="main1.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<style type="text/css">
#container {
	font-family: Bradley Hand ITC;
	font-size: 72px;
	font-weight: bold;
	text-align: center;
	color: #01EFFF;
	border: 1px solid black;
    height: auto;
    width: 100%;
    margin-top: 50px;
	background-color: black;
    opacity: 0.5;
}
#container:hover{
	opacity: 1;
}
 body
{   top: 0;
	overflow-x:auto;
    overflow-y:auto;
	background-image: url("cover.jpg");
    background-color: #1e73bc;
    width:100vw;
    height: 100vw;
	background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: top;
    background-clip: inherit;
    background-size: cover;

}
	</style>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "c7b6fe8a-a038-4ebc-800a-1e17908010c5", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	</head>
	<body> 
	<section class="signin">
			<div id="container">
				<center>i-snap</center>
			</div>

<?php 
$a=$_GET['name'];
 ?>	
					
<br>
<?php
echo "<h1 align='center'><font color='#FFFFF' >".$a."</font>";
echo "<a href='publicdelete_test.php?name=publicuploads/".$a."'><img src='delete.png' border='0' width='30' height='30'/></a>";
echo "<a href='publicuploads/".$a."' download><img src='download-icon.png' border='0' width='30' height='30'/></a>";
echo "</h1><br><br>";
echo "<div class ='container' id='password_form'>";
echo "<div class='row'>";
echo "<div class='col-md-4'>";   
echo "<img src=uploads/".$a." width='1000' height='1000'  />";
echo "</div></div></div>";
?>
</form>	
</body>
</html>