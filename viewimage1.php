<?php 
session_start();
if(!isset($_SESSION["emailid"])){
	header("location:signin.php");
}else{
?>	
<!DOCTYPE html>
	<html>
	<head>
		<title>View Images | SocketSnipers</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="main1.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<style type="text/css">
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
	  .photo {
		float: left;
		margin: 0.5em;
		border: 1px solid #ccc;
		padding: 1em;
		font-size: 15px;
		text-align: center;
		overflow-x:auto;
		overflow-y:auto;
		
	  }

	</style>
		<script language="JavaScript">
function toggle(source) {
  checkboxes = document.getElementsByName('files[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
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
<br><br><br>
</div>
</div>
				   <div class ="container" id="password_form">
           <div class="row">
               <div class="col-md-4">
       <form method="post" action="viewimage1.php">
                        <div class="form-group" id="form_spacing">
                            <input type="text" class="form-control input-lg" name="search" id="searchimg" placeholder="Type here to search your image....">	
                       </div>
                       <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10" id="button">
                            <button type="submit" class="btn btn-default" name="search1" id="button_heading">Search</button></form><br>
							  <form method="post" action="download.php">
                            <button type="submit" class="btn btn-default" name="submit" value="Download as Zip" id="button_heading">Download as Zip</button>
							<input type="checkbox" style="text-align:right	" onClick="toggle(this)"/>
							<font color="white"> Select All</font></div></div></div></div>
	<?php
	$search="%".$_POST['search']."%";
	
	if($search!=""){
		
		include 'connection.php';
		$email=$_SESSION["emailid"];
		$pic=array();
		$query=mysql_query("SELECT ImgName FROM  `images` WHERE  `username` = '$email' and `ImgName` LIKE '$search'") or die(mysql_error());
		while($row = mysql_fetch_assoc($query)){
		$pic[] = $row['ImgName'];
	}
	}
	else{
		include 'connection.php';
		$email=$_SESSION["emailid"];
		$pic=array();
		$query=mysql_query("SELECT ImgName FROM  `images` WHERE  `username` = '$email'") or die(mysql_error());
		while($row = mysql_fetch_assoc($query)){
		$pic[] = $row['ImgName'];
	}
	
	}

	
	if (count($pic) > 0){
	foreach($pic as $image) {	
	echo "<div class=\"photo\">";
	echo "<a href='pic.php?name=".$image."'><img src='uploads/".$image."' width='200' height='200' /></a>";
	echo "<br>";
	echo "<br>";
	echo "<input type='checkbox' name='files[]' value='".$image."'>"." "." <a href=uploads/". $image . " download >".basename($image)."</a>";
	echo "                 ";
	echo "<a href='delete.php?name=uploads/".$image."'><img src='delete.png' border='0' width='15' height='15'/></a>";
	echo "<br>";
	echo "</div>\n";
	}

}
else {
echo "<h1><font color='#FFFFF'>File not found</font><h1>";
}
	?>
	</body>
	</html>
<?php }?>